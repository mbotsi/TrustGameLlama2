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
        var defNext = 411236;
        var nextPageLoop;
        if (parseInt(loopEnd)==411235) {nextPageLoop='stage'+loopStart.toString()+'.php?session_index=<?php echo $_SESSION[sessionID];?>';}
        else {nextPageLoop=null;}

        if ($_GET.next!=null) defNext=$_GET.next;

        checkReady('stage'+defNext.toString()+'.php?session_index=<?php echo $_SESSION[sessionID];?>', nextPageLoop);
        </script>
        </head><body><div id="mainwrap" class="container" style="width: 100%; padding-left: 5%; padding-right: 5%; padding-top: 1%;"><form autocomplete="off"><div style="padding-top: 20px"><div class="row"><!-- START Element 1 Type: 19-->
        
        
        <script>if (role!=2) skipStage();

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
        
        <!-- START Element 2 Type: 1-->
        
        <div class="col-sm-6" id="wrap2" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<div style="text-align: left;">
  <h1 style="text-align: right; ">Part 2 | Round 1 of 3: Please wait.</h1>
  <p style="text-align: right; font-size: larger;">You have been randomly assigned the role of <i>The Dealer</i>.</p>
  <p style="text-align: right; font-size: larger;"><span style="font-weight: bold;">Please wait until <i>The Investor</i> has made their decision on how much to invest.</span></p>
  <p style="text-align: right; font-size: larger;">The invested amount will be tripled automatically.&nbsp;</p><p style="text-align: right; font-size: larger;">You can then split it as you like between you and <i>The Investor.</i></p>
</div></div>
        </div><script>if((role!=1)) { $('#wrap2').show(); } </script><!-- END Element 2 Type: 1-->
        
        <!-- START Element 3 Type: 1-->
        
        <div class="col-sm-6" id="wrap3" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><iframe src="https://trust-game.com/Snake/snake.html" frameborder="0" width="450" height="450"></iframe>
<p>While waiting, you can play a game of Snake.&nbsp;<br><span style="background-color: rgba(223, 240, 216, 0);">To play the game you need to click inside of the frame.<br>Use the arrows on your keyboard to navigate.</span></p></div>
        </div><script>if((role!=1)) { $('#wrap3').show(); } </script><!-- END Element 3 Type: 1-->
        
        <!-- START Element 5 Type: 1-->
        
        <div class="col-sm-12" id="wrap5" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: left;"><br></h3>
<p style="font-size: larger;"><span style="font-weight: bold;">
The game ends automatically, if <i>The Investor</i> does not complete his task in 3 minutes.&nbsp;</span></p><p style="font-size: larger;">You will then be redirected automatically.</p></div>
        </div><script>if((role!=1)) { $('#wrap5').show(); } </script><!-- END Element 5 Type: 1-->
        
        </div><script>setInterval(function(){ if (role!=1) $('#wrap2').show();if (!(role!=1)) $('#wrap2').hide();if (role!=1) $('#wrap3').show();if (!(role!=1)) $('#wrap3').hide();if (role!=1) $('#wrap5').show();if (!(role!=1)) $('#wrap5').hide(); }, 100);</script></div></form></div></div></body></html>