<?php

/*
 CREATE  TABLE IF NOT EXISTS `dnevnik_gkh_site_db`.`personal` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `fio` VARCHAR(100) NOT NULL ,
  `foto` VARCHAR(255) NULL ,
  `is_leaders` TINYINT(1)  NOT NULL DEFAULT 0 ,
  `department` VARCHAR(255) NULL ,
  `position` VARCHAR(255) NULL ,
  `email` VARCHAR(60) NULL ,
  `sometext` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
 */


/**
 * Description of gkh_personal
 *
 * @author Administrator
 */
class gkh_personal extends gkh {

    private $_img;

    public function __construct() {
        parent::__construct();

        global $__cfg;
        $this->_img = new Image($__cfg['file.upload.dir']);


    }

    public function getAllPersonal() {
        try {
            $sql = 'SELECT * FROM personal';
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                foreach ($result as &$res) {
                    $this->_img->setName($res['foto']);
                    $res['foto_prew'] = $this->_img->getPreview();
                }
                return $result;
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function getPersonal($id) {
        try {
            $sql = 'SELECT * FROM personal WHERE id=' . (int)$id;
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                $this->_img->setName($result[0]['foto']);
                $result[0]['foto_prew'] = $this->_img->getPreview();
                return $result[0];
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function addPersonal($data) {
        try {
            $data = $this->_db->prepareArray($data);

            $sql = 'INSERT INTO personal(fio, department, position, contact)
                    VALUES("' . $data['fio'] . '", "' . $data['department'] . '",
                           "' . $data['position'] . '", "' . $data['contact'] . '")';
            $this->_db->query($sql);

            $temp_id = $this->_db->query('SELECT LAST_INSERT_ID()');

            $fileName = $this->_img->download('img');
            if ($fileName !== false) {
                $this->_img->createPreview();
                $sql = 'UPDATE personal
                        SET foto="' . $fileName . '" WHERE id=' . (int)$temp_id[0][0];

                $this->_db->query($sql);
            }
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function updatePersonal($id, $data) {
        try {
            $data = $this->_db->prepareArray($data);

            $sql = 'UPDATE personal
                    SET fio="' . $data['fio'] . '", department="' . $data['department'] . '", position="' . $data['position'] . '",
                        contact="' . $data['contact'] . '"
                    WHERE id=' . (int)$id;
            $this->_db->query($sql);

            $fileName = $this->_img->download('img');
            if ($fileName !== false) {
                $this->_img->createPreview();
                $sql = 'UPDATE personal
                        SET foto="' . $fileName . '" WHERE id=' . (int)$id;

                $this->_db->query($sql);
            }
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function deletePersonal($id) {
        try {
            $temp = $this->getPersonal($id);

            $this->_img->setName($temp['foto']);
            $this->_img->delete();

            $sql = 'DELETE FROM personal WHERE id=' . (int)$id;
            $this->_db->query($sql);
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function deleteFile($id, $field) {
        global $__cfg;
        try {
            $temp = $this->getPersonal($id);
            $this->_img->setName($temp[$field]);
            $this->_img->delete();

            $sql = 'UPDATE personal
                        SET ' . $field . '=NULL WHERE id=' . (int)$id;
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
