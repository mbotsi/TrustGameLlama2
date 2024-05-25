<?php
include('_projectID.php');
include(PATH . "basis/common.php");
$_SESSION['projectID'] = PROJECTID;
$PROLIFIC_PID=$_GET['PROLIFIC_PID'];
include(PATH . "basis/participant/register.php");
