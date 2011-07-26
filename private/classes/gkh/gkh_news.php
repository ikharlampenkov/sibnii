<?php

/*
  CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `news_category_id` int(10) unsigned NOT NULL,
  `date` datetime NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_text` text,
  `full_text` text,
  `is_impotant` TINYINT(1)  NOT NULL DEFAULT 0 ,
  PRIMARY KEY (`id`),
  KEY `fk_news_news_category1` (`news_category_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
 */

/**
 * Description of gkh_news
 *
 * @author Moris
 */
class gkh_news extends gkh {

    public function __construct() {
        parent::__construct();
    }

    public function getAllNews() {
        try {
            $sql = 'SELECT * FROM news ';
            $sql .= ' ORDER BY date DESC ';

            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                return $result;
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function getTopNews($category_id) {
        try {
            $sql = 'SELECT * FROM news ';
            $sql .= ' ORDER BY date DESC
                      LIMIT 5';

            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                return $result;
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function getNews($id) {
        try {
            $sql = 'SELECT * FROM news WHERE id=' . (int)$id;
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                return $result[0];
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function addNews($data) {
        try {
            $data = $this->_db->prepareArray($data);

            $data['date'] = date('Y-m-d', strtotime($data['date']));

            $sql = 'INSERT INTO news(date, title, short_text, full_text)
                              VALUES("' . $data['date'] . '", "' . $data['title'] . '",
                                     "' . $data['short_text'] . '", "' . $data['full_text'] . '")';
            $this->_db->query($sql);
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function updateNews($id, $data) {
        try {
            $data = $this->_db->prepareArray($data);

            $data['date'] = date('Y-m-d', strtotime($data['date']));

            $sql = 'UPDATE news
                    SET date="' . $data['date'] . '", title="' . $data['title'] . '",
                        short_text="' . $data['short_text'] . '", full_text="' . $data['full_text'] . '"
                    WHERE id=' . (int)$id;
            $this->_db->query($sql);
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function deleteNews($id) {
        try {
            $sql = 'DELETE FROM news WHERE id=' . (int)$id;
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
