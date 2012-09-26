<?php

/*
CREATE  TABLE IF NOT EXISTS `service` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(45) NULL ,
  `description` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
 */

/**
 * Description of service
 *
 * @author Administrator
 */
class service extends sbn {

    //private $_img;

    public function __construct() {
        parent::__construct();

        //global $__cfg;
        //$this->_img = new Image($__cfg['temp.public.dir']);


    }

    public function getAllService() {
        try {
            $sql = 'SELECT * FROM service';
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                return $result;
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function getServiceByProject($id) {
        try {
            $sql = 'SELECT service.id, service.title, service.description
                    FROM service, project_service
                    WHERE service.id=project_service.service_id AND project_service.project_id=' . $id;
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                return $result;
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }
    
    public function getServiceArrayByProject($id) {
        try {
            $sql = 'SELECT service.id 
                    FROM service, project_service
                    WHERE service.id=project_service.service_id AND project_service.project_id=' . $id;
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                $retArray = array();
                foreach ($result as $res) {
                   $retArray[] = $res['id']; 
                }
                return $retArray;
            } else
                return array();
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function getService($id) {
        try {
            $sql = 'SELECT * FROM service WHERE id=' . (int)$id;
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                $result[0]['description'] = stripcslashes(stripcslashes($result[0]['description']));
                return $result[0];
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function addService($data) {
        try {
            $data = $this->_db->prepareArray($data);
            $sql = 'INSERT INTO service(title, description)
                    VALUES("' . $data['title'] . '", "' . $data['description'] . '")';
            $this->_db->query($sql);
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function updateService($id, $data) {
        try {
            $data = $this->_db->prepareArray($data);

            $sql = 'UPDATE service
                    SET title="' . $data['title'] . '", description="' . $data['description'] . '" 
                    WHERE id=' . (int)$id;
            $this->_db->query($sql);
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function deleteService($id) {
        try {
            $sql = 'DELETE FROM service WHERE id=' . (int)$id;
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
