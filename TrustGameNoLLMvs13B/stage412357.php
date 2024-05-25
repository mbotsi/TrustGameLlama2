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
}</style><title>Instructions | 3/3</title>

        <script> var v={}; var wronganswers={}; var totalwronganswers={};var maxFalse = null;
        var firstStageExp = <?php echo json_encode(FIRSTPAGE . ".php"); ?>;
        var thisPage = <?php echo json_encode($thisPage); ?>;
        var sessionIndexJavascript = "<?php echo $_SESSION[sessionID];?>";
        pageRefreshed=0;
        var loopBegin = "stage" + loopStart + ".php";
        var afterLoopEnd = 412356;
        if (thisPage == firstStageExp || (thisPage==loopBegin && period > 1) || loopEnd==afterLoopEnd) firstStage();
        /* if (thisPage == firstStageExp || thisPage==loopBegin || loopEnd==afterLoopEnd) firstStage(); */
        TimeOut=null;
        function skipStage(proceedifpossible) {
         if (proceedifpossible === undefined) proceedifpossible = false;
         if (proceedifpossible) location.replace('stage412358.php?session_index=<?php echo $_SESSION[sessionID];?>');
         else location.replace('wait412357.php?session_index=<?php echo $_SESSION[sessionID];?>');
        }
        $(document).ready(function(){
        if (bot) { document.getElementsByClassName("buttonclick")[0].click(); }
        });
        
        </script>
        </head><body><div id="mainwrap" class="container" style="width: 100%; padding-left: 5%; padding-right: 5%; padding-top: 1%;"><form autocomplete="off"><div class="row"><!-- START Element 1 Type: 1-->
        
        <div class="col-sm-4" id="wrap1" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<img src="https://trust-game.com/brain.png" alt="Bot" width="450" height="350">
<h3 style="text-align: right;"><br></h3></div>
        </div><script>if((role==1)) { $('#wrap1').show(); } </script><!-- END Element 1 Type: 1-->
        
        <!-- START Element 2 Type: 1-->
        
        <div class="col-sm-4" id="wrap2" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<img src="https://trust-game.com/bot.png" alt="Bot" width="350" height="350"></div>
        </div><script>if((role==2)) { $('#wrap2').show(); } </script><!-- END Element 2 Type: 1-->
        
        <!-- START Element 3 Type: 1-->
        
        <div class="col-sm-6" id="wrap3" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<div style="text-align: left;">
  <h1>The Trust Game: Instructions | 3/3</h1>
  <p style=""><span style="font-size: larger;">Chance has spoken, determining that <b style="color: rgb(247, 150, 70);">you will not receive any additional help from an AI chatbot assistant throughout the game.&nbsp;</b></span></p><p style=""><span style="background-color: rgba(223, 240, 216, 0); font-size: larger;">Your partner will have access to an AI assistant throughout the entire game. <br>They have been assigned the more powerful of the two possible AI assistants. <br>The use of the chatbot for your partner is optional.</span></p><p style=""><span style="font-size: larger; background-color: rgba(223, 240, 216, 0);">But no need to worry - <span style="font-weight: bold; color: rgb(247, 150, 70);">you&#039;ve got the skills to conquer this game!</span></span></p><p style=""><u style="font-size: larger; background-color: rgba(223, 240, 216, 0); font-weight: bold;">If you do not complete your task in time, the game will end automatically.</u><br></p></div><div style="text-align: left;">
  <p style=""><span style="font-size: larger;">What happens in the Trust Game, stays in the Trust Game.</span><span style="font-size: 16.8px;"><br></span><b style="font-size: larger; background-color: rgba(223, 240, 216, 0);">May the tokens be ever in your favor!</b></p></div>
<h3 style="text-align: right;"><br></h3></div>
        </div><script>if((role==1)) { $('#wrap3').show(); } </script><!-- END Element 3 Type: 1-->
        
        <!-- START Element 4 Type: 1-->
        
        <div class="col-sm-6" id="wrap4" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<div style="text-align: left;">
  <h1>The Trust Game: Instructions | 3/3</h1>
  <p style="font-size: larger;">Ready for some extra help? <b style="color: rgb(247, 150, 70);">Introducing your personal AI chatbot!</b></p>
  <ul style="font-size: larger;">
    <li>The AI chatbot use is optional. <b>Your partner will not have access to any AI chatbot assistant.</b></li>
    <li>Your <b>chatbot&#039;s abilities</b>&nbsp;<b>stay the same</b> independently of your current role.</li>
  </ul><p><b style="background-color: rgba(223, 240, 216, 0); font-size: larger;">Your chatbot&#039;s abilities:</b><br></p><ul style="font-size: larger;">
    <li>Enhanced language comprehension</li>
    <li>Common sense reasoning</li>
    <li><span style="font-weight: bold; color: rgb(247, 150, 70);">Twice as good in math </span><span style="font-weight: bold; color: rgb(247, 150, 70);">as the other AI chatbot that could have been assigned to you randomly&nbsp;</span></li>
  </ul><p><u style="font-size: larger; background-color: rgba(223, 240, 216, 0); font-weight: bold;">If you do not complete your task in time, the game will end automatically.</u><br></p>
  <p style=""><span style="font-size: larger;">What happens in the Trust Game, stays in the Trust Game.</span><span style="font-size: 16.8px;"><br></span><b style="font-size: larger; background-color: rgba(223, 240, 216, 0);">May the tokens be ever in your favor!</b></p>
</div>
<h3 style="text-align: right;"><br></h3></div>
        </div><script>if((role==2)) { $('#wrap4').show(); } </script><!-- END Element 4 Type: 1-->
        
        <!-- START Element 5 Type: 18-->
        
        <div class="col-sm-12" id="wrap5" style="display: none;">
        <script>
       
        
        </script>
        
        <div  id="button5">
        <div id="buttonclick5" class="lionessbutton btn btn-default btn-lg btn-block btn-warning" style=" white-space:normal !important; word-wrap: break-word;" onclick="
        $(this).hide(); $('#buttonload5').show();
        if (additionalCheck5()) {
            hideError5();
            if (checkEntries()) toNextPage5();
            else  { $(this).show(); 
            $('#buttonload5').hide(); }
        } else {
         $(this).show(); 
         $('#buttonload5').hide();
         }
        ">Let&#039;s play!</div><div id="buttonload5" style="width: 100%; text-align: center; display: none;"><img src="<?php echo PATH;?>basis/pic/buttonload.gif"></div><div id="field5_error" class="alert alert-danger" style="display: none; text-align: center;"></div><div id="field5_attempts" class="alert alert-warning" style="display: none; text-align: center;"><span class="attempts_text">Attempts left to answer the control questions</span>:&nbsp;<span id="field5_attempts_num"></span></div></div><script>if(maxFalse!=null) {
            var numFails=quizFail(playerNr,1);  
            $('#field5_attempts').show();
            $('#field5_attempts_num').html(maxFalse-numFails);
           
        }
        function showError5(text) {
            var errorfield= $('#field5_error');
            errorfield.show();
            errorfield.html(text);
        
        }
        
        function hideError5() {
            $('#field5_error').hide();
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
        
        function additionalCheck5() {

           return true;
        }

       



        function checkFail() {} function toNextPage5() {
            if (loopEnd==412357) { showNext('wait412357.php?session_index=<?php echo $_SESSION[sessionID];?>',412358,412357);}
            else {showNext('stage412358.php?session_index=<?php echo $_SESSION[sessionID];?>',412358,412357);}

            };</script></div><script>if((true)) { $('#wrap5').show(); $('#buttonclick5').addClass('buttonclick');} </script><!-- END Element 5 Type: 18-->
        
        </div><script>setInterval(function(){ if (role==1) $('#wrap1').show();if (!(role==1)) $('#wrap1').hide();if (role==2) $('#wrap2').show();if (!(role==2)) $('#wrap2').hide();if (role==1) $('#wrap3').show();if (!(role==1)) $('#wrap3').hide();if (role==2) $('#wrap4').show();if (!(role==2)) $('#wrap4').hide();if (true) $('#wrap5').show();if (!(true)) $('#wrap5').hide(); }, 100);</script></form></div></div></body></html>