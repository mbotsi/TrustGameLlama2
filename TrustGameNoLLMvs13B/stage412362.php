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
}</style><title>Part 1 Round 2: Dealer&#039;s Turn</title>

        <script> var v={}; var wronganswers={}; var totalwronganswers={};var maxFalse = null;
        var firstStageExp = <?php echo json_encode(FIRSTPAGE . ".php"); ?>;
        var thisPage = <?php echo json_encode($thisPage); ?>;
        var sessionIndexJavascript = "<?php echo $_SESSION[sessionID];?>";
        pageRefreshed=0;
        var loopBegin = "stage" + loopStart + ".php";
        var afterLoopEnd = 412361;
        if (thisPage == firstStageExp || (thisPage==loopBegin && period > 1) || loopEnd==afterLoopEnd) firstStage();
        /* if (thisPage == firstStageExp || thisPage==loopBegin || loopEnd==afterLoopEnd) firstStage(); */
        TimeOut=180;
        function skipStage(proceedifpossible) {
         if (proceedifpossible === undefined) proceedifpossible = false;
         if (proceedifpossible) location.replace('stage412363.php?session_index=<?php echo $_SESSION[sessionID];?>');
         else location.replace('wait412362.php?session_index=<?php echo $_SESSION[sessionID];?>');
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
    let newUrl = currentUrl.replace(/stage\d+\.php/i, "stage412376.php");
    window.location.href = newUrl;
}</script><!-- END Element 1 Type: 19-->
        
        <!-- START Element 2 Type: 19-->
        
        
        <script>if (role!=2) skipStage();

// What happened so far: Round 1 

// Round 1 
var tripledAmount1 = getValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'tripledAmount1');
var returned1 = getValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'returned1');
var dealerKept1 = getValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'keptForSelf1');

// Retrieve transfer data using getValue but defining the subjectNr to specify the transfer2 from The Investor with role = 1 and subjectNr = 1 from the second round 
var transfer2 = getValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'transfer2');
var tripledAmount2 = transfer2 * 3;

// Record tripledAmount2 from round 2 for the LLMs reference for later :) 
record('tripledAmount2', tripledAmount2); 
setValue('decisions','subjectNr=1 and subjectNr=2 and groupNr='+groupNr, 'tripledAmount2', tripledAmount2); 

// Retrieve initialCredit from the database; as it is always 10 no further specification needed from whom;
var initialCredit = getValue('initialCredit'); 

// Calculate what The Investor kept to himself in the second round 
var investorKept2 = initialCredit - transfer2;

// Set keptForSelf2 to 0 per default and record it to the database 
var keptForSelf2 = 0; 
record('keptForSelf2', keptForSelf2); 

// Record what was kept by The Investor in the second round in Part 1. What was kept by The Dealer in the second round can only be calculated after the returned2 field has been executed after the end of this stage
// Set the variable keptForSelf2 in the 'decisions' table; period is not necessary here but later for the AI loop
setValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'keptForSelf2', investorKept2);</script><!-- END Element 2 Type: 19-->
        
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
    // Find the parent div with id="wrap9"
    var wrap9Div = document.getElementById("wrap9");
    // Find the child div with class="btnbox2 paddlr"
    var btnboxDiv = wrap9Div.querySelector('.btnbox2.paddlr');
    // Find the nested iframe within the btnboxDiv
    var iframeElement = btnboxDiv.querySelector('iframe');
    // Update the src attribute of the iframe with the new URL
    iframeElement.setAttribute('src', newUrl);
};</script><!-- END Element 3 Type: 19-->
        
        <!-- START Element 4 Type: 19-->
        
        
        <script>// Dropout because time is up and timer in LIONESS is not working 
// Wait for 3 minutes 10 seconds (3170 milliseconds x 60) and then redirect to no compensation due to dropout in Prolific 
setTimeout(function() {
    window.location.href = "https://app.prolific.com/submissions/complete?cc=CC6G0112";
}, 3170 * 60);</script><!-- END Element 4 Type: 19-->
        
        <!-- START Element 5 Type: 1-->
        
        <div class="col-sm-6" id="wrap5" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: center;"><br></h3>
<h3 style="text-align: center;"><br></h3>
<div style="text-align: left;">
<h1 style="text-align: right;">Part 1 | Round 2 of 3</h1>
<p style="text-align: right; font-size: larger;"><i>The Investor </i>has <b>not invested any coins </b>in this round.</p>
<p style="text-align: right; font-size: larger;">There is no amount to be tripled. </p>
<p style="text-align: right; font-size: larger;">In 20 seconds, you will be automatically re-directed to the next round, keeping your current credit.<br></p>
</div></div>
        </div><script>if((role==2 && transfer2 == 0)) { $('#wrap5').show(); } </script><!-- END Element 5 Type: 1-->
        
        <!-- START Element 6 Type: 19-->
        
        
        <script>// Hide the timer if transfer2 == 0 
$(document).ready(function() {
    if (transfer2 == 0) {
        $('#countdown_text').hide(); // to hide the text 
        $('#countdown_timer').hide(); // to hide the timer
        $('#countdown').hide(); // to hide the blue bar
    }
});

// Redirect to next stage because nothing was invested; starting from active stage 
if (transfer2 == 0) {
    var returned2 = 0;
    setValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'returned2', returned2);

    setTimeout(function() {
        let currentUrl = window.location.href;
        let newUrl = currentUrl.replace(/stage\d+/i, "stage412363");
        window.location.href = newUrl;
    }, 20000);
}</script><!-- END Element 6 Type: 19-->
        
        <!-- START Element 7 Type: 1-->
        
        <div class="col-sm-4" id="wrap7" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<div style="text-align: left;">
<h1 style="text-align: right;">Part 1 | Round 2 of 3: Your turn!</h1>
<p style="text-align: right; font-size: larger;"><i>The Investor</i> has <b>invested <script>document.write(transfer2)</script> coins </b> in this round.</p>
<p style="text-align: right;"><span style="background-color: rgba(223, 240, 216, 0); font-size: 16.8px;">As part of the game, the amount was tripled to<b> <script>document.write(tripledAmount2)</script> coins for the shared pot.</b></span></p><p style="text-align: right;"><i style="font-size: larger; background-color: rgba(223, 240, 216, 0);">The Investor</i><span style="font-size: larger; background-color: rgba(223, 240, 216, 0);"> has currently <script>document.write(investorKept2)</script> coins left in this round.</span><br></p>
<p style="text-align: right; font-size: larger;">Now, it&#039;s your time to shine.&nbsp;</p><p style="text-align: right; font-size: larger;"><b>How much will you give back?</b></p>
</div></div>
        </div><script>if((role==2 && transfer2 > 0 && transfer2 != 1)) { $('#wrap7').show(); } </script><!-- END Element 7 Type: 1-->
        
        <!-- START Element 8 Type: 1-->
        
        <div class="col-sm-4" id="wrap8" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<div style="text-align: left;">
<h1 style="text-align: right;">Part 1 | Round 2 of 3: Your turn!</h1>
<p style="text-align: right; font-size: larger;"><i>The Investor&nbsp;</i>has <b>invested <script>document.write(transfer2)</script> coin </b>in this round.</p>
<p style="text-align: right; font-size: larger;">As part of the game, the amount was tripled to<b> <script>document.write(tripledAmount2)</script> coins for the shared pot.</b></p>
<p style="text-align: right; font-size: larger;"><i>The Investor</i> has currently <script>document.write(investorKept2)</script> coins left in this round.</p>
<p style="text-align: right; font-size: larger;">Now, it&#039;s your time to shine.</p>
<p style="text-align: right; font-size: larger;"><b>How much will you give back?</b></p>
</div></div>
        </div><script>if((role==2 && transfer2 == 1)) { $('#wrap8').show(); } </script><!-- END Element 8 Type: 1-->
        
        <!-- START Element 9 Type: 1-->
        
        <div class="col-sm-6" id="wrap9" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: right;"><br></h3>
<p style="text-align: right; margin-right: 100px;"><iframe src="https://botsi-trust-game-llama-2-13b-chat.hf.space" frameborder="0" width="1050" height="550" style="background-color: rgba(223, 240, 216, 0);"></iframe></p></div>
        </div><script>if((role==2 && transfer2 > 0)) { $('#wrap9').show(); } </script><!-- END Element 9 Type: 1-->
        
        <!-- START Element 10 Type: 20-->
        
        <div class="col-sm-12" id="wrap10" style="display: none;"><div class="btnbox2"  style="vertical-align: middle;"><div class="form-group btnbox2 form-inline"><label style="margin-right: 15px" for="field10"><p style="font-size: larger;">You can give back&nbsp;<b style="color: rgb(247, 150, 70);">up to <script>document.write(tripledAmount2)</script> coins.</b></p></label><input name="10" id="field10"

                            type="text"

                            size="10"

                            maxlength="10"

                            max="$tripledAmount2$"

                            step="0"

                            value=""
                            
                            onchange="returned2=parseFloat(this.value);"
                            class="form-control input-lg" style="text-align: center;"><div id="field10_minmax" class=" messagefield10 alert alert-danger" style="display: none;">Please enter a number between 0 and <script>document.write(tripledAmount2)</script>.</div><div id="field10_noNumber" class="messagefield10 alert alert-danger" style="display: none;">Please enter a number. </div><div id="field10_tooManyDigits" class="messagefield10 alert alert-danger" style="display: none;">You entered too many digits.</div><div id="field10_notcorrect" class="messagefield10 alert alert-danger" style="display: none;">The value you entered is not correct.</div><script>var returned2=null;function checkValue_field10() {
           var label="returned2";var min=0;var max=tripledAmount2;var digits=0;var correct=null;var required=1;var inline=1;var label1=null;var label2=null;
            if(!(role==2 && transfer2 > 0)) { checker=checker+1; } else {
            
                var value;
                if (bot) { 
                    if (correct != null) { value = correct; }
                    else if (typeof bot_returned2 !== 'undefined') { value=bot_returned2; }
                    else { value=Math.floor(Math.random()*max)+min; }
                    value=parseFloat(value);
                }
                else {
                value=($('#field10').val()).trim(); 
                }
                
                $('.messagefield10').hide();
                
                
                
                var allcorrect=checker+1;
                
                /* check if any entry has been made */
                if ((isNaN(value) || value === "") && required==1) {
                    $('#field10_noNumber').show();
                    
                }
                else if (isNaN(value)) {
                    $('#field10_noNumber').show();
                    
                }
                else {
                  


                    var digs = 0;
                    if (value % 1 !==0 && typeof value != undefined) {
                        var testvalue=value.toString();
                        digs = testvalue.split(".")[1].length;
                    }
                    if (digs>digits){ $('#field10_tooManyDigits').show(); }
                    else {
                        if (value>max || value < min) {
                            $('#field10_minmax').show();
                           
                        }
                        else { 

                        if (value!=correct && correct != null && required!=0) {
                           
                           
                            $('#field10_notcorrect').show();
                        } else {


                            record("returned2", value);

                           checker = checker+1;
                       }
                       }
                   }
               }
               if (allcorrect!=checker) {
                  wronganswers['returned2']=1;
                  totalwronganswers['returned2'] = isNaN(totalwronganswers['returned2']) ? 1 : totalwronganswers['returned2']+1; 
                } else wronganswers['returned2']=0;
            }

}

        </script></div></div></div><script>if((role==2 && transfer2 > 0)) { $('#wrap10').show(); } </script><!-- END Element 10 Type: 20-->
        
        <!-- START Element 11 Type: 18-->
        
        <div class="col-sm-12" id="wrap11" style="display: none;">
        <script>
       
        
        </script>
        
        <div  id="button11">
        <div id="buttonclick11" class="lionessbutton btn btn-default btn-lg btn-block btn-warning" style=" white-space:normal !important; word-wrap: break-word;" onclick="
        $(this).hide(); $('#buttonload11').show();
        if (additionalCheck11()) {
            hideError11();
            if (checkEntries()) toNextPage11();
            else  { $(this).show(); 
            $('#buttonload11').hide(); }
        } else {
         $(this).show(); 
         $('#buttonload11').hide();
         }
        ">Continue</div><div id="buttonload11" style="width: 100%; text-align: center; display: none;"><img src="<?php echo PATH;?>basis/pic/buttonload.gif"></div><div id="field11_error" class="alert alert-danger" style="display: none; text-align: center;"></div><div id="field11_attempts" class="alert alert-warning" style="display: none; text-align: center;"><span class="attempts_text">Attempts left to answer the control questions</span>:&nbsp;<span id="field11_attempts_num"></span></div></div><script>if(maxFalse!=null) {
            var numFails=quizFail(playerNr,1);  
            $('#field11_attempts').show();
            $('#field11_attempts_num').html(maxFalse-numFails);
           
        }
        function showError11(text) {
            var errorfield= $('#field11_error');
            errorfield.show();
            errorfield.html(text);
        
        }
        
        function hideError11() {
            $('#field11_error').hide();
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
        
        function additionalCheck11() {

           return true;
        }

       



        function checkFail() {}function toNextPage11() {showNext('wait412362.php?session_index=<?php echo $_SESSION[sessionID];?>&next=412363&jump=0',412363,412362)}</script></div><script>if((role==2 && transfer2 > 0)) { $('#wrap11').show(); $('#buttonclick11').addClass('buttonclick');} </script><!-- END Element 11 Type: 18-->
        
        </div><script>setInterval(function(){ if (role==2 && transfer2 == 0) $('#wrap5').show();if (!(role==2 && transfer2 == 0)) $('#wrap5').hide();if (role==2 && transfer2 > 0 && transfer2 != 1) $('#wrap7').show();if (!(role==2 && transfer2 > 0 && transfer2 != 1)) $('#wrap7').hide();if (role==2 && transfer2 == 1) $('#wrap8').show();if (!(role==2 && transfer2 == 1)) $('#wrap8').hide();if (role==2 && transfer2 > 0) $('#wrap9').show();if (!(role==2 && transfer2 > 0)) $('#wrap9').hide();if (role==2 && transfer2 > 0) $('#wrap10').show();if (!(role==2 && transfer2 > 0)) $('#wrap10').hide();if (role==2 && transfer2 > 0) $('#wrap11').show();if (!(role==2 && transfer2 > 0)) $('#wrap11').hide(); }, 100);</script><script>countdownTimer(TimeOut, 'stage412375.php?session_index=<?php echo $_SESSION[sessionID];?>',true);</script></form></div></div></body></html>