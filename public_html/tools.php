<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 28-04-2018
 * Time: 09:56
 */

require_once '../core/base classes/LayoutData.php';

if ($_GET['tool'] == "json") {

    echo json_encode(new LayoutData(null));
}
