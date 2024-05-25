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
}</style><title>Instructions | 2/3</title>

        <script> var v={}; var wronganswers={}; var totalwronganswers={};var maxFalse = null;
        var firstStageExp = <?php echo json_encode(FIRSTPAGE . ".php"); ?>;
        var thisPage = <?php echo json_encode($thisPage); ?>;
        var sessionIndexJavascript = "<?php echo $_SESSION[sessionID];?>";
        pageRefreshed=0;
        var loopBegin = "stage" + loopStart + ".php";
        var afterLoopEnd = 412355;
        if (thisPage == firstStageExp || (thisPage==loopBegin && period > 1) || loopEnd==afterLoopEnd) firstStage();
        /* if (thisPage == firstStageExp || thisPage==loopBegin || loopEnd==afterLoopEnd) firstStage(); */
        TimeOut=null;
        function skipStage(proceedifpossible) {
         if (proceedifpossible === undefined) proceedifpossible = false;
         if (proceedifpossible) location.replace('stage412357.php?session_index=<?php echo $_SESSION[sessionID];?>');
         else location.replace('wait412356.php?session_index=<?php echo $_SESSION[sessionID];?>');
        }
        $(document).ready(function(){
        if (bot) { document.getElementsByClassName("buttonclick")[0].click(); }
        });
        
        </script>
        </head><body><div id="mainwrap" class="container" style="width: 100%; padding-left: 5%; padding-right: 5%; padding-top: 1%;"><form autocomplete="off"><div class="row"><!-- START Element 1 Type: 1-->
        
        <div class="col-sm-4" id="wrap1" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h4 style="text-align: right;"><br></h4>
<h4 style="text-align: right;"><br></h4>
<h4 style="text-align: right;"><br></h4>
<img src="https://trust-game.com/money.png" alt="Bot" width="350" height="350"></div>
        </div><script>if((true)) { $('#wrap1').show(); } </script><!-- END Element 1 Type: 1-->
        
        <!-- START Element 2 Type: 1-->
        
        <div class="col-sm-6" id="wrap2" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<div style="text-align: left;">
  <h1>The Trust Game: Instructions | 2/3</h1>
  <p style=""><span style="font-size: larger;"><b>Each round follows the same pattern:</b></span><br></p>
  <p style="font-size: larger;">
    </p><ol style="font-size: larger;">
      <li>Both roles get a virtual starting credit of 10 coins.&nbsp;</li><li><i>The Investor</i>&nbsp;decides how much they want to <b style="color: rgb(247, 150, 70);">invest into a shared pot.&nbsp;</b><br></li>
      <li>The shared pot is <b style="color: rgb(247, 150, 70);">tripled automatically.</b></li>
      <li><i>The Dealer</i> can <b><span style="color: rgb(247, 150, 70);">keep and&nbsp;return as much of the tripled amount</span> </b>as they like.&nbsp;Their<i>&nbsp;</i>virtual starting credit remains untouched.</li>
    </ol>
  <p></p>
  <p style="font-size: larger;"><strong>As mentioned, after 3 rounds, roles will be swapped.&nbsp;</strong></p><p style="font-size: larger;"></p><strong style="font-size: larger; background-color: rgba(223, 240, 216, 0); color: rgb(247, 150, 70);">Your goal in this game is to maximize your earnings.&nbsp;<br></strong></div><div style="text-align: left;"><ul><li style="font-size: larger;"><strong>Earnings from each round are not transferred to the next round.</strong></li><li style="font-size: larger;"><strong></strong>They are summarized at the end of each Part 1 and 2 for your specific role.</li><li style="font-size: larger;"><span style="font-weight: bold;">Overall earnings are calculated at the end of the game for each player.&nbsp;&nbsp;</span></li></ul><p></p><ul style="font-size: larger;"><li>Transfers can only be made in full coins. Transferring 0 coins is also allowed.&nbsp;</li><li><span style="font-weight: bold;">Investing 0 coins&nbsp;naturally leads to no earnings for anyone in the round.</span></li><li>Returning 0 coins does not change anything in the game flow.</li></ul></div>
<h3 style="text-align: right;"><br></h3></div>
        </div><script>if((true)) { $('#wrap2').show(); } </script><!-- END Element 2 Type: 1-->
        
        <!-- START Element 3 Type: 18-->
        
        <div class="col-sm-12" id="wrap3" style="display: none;">
        <script>
       
        
        </script>
        
        <div  id="button3">
        <div id="buttonclick3" class="lionessbutton btn btn-default btn-lg btn-block btn-warning" style=" white-space:normal !important; word-wrap: break-word;" onclick="
        $(this).hide(); $('#buttonload3').show();
        if (additionalCheck3()) {
            hideError3();
            if (checkEntries()) toNextPage3();
            else  { $(this).show(); 
            $('#buttonload3').hide(); }
        } else {
         $(this).show(); 
         $('#buttonload3').hide();
         }
        ">Continue</div><div id="buttonload3" style="width: 100%; text-align: center; display: none;"><img src="<?php echo PATH;?>basis/pic/buttonload.gif"></div><div id="field3_error" class="alert alert-danger" style="display: none; text-align: center;"></div><div id="field3_attempts" class="alert alert-warning" style="display: none; text-align: center;"><span class="attempts_text">Attempts left to answer the control questions</span>:&nbsp;<span id="field3_attempts_num"></span></div></div><script>if(maxFalse!=null) {
            var numFails=quizFail(playerNr,1);  
            $('#field3_attempts').show();
            $('#field3_attempts_num').html(maxFalse-numFails);
           
        }
        function showError3(text) {
            var errorfield= $('#field3_error');
            errorfield.show();
            errorfield.html(text);
        
        }
        
        function hideError3() {
            $('#field3_error').hide();
        }
       
        
        

        if (typeof window.showNext === 'undefined') {
            window.showNext = function(url, nextstage, stageNr) {
                var timeRecName = "time_" + stageNr;
                var timeOnThisPage = getServerTime() - tStart;
                setValue(timeRecName, timeOnThisPage);
                location.replace(url); 
            }
        }


        

        var checker;
        
        function checkEntries() {
           checker=0;

            var numEntries = document.forms[0].length;
            var numValuesExpected=0;

            for (var i=0; i<numEntries; i++)
            {
                var name = "checkValue_" + document.forms[0][i].id;
                if (document.forms[0][i].id!="")
                {                   
                    fn = window[name]; /* this is a generic function calling the checker for the variable "name"  */
                    fnExists = typeof fn === "function";
                    if (fnExists) {
                        fn();
                        ++numValuesExpected;
                    }
                 };

            }
           if (checker==numValuesExpected) return true;
           else {
                checkFail();
                return false;
            }
        }
        
        function additionalCheck3() {

           return true;
        }

       



        function checkFail() {} function toNextPage3() {
            if (loopEnd==412356) { showNext('wait412356.php?session_index=<?php echo $_SESSION[sessionID];?>',412357,412356);}
            else {showNext('stage412357.php?session_index=<?php echo $_SESSION[sessionID];?>',412357,412356);}

            };</script></div><script>if((true)) { $('#wrap3').show(); $('#buttonclick3').addClass('buttonclick');} </script><!-- END Element 3 Type: 18-->
        
        </div><script>setInterval(function(){ if (true) $('#wrap1').show();if (!(true)) $('#wrap1').hide();if (true) $('#wrap2').show();if (!(true)) $('#wrap2').hide();if (true) $('#wrap3').show();if (!(true)) $('#wrap3').hide(); }, 100);</script></form></div></div></body></html>