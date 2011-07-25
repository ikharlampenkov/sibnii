<?php

/*
 CREATE  TABLE IF NOT EXISTS `client` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(255) NOT NULL ,
  `description` TEXT NULL ,
  `logo` VARCHAR(255) NULL ,
  PRIMARY KEY (`id`) )
 ENGINE = InnoDB
 */

/**
 * Description of client
 *
 * @author Administrator
 */
class client extends sbn {

    private $_img;

    public function __construct() {
        parent::__construct();

        global $__cfg;
        $this->_img = new Image($__cfg['file.upload.dir']);


    }

    public function getAllClient() {
        try {
            $sql = 'SELECT * FROM client';
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                foreach ($result as &$res) {
                    $this->_img->setName($res['logo']);
                    $res['logo_prew'] = $this->_img->getPreview();
                }
                return $result;
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function getClientByProject($id) {
        try {
            $sql = 'SELECT client.id, client.title, client.description, logo
                    FROM client, project
                    WHERE client.id=project.client_id AND project.id=' . $id;
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                foreach ($result as &$res) {
                    $this->_img->setName($res['logo']);
                    $res['logo_prew'] = $this->_img->getPreview();
                }
                return $result[0];
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function getClient($id) {
        try {
            $sql = 'SELECT * FROM client WHERE id=' . (int)$id;
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                $this->_img->setName($result[0]['logo']);
                $result[0]['logo_prew'] = $this->_img->getPreview();
                return $result[0];
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function addClient($data) {
        try {
            $data = $this->_db->prepareArray($data);

            $sql = 'INSERT INTO client(title, description)
                    VALUES("' . $data['title'] . '", "' . $data['description'] . '")';
            $this->_db->query($sql);

            $temp_id = $this->_db->query('SELECT LAST_INSERT_ID()');

            $fileName = $this->_img->download('img');
            if ($fileName !== false) {
                $this->_img->createPreview();
                $sql = 'UPDATE client
                    SET logo="' . $fileName . '" WHERE id=' . (int)$temp_id[0][0];

                $this->_db->query($sql);
            }
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function updateClient($id, $data) {
        try {
            $data = $this->_db->prepareArray($data);

            $sql = 'UPDATE client
                    SET title="' . $data['title'] . '", description="' . $data['description'] . '"
                    WHERE id=' . (int)$id;
            $this->_db->query($sql);

            $fileName = $this->_img->download('img');
            if ($fileName !== false) {
                $this->_img->createPreview();
                $sql = 'UPDATE client
                        SET logo="' . $fileName . '" WHERE id=' . (int)$id;

                $this->_db->query($sql);
            }
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function deleteClient($id) {
        try {
            $temp = $this->getClient($id);

            $this->_img->setName($temp['logo']);
            $this->_img->delete();

            $sql = 'DELETE FROM client WHERE id=' . (int)$id;
            $this->_db->query($sql);
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function deleteFile($id, $field) {
        global $__cfg;
        try {
            $temp = $this->getClient($id);

            $this->_img->setName($temp[$field]);
            $this->_img->delete();

            $sql = 'UPDATE client
                        SET logo=NULL WHERE id=' . (int)$id;
            $this->_db->query($sql);
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function __destruct() {
        parent::__destruct();
    }


    //put your code here
}

?>
