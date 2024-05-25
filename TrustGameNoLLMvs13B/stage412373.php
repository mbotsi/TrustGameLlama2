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
}</style><title>Results Part 2</title>

        <script> var v={}; var wronganswers={}; var totalwronganswers={};var maxFalse = null;
        var firstStageExp = <?php echo json_encode(FIRSTPAGE . ".php"); ?>;
        var thisPage = <?php echo json_encode($thisPage); ?>;
        var sessionIndexJavascript = "<?php echo $_SESSION[sessionID];?>";
        pageRefreshed=0;
        var loopBegin = "stage" + loopStart + ".php";
        var afterLoopEnd = 412372;
        if (thisPage == firstStageExp || (thisPage==loopBegin && period > 1) || loopEnd==afterLoopEnd) firstStage();
        /* if (thisPage == firstStageExp || thisPage==loopBegin || loopEnd==afterLoopEnd) firstStage(); */
        TimeOut=60;
        function skipStage(proceedifpossible) {
         if (proceedifpossible === undefined) proceedifpossible = false;
         if (proceedifpossible) location.replace('stage412374.php?session_index=<?php echo $_SESSION[sessionID];?>');
         else location.replace('wait412373.php?session_index=<?php echo $_SESSION[sessionID];?>');
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
        
        
        <script>// Results Round 1-3 Dealer 
var dealerRound1 = getValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'totalRound1');
var dealerRound2 = getValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'totalRound2');
var dealerRound3 = getValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'totalRound3');

// Results Round 1-3 Investor 
var investorRound1 = getValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'totalRound1');
var investorRound2 = getValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'totalRound2');
var investorRound3 = getValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'totalRound3');

// What happened so far: Round 4
var initialCredit = getValue('initialCredit'); 
var transfer4 = getValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'transfer4'); // NEWSUBJECTNR SWITCHED ROLES 
var tripledAmount4 = getValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'tripledAmount4');  // NEWSUBJECTNR SWITCHED ROLES 
var investorKept4 = initialCredit - transfer4;
var returned4 = getValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'returned4');  // NEWSUBJECTNR SWITCHED ROLES 
var dealerKept4 = tripledAmount4 - returned4; 

// What happened so far: Round 5
var transfer5 = getValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'transfer5');  // NEWSUBJECTNR SWITCHED ROLES 
var tripledAmount5 = getValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'tripledAmount5');  // NEWSUBJECTNR SWITCHED ROLES 
var investorKept5 = initialCredit - transfer5;
var returned5 = getValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'returned5');  // NEWSUBJECTNR SWITCHED ROLES 
var dealerKept5 = tripledAmount5 - returned5; 

// What happened so far: Round 6
var transfer6 = getValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'transfer6');  // NEWSUBJECTNR SWITCHED ROLES 
var tripledAmount6 = getValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'tripledAmount6'); // NEWSUBJECTNR SWITCHED ROLES 
var investorKept6 = initialCredit - transfer6;
var returned6 = getValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'returned6'); // NEWSUBJECTNR SWITCHED ROLES 


// FIRST TIME HERE POSSIBLE BECAUSE ONLY POSSIBLE AFTER ROUND 3
// Calculate what The Dealer with role = 2 and subjectNr = 2 kept to himself in the second round 
var dealerKept6 = tripledAmount6 - returned6; 
setValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'keptForSelf6', dealerKept6);  // NEWSUBJECTNR SWITCHED ROLES 

var dealerRound4 = getValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'totalRound4');  // NEWSUBJECTNR SWITCHED ROLES 
var dealerRound5 = getValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'totalRound5');  // NEWSUBJECTNR SWITCHED ROLES 

var investorRound4 = getValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'totalRound4'); // NEWSUBJECTNR SWITCHED ROLES 
var investorRound5 = getValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'totalRound5'); // NEWSUBJECTNR SWITCHED ROLES 

// Set totalRound6 to 0 per default and record it to the database 
var totalRound6 = 0; 
record('totalRound6', totalRound6); 

var dealerRound6 = 10 + dealerKept6; 
setValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'totalRound6', dealerRound6); // NEWSUBJECTNR SWITCHED ROLES 
var investorRound6 = investorKept6 + returned6; 
setValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'totalRound6', investorRound6); // NEWSUBJECTNR SWITCHED ROLES 


// TO DO OVERALL RESULTS!!! Due to switch, need to MINDFULLY calculate INVESTOR AND DEALER
var finalScore = 0; 
record('finalScore', finalScore); 

var player1Total = investorRound1 + investorRound2 + investorRound3 + dealerRound4 + dealerRound5 + dealerRound6; 
setValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'finalScore', player1Total);  // KEEPSUBJECTNR SWITCHED ROLES 

var player2Total = dealerRound1 + dealerRound2 + dealerRound3 + investorRound4 + investorRound5+ investorRound6; 
setValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'finalScore', player2Total);  // KEEPSUBJECTNR SWITCHED ROLES</script><!-- END Element 2 Type: 19-->
        
        <!-- START Element 3 Type: 1-->
        
        <div class="col-sm-12" id="wrap3" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: left;"><br></h3>
<h3 style="text-align: left;"><br></h3>
<h1><strong>Results Part 2</strong></h1></div>
        </div><script>if((true)) { $('#wrap3').show(); } </script><!-- END Element 3 Type: 1-->
        
        <!-- START Element 4 Type: 1-->
        
        <div class="col-sm-4" id="wrap4" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><p style="text-align: left; font-size: larger;"><b><span style="background-color: rgba(223, 240, 216, 0);">Round 4:</span></b></p><p style=""><span style="background-color: rgba(223, 240, 216, 0);"></span></p><table style="font-size: larger; text-align: left;"><tbody><tr><td>Invested by you:</td><td style="text-align: right; "><script>document.write(transfer4)</script> coins</td></tr><tr><td style="text-align: left;">Tripled to:</td><td style="text-align: right;"><script>document.write(tripledAmount4)</script> coins</td></tr><tr><td style="text-align: left;">Returned by <i>The Dealer</i>:</td><td style="text-align: right; "><script>document.write(returned4)</script> coins</td></tr><tr><td><br></td><td><br></td></tr><tr><td><b style="color: rgb(247, 150, 70);">Your total after Round 4:</b></td><td style="text-align: right; "><b style="color: rgb(247, 150, 70);">&nbsp; &nbsp; &nbsp;<script>document.write(investorRound4)</script> coins</b></td></tr><tr><td><b><i>The Dealer&#039;s</i> total after Round 4:</b></td><td style="text-align: right; "><b>&nbsp; &nbsp; &nbsp;<script>document.write(dealerRound4)</script> coins</b></td></tr></tbody></table><p></p></div>
        </div><script>if((role==1)) { $('#wrap4').show(); } </script><!-- END Element 4 Type: 1-->
        
        <!-- START Element 5 Type: 1-->
        
        <div class="col-sm-4" id="wrap5" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><p style="text-align: left; font-size: larger;"><b><span style="background-color: rgba(223, 240, 216, 0);">Round 5:</span></b></p><p style=""><span style="background-color: rgba(223, 240, 216, 0);"></span></p><table style="font-size: larger; text-align: left;"><tbody><tr><td>Invested by you:</td><td style="text-align: right; "><script>document.write(transfer5)</script> coins</td></tr><tr><td style="text-align: left;">Tripled to:</td><td style="text-align: right;"><script>document.write(tripledAmount5)</script> coins</td></tr><tr><td style="text-align: left;">Returned by <i>The Dealer</i>:</td><td style="text-align: right; "><script>document.write(returned5)</script> coins</td></tr><tr><td><br></td><td><br></td></tr><tr><td><b style="color: rgb(247, 150, 70);">Your total after Round 5:</b></td><td style="text-align: right; "><b style="color: rgb(247, 150, 70);">&nbsp; &nbsp; &nbsp;<script>document.write(investorRound5)</script> coins</b></td></tr><tr><td><b><i>The Dealer&#039;s</i> total after Round 5:</b></td><td style="text-align: right; "><b>&nbsp; &nbsp; &nbsp;<script>document.write(dealerRound5)</script> coins</b></td></tr></tbody></table></div>
        </div><script>if((role==1)) { $('#wrap5').show(); } </script><!-- END Element 5 Type: 1-->
        
        <!-- START Element 6 Type: 1-->
        
        <div class="col-sm-4" id="wrap6" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><p style="text-align: left; font-size: larger;"><b><span style="background-color: rgba(223, 240, 216, 0);">Round 6:</span></b></p><p style=""><span style="background-color: rgba(223, 240, 216, 0);"></span></p><table style="font-size: larger; text-align: left;"><tbody><tr><td>Invested by you:</td><td style="text-align: right; "><script>document.write(transfer6)</script> coins</td></tr><tr><td style="text-align: left;">Tripled to:</td><td style="text-align: right;"><script>document.write(tripledAmount6)</script> coins</td></tr><tr><td style="text-align: left;">Returned by <i>The Dealer</i>:</td><td style="text-align: right; "><script>document.write(returned6)</script> coins</td></tr><tr><td><br></td><td><br></td></tr><tr><td><b style="color: rgb(247, 150, 70);">Your total after Round 6:</b></td><td style="text-align: right; "><b style="color: rgb(247, 150, 70);">&nbsp; &nbsp; &nbsp;<script>document.write(investorRound6)</script> coins</b></td></tr><tr><td><b><i>The Dealer&#039;s</i> total after Round 6:</b></td><td style="text-align: right; "><b>&nbsp; &nbsp; &nbsp;<script>document.write(dealerRound6)</script> coins</b></td></tr></tbody></table><br></div>
        </div><script>if((role==1)) { $('#wrap6').show(); } </script><!-- END Element 6 Type: 1-->
        
        <!-- START Element 7 Type: 1-->
        
        <div class="col-sm-12" id="wrap7" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: left;"><br></h3>
<p style=""><b style="font-size: larger; background-color: rgba(223, 240, 216, 0);">Your final score is: <script>document.write(player2Total)</script><br></b><b style="font-size: larger; background-color: rgba(223, 240, 216, 0);">Your partner&#039;s final score is: <script>document.write(player1Total)</script></b></p><p style="font-size: larger;"><b style="color: rgb(247, 150, 70);">You will be redirected to Prolific in one minute.</b></p><p style="font-size: larger;"><b style="">Please stay in the loop in order to receive your study compensation.</b></p></div>
        </div><script>if((role==1)) { $('#wrap7').show(); } </script><!-- END Element 7 Type: 1-->
        
        <!-- START Element 8 Type: 1-->
        
        <div class="col-sm-4" id="wrap8" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><p style="text-align: left; font-size: larger;"><b><span style="background-color: rgba(223, 240, 216, 0);">Round 4:</span></b></p><p style=""><span style="background-color: rgba(223, 240, 216, 0);"></span></p><table style="font-size: larger; text-align: left;"><tbody><tr><td>Invested by <i>The Investor</i>:</td><td style="text-align: right; "><script>document.write(transfer4)</script> coins</td></tr><tr><td style="text-align: left;">Tripled to:</td><td style="text-align: right;"><script>document.write(tripledAmount4)</script> coins</td></tr><tr><td style="text-align: left;">Returned by you:</td><td style="text-align: right; "><script>document.write(returned4)</script> coins</td></tr><tr><td><br></td><td><br></td></tr><tr><td><b style=""><span style="font-style: italic;">The Investor&#039;s total&nbsp;</span>after Round 4:</b></td><td style="text-align: right; "><b style="">&nbsp; &nbsp; &nbsp;<script>document.write(investorRound4)</script> coins</b></td></tr><tr><td><b style="color: rgb(247, 150, 70);">Your<span style="font-style: italic;">&nbsp;</span>total after Round 4:</b></td><td style="text-align: right; "><b style="color: rgb(247, 150, 70);">&nbsp; &nbsp; &nbsp;<script>document.write(dealerRound4)</script> coins</b></td></tr></tbody></table><br></div>
        </div><script>if((role==2)) { $('#wrap8').show(); } </script><!-- END Element 8 Type: 1-->
        
        <!-- START Element 9 Type: 1-->
        
        <div class="col-sm-4" id="wrap9" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><p style="text-align: left; font-size: larger;"><b><span style="background-color: rgba(223, 240, 216, 0);">Round 5:</span></b></p><p style=""><span style="background-color: rgba(223, 240, 216, 0);"></span></p><table style="font-size: larger; text-align: left;"><tbody><tr><td>Invested by <i>The Investor</i>:</td><td style="text-align: right; "><script>document.write(transfer5)</script> coins</td></tr><tr><td style="text-align: left;">Tripled to:</td><td style="text-align: right;"><script>document.write(tripledAmount5)</script> coins</td></tr><tr><td style="text-align: left;">Returned by you:</td><td style="text-align: right; "><script>document.write(returned5)</script> coins</td></tr><tr><td><br></td><td><br></td></tr><tr><td><b style=""><i style="">The Investor&#039;s</i>&nbsp;total after Round 5:</b></td><td style="text-align: right; "><b style="">&nbsp; &nbsp; &nbsp;<script>document.write(investorRound5)</script> coins</b></td></tr><tr><td><b style="color: rgb(247, 150, 70);">Your total after Round 5:</b></td><td style="text-align: right; "><b style="color: rgb(247, 150, 70);">&nbsp; &nbsp; &nbsp;<script>document.write(dealerRound5)</script> coins</b></td></tr></tbody></table><br></div>
        </div><script>if((role==2)) { $('#wrap9').show(); } </script><!-- END Element 9 Type: 1-->
        
        <!-- START Element 10 Type: 1-->
        
        <div class="col-sm-4" id="wrap10" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><p style="text-align: left; font-size: larger;"><b><span style="background-color: rgba(223, 240, 216, 0);">Round 6:</span></b></p><p style=""><span style="background-color: rgba(223, 240, 216, 0);"></span></p><table style="font-size: larger; text-align: left;"><tbody><tr><td>Invested by <i>The Investor</i>:</td><td style="text-align: right; "><script>document.write(transfer6)</script> coins</td></tr><tr><td style="text-align: left;">Tripled to:</td><td style="text-align: right;"><script>document.write(tripledAmount6)</script> coins</td></tr><tr><td style="text-align: left;">Returned by you:</td><td style="text-align: right; "><script>document.write(returned6)</script> coins</td></tr><tr><td><br></td><td><br></td></tr><tr><td><b style=""><i>The Investor&#039;s&nbsp;</i>total after Round 6:</b></td><td style="text-align: right; "><b style="">&nbsp; &nbsp; &nbsp;<script>document.write(investorRound6)</script> coins</b></td></tr><tr><td><b style="color: rgb(247, 150, 70);">Your total after Round 6:</b></td><td style="text-align: right; "><b style="color: rgb(247, 150, 70);">&nbsp; &nbsp; &nbsp;<script>document.write(dealerRound6)</script> coins</b></td></tr></tbody></table><br></div>
        </div><script>if((role==2)) { $('#wrap10').show(); } </script><!-- END Element 10 Type: 1-->
        
        <!-- START Element 11 Type: 1-->
        
        <div class="col-sm-12" id="wrap11" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: left;"><br></h3>
<p style=""><span style="font-size: 16.8px;"><b>Your final score is: <script>document.write(player1Total)</script><br></b></span><b style="font-size: 16.8px; background-color: rgba(223, 240, 216, 0);">Your partner&#039;s final score is: <script>document.write(player2Total)</script></b></p>
<p style="font-size: larger;"><b style="color: rgb(247, 150, 70);">You will be redirected to Prolific in one minute.</b></p><p style="font-size: larger;"><b style="">Please stay in the loop in order to receive your study compensation.</b></p></div>
        </div><script>if((role==2)) { $('#wrap11').show(); } </script><!-- END Element 11 Type: 1-->
        
        </div><script>setInterval(function(){ if (true) $('#wrap3').show();if (!(true)) $('#wrap3').hide();if (role==1) $('#wrap4').show();if (!(role==1)) $('#wrap4').hide();if (role==1) $('#wrap5').show();if (!(role==1)) $('#wrap5').hide();if (role==1) $('#wrap6').show();if (!(role==1)) $('#wrap6').hide();if (role==1) $('#wrap7').show();if (!(role==1)) $('#wrap7').hide();if (role==2) $('#wrap8').show();if (!(role==2)) $('#wrap8').hide();if (role==2) $('#wrap9').show();if (!(role==2)) $('#wrap9').hide();if (role==2) $('#wrap10').show();if (!(role==2)) $('#wrap10').hide();if (role==2) $('#wrap11').show();if (!(role==2)) $('#wrap11').hide(); }, 100);</script><script>countdownTimer(TimeOut, 'stage412374.php?session_index=<?php echo $_SESSION[sessionID];?>',true);</script></form></div></div></body></html>