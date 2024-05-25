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
        var defNext = 411231;
        var nextPageLoop;
        if (parseInt(loopEnd)==411230) {nextPageLoop='stage'+loopStart.toString()+'.php?session_index=<?php echo $_SESSION[sessionID];?>';}
        else {nextPageLoop=null;}

        if ($_GET.next!=null) defNext=$_GET.next;

        checkReady('stage'+defNext.toString()+'.php?session_index=<?php echo $_SESSION[sessionID];?>', nextPageLoop);
        </script>
        </head><body><div id="mainwrap" class="container" style="width: 100%; padding-left: 5%; padding-right: 5%; padding-top: 1%;"><form autocomplete="off"><div style="padding-top: 20px"><div class="row"><!-- START Element 1 Type: 19-->
        
        
        <script>if (role!=2) skipStage();

// What happened so far 
var initialCredit = getValue('initialCredit'); 
var transfer1 = getValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'transfer1');
var tripledAmount1 = transfer1 * 3;
var investorKept1 = initialCredit - transfer1;

// Retrieve returned1 amount using getValue but defining the subjectNr to specify the returned1 from The Dealer with role = 2 and subjectNr = 2 from the first round 
var returned1 = getValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'returned1');

// Calculate what The Dealer kept to himself 
var dealerKept1 = tripledAmount1 - returned1; 
var dealerRound1 = 10 + dealerKept1;</script><!-- END Element 1 Type: 19-->
        
        <!-- START Element 2 Type: 19-->
        
        
        <script>// Dropout because partner left  
var currentGroupSize = getValue('core', 'playerNr='+playerNr, 'currentGroupSize'); 
var groupSize = 2; 
console.log(groupSize);
console.log(currentGroupSize);

if (currentGroupSize < groupSize) {
    let currentUrl = window.location.href;
    let newUrl = currentUrl.replace(/wait\d+\.php/i, "stage411245.php");
    window.location.href = newUrl;
}</script><!-- END Element 2 Type: 19-->
        
        <!-- START Element 3 Type: 1-->
        
        <div class="col-sm-6" id="wrap3" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<div style="text-align: left;">
<h1 style="text-align: right; ">Part 1 | Round 2 of 3: Please wait.</h1>
<p style="text-align: right; font-size: larger;">You are still in the role of <i>The Dealer</i>.</p><p style="text-align: right; font-size: larger;">In the last round, you returned <script>document.write(returned1)</script> out of <script>document.write(tripledAmount1)</script> coins to you and kept <script>document.write(dealerKept1)</script> coins.</p><p style="text-align: right; font-size: larger;">Your total in Round 1 was <script>document.write(dealerRound1)</script> coins, including your 10 coins starting credit.</p><p style="text-align: right; font-size: larger;"><span style="font-weight: bold;">Please wait until <i>The Investor</i> has made their decision on how much to invest into the shared pot in Round 2.</span></p><p style="text-align: right; font-size: larger;">
The invested amount will then be tripled automatically.&nbsp;</p><p style="text-align: right; font-size: larger;">You can then split it as you like between you and <i>The Investor.<br></i></p>
</div></div>
        </div><script>if((role!=1)) { $('#wrap3').show(); } </script><!-- END Element 3 Type: 1-->
        
        <!-- START Element 4 Type: 1-->
        
        <div class="col-sm-6" id="wrap4" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><iframe src="https://trust-game.com/Snake/snake.html" frameborder="0" width="450" height="450"></iframe>
<p>While waiting, you can play a game of Snake. <br>To play the game you need to click inside of the frame. <br>Use the arrows on your keyboard to navigate.</p></div>
        </div><script>if((role!=1)) { $('#wrap4').show(); } </script><!-- END Element 4 Type: 1-->
        
        <!-- START Element 6 Type: 1-->
        
        <div class="col-sm-12" id="wrap6" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: left;"><br></h3>
<p style="font-size: larger;"><span style="font-weight: bold;">
The game ends automatically, if <i>The Investor</i> does not complete his task in 3 minutes.&nbsp;</span></p><p style="font-size: larger;">You will then be redirected automatically.</p></div>
        </div><script>if((role!=1)) { $('#wrap6').show(); } </script><!-- END Element 6 Type: 1-->
        
        </div><script>setInterval(function(){ if (role!=1) $('#wrap3').show();if (!(role!=1)) $('#wrap3').hide();if (role!=1) $('#wrap4').show();if (!(role!=1)) $('#wrap4').hide();if (role!=1) $('#wrap6').show();if (!(role!=1)) $('#wrap6').hide(); }, 100);</script></div></form></div></div></body></html>