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
}</style><title>Part 1 Round 1: Investor&#039;s Turn</title>

        <script> var v={}; var wronganswers={}; var totalwronganswers={};var maxFalse = null;
        var firstStageExp = <?php echo json_encode(FIRSTPAGE . ".php"); ?>;
        var thisPage = <?php echo json_encode($thisPage); ?>;
        var sessionIndexJavascript = "<?php echo $_SESSION[sessionID];?>";
        pageRefreshed=0;
        var loopBegin = "stage" + loopStart + ".php";
        var afterLoopEnd = 411227;
        if (thisPage == firstStageExp || (thisPage==loopBegin && period > 1) || loopEnd==afterLoopEnd) firstStage();
        /* if (thisPage == firstStageExp || thisPage==loopBegin || loopEnd==afterLoopEnd) firstStage(); */
        TimeOut=180;
        function skipStage(proceedifpossible) {
         if (proceedifpossible === undefined) proceedifpossible = false;
         if (proceedifpossible) location.replace('stage411229.php?session_index=<?php echo $_SESSION[sessionID];?>');
         else location.replace('wait411228.php?session_index=<?php echo $_SESSION[sessionID];?>');
        }
        $(document).ready(function(){
        if (bot) { document.getElementsByClassName("buttonclick")[0].click(); }
        });
        
        </script>
        </head><body><div id="mainwrap" class="container" style="width: 100%; padding-left: 5%; padding-right: 5%; padding-top: 1%;"><form autocomplete="off"><div class="row"><!-- START Element 1 Type: 19-->
        
        
        <script>// Dropout because partner left  
var currentGroupSize = getValue('core', 'playerNr='+playerNr, 'currentGroupSize'); 
var groupSize = 2; 
console.log(groupSize);
console.log(currentGroupSize);

if (currentGroupSize < groupSize) {
    let currentUrl = window.location.href;
    let newUrl = currentUrl.replace(/stage\d+\.php/i, "stage411245.php");
    window.location.href = newUrl;
}</script><!-- END Element 1 Type: 19-->
        
        <!-- START Element 2 Type: 19-->
        
        
        <script>if (role!=1) skipStage();

// Set the initial credit
initialCredit = 10;

// Record the initial credit for the current player in the current group in the decisions table
record('initialCredit', initialCredit); 
setValue('decisions','subjectNr=1 and subjectNr=2 and groupNr='+groupNr,'initialCredit', initialCredit);

var part = 1; 
record('part', part); 
setValue('decisions', 'subjectNr=1 and subjectNr=2 and groupNr='+groupNr, 'part', part);</script><!-- END Element 2 Type: 19-->
        
        <!-- START Element 3 Type: 19-->
        
        
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
}

// URL PARAMETER QUERY STRING 
const pathname = window.location.pathname; // grab path name 

var divide_pathname = pathname.split('/'); // divide pathname into parts 
var stage = divide_pathname.pop() || divide_pathname.pop();  // get last segment, handle potential trailing slash

const newQueryString = stage + '_' + externalID; 
record('newQueryString', newQueryString); 
setValue('decisions', 'playerNr='+playerNr, 'newQueryString', newQueryString);
console.log(newQueryString); 

function buildUrl(url, parameters){
  var qs = "";
  for(var key in parameters) {
    var value = parameters[key];
    qs += encodeURIComponent(key) + "=" + encodeURIComponent(value) + "&";
  }
  if (qs.length > 0){
    qs = qs.substring(0, qs.length-1); //chop off last "&"
    url = url + "?" + qs;
  }
  return url;
}

window.onload = function() {
    var url = "https://botsi-trust-game-llama-2-13b-chat.hf.space"; 
    var parameters = {PROLIFIC_PID: externalID, stage};
    var newUrl = buildUrl(url, parameters);
    // Find the parent div with id="wrap6"
    var wrap6Div = document.getElementById("wrap6");
    // Find the child div with class="btnbox2 paddlr"
    var btnboxDiv = wrap6Div.querySelector('.btnbox2.paddlr');
    // Find the nested iframe within the btnboxDiv
    var iframeElement = btnboxDiv.querySelector('iframe');
    // Update the src attribute of the iframe with the new URL
    iframeElement.setAttribute('src', newUrl);
};</script><!-- END Element 3 Type: 19-->
        
        <!-- START Element 4 Type: 19-->
        
        
        <script>// Dropout because time is up and timer in LIONESS is not working 
// Wait for 3 minutes 10 seconds (3170 milliseconds x 60) and then redirect to no compensation due to dropout in Prolific 
setTimeout(function() {
    window.location.href = "https://app.prolific.com/submissions/complete?cc=CC6I7R7J";
}, 3170 * 60);</script><!-- END Element 4 Type: 19-->
        
        <!-- START Element 5 Type: 1-->
        
        <div class="col-sm-4" id="wrap5" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<div style="text-align: left;">
<h1 style="text-align: right;">Part 1 | Round 1 of 3: Your turn!</h1>
<p style="text-align: right; font-size: larger;">You have been randomly assigned the role of <i>The Investor.</i></p>
<p style="text-align: right; font-size: larger;"><b>How much money do you want to invest to the shared pot?</b></p>
<p style="text-align: right; font-size: larger;">The invested amount will be tripled automatically.</p>
<p style="text-align: right; font-size: larger;"><i>The Dealer</i> decides how this tripled amount will be split among the two of you.</p>
</div></div>
        </div><script>if((role==1)) { $('#wrap5').show(); } </script><!-- END Element 5 Type: 1-->
        
        <!-- START Element 6 Type: 1-->
        
        <div class="col-sm-6" id="wrap6" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: right;"><br></h3>
<p style="text-align: right; margin-right: 100px;"><iframe src="https://botsi-trust-game-llama-2-13b-chat.hf.space" frameborder="0" width="1050" height="550" style="background-color: rgba(223, 240, 216, 0);"></iframe></p></div>
        </div><script>if((role==1)) { $('#wrap6').show(); } </script><!-- END Element 6 Type: 1-->
        
        <!-- START Element 7 Type: 20-->
        
        <div class="col-sm-12" id="wrap7" style="display: none;"><div class="btnbox2"  style="vertical-align: middle;"><div class="form-group btnbox2 form-inline"><label style="margin-right: 15px" for="field7"><p style="font-size: larger;">You can invest&nbsp;<b style="color: rgb(247, 150, 70);">up to 10 coins.</b></p></label><input name="7" id="field7"

                            type="text"

                            size="10"

                            maxlength="10"

                            max="10"

                            step="0"

                            value=""
                            
                            onchange="transfer1=parseFloat(this.value);"
                            class="form-control input-lg" style="text-align: center;"><div id="field7_minmax" class=" messagefield7 alert alert-danger" style="display: none;">Please enter a number between 0 and 10.</div><div id="field7_noNumber" class="messagefield7 alert alert-danger" style="display: none;">Please enter a number. </div><div id="field7_tooManyDigits" class="messagefield7 alert alert-danger" style="display: none;">You entered too many digits.</div><div id="field7_notcorrect" class="messagefield7 alert alert-danger" style="display: none;">The value you entered is not correct.</div><script>var transfer1=null;function checkValue_field7() {
           var label="transfer1";var min=0;var max=10;var digits=0;var correct=null;var required=1;var inline=1;var label1=null;var label2=null;
            if(!(role==1)) { checker=checker+1; } else {
            
                var value;
                if (bot) { 
                    if (correct != null) { value = correct; }
                    else if (typeof bot_transfer1 !== 'undefined') { value=bot_transfer1; }
                    else { value=Math.floor(Math.random()*max)+min; }
                    value=parseFloat(value);
                }
                else {
                value=($('#field7').val()).trim(); 
                }
                
                $('.messagefield7').hide();
                
                
                
                var allcorrect=checker+1;
                
                /* check if any entry has been made */
                if ((isNaN(value) || value === "") && required==1) {
                    $('#field7_noNumber').show();
                    
                }
                else if (isNaN(value)) {
                    $('#field7_noNumber').show();
                    
                }
                else {
                  


                    var digs = 0;
                    if (value % 1 !==0 && typeof value != undefined) {
                        var testvalue=value.toString();
                        digs = testvalue.split(".")[1].length;
                    }
                    if (digs>digits){ $('#field7_tooManyDigits').show(); }
                    else {
                        if (value>max || value < min) {
                            $('#field7_minmax').show();
                           
                        }
                        else { 

                        if (value!=correct && correct != null && required!=0) {
                           
                           
                            $('#field7_notcorrect').show();
                        } else {


                            record("transfer1", value);

                           checker = checker+1;
                       }
                       }
                   }
               }
               if (allcorrect!=checker) {
                  wronganswers['transfer1']=1;
                  totalwronganswers['transfer1'] = isNaN(totalwronganswers['transfer1']) ? 1 : totalwronganswers['transfer1']+1; 
                } else wronganswers['transfer1']=0;
            }

}

        </script></div></div></div><script>if((role==1)) { $('#wrap7').show(); } </script><!-- END Element 7 Type: 20-->
        
        <!-- START Element 8 Type: 18-->
        
        <div class="col-sm-12" id="wrap8" style="display: none;">
        <script>
       
        
        </script>
        
        <div  id="button8">
        <div id="buttonclick8" class="lionessbutton btn btn-default btn-lg btn-block btn-warning" style=" white-space:normal !important; word-wrap: break-word;" onclick="
        $(this).hide(); $('#buttonload8').show();
        if (additionalCheck8()) {
            hideError8();
            if (checkEntries()) toNextPage8();
            else  { $(this).show(); 
            $('#buttonload8').hide(); }
        } else {
         $(this).show(); 
         $('#buttonload8').hide();
         }
        ">Continue</div><div id="buttonload8" style="width: 100%; text-align: center; display: none;"><img src="<?php echo PATH;?>basis/pic/buttonload.gif"></div><div id="field8_error" class="alert alert-danger" style="display: none; text-align: center;"></div><div id="field8_attempts" class="alert alert-warning" style="display: none; text-align: center;"><span class="attempts_text">Attempts left to answer the control questions</span>:&nbsp;<span id="field8_attempts_num"></span></div></div><script>if(maxFalse!=null) {
            var numFails=quizFail(playerNr,1);  
            $('#field8_attempts').show();
            $('#field8_attempts_num').html(maxFalse-numFails);
           
        }
        function showError8(text) {
            var errorfield= $('#field8_error');
            errorfield.show();
            errorfield.html(text);
        
        }
        
        function hideError8() {
            $('#field8_error').hide();
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
        
        function additionalCheck8() {

           return true;
        }

       



        function checkFail() {}function toNextPage8() {showNext('wait411228.php?session_index=<?php echo $_SESSION[sessionID];?>&next=411229&jump=0',411229,411228)}</script></div><script>if((role==1)) { $('#wrap8').show(); $('#buttonclick8').addClass('buttonclick');} </script><!-- END Element 8 Type: 18-->
        
        </div><script>setInterval(function(){ if (role==1) $('#wrap5').show();if (!(role==1)) $('#wrap5').hide();if (role==1) $('#wrap6').show();if (!(role==1)) $('#wrap6').hide();if (role==1) $('#wrap7').show();if (!(role==1)) $('#wrap7').hide();if (role==1) $('#wrap8').show();if (!(role==1)) $('#wrap8').hide(); }, 100);</script><script>countdownTimer(TimeOut, 'stage411244.php?session_index=<?php echo $_SESSION[sessionID];?>',true);</script></form></div></div></body></html>