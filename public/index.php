<?php
/**
 * REIKO FRAMEWORK 
 *  
 * @package ReiKo Framework
 *
 * @author alinko <alinkokomansuby@gmail.com>
 * @author ReiYan <hariyantoriyan.hr@gmail.com>
 * @copyright (c) 2021 
 * 
 * @license MIT 
 * 
 */
session_start();

 require_once '../vendor/autoload.php';
 require_once '../core/functions/constants.php';
 require_once '../core/Bootstrap.php';


 $REIKO = new Bootstrap;
 $REIKO->run();