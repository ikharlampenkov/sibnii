<?php

if( !isset($_SESSION)) {
  session_start() ;
}

/**
 * Подключаем общий файл конфигурации
 *
 */
include_once '/home/d/debser/private/config/simo_conf.php';

/**
 * Подключаем Smarty
 *
 */
include_once '/home/d/debser/private/classes/smarty/Smarty.class.php';

/**
 * Функция автоматически загружающая файлы с классами по необходимости
 *
 * @param string $className
 */
function autoload($className) {
  global $__cfg;

  if(file_exists($fn = $__cfg['site.main.dir'] . 'private/classes/stdclass/' . $className . '.php')) {
    include_once($fn);
  }

  if (file_exists($fn = $__cfg['site.main.dir'] . 'private/classes/stdclass/db_driver/' . $className . '.php')) {
  	include_once($fn);
  }

  if(file_exists($fn = $__cfg['site.main.dir'] . 'private/classes/share/' . $className . '.php')) {
    include_once($fn);
  }

  if(file_exists($fn = $__cfg['site.main.dir'] . 'private/classes/gkh/' . $className . '.php')) {
    include_once($fn);
  }

  if(file_exists($fn = $__cfg['site.main.dir'] . 'private/classes/FileManager/' . $className . '.php')) {
    include_once($fn);
  }

  if(file_exists($fn = $__cfg['site.main.dir'] . 'private/classes/sbn/' . $className . '.php')) {
    include_once($fn);
  }
}

spl_autoload_register('autoload', false);

$o_log = new simo_log();
$o_log->setLogLevel($__cfg['log.level']);

?>