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
}</style><title>Results Part 1</title>

        <script> var v={}; var wronganswers={}; var totalwronganswers={};var maxFalse = null;
        var firstStageExp = <?php echo json_encode(FIRSTPAGE . ".php"); ?>;
        var thisPage = <?php echo json_encode($thisPage); ?>;
        var sessionIndexJavascript = "<?php echo $_SESSION[sessionID];?>";
        pageRefreshed=0;
        var loopBegin = "stage" + loopStart + ".php";
        var afterLoopEnd = 411233;
        if (thisPage == firstStageExp || (thisPage==loopBegin && period > 1) || loopEnd==afterLoopEnd) firstStage();
        /* if (thisPage == firstStageExp || thisPage==loopBegin || loopEnd==afterLoopEnd) firstStage(); */
        TimeOut=60;
        function skipStage(proceedifpossible) {
         if (proceedifpossible === undefined) proceedifpossible = false;
         if (proceedifpossible) location.replace('stage411235.php?session_index=<?php echo $_SESSION[sessionID];?>');
         else location.replace('wait411234.php?session_index=<?php echo $_SESSION[sessionID];?>');
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
        
        
        <script>// Change roles 
// Get the 'role' variable in the 'core' table
currentRole = getValue('core', 'playerNr='+playerNr, 'role');

function changeRole() {
    if (currentRole === 1) {
        console.log("Switching role 1 to role 2");
        newRole = 2;
        setValue('core', 'playerNr='+playerNr, 'role', newRole);
    } else if (currentRole === 2) {
        console.log("Switching role 2 to role 1");
        newRole = 1;
        setValue('core', 'playerNr='+playerNr, 'role', newRole);
    }
}

// Redirect to next stage because time is up in case the timer in LIONESS is not working 
// Wait for 1 minutes 10 seconds (70 seconds x 1000 for milliseconds) and then redirect to next stage
setTimeout(function() {
    let currentUrl = window.location.href;
    let newUrl = currentUrl.replace(/stage411234\.php/i, "stage411235.php");
    changeRole();
    window.location.href = newUrl;
}, 70000);</script><!-- END Element 2 Type: 19-->
        
        <!-- START Element 3 Type: 19-->
        
        
        <script>// What happened so far: Round 1 
var initialCredit = getValue('initialCredit'); 
var transfer1 = getValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'transfer1');
var tripledAmount1 = getValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'tripledAmount1');
var investorKept1 = initialCredit - transfer1;
var returned1 = getValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'returned1');
var dealerKept1 = tripledAmount1 - returned1; 

// What happened so far: Round 2
var transfer2 = getValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'transfer2');
var tripledAmount2 = getValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'tripledAmount2');
var investorKept2 = initialCredit - transfer2;
var returned2 = getValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'returned2');
var dealerKept2 = tripledAmount2 - returned2; 

// What happened so far: Round 3 
var transfer3 = getValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'transfer3');
var tripledAmount3 = getValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'tripledAmount3');
var investorKept3 = initialCredit - transfer3;
var returned3 = getValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'returned3');
// FIRST TIME HERE POSSIBLE BECAUSE ONLY POSSIBLE AFTER ROUND 3
// Calculate what The Dealer with role = 2 and subjectNr = 2 kept to himself in the second round 
var dealerKept3 = tripledAmount3 - returned3; 
setValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'keptForSelf3', dealerKept3);

var dealerRound1 = getValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'totalRound1');
var dealerRound2 = getValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'totalRound2');

var investorRound1 = getValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'totalRound1');
var investorRound2 = getValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'totalRound2');

// Set totalRound3 to 0 per default and record it to the database 
var totalRound3 = 0; 
record('totalRound3', totalRound3); 

var dealerRound3 = 10 + dealerKept3; 
setValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'totalRound3', dealerRound3);
var investorRound3 = investorKept3 + returned3; 
setValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'totalRound3', investorRound3);</script><!-- END Element 3 Type: 19-->
        
        <!-- START Element 4 Type: 1-->
        
        <div class="col-sm-12" id="wrap4" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: left;"><br></h3>
<h3 style="text-align: left;"><br></h3>
<h1><strong>Results Part 1</strong></h1></div>
        </div><script>if((true)) { $('#wrap4').show(); } </script><!-- END Element 4 Type: 1-->
        
        <!-- START Element 5 Type: 1-->
        
        <div class="col-sm-4" id="wrap5" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><p style="text-align: left; font-size: larger;"><b><span style="background-color: rgba(223, 240, 216, 0);">Round 1:</span></b></p><p style=""><span style="background-color: rgba(223, 240, 216, 0);"></span></p><table style="font-size: larger; text-align: left;"><tbody><tr><td>Invested by you:</td><td style="text-align: right; "><script>document.write(transfer1)</script> coins</td></tr><tr><td style="text-align: left;">Tripled to:</td><td style="text-align: right;"><script>document.write(tripledAmount1)</script> coins</td></tr><tr><td style="text-align: left;">Returned by <i>The Dealer</i>:</td><td style="text-align: right; "><script>document.write(returned1)</script> coins</td></tr><tr><td><br></td><td><br></td></tr><tr><td><b style="color: rgb(247, 150, 70);">Your total after Round 1:</b></td><td style="text-align: right; "><b style="color: rgb(247, 150, 70);"><script>document.write(investorRound1)</script> coins</b></td></tr><tr><td><b><i>The Dealer&#039;s</i> total after Round 1:&nbsp; &nbsp; &nbsp; &nbsp;</b></td><td style="text-align: right; "><b><script>document.write(dealerRound1)</script> coins</b></td></tr></tbody></table><p></p></div>
        </div><script>if((role==1)) { $('#wrap5').show(); } </script><!-- END Element 5 Type: 1-->
        
        <!-- START Element 6 Type: 1-->
        
        <div class="col-sm-4" id="wrap6" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><p style="text-align: left; font-size: larger;"><b><span style="background-color: rgba(223, 240, 216, 0);">Round 2:</span></b></p><p style=""><span style="background-color: rgba(223, 240, 216, 0);"></span></p><table style="font-size: larger; text-align: left;"><tbody><tr><td>Invested by you:</td><td style="text-align: right; "><script>document.write(transfer2)</script> coins</td></tr><tr><td style="text-align: left;">Tripled to:</td><td style="text-align: right;"><script>document.write(tripledAmount2)</script> coins</td></tr><tr><td style="text-align: left;">Returned by <i>The Dealer</i>:</td><td style="text-align: right; "><script>document.write(returned2)</script> coins</td></tr><tr><td><br></td><td><br></td></tr><tr><td><b style="color: rgb(247, 150, 70);">Your total after Round 2:</b></td><td style="text-align: right; "><b style="color: rgb(247, 150, 70);"><script>document.write(investorRound2)</script> coins</b></td></tr><tr><td><b><i>The Dealer&#039;s</i> total after Round 2:&nbsp; &nbsp; &nbsp; &nbsp;</b></td><td style="text-align: right; "><b><script>document.write(dealerRound2)</script> coins</b></td></tr></tbody></table></div>
        </div><script>if((role==1)) { $('#wrap6').show(); } </script><!-- END Element 6 Type: 1-->
        
        <!-- START Element 7 Type: 1-->
        
        <div class="col-sm-4" id="wrap7" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><p style="text-align: left; font-size: larger;"><b><span style="background-color: rgba(223, 240, 216, 0);">Round 3:</span></b></p><p style=""><span style="background-color: rgba(223, 240, 216, 0);"></span></p><table style="font-size: larger; text-align: left;"><tbody><tr><td>Invested by you:</td><td style="text-align: right; "><script>document.write(transfer3)</script> coins</td></tr><tr><td style="text-align: left;">Tripled to:</td><td style="text-align: right;"><script>document.write(tripledAmount3)</script> coins</td></tr><tr><td style="text-align: left;">Returned by <i>The Dealer</i>:</td><td style="text-align: right; "><script>document.write(returned3)</script> coins</td></tr><tr><td><br></td><td><br></td></tr><tr><td><b style="color: rgb(247, 150, 70);">Your total after Round 3:</b></td><td style="text-align: right; "><b style="color: rgb(247, 150, 70);"><script>document.write(investorRound3)</script> coins</b></td></tr><tr><td><b><i>The Dealer&#039;s</i> total after Round 3:&nbsp; &nbsp; &nbsp; &nbsp;</b></td><td style="text-align: right; "><b><script>document.write(dealerRound3)</script> coins</b></td></tr></tbody></table><br></div>
        </div><script>if((role==1)) { $('#wrap7').show(); } </script><!-- END Element 7 Type: 1-->
        
        <!-- START Element 8 Type: 1-->
        
        <div class="col-sm-12" id="wrap8" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: left;"><br></h3>
<p style=""><b style="color: rgb(247, 150, 70);"><span style="font-size: larger;">In Part 2, you will be playing </span><i style="font-size: larger;">The Dealer.</i><span style="font-size: larger;">&nbsp;</span><span style="font-size: 16.8px;"><br></span></b><b style="font-size: larger; background-color: rgba(223, 240, 216, 0);">You will start with a fresh credit, independent from Part 1.</b></p><p style="font-size: larger;">You will be redirected automatically in one minute.</p></div>
        </div><script>if((role==1)) { $('#wrap8').show(); } </script><!-- END Element 8 Type: 1-->
        
        <!-- START Element 9 Type: 1-->
        
        <div class="col-sm-4" id="wrap9" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><p style="text-align: left; font-size: larger;"><b><span style="background-color: rgba(223, 240, 216, 0);">Round 1:</span></b></p><p style=""><span style="background-color: rgba(223, 240, 216, 0);"></span></p><table style="font-size: larger; text-align: left;"><tbody><tr><td>Invested by <i>The Investor</i>:</td><td style="text-align: right; "><script>document.write(transfer1)</script> coins</td></tr><tr><td style="text-align: left;">Tripled to:</td><td style="text-align: right;"><script>document.write(tripledAmount1)</script> coins</td></tr><tr><td style="text-align: left;">Returned by you:</td><td style="text-align: right; "><script>document.write(returned1)</script> coins</td></tr><tr><td><br></td><td><br></td></tr><tr><td><b style=""><span style="font-style: italic;">The Investor&#039;s total&nbsp;</span>after Round 1:&nbsp; &nbsp; &nbsp; &nbsp;</b></td><td style="text-align: right; "><b style=""><script>document.write(investorRound1)</script> coins</b></td></tr><tr><td><b style="color: rgb(247, 150, 70);">Your<span style="font-style: italic;">&nbsp;</span>total after Round 1:</b></td><td style="text-align: right; "><b style="color: rgb(247, 150, 70);"><script>document.write(dealerRound1)</script> coins</b></td></tr></tbody></table><br></div>
        </div><script>if((role==2)) { $('#wrap9').show(); } </script><!-- END Element 9 Type: 1-->
        
        <!-- START Element 10 Type: 1-->
        
        <div class="col-sm-4" id="wrap10" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><p style="text-align: left; font-size: larger;"><b><span style="background-color: rgba(223, 240, 216, 0);">Round 2:</span></b></p><p style=""><span style="background-color: rgba(223, 240, 216, 0);"></span></p><table style="font-size: larger; text-align: left;"><tbody><tr><td>Invested by <i>The Investor</i>:</td><td style="text-align: right; "><script>document.write(transfer2)</script> coins</td></tr><tr><td style="text-align: left;">Tripled to:</td><td style="text-align: right;"><script>document.write(tripledAmount2)</script> coins</td></tr><tr><td style="text-align: left;">Returned by you:</td><td style="text-align: right; "><script>document.write(returned2)</script> coins</td></tr><tr><td><br></td><td><br></td></tr><tr><td><b style=""><i style="">The Investor&#039;s</i>&nbsp;total after Round 2:&nbsp; &nbsp; &nbsp; &nbsp;</b></td><td style="text-align: right; "><b style=""><script>document.write(investorRound2)</script> coins</b></td></tr><tr><td><b style="color: rgb(247, 150, 70);">Your total after Round 2:</b></td><td style="text-align: right; "><b style="color: rgb(247, 150, 70);"><script>document.write(dealerRound2)</script> coins</b></td></tr></tbody></table><br></div>
        </div><script>if((role==2)) { $('#wrap10').show(); } </script><!-- END Element 10 Type: 1-->
        
        <!-- START Element 11 Type: 1-->
        
        <div class="col-sm-4" id="wrap11" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><p style="text-align: left; font-size: larger;"><b><span style="background-color: rgba(223, 240, 216, 0);">Round 3:</span></b></p><p style=""><span style="background-color: rgba(223, 240, 216, 0);"></span></p><table style="font-size: larger; text-align: left;"><tbody><tr><td>Invested by <i>The Investor</i>:</td><td style="text-align: right; "><script>document.write(transfer3)</script> coins</td></tr><tr><td style="text-align: left;">Tripled to:</td><td style="text-align: right;"><script>document.write(tripledAmount3)</script> coins</td></tr><tr><td style="text-align: left;">Returned by you:</td><td style="text-align: right; "><script>document.write(returned3)</script> coins</td></tr><tr><td><br></td><td><br></td></tr><tr><td><b style=""><i>The Investor&#039;s&nbsp;</i>total after Round 3:&nbsp; &nbsp; &nbsp; &nbsp;</b></td><td style="text-align: right; "><b style=""><script>document.write(investorRound3)</script> coins</b></td></tr><tr><td><b style="color: rgb(247, 150, 70);">Your total after Round 3:</b></td><td style="text-align: right; "><b style="color: rgb(247, 150, 70);"><script>document.write(dealerRound3)</script> coins</b></td></tr></tbody></table><br></div>
        </div><script>if((role==2)) { $('#wrap11').show(); } </script><!-- END Element 11 Type: 1-->
        
        <!-- START Element 12 Type: 1-->
        
        <div class="col-sm-12" id="wrap12" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: left;"><br></h3>
<p style=""><b style=""><span style="color: rgb(247, 150, 70); font-size: larger;">In Part 2, you will be playing </span><i style="color: rgb(247, 150, 70); font-size: larger;">The Investor.</i><span style="color: rgb(247, 150, 70); font-size: larger;">&nbsp;</span><span style="color: rgb(247, 150, 70); font-size: 16.8px;"><br></span></b><b style="font-size: larger; background-color: rgba(223, 240, 216, 0);">You will start with a fresh credit, independent from Part 1.</b></p><p style="font-size: larger;">You will be redirected automatically in one minute.</p></div>
        </div><script>if((role==2)) { $('#wrap12').show(); } </script><!-- END Element 12 Type: 1-->
        
        </div><script>setInterval(function(){ if (true) $('#wrap4').show();if (!(true)) $('#wrap4').hide();if (role==1) $('#wrap5').show();if (!(role==1)) $('#wrap5').hide();if (role==1) $('#wrap6').show();if (!(role==1)) $('#wrap6').hide();if (role==1) $('#wrap7').show();if (!(role==1)) $('#wrap7').hide();if (role==1) $('#wrap8').show();if (!(role==1)) $('#wrap8').hide();if (role==2) $('#wrap9').show();if (!(role==2)) $('#wrap9').hide();if (role==2) $('#wrap10').show();if (!(role==2)) $('#wrap10').hide();if (role==2) $('#wrap11').show();if (!(role==2)) $('#wrap11').hide();if (role==2) $('#wrap12').show();if (!(role==2)) $('#wrap12').hide(); }, 100);</script><script>countdownTimer(TimeOut, 'stage411235.php?session_index=<?php echo $_SESSION[sessionID];?>',false);</script></form></div></div></body></html>