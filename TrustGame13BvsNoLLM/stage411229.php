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
}</style><title>Part 1 Round 1: Dealer&#039;s Turn</title>

        <script> var v={}; var wronganswers={}; var totalwronganswers={};var maxFalse = null;
        var firstStageExp = <?php echo json_encode(FIRSTPAGE . ".php"); ?>;
        var thisPage = <?php echo json_encode($thisPage); ?>;
        var sessionIndexJavascript = "<?php echo $_SESSION[sessionID];?>";
        pageRefreshed=0;
        var loopBegin = "stage" + loopStart + ".php";
        var afterLoopEnd = 411228;
        if (thisPage == firstStageExp || (thisPage==loopBegin && period > 1) || loopEnd==afterLoopEnd) firstStage();
        /* if (thisPage == firstStageExp || thisPage==loopBegin || loopEnd==afterLoopEnd) firstStage(); */
        TimeOut=180;
        function skipStage(proceedifpossible) {
         if (proceedifpossible === undefined) proceedifpossible = false;
         if (proceedifpossible) location.replace('stage411230.php?session_index=<?php echo $_SESSION[sessionID];?>');
         else location.replace('wait411229.php?session_index=<?php echo $_SESSION[sessionID];?>');
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
        
        
        <script>if (role!=2) skipStage();

// Retrieve transfer data using getValue but defining the subjectNr to specify the transfer1 from The Investor with role = 1 and subjectNr = 1 from the first round 
var transfer1 = getValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'transfer1');
var tripledAmount1 = transfer1 * 3;

// Record tripledAmount1 from round 1 for the LLMs reference for later :) 
record('tripledAmount1', tripledAmount1); 
setValue('decisions','subjectNr=1 and subjectNr=2 and groupNr='+groupNr, 'tripledAmount1', tripledAmount1); 

// Retrieve initialCredit from the database; as it is always 10 no further specification needed from whom
var initialCredit = getValue('initialCredit'); 

// Calculate what The Investor with role = 1 and subjectNr = 1 kept to himself in the first round 
var investorKept1 = initialCredit - transfer1;

// After trying multiple scenarios (record in active screen, record in waiting screen), the keptForSelf1 variable was always also recorded for player 2  after pressing submit in the return :( So we have to set it to 0 manually

// Set keptForSelf1 to 0 per default and record it to the database 
var keptForSelf1 = 0; 
record('keptForSelf1', keptForSelf1); 

// Record what was kept by The Investor in the first round in Part 1. What was kept by The Dealer in the first round can only be calculated after the returned1 field has been executed after the end of this stage
// Set the variable keptForSelf1 in the 'decisions' table; period is not necessary here but later for the AI loop
setValue('decisions', 'subjectNr=1 and groupNr='+groupNr, 'keptForSelf1', investorKept1);</script><!-- END Element 2 Type: 19-->
        
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
}</script><!-- END Element 3 Type: 19-->
        
        <!-- START Element 4 Type: 19-->
        
        
        <script>// Dropout because time is up and timer in LIONESS is not working 
// Wait for 3 minutes 10 seconds (3170 milliseconds x 60) and then redirect to no compensation due to dropout in Prolific 
setTimeout(function() {
    window.location.href = "https://app.prolific.com/submissions/complete?cc=CC6I7R7J";
}, 3170 * 60);</script><!-- END Element 4 Type: 19-->
        
        <!-- START Element 5 Type: 1-->
        
        <div class="col-sm-6" id="wrap5" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<h3 style="text-align: right;"><br></h3>
<div style="text-align: left;">
<h1 style="text-align: right;">Part 1 | Round 1 of 3</h1>
<p style="text-align: right; font-size: larger;"><i>The Investor </i>has <b>not invested any coins </b>in this round.</p>
<p style="text-align: right; font-size: larger;">There is no amount to be tripled. </p>
<p style="text-align: right; font-size: larger;">In 20 seconds, you will be automatically re-directed to the next round, keeping your current credit.<br></p>
</div></div>
        </div><script>if((role==2 && transfer1 == 0)) { $('#wrap5').show(); } </script><!-- END Element 5 Type: 1-->
        
        <!-- START Element 6 Type: 19-->
        
        
        <script>// Hide the timer if transfer1 == 0 
$(document).ready(function() {
    if (transfer1 == 0) {
        $('#countdown_text').hide(); // to hide the text 
        $('#countdown_timer').hide(); // to hide the timer
        $('#countdown').hide(); // to hide the blue bar
    }
});

// Redirect to next stage because nothing was invested; starting from active stage 
if (transfer1 == 0) {
    var returned1 = 0;
    setValue('decisions', 'subjectNr=2 and groupNr='+groupNr, 'returned1', returned1);

    setTimeout(function() {
        let currentUrl = window.location.href;
        let newUrl = currentUrl.replace(/stage\d+/i, "stage411230");
        window.location.href = newUrl;
    }, 20000);
}</script><!-- END Element 6 Type: 19-->
        
        <!-- START Element 7 Type: 1-->
        
        <div class="col-sm-12" id="wrap7" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: center;"><br></h3>
<h3 style="text-align: center;"><br></h3>
<h3 style="text-align: center;"><br></h3>
<h3 style="text-align: center;"><br></h3>
<div style="text-align: left;">
<h1 style="text-align: center;">Part 1 | Round 1 of 3: Your turn!</h1>
<p style="text-align: center; font-size: larger;"><i>The Investor&nbsp;</i>has <b>invested <script>document.write(transfer1)</script> coins </b>in this round.</p>
<p style="text-align: center; font-size: larger;">As part of the game, the amount was tripled to<b>&nbsp;<script>document.write(tripledAmount1)</script> coins for the shared pot.</b>
</p>
<p style="text-align: center; font-size: larger;"><i>The Investor</i> has currently <script>document.write(investorKept1)</script> coins left in this round.</p>
<p style="text-align: center; font-size: larger;">Now, it&#039;s your time to shine.</p>
<p style="text-align: center; font-size: larger;"><b>How much will you give back?</b></p>
</div></div>
        </div><script>if((role==2 && transfer1 > 0 && transfer1 != 1)) { $('#wrap7').show(); } </script><!-- END Element 7 Type: 1-->
        
        <!-- START Element 8 Type: 1-->
        
        <div class="col-sm-12" id="wrap8" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: center;"><br></h3>
<h3 style="text-align: center;"><br></h3>
<h3 style="text-align: center;"><br></h3>
<h3 style="text-align: center;"><br></h3>
<div style="text-align: left;"><h1 style="text-align: center;">Part 1 | Round 1 of 3: Your turn!</h1>
<p style="text-align: center; font-size: larger;"><i>The Investor&nbsp;</i>has <b>invested <script>document.write(transfer1)</script> coin </b>in this round.</p>
<p style="text-align: center; font-size: larger;">As part of the game, the amount was tripled to <b><script>document.write(tripledAmount1)</script> coins for the shared pot.</b></p>
<p style="text-align: center; font-size: larger;"><i>The Investor</i> has currently <script>document.write(investorKept1)</script> coins left in this round.</p>
<p style="text-align: center; font-size: larger;">Now, it&#039;s your time to shine.</p>
<p style="text-align: center; font-size: larger;"><b>How much will you give back?</b></p>
</div></div>
        </div><script>if((role==2 && transfer1 == 1)) { $('#wrap8').show(); } </script><!-- END Element 8 Type: 1-->
        
        <!-- START Element 9 Type: 20-->
        
        <div class="col-sm-12" id="wrap9" style="display: none;"><div class="btnbox2"  style="vertical-align: middle;"><div class="form-group btnbox2 form-inline"><label style="margin-right: 15px" for="field9"><p style="font-size: larger;">You can give back&nbsp;<b style="color: rgb(247, 150, 70);">up to <script>document.write(tripledAmount1)</script> coins.</b></p></label><input name="9" id="field9"

                            type="text"

                            size="10"

                            maxlength="10"

                            max="$tripledAmount1$"

                            step="0"

                            value=""
                            
                            onchange="returned1=parseFloat(this.value);"
                            class="form-control input-lg" style="text-align: center;"><div id="field9_minmax" class=" messagefield9 alert alert-danger" style="display: none;">Please enter a number between 0 and <script>document.write(tripledAmount1)</script>.</div><div id="field9_noNumber" class="messagefield9 alert alert-danger" style="display: none;">Please enter a number. </div><div id="field9_tooManyDigits" class="messagefield9 alert alert-danger" style="display: none;">You entered too many digits.</div><div id="field9_notcorrect" class="messagefield9 alert alert-danger" style="display: none;">The value you entered is not correct.</div><script>var returned1=null;function checkValue_field9() {
           var label="returned1";var min=0;var max=tripledAmount1;var digits=0;var correct=null;var required=1;var inline=1;var label1=null;var label2=null;
            if(!(role==2 && transfer1 > 0)) { checker=checker+1; } else {
            
                var value;
                if (bot) { 
                    if (correct != null) { value = correct; }
                    else if (typeof bot_returned1 !== 'undefined') { value=bot_returned1; }
                    else { value=Math.floor(Math.random()*max)+min; }
                    value=parseFloat(value);
                }
                else {
                value=($('#field9').val()).trim(); 
                }
                
                $('.messagefield9').hide();
                
                
                
                var allcorrect=checker+1;
                
                /* check if any entry has been made */
                if ((isNaN(value) || value === "") && required==1) {
                    $('#field9_noNumber').show();
                    
                }
                else if (isNaN(value)) {
                    $('#field9_noNumber').show();
                    
                }
                else {
                  


                    var digs = 0;
                    if (value % 1 !==0 && typeof value != undefined) {
                        var testvalue=value.toString();
                        digs = testvalue.split(".")[1].length;
                    }
                    if (digs>digits){ $('#field9_tooManyDigits').show(); }
                    else {
                        if (value>max || value < min) {
                            $('#field9_minmax').show();
                           
                        }
                        else { 

                        if (value!=correct && correct != null && required!=0) {
                           
                           
                            $('#field9_notcorrect').show();
                        } else {


                            record("returned1", value);

                           checker = checker+1;
                       }
                       }
                   }
               }
               if (allcorrect!=checker) {
                  wronganswers['returned1']=1;
                  totalwronganswers['returned1'] = isNaN(totalwronganswers['returned1']) ? 1 : totalwronganswers['returned1']+1; 
                } else wronganswers['returned1']=0;
            }

}

        </script></div></div></div><script>if((role==2 && transfer1 > 0)) { $('#wrap9').show(); } </script><!-- END Element 9 Type: 20-->
        
        <!-- START Element 10 Type: 18-->
        
        <div class="col-sm-12" id="wrap10" style="display: none;">
        <script>
       
        
        </script>
        
        <div  id="button10">
        <div id="buttonclick10" class="lionessbutton btn btn-default btn-lg btn-block btn-warning" style=" white-space:normal !important; word-wrap: break-word;" onclick="
        $(this).hide(); $('#buttonload10').show();
        if (additionalCheck10()) {
            hideError10();
            if (checkEntries()) toNextPage10();
            else  { $(this).show(); 
            $('#buttonload10').hide(); }
        } else {
         $(this).show(); 
         $('#buttonload10').hide();
         }
        ">Continue</div><div id="buttonload10" style="width: 100%; text-align: center; display: none;"><img src="<?php echo PATH;?>basis/pic/buttonload.gif"></div><div id="field10_error" class="alert alert-danger" style="display: none; text-align: center;"></div><div id="field10_attempts" class="alert alert-warning" style="display: none; text-align: center;"><span class="attempts_text">Attempts left to answer the control questions</span>:&nbsp;<span id="field10_attempts_num"></span></div></div><script>if(maxFalse!=null) {
            var numFails=quizFail(playerNr,1);  
            $('#field10_attempts').show();
            $('#field10_attempts_num').html(maxFalse-numFails);
           
        }
        function showError10(text) {
            var errorfield= $('#field10_error');
            errorfield.show();
            errorfield.html(text);
        
        }
        
        function hideError10() {
            $('#field10_error').hide();
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
        
        function additionalCheck10() {

           return true;
        }

       



        function checkFail() {}function toNextPage10() {showNext('wait411229.php?session_index=<?php echo $_SESSION[sessionID];?>&next=411230&jump=0',411230,411229)}</script></div><script>if((role==2 && transfer1 > 0)) { $('#wrap10').show(); $('#buttonclick10').addClass('buttonclick');} </script><!-- END Element 10 Type: 18-->
        
        </div><script>setInterval(function(){ if (role==2 && transfer1 == 0) $('#wrap5').show();if (!(role==2 && transfer1 == 0)) $('#wrap5').hide();if (role==2 && transfer1 > 0 && transfer1 != 1) $('#wrap7').show();if (!(role==2 && transfer1 > 0 && transfer1 != 1)) $('#wrap7').hide();if (role==2 && transfer1 == 1) $('#wrap8').show();if (!(role==2 && transfer1 == 1)) $('#wrap8').hide();if (role==2 && transfer1 > 0) $('#wrap9').show();if (!(role==2 && transfer1 > 0)) $('#wrap9').hide();if (role==2 && transfer1 > 0) $('#wrap10').show();if (!(role==2 && transfer1 > 0)) $('#wrap10').hide(); }, 100);</script><script>countdownTimer(TimeOut, 'stage411244.php?session_index=<?php echo $_SESSION[sessionID];?>',true);</script></form></div></div></body></html>