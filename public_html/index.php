<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 28-04-2018
 * Time: 00:18
 */


// Base classes
require_once '../core/base classes/Page.php' ;
require_once '../core/base classes/PageContent.php' ;
require_once '../core/base classes/LayoutData.php' ;
require_once '../core/base classes/Modules.php' ;
require_once '../core/base classes/Database.php' ;
require_once '../core/base classes/Tutor.php' ;
require_once '../core/base classes/Geocode.php' ;

if (isset($_GET["page"]))
    $pageString = $_GET["page"];
else
    $pageString = "home";


$page = new Page($pageString);


$database = new Database();

$page->Display();


