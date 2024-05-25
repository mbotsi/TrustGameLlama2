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
}</style><title>Instructions | 1/3</title>

        <script> var v={}; var wronganswers={}; var totalwronganswers={};var maxFalse = null;
        var firstStageExp = <?php echo json_encode(FIRSTPAGE . ".php"); ?>;
        var thisPage = <?php echo json_encode($thisPage); ?>;
        var sessionIndexJavascript = "<?php echo $_SESSION[sessionID];?>";
        pageRefreshed=0;
        var loopBegin = "stage" + loopStart + ".php";
        var afterLoopEnd = 411223;
        if (thisPage == firstStageExp || (thisPage==loopBegin && period > 1) || loopEnd==afterLoopEnd) firstStage();
        /* if (thisPage == firstStageExp || thisPage==loopBegin || loopEnd==afterLoopEnd) firstStage(); */
        TimeOut=null;
        function skipStage(proceedifpossible) {
         if (proceedifpossible === undefined) proceedifpossible = false;
         if (proceedifpossible) location.replace('stage411225.php?session_index=<?php echo $_SESSION[sessionID];?>');
         else location.replace('wait411224.php?session_index=<?php echo $_SESSION[sessionID];?>');
        }
        $(document).ready(function(){
        if (bot) { document.getElementsByClassName("buttonclick")[0].click(); }
        });
        
        </script>
        </head><body><div id="mainwrap" class="container" style="width: 100%; padding-left: 5%; padding-right: 5%; padding-top: 1%;"><form autocomplete="off"><div class="row"><!-- START Element 1 Type: 1-->
        
        <div class="col-sm-4" id="wrap1" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: right;"><br></h3>
<img src="https://trust-game.com/user.png" alt="Bot" width="350" height="350">
<h3 style="text-align: right;"><br></h3></div>
        </div><script>if((true)) { $('#wrap1').show(); } </script><!-- END Element 1 Type: 1-->
        
        <!-- START Element 2 Type: 1-->
        
        <div class="col-sm-6" id="wrap2" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<div style="text-align: left;">
  <h1>The Trust Game: Instructions | 1/3</h1>
  <p></p><span style="font-size: larger; background-color: rgba(223, 240, 216, 0);">You will </span><strong style="font-size: larger; background-color: rgba(223, 240, 216, 0);">interact with one other player.</strong><br><p></p>
  
  <p style="font-size: larger;">There are two possible roles in this game: <i>The Investor</i> and <i>The Dealer.</i> <br>Your role will be <strong>assigned to you randomly</strong> in the beginning of the game.</p>
  <p style="font-size: larger; padding-left: 30px;"><strong style="color: rgb(247, 150, 70);">Part 1:</strong> Your role will be set for 3 rounds.<br><strong style="color: rgb(247, 150, 70);">Part 2:</strong> You switch roles with your partner to play another 3 rounds.</p>
  <p style="font-size: larger;">The switch will happen automatically. <br><strong><u>You cannot choose or change your role.</u></strong></p>
</div></div>
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
            if (loopEnd==411224) { showNext('wait411224.php?session_index=<?php echo $_SESSION[sessionID];?>',411225,411224);}
            else {showNext('stage411225.php?session_index=<?php echo $_SESSION[sessionID];?>',411225,411224);}

            };</script></div><script>if((true)) { $('#wrap3').show(); $('#buttonclick3').addClass('buttonclick');} </script><!-- END Element 3 Type: 18-->
        
        </div><script>setInterval(function(){ if (true) $('#wrap1').show();if (!(true)) $('#wrap1').hide();if (true) $('#wrap2').show();if (!(true)) $('#wrap2').hide();if (true) $('#wrap3').show();if (!(true)) $('#wrap3').hide(); }, 100);</script></form></div></div></body></html>