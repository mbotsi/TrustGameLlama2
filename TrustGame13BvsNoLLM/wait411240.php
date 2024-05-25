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
        var $_GET = <?php echo json_encode($_GET); ?>;
        var defNext = 411241;
        var nextPageLoop;
        if (parseInt(loopEnd)==411240) {nextPageLoop='stage'+loopStart.toString()+'.php?session_index=<?php echo $_SESSION[sessionID];?>';}
        else {nextPageLoop=null;}

        if ($_GET.next!=null) defNext=$_GET.next;

        checkReady('stage'+defNext.toString()+'.php?session_index=<?php echo $_SESSION[sessionID];?>', nextPageLoop);
        </script>
        </head><body><div id="mainwrap" class="container" style="width: 100%; padding-left: 5%; padding-right: 5%; padding-top: 1%;"><form autocomplete="off"><div style="padding-top: 20px"><div class="row"><!-- START Element 1 Type: 19-->
        
        
        <script>if (role!=1) skipStage();

// Dropout because partner left  
var currentGroupSize = getValue('core', 'playerNr='+playerNr, 'currentGroupSize'); 
var groupSize = 2; 
console.log(groupSize);
console.log(currentGroupSize);

if (currentGroupSize < groupSize) {
    let currentUrl = window.location.href;
    let newUrl = currentUrl.replace(/wait\d+\.php/i, "stage411245.php");
    window.location.href = newUrl;
}</script><!-- END Element 1 Type: 19-->
        
        <!-- START Element 2 Type: 19-->
        
        
        <script>var transfer6 = getValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'transfer6'); // NEWSUBJECTNR SWITCHED ROLES 
var tripledAmount6 = transfer6 * 3;

var initialCredit = getValue('initialCredit'); 
var investorKept6 = initialCredit - transfer6;</script><!-- END Element 2 Type: 19-->
        
        <!-- START Element 3 Type: 19-->
        
        
        <script>// Redirect to next stage because nothing was invested; starting from waiting stage 
if (transfer6 == 0) {
    setTimeout(function() {
        let currentUrl = window.location.href;
        let newUrl = currentUrl.replace(/wait\d+\.php/i, "stage411241.php");
        window.location.href = newUrl;
    }, 20000);
}</script><!-- END Element 3 Type: 19-->
        
        <!-- START Element 4 Type: 1-->
        
        <div class="col-sm-6" id="wrap4" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<div style="text-align: left;">
<h1 style="text-align: right; ">Part 2 | Round 3 of 3: The second part of the game is over.</h1>
<p style="text-align: right; font-size: larger;">
You have <b>not invested any coins </b>in this round. </p> 
<p style="text-align: right; font-size: larger;">
There is no amount to be tripled. This was the last round of Part 2.</p>
<p style="text-align: right; font-size: larger;">
In 20 seconds, you will be automatically re-directed to the final Questionnaire.<br></p>
</div></div>
        </div><script>if((role!=2 && transfer6 == 0)) { $('#wrap4').show(); } </script><!-- END Element 4 Type: 1-->
        
        <!-- START Element 5 Type: 1-->
        
        <div class="col-sm-6" id="wrap5" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<div style="text-align: left;">
<h1 style="text-align: right;">Part 2 | Round 3 of 3: Please wait.</h1>
<p style="text-align: right; font-size: larger;">Thanks for <b>investing <script>document.write(transfer6)</script> coins.&nbsp;</b></p><p style="text-align: right; font-size: larger;">Your investment has now been <b>tripled to <script>document.write(tripledAmount6)</script> coins and added to the shared pot.</b></p><p style="text-align: right; font-size: larger;">Please wait until <i>The Dealer</i> has made their decision on <b>how to distribute the money from the shared pot.</b></p>
<p style="text-align: right; font-size: larger;"><b>For now, you have <script>document.write(investorKept6)</script> coins left in this round.</b></p>
</div></div>
        </div><script>if((role!=2 && transfer6 > 0 && transfer6 != 1)) { $('#wrap5').show(); } </script><!-- END Element 5 Type: 1-->
        
        <!-- START Element 6 Type: 1-->
        
        <div class="col-sm-6" id="wrap6" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<div style="text-align: left;">
<h1 style="text-align: right; ">Part 2 | Round 3 of 3: Please wait.</h1>
<p style="text-align: right; font-size: larger;">Thanks for <b>investing <script>document.write(transfer6)</script> coin.&nbsp;</b></p><p style="text-align: right; font-size: larger;">Your investment has now been <b>tripled to <script>document.write(tripledAmount6)</script> coins and added to the shared pot.</b></p>
<p style="text-align: right; font-size: larger;">Please wait until <i>The Dealer</i> has made their decision on <b>how to distribute the money from the shared pot.</b></p>
<p style="text-align: right; font-size: larger;"><b>For now, you have <script>document.write(investorKept6)</script> coins left in this round.</b></p>
</div></div>
        </div><script>if((role!=2 && transfer6 == 1)) { $('#wrap6').show(); } </script><!-- END Element 6 Type: 1-->
        
        <!-- START Element 7 Type: 1-->
        
        <div class="col-sm-6" id="wrap7" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><iframe src="https://trust-game.com/Snake/snake.html" frameborder="0" width="450" height="450"></iframe>
<p>While waiting, you can play a game of Snake. <br>To play the game you need to click inside of the frame. <br>Use the arrows on your keyboard to navigate.</p></div>
        </div><script>if((role!=2 && transfer6 > 0)) { $('#wrap7').show(); } </script><!-- END Element 7 Type: 1-->
        
        <!-- START Element 9 Type: 1-->
        
        <div class="col-sm-12" id="wrap9" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: left;"><br></h3>
<p style="font-size: larger;"><span style="font-weight: bold;">
The game ends automatically, if <i>The Dealer</i> does not complete his task in 3 minutes.&nbsp;</span></p><p style="font-size: larger;">You will then be redirected automatically.</p></div>
        </div><script>if((role!=2 && transfer6 > 0)) { $('#wrap9').show(); } </script><!-- END Element 9 Type: 1-->
        
        </div><script>setInterval(function(){ if (role!=2 && transfer6 == 0) $('#wrap4').show();if (!(role!=2 && transfer6 == 0)) $('#wrap4').hide();if (role!=2 && transfer6 > 0 && transfer6 != 1) $('#wrap5').show();if (!(role!=2 && transfer6 > 0 && transfer6 != 1)) $('#wrap5').hide();if (role!=2 && transfer6 == 1) $('#wrap6').show();if (!(role!=2 && transfer6 == 1)) $('#wrap6').hide();if (role!=2 && transfer6 > 0) $('#wrap7').show();if (!(role!=2 && transfer6 > 0)) $('#wrap7').hide();if (role!=2 && transfer6 > 0) $('#wrap9').show();if (!(role!=2 && transfer6 > 0)) $('#wrap9').hide(); }, 100);</script></div></form></div></div></body></html>