<?php
include("../functions.php");
include("../models/DB.class.php");
include("../controllers/ADM_Projects.class.php");

$status = Projects::update_project_status($_REQUEST['status'],$_REQUEST['id'])
//return dados

?>








