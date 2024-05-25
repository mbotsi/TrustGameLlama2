<?php
include('_projectID.php');
include(PATH . "basis/common.php");
$_SESSION['projectID'] = PROJECTID;
include(PATH . "basis/participant/register.php");
$PROLIFIC_PID=$_GET['PROLIFIC_PID']; // get the prolific id from the URL
