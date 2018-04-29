<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 28-04-2018
 * Time: 00:18
 */

require_once '../core/base classes/Page.php' ;
require_once '../core/base classes/PageContent.php' ;
require_once '../core/base classes/LayoutData.php' ;
require_once '../core/base classes/Modules.php' ;

if (isset($_GET["page"]))
    $pageString = $_GET["page"];
else
    $pageString = "home";

$page = new Page($pageString);
$page->Display();

?>

