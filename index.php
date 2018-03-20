<?php
/**
 * 入口文件
 * 1. 定义常量
 * 2. 加载函数库
 * 3. 启动框架
 */
define('DGH',str_replace('\\','/',dirname(realpath(__FILE__))));
define('CORE',DGH.'/core');
define('APP',DGH.'/app');
define('MODULE', 'app');
define('DEBUG',true);

include "vendor/autoload.php";

if(DEBUG){
    $whoops = new \Whoops\Run;
    $option = new \Whoops\Handler\PrettyPageHandler();
    $option->setPageTitle('系统开小差啦！');
    $whoops->pushHandler($option);
    $whoops->register();
    ini_set('display_error', 'On');
}else{
    ini_set('display_error', 'Off');
}

include CORE.'/common/function.php';
include CORE.'/dgh.php';

spl_autoload_register('\core\dgh::load');

\core\dgh::run();