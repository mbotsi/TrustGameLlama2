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
}</style><title>Questionnaire</title>

        <script> var v={}; var wronganswers={}; var totalwronganswers={};var maxFalse = null;
        var firstStageExp = <?php echo json_encode(FIRSTPAGE . ".php"); ?>;
        var thisPage = <?php echo json_encode($thisPage); ?>;
        var sessionIndexJavascript = "<?php echo $_SESSION[sessionID];?>";
        pageRefreshed=0;
        var loopBegin = "stage" + loopStart + ".php";
        var afterLoopEnd = 411240;
        if (thisPage == firstStageExp || (thisPage==loopBegin && period > 1) || loopEnd==afterLoopEnd) firstStage();
        /* if (thisPage == firstStageExp || thisPage==loopBegin || loopEnd==afterLoopEnd) firstStage(); */
        TimeOut=null;
        function skipStage(proceedifpossible) {
         if (proceedifpossible === undefined) proceedifpossible = false;
         if (proceedifpossible) location.replace('stage411242.php?session_index=<?php echo $_SESSION[sessionID];?>');
         else location.replace('wait411241.php?session_index=<?php echo $_SESSION[sessionID];?>');
        }
        $(document).ready(function(){
        if (bot) { document.getElementsByClassName("buttonclick")[0].click(); }
        });
        
        </script>
        </head><body><div id="mainwrap" class="container" style="width: 100%; padding-left: 5%; padding-right: 5%; padding-top: 1%;"><form autocomplete="off"><div class="row"><!-- START Element 1 Type: 19-->
        
        
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
}</script><!-- END Element 1 Type: 19-->
        
        <!-- START Element 2 Type: 1-->
        
        <div class="col-sm-4" id="wrap2" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: right;"><br></h3>
<img src="https://trust-game.com/questionnaire.png" alt="Bot" width="350" height="350"></div>
        </div><script>if((true)) { $('#wrap2').show(); } </script><!-- END Element 2 Type: 1-->
        
        <!-- START Element 3 Type: 1-->
        
        <div class="col-sm-6" id="wrap3" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: left;"><br></h3>
<h1 style="text-align: left; "><strong>Questionnaire</strong></h1><p style="text-align: left; font-size: larger;"><b style="">Thank you for taking your time to complete the study!&nbsp;<br></b><b style="background-color: rgba(223, 240, 216, 0);">Before we show your final results, please take a moment to answer a few more questions.</b></p><p style="text-align: left;"><b style="font-size: larger; background-color: rgba(223, 240, 216, 0); color: rgb(247, 150, 70);">The completion of this questionnaire is mandatory in order to receive study compensation.</b></p></div>
        </div><script>if((true)) { $('#wrap3').show(); } </script><!-- END Element 3 Type: 1-->
        
        <!-- START Element 4 Type: 1-->
        
        <div class="col-sm-6" id="wrap4" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"></div>
        </div><script>if((true)) { $('#wrap4').show(); } </script><!-- END Element 4 Type: 1-->
        
        <!-- START Element 5 Type: 1-->
        
        <div class="col-sm-6" id="wrap5" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h1 style="text-align: left; "><strong>Part 1&nbsp;</strong></h1>
<p style="text-align: left; font-size: larger;">On a scale of 0 to 100, <b>how fair do you find the overall game interaction</b>, considering the allocation of chatbot assistance?</p></div>
        </div><script>if((true)) { $('#wrap5').show(); } </script><!-- END Element 5 Type: 1-->
        
        <!-- START Element 6 Type: 1-->
        
        <div class="col-sm-12" id="wrap6" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"></div>
        </div><script>if((true)) { $('#wrap6').show(); } </script><!-- END Element 6 Type: 1-->
        
        <!-- START Element 7 Type: 22-->
        
        <div class="col-sm-12" id="wrap7" style="display: none;">
        <div class="bntbox2"><div class="form-group btnbox2">
           <div class="input-group" style="margin-left:auto;margin-right:auto;"><table class="slidertable" id="slidertable7"><tr class="sliderrow" id="sliderrow7"><td style="padding-right: 10px;">Unfair</td><td class="sliderbox" id="sliderbox7" style="min-width: 250px;"><input type="range" value="" min="0" max="100" step="1"
            name="fairscale" id="field7" onchange="changeSlider7(0);" /></td><td style="padding-left: 10px;">Fair</td></tr><tr><td></td><td style="text-align:center;">
        <div><span id="fieldvalue7"></span></div></td><td></td></tr></table></div><div id="field7_notcorrect" class="messagefield7 alert alert-danger" style="display: none;">The value you entered is not correct.</div><div id="field7_moveslider" class="messagefield7 alert alert-danger" style="display: none;">Please move the slider.</div></div></div><script> var fairscale=null; var fairscale_slidermoved=0;



                  function checkValue_field7() {var label="fairscale";var min=0;var max=100;var steps=1;var default2=null;var correct=null;var textoutput=null;var labeling=null;var addbuttons=0;var hidecurrent=0;var moveslider=1;    if(!(true)) {
                        checker=checker+1;
                     }
                     else {

                     if (bot) { 
                        if (correct != null) { value = correct; }
                        else if (typeof bot_fairscale !== 'undefined') { value=bot_fairscale; }
                        else { value=Math.floor(Math.random()*((max-min)/steps))*steps+min; }
                    }
                    else {
                     value=($('#field7').val()); 
                    }
                       
                       $('.messagefield7').hide();
                       allcorrect=checker+1;
                         if (value!=correct && correct != null) {
                            $('#field7_notcorrect').show();
                        } else if (moveslider == 1 && fairscale_slidermoved==0) { 
                            $('#field7_moveslider').show();
                        
                        } else {    
                       
                           record("fairscale", value);
                           record("fairscale_slidermoved", fairscale_slidermoved);
                           
                           checker = checker+1;
                       }
                   
                   
                   if (allcorrect!=checker) {
                  wronganswers['fairscale']=1;
                  totalwronganswers['fairscale'] = isNaN(totalwronganswers['fairscale']) ? 1 : totalwronganswers['fairscale']+1; 
             
               } else wronganswers['fairscale']=0;
                  }  
                   }
                   
                   
                   

              </script><script>

        function changeSlider7(upordown = 0) {var label="fairscale";var min=0;var max=100;var steps=1;var default2=null;var correct=null;var textoutput=null;var labeling=null;var addbuttons=0;var hidecurrent=0;var moveslider=1;    var value = $("#field7").val();
            $('#field7_moveslider').hide();
            if (upordown !== 0) {
            
                value = parseFloat(value);
                if (upordown === 1) {
                
                    if (value + steps <= max) {
                        
                        value = value + steps;
                        
                    }    
                
                
                } else {
                
                 if (value - steps >= min) {
                        
                        value = value - steps;
                        
                 }    
                
                
                }
                
                
                value = +(Math.round(value + "e+2")  + "e-2");
                
                $("#field7").val(value);
            
            
            }
            
            value = +(Math.round(value + "e+2")  + "e-2");
            var fairscale=value; $('#fieldvalue7').html(value);
            fairscale_slidermoved=1;
        }



        </script></div><script>if((true)) { $('#wrap7').show(); } </script><!-- END Element 7 Type: 22-->
        
        <!-- START Element 8 Type: 1-->
        
        <div class="col-sm-4" id="wrap8" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"></div>
        </div><script>if((true)) { $('#wrap8').show(); } </script><!-- END Element 8 Type: 1-->
        
        <!-- START Element 9 Type: 1-->
        
        <div class="col-sm-6" id="wrap9" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: left;"><br></h3>
<h1 style="text-align: left; "><strong>Part 2&nbsp;</strong></h1><p style="text-align: left; font-size: larger;"><span style="background-color: rgba(223, 240, 216, 0);">Human augmentation technologies are evolving fast, enhancing human&nbsp;</span>cognitive, sensory, and motor abilities.<span style="background-color: rgba(223, 240, 216, 0);"> Among the most popular devices at the time are </span><b>smartphones, smart watches, chatbots, exoskeletons, neural implants or smart prosthetics.&nbsp;</b><br></p><p style="text-align: left;"><span style="font-size: larger; background-color: rgba(223, 240, 216, 0);">Using a chatbot for decision-making can be considered a </span><b style="font-size: larger; background-color: rgba(223, 240, 216, 0);">form of cognitive human augmentation technology.&nbsp;</b><span style="font-size: larger; background-color: rgba(223, 240, 216, 0);">The following questionnaire is designed to learn more about </span><span style="font-size: larger; background-color: rgba(223, 240, 216, 0);">the societal view on human augmentation technologies.</span></p>
<p style="text-align: left; font-size: larger;">Please select how much you <b>agree or disagree</b> with the following statements:</p></div>
        </div><script>if((true)) { $('#wrap9').show(); } </script><!-- END Element 9 Type: 1-->
        
        <!-- START Element 10 Type: 21-->
        
        <div class="col-sm-12" id="wrap10" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p><b>An augmented human is a threat to society.</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="10" id="field10"><span id="radiobutton101" class="custom-radio radiobuttons10"
                        onclick="changeRadio(1,10);"></span><span id="radiobutton102" class="custom-radio radiobuttons10"
                        onclick="changeRadio(2,10);"></span><span id="radiobutton103" class="custom-radio radiobuttons10"
                        onclick="changeRadio(3,10);"></span><span id="radiobutton104" class="custom-radio radiobuttons10"
                        onclick="changeRadio(4,10);"></span><span id="radiobutton105" class="custom-radio radiobuttons10"
                        onclick="changeRadio(5,10);"></span><span id="radiobutton106" class="custom-radio radiobuttons10"
                        onclick="changeRadio(6,10);"></span><span id="radiobutton107" class="custom-radio radiobuttons10"
                        onclick="changeRadio(7,10);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Very much</td></tr></table></div><div id="field10_noEntry" class="messagefield10 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field10_notcorrect" class="messagefield10 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var s1=null;            

                  var k=0;

                  function checkValue_field10() {
                 var label="s1";var min=1;var max=7;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_s1 !== 'undefined') { value=bot_s1; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field10").val(); }
                    
                    $('.messagefield10').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field10_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field10_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("s1", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['s1']=1;
                      totalwronganswers['s1'] = isNaN(totalwronganswers['s1']) ? 1 : parseInt(totalwronganswers['s1'])+1; 
             
                   } else wronganswers['s1']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap10').show(); } </script><!-- END Element 10 Type: 21-->
        
        <!-- START Element 11 Type: 21-->
        
        <div class="col-sm-12" id="wrap11" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p><b>An augmented human would be dangerous.</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="11" id="field11"><span id="radiobutton111" class="custom-radio radiobuttons11"
                        onclick="changeRadio(1,11);"></span><span id="radiobutton112" class="custom-radio radiobuttons11"
                        onclick="changeRadio(2,11);"></span><span id="radiobutton113" class="custom-radio radiobuttons11"
                        onclick="changeRadio(3,11);"></span><span id="radiobutton114" class="custom-radio radiobuttons11"
                        onclick="changeRadio(4,11);"></span><span id="radiobutton115" class="custom-radio radiobuttons11"
                        onclick="changeRadio(5,11);"></span><span id="radiobutton116" class="custom-radio radiobuttons11"
                        onclick="changeRadio(6,11);"></span><span id="radiobutton117" class="custom-radio radiobuttons11"
                        onclick="changeRadio(7,11);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Very much</td></tr></table></div><div id="field11_noEntry" class="messagefield11 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field11_notcorrect" class="messagefield11 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var s2=null;            

                  var k=0;

                  function checkValue_field11() {
                 var label="s2";var min=1;var max=7;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_s2 !== 'undefined') { value=bot_s2; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field11").val(); }
                    
                    $('.messagefield11').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field11_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field11_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("s2", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['s2']=1;
                      totalwronganswers['s2'] = isNaN(totalwronganswers['s2']) ? 1 : parseInt(totalwronganswers['s2'])+1; 
             
                   } else wronganswers['s2']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap11').show(); } </script><!-- END Element 11 Type: 21-->
        
        <!-- START Element 12 Type: 21-->
        
        <div class="col-sm-12" id="wrap12" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p><b>An augmented human is intimidating.</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="12" id="field12"><span id="radiobutton121" class="custom-radio radiobuttons12"
                        onclick="changeRadio(1,12);"></span><span id="radiobutton122" class="custom-radio radiobuttons12"
                        onclick="changeRadio(2,12);"></span><span id="radiobutton123" class="custom-radio radiobuttons12"
                        onclick="changeRadio(3,12);"></span><span id="radiobutton124" class="custom-radio radiobuttons12"
                        onclick="changeRadio(4,12);"></span><span id="radiobutton125" class="custom-radio radiobuttons12"
                        onclick="changeRadio(5,12);"></span><span id="radiobutton126" class="custom-radio radiobuttons12"
                        onclick="changeRadio(6,12);"></span><span id="radiobutton127" class="custom-radio radiobuttons12"
                        onclick="changeRadio(7,12);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Very much</td></tr></table></div><div id="field12_noEntry" class="messagefield12 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field12_notcorrect" class="messagefield12 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var s3=null;            

                  var k=0;

                  function checkValue_field12() {
                 var label="s3";var min=1;var max=7;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_s3 !== 'undefined') { value=bot_s3; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field12").val(); }
                    
                    $('.messagefield12').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field12_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field12_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("s3", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['s3']=1;
                      totalwronganswers['s3'] = isNaN(totalwronganswers['s3']) ? 1 : parseInt(totalwronganswers['s3'])+1; 
             
                   } else wronganswers['s3']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap12').show(); } </script><!-- END Element 12 Type: 21-->
        
        <!-- START Element 13 Type: 21-->
        
        <div class="col-sm-12" id="wrap13" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p><b>An augmented human would conform to the traditions of society.</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="13" id="field13"><span id="radiobutton131" class="custom-radio radiobuttons13"
                        onclick="changeRadio(1,13);"></span><span id="radiobutton132" class="custom-radio radiobuttons13"
                        onclick="changeRadio(2,13);"></span><span id="radiobutton133" class="custom-radio radiobuttons13"
                        onclick="changeRadio(3,13);"></span><span id="radiobutton134" class="custom-radio radiobuttons13"
                        onclick="changeRadio(4,13);"></span><span id="radiobutton135" class="custom-radio radiobuttons13"
                        onclick="changeRadio(5,13);"></span><span id="radiobutton136" class="custom-radio radiobuttons13"
                        onclick="changeRadio(6,13);"></span><span id="radiobutton137" class="custom-radio radiobuttons13"
                        onclick="changeRadio(7,13);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Very much</td></tr></table></div><div id="field13_noEntry" class="messagefield13 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field13_notcorrect" class="messagefield13 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var s4=null;            

                  var k=0;

                  function checkValue_field13() {
                 var label="s4";var min=1;var max=7;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_s4 !== 'undefined') { value=bot_s4; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field13").val(); }
                    
                    $('.messagefield13').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field13_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field13_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("s4", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['s4']=1;
                      totalwronganswers['s4'] = isNaN(totalwronganswers['s4']) ? 1 : parseInt(totalwronganswers['s4'])+1; 
             
                   } else wronganswers['s4']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap13').show(); } </script><!-- END Element 13 Type: 21-->
        
        <!-- START Element 14 Type: 21-->
        
        <div class="col-sm-12" id="wrap14" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p><b>An augmented human has to disclose their augmentation.</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="14" id="field14"><span id="radiobutton141" class="custom-radio radiobuttons14"
                        onclick="changeRadio(1,14);"></span><span id="radiobutton142" class="custom-radio radiobuttons14"
                        onclick="changeRadio(2,14);"></span><span id="radiobutton143" class="custom-radio radiobuttons14"
                        onclick="changeRadio(3,14);"></span><span id="radiobutton144" class="custom-radio radiobuttons14"
                        onclick="changeRadio(4,14);"></span><span id="radiobutton145" class="custom-radio radiobuttons14"
                        onclick="changeRadio(5,14);"></span><span id="radiobutton146" class="custom-radio radiobuttons14"
                        onclick="changeRadio(6,14);"></span><span id="radiobutton147" class="custom-radio radiobuttons14"
                        onclick="changeRadio(7,14);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Very much</td></tr></table></div><div id="field14_noEntry" class="messagefield14 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field14_notcorrect" class="messagefield14 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var s5=null;            

                  var k=0;

                  function checkValue_field14() {
                 var label="s5";var min=1;var max=7;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_s5 !== 'undefined') { value=bot_s5; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field14").val(); }
                    
                    $('.messagefield14').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field14_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field14_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("s5", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['s5']=1;
                      totalwronganswers['s5'] = isNaN(totalwronganswers['s5']) ? 1 : parseInt(totalwronganswers['s5'])+1; 
             
                   } else wronganswers['s5']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap14').show(); } </script><!-- END Element 14 Type: 21-->
        
        <!-- START Element 15 Type: 21-->
        
        <div class="col-sm-12" id="wrap15" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p><b>An augmented human would do something cruel.</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="15" id="field15"><span id="radiobutton151" class="custom-radio radiobuttons15"
                        onclick="changeRadio(1,15);"></span><span id="radiobutton152" class="custom-radio radiobuttons15"
                        onclick="changeRadio(2,15);"></span><span id="radiobutton153" class="custom-radio radiobuttons15"
                        onclick="changeRadio(3,15);"></span><span id="radiobutton154" class="custom-radio radiobuttons15"
                        onclick="changeRadio(4,15);"></span><span id="radiobutton155" class="custom-radio radiobuttons15"
                        onclick="changeRadio(5,15);"></span><span id="radiobutton156" class="custom-radio radiobuttons15"
                        onclick="changeRadio(6,15);"></span><span id="radiobutton157" class="custom-radio radiobuttons15"
                        onclick="changeRadio(7,15);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Very much</td></tr></table></div><div id="field15_noEntry" class="messagefield15 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field15_notcorrect" class="messagefield15 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var s6=null;            

                  var k=0;

                  function checkValue_field15() {
                 var label="s6";var min=1;var max=7;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_s6 !== 'undefined') { value=bot_s6; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field15").val(); }
                    
                    $('.messagefield15').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field15_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field15_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("s6", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['s6']=1;
                      totalwronganswers['s6'] = isNaN(totalwronganswers['s6']) ? 1 : parseInt(totalwronganswers['s6'])+1; 
             
                   } else wronganswers['s6']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap15').show(); } </script><!-- END Element 15 Type: 21-->
        
        <!-- START Element 16 Type: 21-->
        
        <div class="col-sm-12" id="wrap16" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p><b>An augmented human is more competitive than a non-augmented human.</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="16" id="field16"><span id="radiobutton161" class="custom-radio radiobuttons16"
                        onclick="changeRadio(1,16);"></span><span id="radiobutton162" class="custom-radio radiobuttons16"
                        onclick="changeRadio(2,16);"></span><span id="radiobutton163" class="custom-radio radiobuttons16"
                        onclick="changeRadio(3,16);"></span><span id="radiobutton164" class="custom-radio radiobuttons16"
                        onclick="changeRadio(4,16);"></span><span id="radiobutton165" class="custom-radio radiobuttons16"
                        onclick="changeRadio(5,16);"></span><span id="radiobutton166" class="custom-radio radiobuttons16"
                        onclick="changeRadio(6,16);"></span><span id="radiobutton167" class="custom-radio radiobuttons16"
                        onclick="changeRadio(7,16);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Very much</td></tr></table></div><div id="field16_noEntry" class="messagefield16 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field16_notcorrect" class="messagefield16 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var s7=null;            

                  var k=0;

                  function checkValue_field16() {
                 var label="s7";var min=1;var max=7;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_s7 !== 'undefined') { value=bot_s7; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field16").val(); }
                    
                    $('.messagefield16').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field16_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field16_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("s7", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['s7']=1;
                      totalwronganswers['s7'] = isNaN(totalwronganswers['s7']) ? 1 : parseInt(totalwronganswers['s7'])+1; 
             
                   } else wronganswers['s7']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap16').show(); } </script><!-- END Element 16 Type: 21-->
        
        <!-- START Element 17 Type: 21-->
        
        <div class="col-sm-12" id="wrap17" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p><b>The actions of the augmented human do not match their intentions.</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="17" id="field17"><span id="radiobutton171" class="custom-radio radiobuttons17"
                        onclick="changeRadio(1,17);"></span><span id="radiobutton172" class="custom-radio radiobuttons17"
                        onclick="changeRadio(2,17);"></span><span id="radiobutton173" class="custom-radio radiobuttons17"
                        onclick="changeRadio(3,17);"></span><span id="radiobutton174" class="custom-radio radiobuttons17"
                        onclick="changeRadio(4,17);"></span><span id="radiobutton175" class="custom-radio radiobuttons17"
                        onclick="changeRadio(5,17);"></span><span id="radiobutton176" class="custom-radio radiobuttons17"
                        onclick="changeRadio(6,17);"></span><span id="radiobutton177" class="custom-radio radiobuttons17"
                        onclick="changeRadio(7,17);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Very much</td></tr></table></div><div id="field17_noEntry" class="messagefield17 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field17_notcorrect" class="messagefield17 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var s8=null;            

                  var k=0;

                  function checkValue_field17() {
                 var label="s8";var min=1;var max=7;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_s8 !== 'undefined') { value=bot_s8; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field17").val(); }
                    
                    $('.messagefield17').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field17_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field17_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("s8", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['s8']=1;
                      totalwronganswers['s8'] = isNaN(totalwronganswers['s8']) ? 1 : parseInt(totalwronganswers['s8'])+1; 
             
                   } else wronganswers['s8']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap17').show(); } </script><!-- END Element 17 Type: 21-->
        
        <!-- START Element 18 Type: 21-->
        
        <div class="col-sm-12" id="wrap18" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p><b>An augmented human is not the author of their own actions.</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="18" id="field18"><span id="radiobutton181" class="custom-radio radiobuttons18"
                        onclick="changeRadio(1,18);"></span><span id="radiobutton182" class="custom-radio radiobuttons18"
                        onclick="changeRadio(2,18);"></span><span id="radiobutton183" class="custom-radio radiobuttons18"
                        onclick="changeRadio(3,18);"></span><span id="radiobutton184" class="custom-radio radiobuttons18"
                        onclick="changeRadio(4,18);"></span><span id="radiobutton185" class="custom-radio radiobuttons18"
                        onclick="changeRadio(5,18);"></span><span id="radiobutton186" class="custom-radio radiobuttons18"
                        onclick="changeRadio(6,18);"></span><span id="radiobutton187" class="custom-radio radiobuttons18"
                        onclick="changeRadio(7,18);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Very much</td></tr></table></div><div id="field18_noEntry" class="messagefield18 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field18_notcorrect" class="messagefield18 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var s9=null;            

                  var k=0;

                  function checkValue_field18() {
                 var label="s9";var min=1;var max=7;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_s9 !== 'undefined') { value=bot_s9; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field18").val(); }
                    
                    $('.messagefield18').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field18_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field18_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("s9", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['s9']=1;
                      totalwronganswers['s9'] = isNaN(totalwronganswers['s9']) ? 1 : parseInt(totalwronganswers['s9'])+1; 
             
                   } else wronganswers['s9']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap18').show(); } </script><!-- END Element 18 Type: 21-->
        
        <!-- START Element 19 Type: 21-->
        
        <div class="col-sm-12" id="wrap19" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p><b>An augmented human is just an instrument of something or somebody else.</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="19" id="field19"><span id="radiobutton191" class="custom-radio radiobuttons19"
                        onclick="changeRadio(1,19);"></span><span id="radiobutton192" class="custom-radio radiobuttons19"
                        onclick="changeRadio(2,19);"></span><span id="radiobutton193" class="custom-radio radiobuttons19"
                        onclick="changeRadio(3,19);"></span><span id="radiobutton194" class="custom-radio radiobuttons19"
                        onclick="changeRadio(4,19);"></span><span id="radiobutton195" class="custom-radio radiobuttons19"
                        onclick="changeRadio(5,19);"></span><span id="radiobutton196" class="custom-radio radiobuttons19"
                        onclick="changeRadio(6,19);"></span><span id="radiobutton197" class="custom-radio radiobuttons19"
                        onclick="changeRadio(7,19);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Very much</td></tr></table></div><div id="field19_noEntry" class="messagefield19 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field19_notcorrect" class="messagefield19 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var s10=null;            

                  var k=0;

                  function checkValue_field19() {
                 var label="s10";var min=1;var max=7;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_s10 !== 'undefined') { value=bot_s10; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field19").val(); }
                    
                    $('.messagefield19').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field19_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field19_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("s10", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['s10']=1;
                      totalwronganswers['s10'] = isNaN(totalwronganswers['s10']) ? 1 : parseInt(totalwronganswers['s10'])+1; 
             
                   } else wronganswers['s10']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap19').show(); } </script><!-- END Element 19 Type: 21-->
        
        <!-- START Element 20 Type: 21-->
        
        <div class="col-sm-12" id="wrap20" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p><b>An augmented human does things without any intention.</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="20" id="field20"><span id="radiobutton201" class="custom-radio radiobuttons20"
                        onclick="changeRadio(1,20);"></span><span id="radiobutton202" class="custom-radio radiobuttons20"
                        onclick="changeRadio(2,20);"></span><span id="radiobutton203" class="custom-radio radiobuttons20"
                        onclick="changeRadio(3,20);"></span><span id="radiobutton204" class="custom-radio radiobuttons20"
                        onclick="changeRadio(4,20);"></span><span id="radiobutton205" class="custom-radio radiobuttons20"
                        onclick="changeRadio(5,20);"></span><span id="radiobutton206" class="custom-radio radiobuttons20"
                        onclick="changeRadio(6,20);"></span><span id="radiobutton207" class="custom-radio radiobuttons20"
                        onclick="changeRadio(7,20);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Very much</td></tr></table></div><div id="field20_noEntry" class="messagefield20 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field20_notcorrect" class="messagefield20 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var s11=null;            

                  var k=0;

                  function checkValue_field20() {
                 var label="s11";var min=1;var max=7;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_s11 !== 'undefined') { value=bot_s11; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field20").val(); }
                    
                    $('.messagefield20').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field20_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field20_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("s11", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['s11']=1;
                      totalwronganswers['s11'] = isNaN(totalwronganswers['s11']) ? 1 : parseInt(totalwronganswers['s11'])+1; 
             
                   } else wronganswers['s11']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap20').show(); } </script><!-- END Element 20 Type: 21-->
        
        <!-- START Element 21 Type: 21-->
        
        <div class="col-sm-12" id="wrap21" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p><b>An augmented human suffering through their augmentation should get help.</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="21" id="field21"><span id="radiobutton211" class="custom-radio radiobuttons21"
                        onclick="changeRadio(1,21);"></span><span id="radiobutton212" class="custom-radio radiobuttons21"
                        onclick="changeRadio(2,21);"></span><span id="radiobutton213" class="custom-radio radiobuttons21"
                        onclick="changeRadio(3,21);"></span><span id="radiobutton214" class="custom-radio radiobuttons21"
                        onclick="changeRadio(4,21);"></span><span id="radiobutton215" class="custom-radio radiobuttons21"
                        onclick="changeRadio(5,21);"></span><span id="radiobutton216" class="custom-radio radiobuttons21"
                        onclick="changeRadio(6,21);"></span><span id="radiobutton217" class="custom-radio radiobuttons21"
                        onclick="changeRadio(7,21);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Very much</td></tr></table></div><div id="field21_noEntry" class="messagefield21 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field21_notcorrect" class="messagefield21 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var s12=null;            

                  var k=0;

                  function checkValue_field21() {
                 var label="s12";var min=1;var max=7;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_s12 !== 'undefined') { value=bot_s12; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field21").val(); }
                    
                    $('.messagefield21').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field21_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field21_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("s12", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['s12']=1;
                      totalwronganswers['s12'] = isNaN(totalwronganswers['s12']) ? 1 : parseInt(totalwronganswers['s12'])+1; 
             
                   } else wronganswers['s12']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap21').show(); } </script><!-- END Element 21 Type: 21-->
        
        <!-- START Element 22 Type: 21-->
        
        <div class="col-sm-12" id="wrap22" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p><b>An augmented human is in full control of what they do.</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="22" id="field22"><span id="radiobutton221" class="custom-radio radiobuttons22"
                        onclick="changeRadio(1,22);"></span><span id="radiobutton222" class="custom-radio radiobuttons22"
                        onclick="changeRadio(2,22);"></span><span id="radiobutton223" class="custom-radio radiobuttons22"
                        onclick="changeRadio(3,22);"></span><span id="radiobutton224" class="custom-radio radiobuttons22"
                        onclick="changeRadio(4,22);"></span><span id="radiobutton225" class="custom-radio radiobuttons22"
                        onclick="changeRadio(5,22);"></span><span id="radiobutton226" class="custom-radio radiobuttons22"
                        onclick="changeRadio(6,22);"></span><span id="radiobutton227" class="custom-radio radiobuttons22"
                        onclick="changeRadio(7,22);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Very much</td></tr></table></div><div id="field22_noEntry" class="messagefield22 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field22_notcorrect" class="messagefield22 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var s13=null;            

                  var k=0;

                  function checkValue_field22() {
                 var label="s13";var min=1;var max=7;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_s13 !== 'undefined') { value=bot_s13; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field22").val(); }
                    
                    $('.messagefield22').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field22_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field22_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("s13", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['s13']=1;
                      totalwronganswers['s13'] = isNaN(totalwronganswers['s13']) ? 1 : parseInt(totalwronganswers['s13'])+1; 
             
                   } else wronganswers['s13']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap22').show(); } </script><!-- END Element 22 Type: 21-->
        
        <!-- START Element 23 Type: 1-->
        
        <div class="col-sm-4" id="wrap23" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"></div>
        </div><script>if((true)) { $('#wrap23').show(); } </script><!-- END Element 23 Type: 1-->
        
        <!-- START Element 24 Type: 1-->
        
        <div class="col-sm-6" id="wrap24" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: left;"><br></h3>
<h1 style="text-align: left; "><strong>Part 3&nbsp;</strong></h1><p style="text-align: left; font-size: larger;">Considering the <b>overall game interaction</b>, how adequate do you find the following attributes to describe your partner?</p></div>
        </div><script>if((true)) { $('#wrap24').show(); } </script><!-- END Element 24 Type: 1-->
        
        <!-- START Element 25 Type: 1-->
        
        <div class="col-sm-4" id="wrap25" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"></div>
        </div><script>if((true)) { $('#wrap25').show(); } </script><!-- END Element 25 Type: 1-->
        
        <!-- START Element 26 Type: 21-->
        
        <div class="col-sm-12" id="wrap26" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p style="text-align: center;"><span style="background-color: rgba(223, 240, 216, 0); font-size: 16.8px; font-weight: bold;">Competence</span><br></p>
<b>How competent did you perceive your partner?</b></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="26" id="field26"><span id="radiobutton261" class="custom-radio radiobuttons26"
                        onclick="changeRadio(1,26);"></span><span id="radiobutton262" class="custom-radio radiobuttons26"
                        onclick="changeRadio(2,26);"></span><span id="radiobutton263" class="custom-radio radiobuttons26"
                        onclick="changeRadio(3,26);"></span><span id="radiobutton264" class="custom-radio radiobuttons26"
                        onclick="changeRadio(4,26);"></span><span id="radiobutton265" class="custom-radio radiobuttons26"
                        onclick="changeRadio(5,26);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Extremely</td></tr></table></div><div id="field26_noEntry" class="messagefield26 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field26_notcorrect" class="messagefield26 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var comc1=null;            

                  var k=0;

                  function checkValue_field26() {
                 var label="comc1";var min=1;var max=5;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_comc1 !== 'undefined') { value=bot_comc1; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field26").val(); }
                    
                    $('.messagefield26').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field26_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field26_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("comc1", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['comc1']=1;
                      totalwronganswers['comc1'] = isNaN(totalwronganswers['comc1']) ? 1 : parseInt(totalwronganswers['comc1'])+1; 
             
                   } else wronganswers['comc1']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap26').show(); } </script><!-- END Element 26 Type: 21-->
        
        <!-- START Element 27 Type: 21-->
        
        <div class="col-sm-12" id="wrap27" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p><b>How confident did you perceive your partner?</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="27" id="field27"><span id="radiobutton271" class="custom-radio radiobuttons27"
                        onclick="changeRadio(1,27);"></span><span id="radiobutton272" class="custom-radio radiobuttons27"
                        onclick="changeRadio(2,27);"></span><span id="radiobutton273" class="custom-radio radiobuttons27"
                        onclick="changeRadio(3,27);"></span><span id="radiobutton274" class="custom-radio radiobuttons27"
                        onclick="changeRadio(4,27);"></span><span id="radiobutton275" class="custom-radio radiobuttons27"
                        onclick="changeRadio(5,27);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Extremely</td></tr></table></div><div id="field27_noEntry" class="messagefield27 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field27_notcorrect" class="messagefield27 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var comc2=null;            

                  var k=0;

                  function checkValue_field27() {
                 var label="comc2";var min=1;var max=5;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_comc2 !== 'undefined') { value=bot_comc2; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field27").val(); }
                    
                    $('.messagefield27').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field27_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field27_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("comc2", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['comc2']=1;
                      totalwronganswers['comc2'] = isNaN(totalwronganswers['comc2']) ? 1 : parseInt(totalwronganswers['comc2'])+1; 
             
                   } else wronganswers['comc2']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap27').show(); } </script><!-- END Element 27 Type: 21-->
        
        <!-- START Element 28 Type: 21-->
        
        <div class="col-sm-12" id="wrap28" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p><b>How independent did you perceive your partner?</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="28" id="field28"><span id="radiobutton281" class="custom-radio radiobuttons28"
                        onclick="changeRadio(1,28);"></span><span id="radiobutton282" class="custom-radio radiobuttons28"
                        onclick="changeRadio(2,28);"></span><span id="radiobutton283" class="custom-radio radiobuttons28"
                        onclick="changeRadio(3,28);"></span><span id="radiobutton284" class="custom-radio radiobuttons28"
                        onclick="changeRadio(4,28);"></span><span id="radiobutton285" class="custom-radio radiobuttons28"
                        onclick="changeRadio(5,28);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Extremely</td></tr></table></div><div id="field28_noEntry" class="messagefield28 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field28_notcorrect" class="messagefield28 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var comc3=null;            

                  var k=0;

                  function checkValue_field28() {
                 var label="comc3";var min=1;var max=5;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_comc3 !== 'undefined') { value=bot_comc3; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field28").val(); }
                    
                    $('.messagefield28').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field28_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field28_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("comc3", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['comc3']=1;
                      totalwronganswers['comc3'] = isNaN(totalwronganswers['comc3']) ? 1 : parseInt(totalwronganswers['comc3'])+1; 
             
                   } else wronganswers['comc3']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap28').show(); } </script><!-- END Element 28 Type: 21-->
        
        <!-- START Element 29 Type: 21-->
        
        <div class="col-sm-12" id="wrap29" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p><b>How intelligent did you perceive your partner?</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="29" id="field29"><span id="radiobutton291" class="custom-radio radiobuttons29"
                        onclick="changeRadio(1,29);"></span><span id="radiobutton292" class="custom-radio radiobuttons29"
                        onclick="changeRadio(2,29);"></span><span id="radiobutton293" class="custom-radio radiobuttons29"
                        onclick="changeRadio(3,29);"></span><span id="radiobutton294" class="custom-radio radiobuttons29"
                        onclick="changeRadio(4,29);"></span><span id="radiobutton295" class="custom-radio radiobuttons29"
                        onclick="changeRadio(5,29);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Extremely</td></tr></table></div><div id="field29_noEntry" class="messagefield29 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field29_notcorrect" class="messagefield29 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var comc4=null;            

                  var k=0;

                  function checkValue_field29() {
                 var label="comc4";var min=1;var max=5;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_comc4 !== 'undefined') { value=bot_comc4; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field29").val(); }
                    
                    $('.messagefield29').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field29_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field29_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("comc4", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['comc4']=1;
                      totalwronganswers['comc4'] = isNaN(totalwronganswers['comc4']) ? 1 : parseInt(totalwronganswers['comc4'])+1; 
             
                   } else wronganswers['comc4']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap29').show(); } </script><!-- END Element 29 Type: 21-->
        
        <!-- START Element 30 Type: 21-->
        
        <div class="col-sm-12" id="wrap30" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p><b>How capable did you perceive your partner?</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="30" id="field30"><span id="radiobutton301" class="custom-radio radiobuttons30"
                        onclick="changeRadio(1,30);"></span><span id="radiobutton302" class="custom-radio radiobuttons30"
                        onclick="changeRadio(2,30);"></span><span id="radiobutton303" class="custom-radio radiobuttons30"
                        onclick="changeRadio(3,30);"></span><span id="radiobutton304" class="custom-radio radiobuttons30"
                        onclick="changeRadio(4,30);"></span><span id="radiobutton305" class="custom-radio radiobuttons30"
                        onclick="changeRadio(5,30);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Extremely</td></tr></table></div><div id="field30_noEntry" class="messagefield30 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field30_notcorrect" class="messagefield30 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var comc5=null;            

                  var k=0;

                  function checkValue_field30() {
                 var label="comc5";var min=1;var max=5;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_comc5 !== 'undefined') { value=bot_comc5; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field30").val(); }
                    
                    $('.messagefield30').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field30_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field30_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("comc5", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['comc5']=1;
                      totalwronganswers['comc5'] = isNaN(totalwronganswers['comc5']) ? 1 : parseInt(totalwronganswers['comc5'])+1; 
             
                   } else wronganswers['comc5']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap30').show(); } </script><!-- END Element 30 Type: 21-->
        
        <!-- START Element 31 Type: 21-->
        
        <div class="col-sm-12" id="wrap31" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p><b>How skillful did you perceive your partner?</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="31" id="field31"><span id="radiobutton311" class="custom-radio radiobuttons31"
                        onclick="changeRadio(1,31);"></span><span id="radiobutton312" class="custom-radio radiobuttons31"
                        onclick="changeRadio(2,31);"></span><span id="radiobutton313" class="custom-radio radiobuttons31"
                        onclick="changeRadio(3,31);"></span><span id="radiobutton314" class="custom-radio radiobuttons31"
                        onclick="changeRadio(4,31);"></span><span id="radiobutton315" class="custom-radio radiobuttons31"
                        onclick="changeRadio(5,31);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Extremely</td></tr></table></div><div id="field31_noEntry" class="messagefield31 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field31_notcorrect" class="messagefield31 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var comc7=null;            

                  var k=0;

                  function checkValue_field31() {
                 var label="comc7";var min=1;var max=5;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_comc7 !== 'undefined') { value=bot_comc7; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field31").val(); }
                    
                    $('.messagefield31').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field31_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field31_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("comc7", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['comc7']=1;
                      totalwronganswers['comc7'] = isNaN(totalwronganswers['comc7']) ? 1 : parseInt(totalwronganswers['comc7'])+1; 
             
                   } else wronganswers['comc7']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap31').show(); } </script><!-- END Element 31 Type: 21-->
        
        <!-- START Element 32 Type: 21-->
        
        <div class="col-sm-12" id="wrap32" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p><b>How efficient did you perceive your partner?</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="32" id="field32"><span id="radiobutton321" class="custom-radio radiobuttons32"
                        onclick="changeRadio(1,32);"></span><span id="radiobutton322" class="custom-radio radiobuttons32"
                        onclick="changeRadio(2,32);"></span><span id="radiobutton323" class="custom-radio radiobuttons32"
                        onclick="changeRadio(3,32);"></span><span id="radiobutton324" class="custom-radio radiobuttons32"
                        onclick="changeRadio(4,32);"></span><span id="radiobutton325" class="custom-radio radiobuttons32"
                        onclick="changeRadio(5,32);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Extremely</td></tr></table></div><div id="field32_noEntry" class="messagefield32 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field32_notcorrect" class="messagefield32 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var comc6=null;            

                  var k=0;

                  function checkValue_field32() {
                 var label="comc6";var min=1;var max=5;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_comc6 !== 'undefined') { value=bot_comc6; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field32").val(); }
                    
                    $('.messagefield32').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field32_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field32_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("comc6", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['comc6']=1;
                      totalwronganswers['comc6'] = isNaN(totalwronganswers['comc6']) ? 1 : parseInt(totalwronganswers['comc6'])+1; 
             
                   } else wronganswers['comc6']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap32').show(); } </script><!-- END Element 32 Type: 21-->
        
        <!-- START Element 33 Type: 1-->
        
        <div class="col-sm-4" id="wrap33" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"></div>
        </div><script>if((true)) { $('#wrap33').show(); } </script><!-- END Element 33 Type: 1-->
        
        <!-- START Element 34 Type: 21-->
        
        <div class="col-sm-12" id="wrap34" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p style="text-align: center;"><span style="font-weight: bold; background-color: rgba(223, 240, 216, 0); font-size: 16.8px;"><br></span></p><p style="text-align: center;"><span style="font-weight: bold; background-color: rgba(223, 240, 216, 0); font-size: 16.8px;">Status</span><br></p>
<b>How well-educated did you perceive your partner?</b></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="34" id="field34"><span id="radiobutton341" class="custom-radio radiobuttons34"
                        onclick="changeRadio(1,34);"></span><span id="radiobutton342" class="custom-radio radiobuttons34"
                        onclick="changeRadio(2,34);"></span><span id="radiobutton343" class="custom-radio radiobuttons34"
                        onclick="changeRadio(3,34);"></span><span id="radiobutton344" class="custom-radio radiobuttons34"
                        onclick="changeRadio(4,34);"></span><span id="radiobutton345" class="custom-radio radiobuttons34"
                        onclick="changeRadio(5,34);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Extremely</td></tr></table></div><div id="field34_noEntry" class="messagefield34 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field34_notcorrect" class="messagefield34 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var stat1=null;            

                  var k=0;

                  function checkValue_field34() {
                 var label="stat1";var min=1;var max=5;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_stat1 !== 'undefined') { value=bot_stat1; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field34").val(); }
                    
                    $('.messagefield34').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field34_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field34_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("stat1", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['stat1']=1;
                      totalwronganswers['stat1'] = isNaN(totalwronganswers['stat1']) ? 1 : parseInt(totalwronganswers['stat1'])+1; 
             
                   } else wronganswers['stat1']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap34').show(); } </script><!-- END Element 34 Type: 21-->
        
        <!-- START Element 35 Type: 21-->
        
        <div class="col-sm-12" id="wrap35" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p><b>How economically successful did you perceive your partner?</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="35" id="field35"><span id="radiobutton351" class="custom-radio radiobuttons35"
                        onclick="changeRadio(1,35);"></span><span id="radiobutton352" class="custom-radio radiobuttons35"
                        onclick="changeRadio(2,35);"></span><span id="radiobutton353" class="custom-radio radiobuttons35"
                        onclick="changeRadio(3,35);"></span><span id="radiobutton354" class="custom-radio radiobuttons35"
                        onclick="changeRadio(4,35);"></span><span id="radiobutton355" class="custom-radio radiobuttons35"
                        onclick="changeRadio(5,35);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Extremely</td></tr></table></div><div id="field35_noEntry" class="messagefield35 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field35_notcorrect" class="messagefield35 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var stat2=null;            

                  var k=0;

                  function checkValue_field35() {
                 var label="stat2";var min=1;var max=5;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_stat2 !== 'undefined') { value=bot_stat2; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field35").val(); }
                    
                    $('.messagefield35').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field35_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field35_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("stat2", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['stat2']=1;
                      totalwronganswers['stat2'] = isNaN(totalwronganswers['stat2']) ? 1 : parseInt(totalwronganswers['stat2'])+1; 
             
                   } else wronganswers['stat2']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap35').show(); } </script><!-- END Element 35 Type: 21-->
        
        <!-- START Element 36 Type: 21-->
        
        <div class="col-sm-12" id="wrap36" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p><b>How prestigious do you think is your partner&#039;s job?</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="36" id="field36"><span id="radiobutton361" class="custom-radio radiobuttons36"
                        onclick="changeRadio(1,36);"></span><span id="radiobutton362" class="custom-radio radiobuttons36"
                        onclick="changeRadio(2,36);"></span><span id="radiobutton363" class="custom-radio radiobuttons36"
                        onclick="changeRadio(3,36);"></span><span id="radiobutton364" class="custom-radio radiobuttons36"
                        onclick="changeRadio(4,36);"></span><span id="radiobutton365" class="custom-radio radiobuttons36"
                        onclick="changeRadio(5,36);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Extremely</td></tr></table></div><div id="field36_noEntry" class="messagefield36 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field36_notcorrect" class="messagefield36 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var stat3=null;            

                  var k=0;

                  function checkValue_field36() {
                 var label="stat3";var min=1;var max=5;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_stat3 !== 'undefined') { value=bot_stat3; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field36").val(); }
                    
                    $('.messagefield36').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field36_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field36_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("stat3", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['stat3']=1;
                      totalwronganswers['stat3'] = isNaN(totalwronganswers['stat3']) ? 1 : parseInt(totalwronganswers['stat3'])+1; 
             
                   } else wronganswers['stat3']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap36').show(); } </script><!-- END Element 36 Type: 21-->
        
        <!-- START Element 37 Type: 21-->
        
        <div class="col-sm-12" id="wrap37" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p style="text-align: center;"><span style="font-weight: bold; background-color: rgba(223, 240, 216, 0); font-size: 16.8px;"><br></span></p><p style="text-align: center;"><span style="font-weight: bold; background-color: rgba(223, 240, 216, 0); font-size: 16.8px;">Warmth</span><br></p>
<b>How warm did you perceive your partner?</b></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="37" id="field37"><span id="radiobutton371" class="custom-radio radiobuttons37"
                        onclick="changeRadio(1,37);"></span><span id="radiobutton372" class="custom-radio radiobuttons37"
                        onclick="changeRadio(2,37);"></span><span id="radiobutton373" class="custom-radio radiobuttons37"
                        onclick="changeRadio(3,37);"></span><span id="radiobutton374" class="custom-radio radiobuttons37"
                        onclick="changeRadio(4,37);"></span><span id="radiobutton375" class="custom-radio radiobuttons37"
                        onclick="changeRadio(5,37);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Extremely</td></tr></table></div><div id="field37_noEntry" class="messagefield37 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field37_notcorrect" class="messagefield37 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var warm1=null;            

                  var k=0;

                  function checkValue_field37() {
                 var label="warm1";var min=1;var max=5;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_warm1 !== 'undefined') { value=bot_warm1; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field37").val(); }
                    
                    $('.messagefield37').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field37_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field37_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("warm1", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['warm1']=1;
                      totalwronganswers['warm1'] = isNaN(totalwronganswers['warm1']) ? 1 : parseInt(totalwronganswers['warm1'])+1; 
             
                   } else wronganswers['warm1']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap37').show(); } </script><!-- END Element 37 Type: 21-->
        
        <!-- START Element 38 Type: 21-->
        
        <div class="col-sm-12" id="wrap38" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p style="text-align: center;"><b style="font-family: inherit; background-color: rgba(223, 240, 216, 0);">How friendly did you perceive your partner?</b><br></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="38" id="field38"><span id="radiobutton381" class="custom-radio radiobuttons38"
                        onclick="changeRadio(1,38);"></span><span id="radiobutton382" class="custom-radio radiobuttons38"
                        onclick="changeRadio(2,38);"></span><span id="radiobutton383" class="custom-radio radiobuttons38"
                        onclick="changeRadio(3,38);"></span><span id="radiobutton384" class="custom-radio radiobuttons38"
                        onclick="changeRadio(4,38);"></span><span id="radiobutton385" class="custom-radio radiobuttons38"
                        onclick="changeRadio(5,38);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Extremely</td></tr></table></div><div id="field38_noEntry" class="messagefield38 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field38_notcorrect" class="messagefield38 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var warm2=null;            

                  var k=0;

                  function checkValue_field38() {
                 var label="warm2";var min=1;var max=5;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_warm2 !== 'undefined') { value=bot_warm2; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field38").val(); }
                    
                    $('.messagefield38').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field38_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field38_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("warm2", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['warm2']=1;
                      totalwronganswers['warm2'] = isNaN(totalwronganswers['warm2']) ? 1 : parseInt(totalwronganswers['warm2'])+1; 
             
                   } else wronganswers['warm2']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap38').show(); } </script><!-- END Element 38 Type: 21-->
        
        <!-- START Element 39 Type: 21-->
        
        <div class="col-sm-12" id="wrap39" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p style="text-align: center;"><b style="font-family: inherit; background-color: rgba(223, 240, 216, 0);">How well-intentioned did you perceive your partner?</b><br></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="39" id="field39"><span id="radiobutton391" class="custom-radio radiobuttons39"
                        onclick="changeRadio(1,39);"></span><span id="radiobutton392" class="custom-radio radiobuttons39"
                        onclick="changeRadio(2,39);"></span><span id="radiobutton393" class="custom-radio radiobuttons39"
                        onclick="changeRadio(3,39);"></span><span id="radiobutton394" class="custom-radio radiobuttons39"
                        onclick="changeRadio(4,39);"></span><span id="radiobutton395" class="custom-radio radiobuttons39"
                        onclick="changeRadio(5,39);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Extremely</td></tr></table></div><div id="field39_noEntry" class="messagefield39 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field39_notcorrect" class="messagefield39 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var warm3=null;            

                  var k=0;

                  function checkValue_field39() {
                 var label="warm3";var min=1;var max=5;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_warm3 !== 'undefined') { value=bot_warm3; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field39").val(); }
                    
                    $('.messagefield39').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field39_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field39_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("warm3", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['warm3']=1;
                      totalwronganswers['warm3'] = isNaN(totalwronganswers['warm3']) ? 1 : parseInt(totalwronganswers['warm3'])+1; 
             
                   } else wronganswers['warm3']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap39').show(); } </script><!-- END Element 39 Type: 21-->
        
        <!-- START Element 40 Type: 21-->
        
        <div class="col-sm-12" id="wrap40" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p style="text-align: center;"><b style="font-family: inherit; background-color: rgba(223, 240, 216, 0);">How trustworthy did you perceive your partner?</b><br></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="40" id="field40"><span id="radiobutton401" class="custom-radio radiobuttons40"
                        onclick="changeRadio(1,40);"></span><span id="radiobutton402" class="custom-radio radiobuttons40"
                        onclick="changeRadio(2,40);"></span><span id="radiobutton403" class="custom-radio radiobuttons40"
                        onclick="changeRadio(3,40);"></span><span id="radiobutton404" class="custom-radio radiobuttons40"
                        onclick="changeRadio(4,40);"></span><span id="radiobutton405" class="custom-radio radiobuttons40"
                        onclick="changeRadio(5,40);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Extremely</td></tr></table></div><div id="field40_noEntry" class="messagefield40 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field40_notcorrect" class="messagefield40 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var warm4=null;            

                  var k=0;

                  function checkValue_field40() {
                 var label="warm4";var min=1;var max=5;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_warm4 !== 'undefined') { value=bot_warm4; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field40").val(); }
                    
                    $('.messagefield40').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field40_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field40_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("warm4", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['warm4']=1;
                      totalwronganswers['warm4'] = isNaN(totalwronganswers['warm4']) ? 1 : parseInt(totalwronganswers['warm4'])+1; 
             
                   } else wronganswers['warm4']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap40').show(); } </script><!-- END Element 40 Type: 21-->
        
        <!-- START Element 41 Type: 21-->
        
        <div class="col-sm-12" id="wrap41" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p style="text-align: center;"><b style="font-family: inherit; background-color: rgba(223, 240, 216, 0);">How sincere did you perceive your partner?</b><br></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="41" id="field41"><span id="radiobutton411" class="custom-radio radiobuttons41"
                        onclick="changeRadio(1,41);"></span><span id="radiobutton412" class="custom-radio radiobuttons41"
                        onclick="changeRadio(2,41);"></span><span id="radiobutton413" class="custom-radio radiobuttons41"
                        onclick="changeRadio(3,41);"></span><span id="radiobutton414" class="custom-radio radiobuttons41"
                        onclick="changeRadio(4,41);"></span><span id="radiobutton415" class="custom-radio radiobuttons41"
                        onclick="changeRadio(5,41);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Extremely</td></tr></table></div><div id="field41_noEntry" class="messagefield41 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field41_notcorrect" class="messagefield41 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var warm5=null;            

                  var k=0;

                  function checkValue_field41() {
                 var label="warm5";var min=1;var max=5;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_warm5 !== 'undefined') { value=bot_warm5; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field41").val(); }
                    
                    $('.messagefield41').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field41_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field41_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("warm5", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['warm5']=1;
                      totalwronganswers['warm5'] = isNaN(totalwronganswers['warm5']) ? 1 : parseInt(totalwronganswers['warm5'])+1; 
             
                   } else wronganswers['warm5']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap41').show(); } </script><!-- END Element 41 Type: 21-->
        
        <!-- START Element 42 Type: 21-->
        
        <div class="col-sm-12" id="wrap42" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p style="text-align: center;"><b style="font-family: inherit; background-color: rgba(223, 240, 216, 0);">How likable did you perceive your partner?</b><br></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="42" id="field42"><span id="radiobutton421" class="custom-radio radiobuttons42"
                        onclick="changeRadio(1,42);"></span><span id="radiobutton422" class="custom-radio radiobuttons42"
                        onclick="changeRadio(2,42);"></span><span id="radiobutton423" class="custom-radio radiobuttons42"
                        onclick="changeRadio(3,42);"></span><span id="radiobutton424" class="custom-radio radiobuttons42"
                        onclick="changeRadio(4,42);"></span><span id="radiobutton425" class="custom-radio radiobuttons42"
                        onclick="changeRadio(5,42);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Extremely</td></tr></table></div><div id="field42_noEntry" class="messagefield42 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field42_notcorrect" class="messagefield42 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var warm6=null;            

                  var k=0;

                  function checkValue_field42() {
                 var label="warm6";var min=1;var max=5;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_warm6 !== 'undefined') { value=bot_warm6; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field42").val(); }
                    
                    $('.messagefield42').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field42_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field42_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("warm6", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['warm6']=1;
                      totalwronganswers['warm6'] = isNaN(totalwronganswers['warm6']) ? 1 : parseInt(totalwronganswers['warm6'])+1; 
             
                   } else wronganswers['warm6']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap42').show(); } </script><!-- END Element 42 Type: 21-->
        
        <!-- START Element 43 Type: 21-->
        
        <div class="col-sm-12" id="wrap43" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p style="text-align: center;"><span style="font-weight: bold; background-color: rgba(223, 240, 216, 0); font-size: 16.8px;"><br></span></p><p style="text-align: center;"><span style="font-weight: bold; background-color: rgba(223, 240, 216, 0); font-size: 16.8px;">Competition</span><br></p>
<p><b>Do you believe individuals who use AI assistants like chatbots for tasks such as job applications <br>might receive preferential treatment in hiring processes, potentially making it harder for those who don&#039;t use AI assistants?</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="43" id="field43"><span id="radiobutton431" class="custom-radio radiobuttons43"
                        onclick="changeRadio(1,43);"></span><span id="radiobutton432" class="custom-radio radiobuttons43"
                        onclick="changeRadio(2,43);"></span><span id="radiobutton433" class="custom-radio radiobuttons43"
                        onclick="changeRadio(3,43);"></span><span id="radiobutton434" class="custom-radio radiobuttons43"
                        onclick="changeRadio(4,43);"></span><span id="radiobutton435" class="custom-radio radiobuttons43"
                        onclick="changeRadio(5,43);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Extremely</td></tr></table></div><div id="field43_noEntry" class="messagefield43 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field43_notcorrect" class="messagefield43 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var compet1=null;            

                  var k=0;

                  function checkValue_field43() {
                 var label="compet1";var min=1;var max=5;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_compet1 !== 'undefined') { value=bot_compet1; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field43").val(); }
                    
                    $('.messagefield43').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field43_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field43_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("compet1", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['compet1']=1;
                      totalwronganswers['compet1'] = isNaN(totalwronganswers['compet1']) ? 1 : parseInt(totalwronganswers['compet1'])+1; 
             
                   } else wronganswers['compet1']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap43').show(); } </script><!-- END Element 43 Type: 21-->
        
        <!-- START Element 44 Type: 21-->
        
        <div class="col-sm-12" id="wrap44" style="display: none;"><div class="btnbox2"><div class="form-group"><label><p><b>When some individuals utilize AI assistants like chatbots, those who don&#039;t use such tools are likely to have less influence or control.</b></p></label><table class="table"
         rules="none" style="margin-left:auto;margin-right:auto;"><tr><td style="padding: 10px; text-align: right; font-size: small;vertical-align: bottom;">Not at all</td><td style="text-align: center;"><input type="hidden" value="" name="44" id="field44"><span id="radiobutton441" class="custom-radio radiobuttons44"
                        onclick="changeRadio(1,44);"></span><span id="radiobutton442" class="custom-radio radiobuttons44"
                        onclick="changeRadio(2,44);"></span><span id="radiobutton443" class="custom-radio radiobuttons44"
                        onclick="changeRadio(3,44);"></span><span id="radiobutton444" class="custom-radio radiobuttons44"
                        onclick="changeRadio(4,44);"></span><span id="radiobutton445" class="custom-radio radiobuttons44"
                        onclick="changeRadio(5,44);"></span><td style="padding: 10px; text-align: left;font-size: small; vertical-align: bottom; " >Extremely</td></tr></table></div><div id="field44_noEntry" class="messagefield44 alert alert-danger" style="display: none;">Please indicate your response </div><div id="field44_notcorrect" class="messagefield44 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div><script>var compet2=null;            

                  var k=0;

                  function checkValue_field44() {
                 var label="compet2";var min=1;var max=5;var default2=null;var required=1;var correct=null;if(!(true)) {
                  checker=checker+1;
                } else {
                    k++;
                     if (bot) { 
                       if (correct != null) { value = correct; }
                        else if (typeof bot_compet2 !== 'undefined') { value=bot_compet2; }
                        else { value=Math.floor(Math.random()*max)+min; }
                    }
                    else { value=$("#field44").val(); }
                    
                    $('.messagefield44').hide();
                       allcorrect=checker+1;
                      /* check if any entry has been made */
                      if ((isNaN(value) || value == "") && required==1) {
                          $('#field44_noEntry').show();
                      }
                      else if (value!=correct && correct != null && required!=0) {
                            $('#field44_notcorrect').show();
                        } 
                      else {
                          
           
                                 record("compet2", value);
                                 checker = checker+1;
                             }
                             
                             if (allcorrect!=checker) {
                      wronganswers['compet2']=1;
                      totalwronganswers['compet2'] = isNaN(totalwronganswers['compet2']) ? 1 : parseInt(totalwronganswers['compet2'])+1; 
             
                   } else wronganswers['compet2']=0;    
                         }
                    
                    
                }
              </script></div><script>if((true)) { $('#wrap44').show(); } </script><!-- END Element 44 Type: 21-->
        
        <!-- START Element 45 Type: 1-->
        
        <div class="col-sm-4" id="wrap45" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"></div>
        </div><script>if((true)) { $('#wrap45').show(); } </script><!-- END Element 45 Type: 1-->
        
        <!-- START Element 46 Type: 1-->
        
        <div class="col-sm-6" id="wrap46" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h3 style="text-align: left;"><br></h3>
<h1 style="text-align: left; "><strong>Part 4</strong></h1><p style="text-align: left; font-size: larger;">How would you evaluate the <b>decision making with the support of a chatbot</b>?</p></div>
        </div><script>if((role==2)) { $('#wrap46').show(); } </script><!-- END Element 46 Type: 1-->
        
        <!-- START Element 47 Type: 23-->
        
        <div class="col-sm-12" id="wrap47" style="display: none;"><div class="btnbox2"><div class="form-group "><input type="hidden" id="field47"><script>var g1=null;</script><div style="text-align: center"><label for="field47"><p><b>I believe the chatbot is a competent performer.</b></p></label></div><div
            id="button471"

            class="choicebuttons47 btn btn-default" onclick="$('.choicebuttons47').removeClass('btn-primary');
                            $('#button471').addClass('btn-primary');
                             g1=1;
                            $('#field47').val(1);">Strongly disagree</div><div
            id="button472"

            class="choicebuttons47 btn btn-default" onclick="$('.choicebuttons47').removeClass('btn-primary');
                            $('#button472').addClass('btn-primary');
                             g1=2;
                            $('#field47').val(2);">Disagree</div><div
            id="button473"

            class="choicebuttons47 btn btn-default" onclick="$('.choicebuttons47').removeClass('btn-primary');
                            $('#button473').addClass('btn-primary');
                             g1=3;
                            $('#field47').val(3);">Agree</div><div
            id="button474"

            class="choicebuttons47 btn btn-default" onclick="$('.choicebuttons47').removeClass('btn-primary');
                            $('#button474').addClass('btn-primary');
                             g1=4;
                            $('#field47').val(4);">Strongly agree</div><script>var g1_options = [1,2,3,4];
        </script><div id="field47_noEntry" class="messagefield47 alert alert-danger" style="display: none;">Please indicate your response.</div><div id="field47_notcorrect" class="messagefield47 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div></div><script>function checkValue_field47() {
           var label="g1";var required=0;var inline=0;var orderoptions=0;var graphical=1;var correct=null;var defaultvalue=null;var multiple=0;var options=null;var clicksave=0;
            if(!(role==2)) { checker=checker+1; } else {
                var value;
                if (bot) { 
                    if (correct != null) { value = correct; }
                    else if (typeof bot_g1 !== 'undefined') { value=bot_g1; }
                    else { 
                    var allvalues=["1","2","3","4"];
                    var index=Math.floor(Math.random()*allvalues.length); 
                    value=allvalues[index]; }
                }
                else {
                value=($('#field47').val()); 
                }
                                
                $('.messagefield47').hide();
                allcorrect=checker+1;
                if ((value === null || value == "") && required==1) {
                    $('#field47_noEntry').show();
                }
                else if (value!=correct && correct != null && required!=0) {
                            $('#field47_notcorrect').show();
                        }
                
                else {
                        

                       record("g1", value);

                            /* this variable is created in LionElementButton.class */
                           checker = checker+1;


                }
            
            if (allcorrect!=checker) {
                  wronganswers['g1']=1;
                       totalwronganswers['g1'] = isNaN(totalwronganswers['g1']) ? 1 : totalwronganswers['g1']+1; 
             
               } else wronganswers['g1']=0;
            
            
            }
            
            
            
         }



        </script></div><script>if((role==2)) { $('#wrap47').show(); } </script><!-- END Element 47 Type: 23-->
        
        <!-- START Element 48 Type: 23-->
        
        <div class="col-sm-12" id="wrap48" style="display: none;"><div class="btnbox2"><div class="form-group "><input type="hidden" id="field48"><script>var g2=null;</script><div style="text-align: center"><label for="field48"><p><b>I trust the chatbot.</b></p></label></div><div
            id="button481"

            class="choicebuttons48 btn btn-default" onclick="$('.choicebuttons48').removeClass('btn-primary');
                            $('#button481').addClass('btn-primary');
                             g2=1;
                            $('#field48').val(1);">Strongly disagree</div><div
            id="button482"

            class="choicebuttons48 btn btn-default" onclick="$('.choicebuttons48').removeClass('btn-primary');
                            $('#button482').addClass('btn-primary');
                             g2=2;
                            $('#field48').val(2);">Disagree</div><div
            id="button483"

            class="choicebuttons48 btn btn-default" onclick="$('.choicebuttons48').removeClass('btn-primary');
                            $('#button483').addClass('btn-primary');
                             g2=3;
                            $('#field48').val(3);">Agree</div><div
            id="button484"

            class="choicebuttons48 btn btn-default" onclick="$('.choicebuttons48').removeClass('btn-primary');
                            $('#button484').addClass('btn-primary');
                             g2=4;
                            $('#field48').val(4);">Strongly agree</div><script>var g2_options = [1,2,3,4];
        </script><div id="field48_noEntry" class="messagefield48 alert alert-danger" style="display: none;">Please indicate your response.</div><div id="field48_notcorrect" class="messagefield48 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div></div><script>function checkValue_field48() {
           var label="g2";var required=0;var inline=0;var orderoptions=0;var graphical=1;var correct=null;var defaultvalue=null;var multiple=0;var options=null;var clicksave=0;
            if(!(role==2)) { checker=checker+1; } else {
                var value;
                if (bot) { 
                    if (correct != null) { value = correct; }
                    else if (typeof bot_g2 !== 'undefined') { value=bot_g2; }
                    else { 
                    var allvalues=["1","2","3","4"];
                    var index=Math.floor(Math.random()*allvalues.length); 
                    value=allvalues[index]; }
                }
                else {
                value=($('#field48').val()); 
                }
                                
                $('.messagefield48').hide();
                allcorrect=checker+1;
                if ((value === null || value == "") && required==1) {
                    $('#field48_noEntry').show();
                }
                else if (value!=correct && correct != null && required!=0) {
                            $('#field48_notcorrect').show();
                        }
                
                else {
                        

                       record("g2", value);

                            /* this variable is created in LionElementButton.class */
                           checker = checker+1;


                }
            
            if (allcorrect!=checker) {
                  wronganswers['g2']=1;
                       totalwronganswers['g2'] = isNaN(totalwronganswers['g2']) ? 1 : totalwronganswers['g2']+1; 
             
               } else wronganswers['g2']=0;
            
            
            }
            
            
            
         }



        </script></div><script>if((role==2)) { $('#wrap48').show(); } </script><!-- END Element 48 Type: 23-->
        
        <!-- START Element 49 Type: 23-->
        
        <div class="col-sm-12" id="wrap49" style="display: none;"><div class="btnbox2"><div class="form-group "><input type="hidden" id="field49"><script>var g3=null;</script><div style="text-align: center"><label for="field49"><p><b>I have confidence in the advice given by the chatbot.</b></p></label></div><div
            id="button491"

            class="choicebuttons49 btn btn-default" onclick="$('.choicebuttons49').removeClass('btn-primary');
                            $('#button491').addClass('btn-primary');
                             g3=1;
                            $('#field49').val(1);">Strongly disagree</div><div
            id="button492"

            class="choicebuttons49 btn btn-default" onclick="$('.choicebuttons49').removeClass('btn-primary');
                            $('#button492').addClass('btn-primary');
                             g3=2;
                            $('#field49').val(2);">Disagree</div><div
            id="button493"

            class="choicebuttons49 btn btn-default" onclick="$('.choicebuttons49').removeClass('btn-primary');
                            $('#button493').addClass('btn-primary');
                             g3=3;
                            $('#field49').val(3);">Agree</div><div
            id="button494"

            class="choicebuttons49 btn btn-default" onclick="$('.choicebuttons49').removeClass('btn-primary');
                            $('#button494').addClass('btn-primary');
                             g3=4;
                            $('#field49').val(4);">Strongly agree</div><script>var g3_options = [1,2,3,4];
        </script><div id="field49_noEntry" class="messagefield49 alert alert-danger" style="display: none;">Please indicate your response.</div><div id="field49_notcorrect" class="messagefield49 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div></div><script>function checkValue_field49() {
           var label="g3";var required=0;var inline=0;var orderoptions=0;var graphical=1;var correct=null;var defaultvalue=null;var multiple=0;var options=null;var clicksave=0;
            if(!(role==2)) { checker=checker+1; } else {
                var value;
                if (bot) { 
                    if (correct != null) { value = correct; }
                    else if (typeof bot_g3 !== 'undefined') { value=bot_g3; }
                    else { 
                    var allvalues=["1","2","3","4"];
                    var index=Math.floor(Math.random()*allvalues.length); 
                    value=allvalues[index]; }
                }
                else {
                value=($('#field49').val()); 
                }
                                
                $('.messagefield49').hide();
                allcorrect=checker+1;
                if ((value === null || value == "") && required==1) {
                    $('#field49_noEntry').show();
                }
                else if (value!=correct && correct != null && required!=0) {
                            $('#field49_notcorrect').show();
                        }
                
                else {
                        

                       record("g3", value);

                            /* this variable is created in LionElementButton.class */
                           checker = checker+1;


                }
            
            if (allcorrect!=checker) {
                  wronganswers['g3']=1;
                       totalwronganswers['g3'] = isNaN(totalwronganswers['g3']) ? 1 : totalwronganswers['g3']+1; 
             
               } else wronganswers['g3']=0;
            
            
            }
            
            
            
         }



        </script></div><script>if((role==2)) { $('#wrap49').show(); } </script><!-- END Element 49 Type: 23-->
        
        <!-- START Element 50 Type: 23-->
        
        <div class="col-sm-12" id="wrap50" style="display: none;"><div class="btnbox2"><div class="form-group "><input type="hidden" id="field50"><script>var g4=null;</script><div style="text-align: center"><label for="field50"><p><b>I can depend on the chatbot.</b></p></label></div><div
            id="button501"

            class="choicebuttons50 btn btn-default" onclick="$('.choicebuttons50').removeClass('btn-primary');
                            $('#button501').addClass('btn-primary');
                             g4=1;
                            $('#field50').val(1);">Strongly disagree</div><div
            id="button502"

            class="choicebuttons50 btn btn-default" onclick="$('.choicebuttons50').removeClass('btn-primary');
                            $('#button502').addClass('btn-primary');
                             g4=2;
                            $('#field50').val(2);">Disagree</div><div
            id="button503"

            class="choicebuttons50 btn btn-default" onclick="$('.choicebuttons50').removeClass('btn-primary');
                            $('#button503').addClass('btn-primary');
                             g4=3;
                            $('#field50').val(3);">Agree</div><div
            id="button504"

            class="choicebuttons50 btn btn-default" onclick="$('.choicebuttons50').removeClass('btn-primary');
                            $('#button504').addClass('btn-primary');
                             g4=4;
                            $('#field50').val(4);">Strongly agree</div><script>var g4_options = [1,2,3,4];
        </script><div id="field50_noEntry" class="messagefield50 alert alert-danger" style="display: none;">Please indicate your response.</div><div id="field50_notcorrect" class="messagefield50 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div></div><script>function checkValue_field50() {
           var label="g4";var required=0;var inline=0;var orderoptions=0;var graphical=1;var correct=null;var defaultvalue=null;var multiple=0;var options=null;var clicksave=0;
            if(!(role==2)) { checker=checker+1; } else {
                var value;
                if (bot) { 
                    if (correct != null) { value = correct; }
                    else if (typeof bot_g4 !== 'undefined') { value=bot_g4; }
                    else { 
                    var allvalues=["1","2","3","4"];
                    var index=Math.floor(Math.random()*allvalues.length); 
                    value=allvalues[index]; }
                }
                else {
                value=($('#field50').val()); 
                }
                                
                $('.messagefield50').hide();
                allcorrect=checker+1;
                if ((value === null || value == "") && required==1) {
                    $('#field50_noEntry').show();
                }
                else if (value!=correct && correct != null && required!=0) {
                            $('#field50_notcorrect').show();
                        }
                
                else {
                        

                       record("g4", value);

                            /* this variable is created in LionElementButton.class */
                           checker = checker+1;


                }
            
            if (allcorrect!=checker) {
                  wronganswers['g4']=1;
                       totalwronganswers['g4'] = isNaN(totalwronganswers['g4']) ? 1 : totalwronganswers['g4']+1; 
             
               } else wronganswers['g4']=0;
            
            
            }
            
            
            
         }



        </script></div><script>if((role==2)) { $('#wrap50').show(); } </script><!-- END Element 50 Type: 23-->
        
        <!-- START Element 51 Type: 23-->
        
        <div class="col-sm-12" id="wrap51" style="display: none;"><div class="btnbox2"><div class="form-group "><input type="hidden" id="field51"><script>var g5=null;</script><div style="text-align: center"><label for="field51"><p><b>I can rely on the chatbot to behave in consistent ways.</b></p></label></div><div
            id="button511"

            class="choicebuttons51 btn btn-default" onclick="$('.choicebuttons51').removeClass('btn-primary');
                            $('#button511').addClass('btn-primary');
                             g5=1;
                            $('#field51').val(1);">Strongly disagree</div><div
            id="button512"

            class="choicebuttons51 btn btn-default" onclick="$('.choicebuttons51').removeClass('btn-primary');
                            $('#button512').addClass('btn-primary');
                             g5=2;
                            $('#field51').val(2);">Disagree</div><div
            id="button513"

            class="choicebuttons51 btn btn-default" onclick="$('.choicebuttons51').removeClass('btn-primary');
                            $('#button513').addClass('btn-primary');
                             g5=3;
                            $('#field51').val(3);">Agree</div><div
            id="button514"

            class="choicebuttons51 btn btn-default" onclick="$('.choicebuttons51').removeClass('btn-primary');
                            $('#button514').addClass('btn-primary');
                             g5=4;
                            $('#field51').val(4);">Strongly agree</div><script>var g5_options = [1,2,3,4];
        </script><div id="field51_noEntry" class="messagefield51 alert alert-danger" style="display: none;">Please indicate your response.</div><div id="field51_notcorrect" class="messagefield51 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div></div><script>function checkValue_field51() {
           var label="g5";var required=0;var inline=0;var orderoptions=0;var graphical=1;var correct=null;var defaultvalue=null;var multiple=0;var options=null;var clicksave=0;
            if(!(role==2)) { checker=checker+1; } else {
                var value;
                if (bot) { 
                    if (correct != null) { value = correct; }
                    else if (typeof bot_g5 !== 'undefined') { value=bot_g5; }
                    else { 
                    var allvalues=["1","2","3","4"];
                    var index=Math.floor(Math.random()*allvalues.length); 
                    value=allvalues[index]; }
                }
                else {
                value=($('#field51').val()); 
                }
                                
                $('.messagefield51').hide();
                allcorrect=checker+1;
                if ((value === null || value == "") && required==1) {
                    $('#field51_noEntry').show();
                }
                else if (value!=correct && correct != null && required!=0) {
                            $('#field51_notcorrect').show();
                        }
                
                else {
                        

                       record("g5", value);

                            /* this variable is created in LionElementButton.class */
                           checker = checker+1;


                }
            
            if (allcorrect!=checker) {
                  wronganswers['g5']=1;
                       totalwronganswers['g5'] = isNaN(totalwronganswers['g5']) ? 1 : totalwronganswers['g5']+1; 
             
               } else wronganswers['g5']=0;
            
            
            }
            
            
            
         }



        </script></div><script>if((role==2)) { $('#wrap51').show(); } </script><!-- END Element 51 Type: 23-->
        
        <!-- START Element 52 Type: 23-->
        
        <div class="col-sm-12" id="wrap52" style="display: none;"><div class="btnbox2"><div class="form-group "><input type="hidden" id="field52"><script>var g6=null;</script><div style="text-align: center"><label for="field52"><p><b>I can rely on the chatbot to do its best every time I take its advice.</b></p></label></div><div
            id="button521"

            class="choicebuttons52 btn btn-default" onclick="$('.choicebuttons52').removeClass('btn-primary');
                            $('#button521').addClass('btn-primary');
                             g6=1;
                            $('#field52').val(1);">Strongly disagree</div><div
            id="button522"

            class="choicebuttons52 btn btn-default" onclick="$('.choicebuttons52').removeClass('btn-primary');
                            $('#button522').addClass('btn-primary');
                             g6=2;
                            $('#field52').val(2);">Disagree</div><div
            id="button523"

            class="choicebuttons52 btn btn-default" onclick="$('.choicebuttons52').removeClass('btn-primary');
                            $('#button523').addClass('btn-primary');
                             g6=3;
                            $('#field52').val(3);">Agree</div><div
            id="button524"

            class="choicebuttons52 btn btn-default" onclick="$('.choicebuttons52').removeClass('btn-primary');
                            $('#button524').addClass('btn-primary');
                             g6=4;
                            $('#field52').val(4);">Strongly agree</div><script>var g6_options = [1,2,3,4];
        </script><div id="field52_noEntry" class="messagefield52 alert alert-danger" style="display: none;">Please indicate your response.</div><div id="field52_notcorrect" class="messagefield52 alert alert-danger" style="display: none;">The value you entered is not correct.</div></div></div><script>function checkValue_field52() {
           var label="g6";var required=0;var inline=0;var orderoptions=0;var graphical=1;var correct=null;var defaultvalue=null;var multiple=0;var options=null;var clicksave=0;
            if(!(role==2)) { checker=checker+1; } else {
                var value;
                if (bot) { 
                    if (correct != null) { value = correct; }
                    else if (typeof bot_g6 !== 'undefined') { value=bot_g6; }
                    else { 
                    var allvalues=["1","2","3","4"];
                    var index=Math.floor(Math.random()*allvalues.length); 
                    value=allvalues[index]; }
                }
                else {
                value=($('#field52').val()); 
                }
                                
                $('.messagefield52').hide();
                allcorrect=checker+1;
                if ((value === null || value == "") && required==1) {
                    $('#field52_noEntry').show();
                }
                else if (value!=correct && correct != null && required!=0) {
                            $('#field52_notcorrect').show();
                        }
                
                else {
                        

                       record("g6", value);

                            /* this variable is created in LionElementButton.class */
                           checker = checker+1;


                }
            
            if (allcorrect!=checker) {
                  wronganswers['g6']=1;
                       totalwronganswers['g6'] = isNaN(totalwronganswers['g6']) ? 1 : totalwronganswers['g6']+1; 
             
               } else wronganswers['g6']=0;
            
            
            }
            
            
            
         }



        </script></div><script>if((role==2)) { $('#wrap52').show(); } </script><!-- END Element 52 Type: 23-->
        
        <!-- START Element 53 Type: 24-->
        
        <div class="col-sm-12" id="wrap53" style="display: none;"><div class="form-group btnbox2" ><label for="field53"><p><b><br></b></p><b><p><b><br></b></p>Did you find the overall game instructions helpful?&nbsp;<br></b><b style="background-color: rgba(223, 240, 216, 0);">Did you find something confusing?&nbsp;<br></b><b style="background-color: rgba(223, 240, 216, 0);">Would you change something?</b></label><textarea  id="field53" style="text-align: center; width: 100%" rows="" name="bid53" onkeyup="openfeedback1 = this.form.bid53.value; " class="btntextfield form-control"></textarea><div id="field53_minmax" class="alert alert-danger" style="display: none;">Please enter a text with between 0 and 500 
        characters.</div><div id="field53_noNumber" class="alert alert-danger" style="display: none;">Please enter a text.</div><script>
            var openfeedback1=null;
            
            
            function checkValue_field53() {
        

        var label="openfeedback1";var min=0;var max=500;var rows=null;var required=0;var hideremain=1;

        
            if(!(true)) { checker=checker+1; } else {
            
                if (bot) { 
                    if (typeof bot_openfeedback1 !== 'undefined') { value=bot_openfeedback1; }
                    else { stringlength=Math.floor(Math.random()*max)+min; 
                        var basestring='i am a bot. ';
                        if (max<3) { value='-'; }
                        else if (max<basestring.length) { value='bot'; }
                        else { value=''; 
                            for (var j=0; j<=(stringlength); j=j+basestring.length) {
                            
                                value=value+basestring;
                            }
                        }
                    }
                value_unencoded=value;
                } else {
                value_unencoded = $('#field53').val(); 
                value=encodeURI(value_unencoded);
                 
                }
            
            
               
                /* check if any entry has been made */
                if ((value == "") && required==1 && min>0) {
                    $('#field53_noNumber').show();
                }
                else {
                    $('#field53_noNumber').hide();
                    


                    
                   
                        if (value_unencoded.length>max || value_unencoded.length < min) {
                            $('#field53_minmax').show();
                        }
                        else { $('#field53_minmax').hide();

                       


                            record("openfeedback1",decodeURI(value));

                            /* this variable is created in LionElementButton.class */
                           checker = checker+1;
                       
                   }
               }
            }

}

        </script></div></div><script>if((true)) { $('#wrap53').show(); } </script><!-- END Element 53 Type: 24-->
        
        <!-- START Element 54 Type: 24-->
        
        <div class="col-sm-12" id="wrap54" style="display: none;"><div class="form-group btnbox2" ><label for="field54"><p><b><br></b></p><b><p><b><br></b></p>Do you think showing what happened after each investment/return was helpful?<br></b><b style="background-color: rgba(223, 240, 216, 0);">Was it confusing?&nbsp;<br></b><b style="background-color: rgba(223, 240, 216, 0);">Would you change something?</b></label><textarea  id="field54" style="text-align: center; width: 100%" rows="" name="bid54" onkeyup="openfeedback2 = this.form.bid54.value; " class="btntextfield form-control"></textarea><div id="field54_minmax" class="alert alert-danger" style="display: none;">Please enter a text with between 0 and 500 
        characters.</div><div id="field54_noNumber" class="alert alert-danger" style="display: none;">Please enter a text.</div><script>
            var openfeedback2=null;
            
            
            function checkValue_field54() {
        

        var label="openfeedback2";var min=0;var max=500;var rows=null;var required=0;var hideremain=1;

        
            if(!(true)) { checker=checker+1; } else {
            
                if (bot) { 
                    if (typeof bot_openfeedback2 !== 'undefined') { value=bot_openfeedback2; }
                    else { stringlength=Math.floor(Math.random()*max)+min; 
                        var basestring='i am a bot. ';
                        if (max<3) { value='-'; }
                        else if (max<basestring.length) { value='bot'; }
                        else { value=''; 
                            for (var j=0; j<=(stringlength); j=j+basestring.length) {
                            
                                value=value+basestring;
                            }
                        }
                    }
                value_unencoded=value;
                } else {
                value_unencoded = $('#field54').val(); 
                value=encodeURI(value_unencoded);
                 
                }
            
            
               
                /* check if any entry has been made */
                if ((value == "") && required==1 && min>0) {
                    $('#field54_noNumber').show();
                }
                else {
                    $('#field54_noNumber').hide();
                    


                    
                   
                        if (value_unencoded.length>max || value_unencoded.length < min) {
                            $('#field54_minmax').show();
                        }
                        else { $('#field54_minmax').hide();

                       


                            record("openfeedback2",decodeURI(value));

                            /* this variable is created in LionElementButton.class */
                           checker = checker+1;
                       
                   }
               }
            }

}

        </script></div></div><script>if((true)) { $('#wrap54').show(); } </script><!-- END Element 54 Type: 24-->
        
        <!-- START Element 55 Type: 24-->
        
        <div class="col-sm-12" id="wrap55" style="display: none;"><div class="form-group btnbox2" ><label for="field55"><p><b><br></b></p><b><p><b><br></b></p>Anything else to add from your side?<br></b><b style="background-color: rgba(223, 240, 216, 0);">Space for open feedback:&nbsp;</b></label><textarea  id="field55" style="text-align: center; width: 100%" rows="" name="bid55" onkeyup="openfeedback3 = this.form.bid55.value; " class="btntextfield form-control"></textarea><div id="field55_minmax" class="alert alert-danger" style="display: none;">Please enter a text with between 0 and 500 
        characters.</div><div id="field55_noNumber" class="alert alert-danger" style="display: none;">Please enter a text.</div><script>
            var openfeedback3=null;
            
            
            function checkValue_field55() {
        

        var label="openfeedback3";var min=0;var max=500;var rows=null;var required=0;var hideremain=1;

        
            if(!(true)) { checker=checker+1; } else {
            
                if (bot) { 
                    if (typeof bot_openfeedback3 !== 'undefined') { value=bot_openfeedback3; }
                    else { stringlength=Math.floor(Math.random()*max)+min; 
                        var basestring='i am a bot. ';
                        if (max<3) { value='-'; }
                        else if (max<basestring.length) { value='bot'; }
                        else { value=''; 
                            for (var j=0; j<=(stringlength); j=j+basestring.length) {
                            
                                value=value+basestring;
                            }
                        }
                    }
                value_unencoded=value;
                } else {
                value_unencoded = $('#field55').val(); 
                value=encodeURI(value_unencoded);
                 
                }
            
            
               
                /* check if any entry has been made */
                if ((value == "") && required==1 && min>0) {
                    $('#field55_noNumber').show();
                }
                else {
                    $('#field55_noNumber').hide();
                    


                    
                   
                        if (value_unencoded.length>max || value_unencoded.length < min) {
                            $('#field55_minmax').show();
                        }
                        else { $('#field55_minmax').hide();

                       


                            record("openfeedback3",decodeURI(value));

                            /* this variable is created in LionElementButton.class */
                           checker = checker+1;
                       
                   }
               }
            }

}

        </script></div></div><script>if((true)) { $('#wrap55').show(); } </script><!-- END Element 55 Type: 24-->
        
        <!-- START Element 56 Type: 1-->
        
        <div class="col-sm-12" id="wrap56" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><h4><br></h4><b></div>
        </div><script>if((true)) { $('#wrap56').show(); } </script><!-- END Element 56 Type: 1-->
        
        <!-- START Element 57 Type: 18-->
        
        <div class="col-sm-12" id="wrap57" style="display: none;">
        <script>
       
        
        </script>
        
        <div  id="button57">
        <div id="buttonclick57" class="lionessbutton btn btn-default btn-lg btn-block btn-warning" style=" white-space:normal !important; word-wrap: break-word;" onclick="
        $(this).hide(); $('#buttonload57').show();
        if (additionalCheck57()) {
            hideError57();
            if (checkEntries()) toNextPage57();
            else  { $(this).show(); 
            $('#buttonload57').hide(); }
        } else {
         $(this).show(); 
         $('#buttonload57').hide();
         }
        ">Show me the final results</div><div id="buttonload57" style="width: 100%; text-align: center; display: none;"><img src="<?php echo PATH;?>basis/pic/buttonload.gif"></div><div id="field57_error" class="alert alert-danger" style="display: none; text-align: center;"></div><div id="field57_attempts" class="alert alert-warning" style="display: none; text-align: center;"><span class="attempts_text">Attempts left to answer the control questions</span>:&nbsp;<span id="field57_attempts_num"></span></div></div><script>if(maxFalse!=null) {
            var numFails=quizFail(playerNr,1);  
            $('#field57_attempts').show();
            $('#field57_attempts_num').html(maxFalse-numFails);
           
        }
        function showError57(text) {
            var errorfield= $('#field57_error');
            errorfield.show();
            errorfield.html(text);
        
        }
        
        function hideError57() {
            $('#field57_error').hide();
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
        
        function additionalCheck57() {

           return true;
        }

       



        function checkFail() {} function toNextPage57() {
            if (loopEnd==411241) { showNext('wait411241.php?session_index=<?php echo $_SESSION[sessionID];?>',411242,411241);}
            else {showNext('stage411242.php?session_index=<?php echo $_SESSION[sessionID];?>',411242,411241);}

            };</script></div><script>if((true)) { $('#wrap57').show(); $('#buttonclick57').addClass('buttonclick');} </script><!-- END Element 57 Type: 18-->
        
        </div><script>setInterval(function(){ if (true) $('#wrap2').show();if (!(true)) $('#wrap2').hide();if (true) $('#wrap3').show();if (!(true)) $('#wrap3').hide();if (true) $('#wrap4').show();if (!(true)) $('#wrap4').hide();if (true) $('#wrap5').show();if (!(true)) $('#wrap5').hide();if (true) $('#wrap6').show();if (!(true)) $('#wrap6').hide();if (true) $('#wrap7').show();if (!(true)) $('#wrap7').hide();if (true) $('#wrap8').show();if (!(true)) $('#wrap8').hide();if (true) $('#wrap9').show();if (!(true)) $('#wrap9').hide();if (true) $('#wrap10').show();if (!(true)) $('#wrap10').hide();if (true) $('#wrap11').show();if (!(true)) $('#wrap11').hide();if (true) $('#wrap12').show();if (!(true)) $('#wrap12').hide();if (true) $('#wrap13').show();if (!(true)) $('#wrap13').hide();if (true) $('#wrap14').show();if (!(true)) $('#wrap14').hide();if (true) $('#wrap15').show();if (!(true)) $('#wrap15').hide();if (true) $('#wrap16').show();if (!(true)) $('#wrap16').hide();if (true) $('#wrap17').show();if (!(true)) $('#wrap17').hide();if (true) $('#wrap18').show();if (!(true)) $('#wrap18').hide();if (true) $('#wrap19').show();if (!(true)) $('#wrap19').hide();if (true) $('#wrap20').show();if (!(true)) $('#wrap20').hide();if (true) $('#wrap21').show();if (!(true)) $('#wrap21').hide();if (true) $('#wrap22').show();if (!(true)) $('#wrap22').hide();if (true) $('#wrap23').show();if (!(true)) $('#wrap23').hide();if (true) $('#wrap24').show();if (!(true)) $('#wrap24').hide();if (true) $('#wrap25').show();if (!(true)) $('#wrap25').hide();if (true) $('#wrap26').show();if (!(true)) $('#wrap26').hide();if (true) $('#wrap27').show();if (!(true)) $('#wrap27').hide();if (true) $('#wrap28').show();if (!(true)) $('#wrap28').hide();if (true) $('#wrap29').show();if (!(true)) $('#wrap29').hide();if (true) $('#wrap30').show();if (!(true)) $('#wrap30').hide();if (true) $('#wrap31').show();if (!(true)) $('#wrap31').hide();if (true) $('#wrap32').show();if (!(true)) $('#wrap32').hide();if (true) $('#wrap33').show();if (!(true)) $('#wrap33').hide();if (true) $('#wrap34').show();if (!(true)) $('#wrap34').hide();if (true) $('#wrap35').show();if (!(true)) $('#wrap35').hide();if (true) $('#wrap36').show();if (!(true)) $('#wrap36').hide();if (true) $('#wrap37').show();if (!(true)) $('#wrap37').hide();if (true) $('#wrap38').show();if (!(true)) $('#wrap38').hide();if (true) $('#wrap39').show();if (!(true)) $('#wrap39').hide();if (true) $('#wrap40').show();if (!(true)) $('#wrap40').hide();if (true) $('#wrap41').show();if (!(true)) $('#wrap41').hide();if (true) $('#wrap42').show();if (!(true)) $('#wrap42').hide();if (true) $('#wrap43').show();if (!(true)) $('#wrap43').hide();if (true) $('#wrap44').show();if (!(true)) $('#wrap44').hide();if (true) $('#wrap45').show();if (!(true)) $('#wrap45').hide();if (role==2) $('#wrap46').show();if (!(role==2)) $('#wrap46').hide();if (role==2) $('#wrap47').show();if (!(role==2)) $('#wrap47').hide();if (role==2) $('#wrap48').show();if (!(role==2)) $('#wrap48').hide();if (role==2) $('#wrap49').show();if (!(role==2)) $('#wrap49').hide();if (role==2) $('#wrap50').show();if (!(role==2)) $('#wrap50').hide();if (role==2) $('#wrap51').show();if (!(role==2)) $('#wrap51').hide();if (role==2) $('#wrap52').show();if (!(role==2)) $('#wrap52').hide();if (true) $('#wrap53').show();if (!(true)) $('#wrap53').hide();if (true) $('#wrap54').show();if (!(true)) $('#wrap54').hide();if (true) $('#wrap55').show();if (!(true)) $('#wrap55').hide();if (true) $('#wrap56').show();if (!(true)) $('#wrap56').hide();if (true) $('#wrap57').show();if (!(true)) $('#wrap57').hide(); }, 100);</script></form></div></div></body></html>