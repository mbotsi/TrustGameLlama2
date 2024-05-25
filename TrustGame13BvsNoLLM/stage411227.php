<html>
        <head>
        
        <?php
    
        include("_projectID.php");
        include(PATH."basis/participant/header.php");
	    $_SESSION['projectID']=PROJECTID;
	    
	    ?>

        <link href="<?php echo PATH;?>basis/css/newlayout.css?v1" rel="stylesheet" type="text/css"  />
        <link href="<?php echo PATH;?>basis/css/newlayout_bootstrap.css" rel="stylesheet" type="text/css"  />
        <link href="<?php echo PATH;?>basis/css/grid.css" rel="stylesheet" type="text/css"  /><style>/* Responsive adjustments for smaller devices */
@media (max-width: 768px) {
  #mainwrap {
      padding: 10% 5% 1%; /* Increase padding for better display on smaller devices */
  }

  h3 {
      font-size: 20px; /* Reduce heading font size for smaller devices */
  }

  p {
      font-size: 16px; /* Reduce paragraph font size for smaller devices */
  }
}</style><title>Please wait...</title>

        <script> var v={}; var wronganswers={}; var totalwronganswers={};
        var firstStageExp = <?php echo json_encode(FIRSTPAGE . ".php"); ?>;
        var thisPage = <?php echo json_encode($thisPage); ?>;
        if (thisPage == firstStageExp) firstStage();

        
        lobbyCheck('stage411228.php?session_index=<?php echo $_SESSION[sessionID];?>', 'wait411227.php?session_index=<?php echo $_SESSION[sessionID];?>');</script>
        </head><body><div id="mainwrap" class="container" style="width: 100%; padding-left: 5%; padding-right: 5%; padding-top: 1%;"><form autocomplete="off"><div class="row"><!-- START Element 1 Type: 1-->
        
        <div class="col-sm-12" id="wrap1" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: left;"><br></h3><h3 style="text-align: left;"><br></h3>
<h1><b style="font-family: inherit; color: rgb(247, 150, 70);">Please wait until another player is ready.</b></h1><h1><b style="color: inherit; font-family: inherit;">If nobody joins during the next 5 minutes, we will redirect you to Prolific.&nbsp;<br></b><b style="color: inherit; font-family: inherit;">Thank you for your understanding.</b></h1>
<h3 style="text-align: left;"><br></h3><h3 style="text-align: left;"><br></h3></div>
        </div><script>if((true)) { $('#wrap1').show(); } </script><!-- END Element 1 Type: 1-->
        
        </div>
        
        <div class="row" id="waitingForContainer"><div id="waitingFor" style="text-align: center;"> </div></div>

            <script>
                var timeStamp = <?php echo json_encode(time()); ?>;
                setValue("core","playerNr="+playerNr,"onPage", "lobby");
                setValue("core","playerNr="+playerNr,"enterLobby", timeStamp);
                /* check if we are in the lobby */
                setValue("core","playerNr="+playerNr,"lobbyReady", 1);
                var lobbyTimeout=300;
                /* if the player has clicked wait for two more minutes, set the timer to 120 seconds (not robust to hard refresh) */
                if (getValue('core', 'playerNr='+playerNr, 'waitMore')==1) lobbyTimeout=120;

                /* add the timer with the landing page when the timer reaches 0 */
                countdownTimer(lobbyTimeout, 'wait411227.php?session_index=<?php echo $_SESSION[sessionID];?>', true);

                /* show on how many other participants we are currently waiting */
                lobbyInfo();
                setInterval(function() {lobbyInfo();},3000);

            </script> </form></div></body></html>