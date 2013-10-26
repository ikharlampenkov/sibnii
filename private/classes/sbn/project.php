<?php

/*
CREATE  TABLE IF NOT EXISTS `project` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(255) NOT NULL ,
  `description` TEXT NULL ,
  `is_complite` TINYINT(1)  NOT NULL DEFAULT 0 ,
  `client_id` INT UNSIGNED NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_project_client` (`client_id` ASC) ,
  CONSTRAINT `fk_project_client`
    FOREIGN KEY (`client_id` )
    REFERENCES `sibnii`.`client` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
 */

/**
 * Description of project
 *
 * @author Administrator
 */
class project extends sbn
{

    //private $_img;

    public function __construct()
    {
        parent::__construct();

        //global $__cfg;
        //$this->_img = new Image($__cfg['temp.public.dir']);


    }

    public function getAllProject($is_complite = -1)
    {
        try {
            $sql = 'SELECT * FROM project';
            if ($is_complite != -1) {
                $sql .= ' WHERE is_complite=' . $is_complite;
            }
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                foreach ($result as &$res) {
                    $res['description'] = stripcslashes(stripslashes($res['description']));
                }
                return $result;
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function getProjectByClient($id)
    {
        try {
            $sql = 'SELECT project.id, project.title, project.description, is_complite
                    FROM project, client
                    WHERE client.id=project.client_id AND client.id=' . $id;
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                foreach ($result as &$res) {
                    $res['description'] = stripcslashes(stripslashes($res['description']));
                }
                return $result;
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function getProjectByService($id)
    {
        try {
            $sql = 'SELECT project.id, project.title, project.description, is_complite
                    FROM project, project_service
                    WHERE project.id=project_service.project_id AND project_service.service_id=' . $id;
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                foreach ($result as &$res) {
                    $res['description'] = stripcslashes(stripslashes($res['description']));
                }
                return $result;
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function getProject($id)
    {
        try {
            $sql = 'SELECT * FROM project WHERE id=' . (int)$id;
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                $result[0]['description'] = stripcslashes(stripslashes($result[0]['description']));
                return $result[0];
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function addProject($data)
    {
        try {
            $data = $this->_db->prepareArray($data);

            if (isset($data['is_complite'])) {
                $data['is_complite'] = 1;
            } else {
                $data['is_complite'] = 0;
            }

            $sql = 'INSERT INTO project(title, description, is_complite, client_id)
                    VALUES("' . $data['title'] . '", "' . $data['description'] . '", ' . $data['is_complite'] . ', ' . $data['client_id'] . ')';
            $this->_db->query($sql);
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function updateProject($id, $data)
    {
        try {
            $data = $this->_db->prepareArray($data);

            if (isset($data['is_complite'])) {
                $data['is_complite'] = 1;
            } else {
                $data['is_complite'] = 0;
            }

            $sql = 'UPDATE project
                    SET title="' . $data['title'] . '", description="' . $data['description'] . '",
                        is_complite=' . $data['is_complite'] . ', client_id=' . $data['client_id'] . '
                    WHERE id=' . (int)$id;
            $this->_db->query($sql);
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function deleteProject($id)
    {
        try {
            $sql = 'DELETE FROM project WHERE id=' . (int)$id;
            $this->_db->query($sql);
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function saveServiceList($id, $data)
    {
        try {
            $sql = 'DELETE FROM project_service WHERE project_id=' . (int)$id;
            $this->_db->query($sql);

            foreach ($data['project'] as $service_id => $value) {
                $sql = 'INSERT INTO project_service(project_id, service_id) VALUES(' . $id . ', ' . $service_id . ')';
                $this->_db->query($sql);
            }

        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function __destruct()
    {
        parent::__destruct();
    }


    //put your code here
}

?>
