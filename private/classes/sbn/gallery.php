<?php

/*
 CREATE  TABLE IF NOT EXISTS `gallery` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `img` VARCHAR(255) NOT NULL ,
  `description` TEXT NULL ,
  `object_id` INT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
 */

/**
 * Description of gallery
 *
 * @author Moris
 */
class gallery extends sbn {
    
    public function __construct() {
        parent::__construct();

        global $__cfg;
        $this->_img = new Image($__cfg['file.upload.dir']);


    }
    
    public function getAllImage() {
        try {
            $sql = 'SELECT * FROM gallery';
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                foreach ($result as &$res) {
                    $this->_img->setName($res['img']);
                    $res['img_prew'] = $this->_img->getPreview();
                    $res['description'] = stripcslashes(stripslashes($res['description']));
                }
                return $result;
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function getImageByObject($id) {
        try {
            $sql = 'SELECT * 
                    FROM gallery
                    WHERE object_id=' . $id;
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                foreach ($result as &$res) {
                    $this->_img->setName($res['img']);
                    $res['img_prew'] = $this->_img->getPreview();
                    $res['description'] = stripcslashes(stripslashes($res['description']));
                }
                return $result;
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function getImage($id) {
        try {
            $sql = 'SELECT * FROM gallery WHERE id=' . (int)$id;
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                $this->_img->setName($result[0]['img']);
                $result[0]['img_prew'] = $this->_img->getPreview();
                $result[0]['description'] = stripcslashes(stripslashes($result[0]['description']));
                return $result[0];
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function addImage($data) {
        try {
            $data = $this->_db->prepareArray($data);

            $sql = 'INSERT INTO gallery(description, object_id)
                    VALUES("' . $data['description'] . '", ' . $data['object_id'] . ')';
            $this->_db->query($sql);

            $temp_id = $this->_db->query('SELECT LAST_INSERT_ID()');

            $fileName = $this->_img->download('img');
            if ($fileName !== false) {
                $this->_img->createPreview();
                $sql = 'UPDATE gallery
                    SET img="' . $fileName . '" WHERE id=' . (int)$temp_id[0][0];

                $this->_db->query($sql);
            }
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function updateImage($id, $data) {
        try {
            $data = $this->_db->prepareArray($data);

            $sql = 'UPDATE gallery
                    SET object_id=' . $data['object_id'] . ', description="' . $data['description'] . '"
                    WHERE id=' . (int)$id;
            $this->_db->query($sql);

            $fileName = $this->_img->download('img');
            if ($fileName !== false) {
                $this->_img->createPreview();
                $sql = 'UPDATE gallery
                        SET img="' . $fileName . '" WHERE id=' . (int)$id;

                $this->_db->query($sql);
            }
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function deleteImage($id) {
        try {
            $temp = $this->getImage($id);

            $this->_img->setName($temp['logo']);
            $this->_img->delete();

            $sql = 'DELETE FROM gallery WHERE id=' . (int)$id;
            $this->_db->query($sql);
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function __destruct() {
        parent::__destruct();
    }
}

?>
