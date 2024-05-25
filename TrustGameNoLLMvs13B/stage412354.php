<html>
        <head>
        
        <?php
    
        include("_projectID.php");
        include(PATH."basis/participant/header.php");
	    $_SESSION['projectID']=PROJECTID;
        $PROLIFIC_PID=$_GET['PROLIFIC_PID'];
	    
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
}</style><title>Welcome</title>

        <script> var v={}; var wronganswers={}; var totalwronganswers={};var maxFalse = null;
        var firstStageExp = <?php echo json_encode(FIRSTPAGE . ".php"); ?>;
        var thisPage = <?php echo json_encode($thisPage); ?>;
        var sessionIndexJavascript = "<?php echo $_SESSION[sessionID];?>";
        pageRefreshed=0;
        var loopBegin = "stage" + loopStart + ".php";
        var afterLoopEnd = null;
        if (thisPage == firstStageExp || (thisPage==loopBegin && period > 1) || loopEnd==afterLoopEnd) firstStage();
        /* if (thisPage == firstStageExp || thisPage==loopBegin || loopEnd==afterLoopEnd) firstStage(); */
        TimeOut=null;
        function skipStage(proceedifpossible) {
         if (proceedifpossible === undefined) proceedifpossible = false;
         if (proceedifpossible) location.replace('stage412355.php?session_index=<?php echo $_SESSION[sessionID]; ?>&PROLIFIC_PID=<?php echo $PROLIFIC_PID; ?>');
         else location.replace('wait412354.php?session_index=<?php echo $_SESSION[sessionID]; ?>&PROLIFIC_PID=<?php echo $PROLIFIC_PID; ?>');
        }
        $(document).ready(function(){
        if (bot) { document.getElementsByClassName("buttonclick")[0].click(); }
        });
        
        </script>
        </head><body><div id="mainwrap" class="container" style="width: 100%; padding-left: 5%; padding-right: 5%; padding-top: 1%;"><form autocomplete="off"><div class="row"><!-- START Element 1 Type: 19-->
        
        
        <script>//  Allocate alternating roles; roles cannot be strings, only integers
role = 1 + (playerNr-1) % 2; 

// Set the 'role' variable in the 'core' table
setValue('core', 'playerNr='+playerNr, 'role', role);

// Get the PROLIFIC PID from the URL parameters and save it as externalID in the session database 
url = window.location.href; 
result = /PROLIFIC_PID=([^&]+)/.exec(url)[1]; 
setValue('session', 'playerNr='+playerNr, 'externalID', result);</script><!-- END Element 1 Type: 19-->
        
        <!-- START Element 2 Type: 1-->
        
        <div class="col-sm-6" id="wrap2" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h4 style="text-align: right;"><br></h4>
<h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<h2 style="text-align: right;"><b>Welcome to The Trust Game!</b></h2>
<p style="text-align: right; font-size: larger;">Let&#039;s play, shall we?</p></div>
        </div><script>if((true)) { $('#wrap2').show(); } </script><!-- END Element 2 Type: 1-->
        
        <!-- START Element 3 Type: 1-->
        
        <div class="col-sm-6" id="wrap3" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><p></p>
<img src="https://trust-game.com/llama2.png" alt="Llama" width="400" height="400">
<p></p></div>
        </div><script>if((true)) { $('#wrap3').show(); } </script><!-- END Element 3 Type: 1-->
        
        <!-- START Element 4 Type: 18-->
        
        <div class="col-sm-12" id="wrap4" style="display: none;">
        <script>
       
        
        </script>
        
        <div  id="button4">
        <div id="buttonclick4" class="lionessbutton btn btn-default btn-lg btn-block btn-warning" style=" white-space:normal !important; word-wrap: break-word;" onclick="
        $(this).hide(); $('#buttonload4').show();
        if (additionalCheck4()) {
            hideError4();
            if (checkEntries()) toNextPage4();
            else  { $(this).show(); 
            $('#buttonload4').hide(); }
        } else {
         $(this).show(); 
         $('#buttonload4').hide();
         }
        ">Click here to read the instructions</div><div id="buttonload4" style="width: 100%; text-align: center; display: none;"><img src="<?php echo PATH;?>basis/pic/buttonload.gif"></div><div id="field4_error" class="alert alert-danger" style="display: none; text-align: center;"></div><div id="field4_attempts" class="alert alert-warning" style="display: none; text-align: center;"><span class="attempts_text">Attempts left to answer the control questions</span>:&nbsp;<span id="field4_attempts_num"></span></div></div><script>if(maxFalse!=null) {
            var numFails=quizFail(playerNr,1);  
            $('#field4_attempts').show();
            $('#field4_attempts_num').html(maxFalse-numFails);
           
        }
        function showError4(text) {
            var errorfield= $('#field4_error');
            errorfield.show();
            errorfield.html(text);
        
        }
        
        function hideError4() {
            $('#field4_error').hide();
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
        
        function additionalCheck4() {

           return true;
        }

       



        function checkFail() {} function toNextPage4() {
            if (loopEnd==412354) { showNext('wait412354.php?session_index=<?php echo $_SESSION[sessionID];?>',412355,412354);}
            else {showNext('stage412355.php?session_index=<?php echo $_SESSION[sessionID];?>',412355,412354);}

            };</script></div><script>if((true)) { $('#wrap4').show(); $('#buttonclick4').addClass('buttonclick');} </script><!-- END Element 4 Type: 18-->
        
        </div><script>setInterval(function(){ if (true) $('#wrap2').show();if (!(true)) $('#wrap2').hide();if (true) $('#wrap3').show();if (!(true)) $('#wrap3').hide();if (true) $('#wrap4').show();if (!(true)) $('#wrap4').hide(); }, 100);</script></form></div></div></body></html>