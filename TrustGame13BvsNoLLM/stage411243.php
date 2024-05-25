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
}</style><title>Redirect to Prolific</title>

        <script> var v={}; var wronganswers={}; var totalwronganswers={};var maxFalse = null;
        var firstStageExp = <?php echo json_encode(FIRSTPAGE . ".php"); ?>;
        var thisPage = <?php echo json_encode($thisPage); ?>;
        var sessionIndexJavascript = "<?php echo $_SESSION[sessionID];?>";
        pageRefreshed=0;
        var loopBegin = "stage" + loopStart + ".php";
        var afterLoopEnd = 411242;
        if (thisPage == firstStageExp || (thisPage==loopBegin && period > 1) || loopEnd==afterLoopEnd) firstStage();
        /* if (thisPage == firstStageExp || thisPage==loopBegin || loopEnd==afterLoopEnd) firstStage(); */
        TimeOut=null;
        function skipStage(proceedifpossible) {
         if (proceedifpossible === undefined) proceedifpossible = false;
         if (proceedifpossible) location.replace('stage411244.php?session_index=<?php echo $_SESSION[sessionID];?>');
         else location.replace('wait411243.php?session_index=<?php echo $_SESSION[sessionID];?>');
        }
        $(document).ready(function(){
        if (bot) { document.getElementsByClassName("buttonclick")[0].click(); }
        });
        
        </script>
        </head><body><div id="mainwrap" class="container" style="width: 100%; padding-left: 5%; padding-right: 5%; padding-top: 1%;"><form autocomplete="off"><div class="row"><!-- START Element 1 Type: 19-->
        
        
        <script>// URL PARAMETER PASSING PROLIFIC ID TO CURRENT URL 
// Get Prolific PID from the database 
var externalID = getValue('session', 'playerNr='+playerNr, 'externalID');

// Get the current URL
var currentUrl = window.location.href;

// Check if the variable is already present in the URL
if (currentUrl.indexOf('PROLIFIC_PID=' + externalID) === -1) {
    // Check if the current URL already has query parameters
    var separator = currentUrl.indexOf('?') !== -1 ? '&' : '?';

    // Construct the new URL with the query parameter
    var newUrl = currentUrl + separator + "PROLIFIC_PID=" + externalID;

    // Redirect to the new URL
    window.location.href = newUrl;
}</script><!-- END Element 1 Type: 19-->
        
        <!-- START Element 2 Type: 19-->
        
        
        <script>var player1Total = getValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'finalScore');
var player2Total = getValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'finalScore');

function executeAfterTime() {
    const delay = 10 * 1000; // 10 seconds :)
    setTimeout(() => {
        // Get the URLs for redirection
        var winningUrl = "https://app.prolific.com/submissions/complete?cc=C186F3OR";
        var completionUrl = "https://app.prolific.com/submissions/complete?cc=C124HNV2";
        
        // Compare results and redirect accordingly based on roles THAT NEED TO BE SWITCHED AFTER SWITCH!!! 
        if (player1Total > player2Total && role === 2) {
          window.location.href = winningUrl; // Redirect role 2 subjectNr 1 to the winning URL
        } else if (player2Total > player1Total && role === 1) {
          window.location.href = winningUrl; // Redirect role 1 subjectNr 2 to the winning URL
        } else {
          window.location.href = completionUrl; // Redirect to the completion URL for any other case
        }
    }, delay);
}
executeAfterTime();</script><!-- END Element 2 Type: 19-->
        
        <!-- START Element 3 Type: 1-->
        
        <div class="col-sm-12" id="wrap3" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: left;"><br></h3><h3 style="text-align: left;"><br></h3>
<h1><b style="font-family: inherit; color: rgb(247, 150, 70);">You win with a higher final score!&nbsp;</b><br></h1><h1><b style="color: inherit; font-family: inherit;">Thanks for completing the study. <br>Our journey ends here.&nbsp;<br></b><b style="color: inherit; font-family: inherit;">You are now being redirected to Prolific.</b></h1></div>
        </div><script>if((player1Total > player2Total && role == 2 || player2Total > player1Total && role == 1)) { $('#wrap3').show(); } </script><!-- END Element 3 Type: 1-->
        
        <!-- START Element 4 Type: 1-->
        
        <div class="col-sm-12" id="wrap4" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: left;"><br></h3><h3 style="text-align: left;"><br></h3>
<h1><b style="font-family: inherit; color: rgb(247, 150, 70);">Thanks for completing the study!</b></h1><h1><b style="color: inherit; font-family: inherit;">Our journey ends here.&nbsp;<br></b><b style="color: inherit; font-family: inherit;">You are now being redirected to Prolific.</b></h1></div>
        </div><script>if((player1Total < player2Total && role == 2 || player2Total < player1Total && role == 1)) { $('#wrap4').show(); } </script><!-- END Element 4 Type: 1-->
        
        </div><script>setInterval(function(){ if (player1Total > player2Total && role == 2 || player2Total > player1Total && role == 1) $('#wrap3').show();if (!(player1Total > player2Total && role == 2 || player2Total > player1Total && role == 1)) $('#wrap3').hide();if (player1Total < player2Total && role == 2 || player2Total < player1Total && role == 1) $('#wrap4').show();if (!(player1Total < player2Total && role == 2 || player2Total < player1Total && role == 1)) $('#wrap4').hide(); }, 100);</script></form></div></div></body></html>