<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    $pdo_auth = authenticate_admin();
    $pdo = new PDO($dsn, $user, $pass, $opt);
    include 'function.php';
    $lata = get_data_id_data("users", "id", $_REQUEST['id']);
    //echo $lata['alloted_to'];
    //print_r($lata);
    
   
    $gata = "";
    echo $lata['alloted_to_stage_2'];
    if (ans_exist("stage_2_answers", $_REQUEST['id'], $lata['alloted_to_stage_2'])>0){
      $gata = get_data_id_data("stage_2_answers", "lead_id", $_REQUEST['id']);
      ///print_r($gata);
    }
?><!DOCTYPE html>
<html>
<head>
    <?php include 'head.php'; ?>
    <title><?php include '../title.php'; ?></title>   
    <style type="text/css">
      .dt-button{
        background-color: green !important;
      }
    </style>
  </head>
  <body class="sidebar-mini fixed  pace-done sidebar-collapse">
    <div class="wrapper">
      <!-- Navbar-->
      <?php include 'navbar.php'; ?>

       <div class="content-wrapper " style="">
         <div class="page-title" style="padding: 32px;    background-image: linear-gradient(45deg, #124686 0%, #3f79bd 100%);box-shadow: 0px 2px 10px rgba(0,0,0,.2);">
          <div class="row" style="width: 100%;margin-left:0px;">
           <div class="col-sm-6 lft">
            <div style="padding: 20px;" class="mobss"></div>
              <div class="lft_pad">
                <div style="padding: 10px;"></div>
                <h1 style="font-family: 'Century Gothic';color: #999;font-size: 25px;font-weight: normal;"><div style="font-weight: bold;color: #fff"><?php echo $lata['name']; ?>'s Application </div><span style="font-size: 14px;">View their answers</span></h1>
                
              </div>
           </div>
           <div class="col-sm-9">             
           </div>          
          </div>
        </div>
       <?php 
         see_status2($_REQUEST);
        ?>

        <div style="padding: 20px;"></div>        
          <div class="clearfix"></div>
          <div class="row">
               <?php if ($lata['language']=='english') { ?>
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                  <div class="card items" style="min-height:600px;">
                    <div style="padding: 20px"></div>
                         <center> <img src="../administrator/profile/default.jpg" style="width: 150px;;border-radius: 50%;filter:grayscale(1);">

                         <div style="padding:7px;"></div>
                          <div class="century" style="font-weight: bold;font-size: 24px;color: #79a4ec;text-transform: uppercase;"><?php echo $lata['name']; ?></div>
                          <div>Candidate</div>
                          <?php if ($lata['language']!='') {
                            echo ' <div style="padding:3px;"></div>
                                  <div style="font-size:17px;color: #444;"><b>Preferred Language</b> : '.ucfirst($lata['language']).'</div>
                                  <hr style="opacity: .1" />';
                          } 

                          $datas = get_data_id_data("user_info", "user_id", $lata['id']);
                          ?>
                         
                          <table class="table table-striped">
                              <tr>
                              <td><b>Name</b></td>
                              <td><?php echo $lata['name'];  ?> </td>
                            </tr>
                            
                            <tr>
                              <td><b>Email</b></td>
                              <td ><div style="word-wrap: break-word;"><?php echo $lata['email'];  ?></div> </td>
                            </tr>
                            
                            <tr>
                              <td><b>Phone</b></td>
                              <td><?php echo $lata['phone'];  ?> </td>
                            </tr>
                            
                            <tr>
                              <td><b>Age</b></td>
                              <td><?php echo $datas['age'];  ?> Years</td>
                            </tr>

                             <tr>
                              <td><b>Alternate No. *</b></td>
                              <td><?php echo $datas['alternate_number'];  ?></td>
                            </tr>

                            <tr>
                              <td><b>Place of birth</b></td>
                              <td><?php echo $datas['birth_place'];  ?></td>
                            </tr>

                            <tr>
                              <td><b>English</b></td>
                              <td><?php echo $datas['english'];  ?></td>
                            </tr>


                            <tr>
                              <td><b>Hindi</b></td>
                              <td><?php echo $datas['hindi'];  ?></td>
                            </tr>


                            <tr>
                              <td><b>Other languages</b></td>
                              <td><?php echo $datas['other_languages'];  ?></td>
                            </tr>

                            <tr>
                              <td><b>Gender</b></td>
                              <td><?php echo $datas['gender'];  ?></td>
                            </tr>

                            <tr>
                              <td><b>Religion</b></td>
                              <td><?php echo $datas['religion'];  ?></td>
                            </tr>

                            <tr>
                              <td><b>Disadvantaged communities</b></td>
                              <td><?php echo $datas['sc_st'];  ?></td>
                            </tr>

                            <tr>
                              <td colspan="2"><b>About Community</b>
                                <br/><?php echo $datas['sc_st_desc'];  ?></td>
                            </tr>

                            <tr>
                              <td colspan="2"><b>Current organisation*</b>
                                <br/><?php echo $datas['present_org'];  ?></td>
                            </tr>

                            <tr>
                              <td colspan="2"><b>Current occupation & title*</b>
                                <br/><?php echo $datas['present_business'];  ?></td>
                            </tr>

                            <tr>
                              <td colspan="2"><b>Current State</b>
                                <br/><?php echo $datas['present_state'];  ?></td>
                            </tr>

                            <tr>
                              <td colspan="2"><b>Current City*</b>
                                <br/><?php echo $datas['present_city'];  ?></td>
                            </tr>


                            <tr>
                              <td colspan="2"><b>Current Income (Annual)</b>
                                <br/> <?php echo $datas['present_income'];  ?></td>
                            </tr>

                            <tr>
                              <td colspan="2"><b>Family Income (Annual)</b>
                                <br/> <?php echo $datas['family_income'];  ?></td>
                            </tr>

                            <tr>
                              <td colspan="2"><b>Do You Need Financial Support</b>
                                <br/> <?php echo $datas['finance_support'];  ?></td>
                            </tr>

                            <tr>
                              <td colspan="2"><b>Let Us know more</b>
                                <br/> <?php echo $datas['finance_support_desc'];  ?></td>
                            </tr>
                            
                             <tr>
                              <td colspan="2"><b>Where you heard about us?</b>
                                <br/> <?php echo $datas['origin'];  ?></td>
                            </tr>

                          </table>                            
                                                 
                        </div>
                        
                    <div class="card items">
                      <div style="padding: 10px;"></div>
                       <h3 style="color: #333;text-align:left;font-size: 20px">KYC Documents </h3>
                         <table  style="color: #333;" class="table table-striped table-hover">
                          <thead>
                             <tr>
                               <th>S.No.</th>
                               <th>Document</th>
                             </tr>
                          </thead>
                          <tbody>
                            <?php 
                            try {
                                  $stmt = $pdo->prepare('SELECT * FROM `kyc` WHERE `user_id`="'.$_REQUEST['id'].'"  ORDER BY date DESC');
                              } catch(PDOException $ex) {
                                  echo "An Error occured!"; 
                                  print_r($ex->getMessage());
                              }
                              $stmt->execute();
                              $user = $stmt->fetchAll();   
                              $i=1; 
                              foreach($user as $key=>$value){
                                  $statys = '<label class="label label-info">Pending</label>';
                                  if($value['status']!="Pending"){
                                  $statys = '<label class="label label-default">Approved</label>';
                                }

                                echo '<tr>
                                    <td>'.$i.'</td>
                                    <td><a target="_blank" href="../kyc_documents/'.$value['file'].'" style="color:#555;text-decoration:underline">'.$value['document_name'].'</a></td>                    
                                  </tr>';
                                  $i++;
                            }           
                          ?>                    
                        </tbody>
                      </table>
                    </div>
                    
                </div>
              <?php }  else{
                ?> 
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                  <div class="card items" style="min-height:600px;">
                    <div style="padding: 20px"></div>
                         <center> <img src="../administrator/profile/default.jpg" style="width: 150px;;border-radius: 50%;filter:grayscale(1);">

                         <div style="padding:7px;"></div>
                          <div class="century" style="font-weight: bold;font-size: 24px;color: #79a4ec;text-transform: uppercase;"><?php echo $lata['name']; ?></div>
                          <div>Candidate</div>
                          <?php if ($lata['language']=='hindi' || $lata['language']=='') {
                            echo ' <div style="padding:3px;"></div>
                                  <div style="font-size:17px;color: #444;"><b>Preferred Language</b> : '.ucfirst($lata['language']).'</div>
                                  <hr style="opacity: .1" />';
                          } 

                          $datas = get_data_id_data("user_info", "user_id", $lata['id']);
                          ?>
                         
                          <table class="table table-striped">                              
                              <tr>
                              <td><b>नाम *</b></td>
                              <td><?php echo $lata['name'];  ?> </td>
                            </tr>
                            
                            <tr>
                              <td><b>ईमेल*</b></td>
                              <td><?php echo $lata['email'];  ?> </td>
                            </tr>
                            
                            <tr>
                              <td><b>फ़ोन*</b></td>
                              <td><?php echo $lata['phone'];  ?> </td>
                            </tr>
                            
                            <tr>
                              <td><b>आयु (वर्ष में ) *</b></td>
                              <td><?php echo $datas['age'];  ?> Years</td>
                            </tr>

                             <tr>
                              <td><b>दूसरा संपर्क संख्या *</b></td>
                              <td><?php echo $datas['alternate_number'];  ?></td>
                            </tr>

                            <tr>
                              <td><b>जन्म स्थान *</b></td>
                              <td><?php echo $datas['birth_place'];  ?></td>
                            </tr>

                            <tr>
                              <td><b>अंग्रेज़ी</b></td>
                              <td><?php echo $datas['english'];  ?></td>
                            </tr>


                            <tr>
                              <td><b>हिंदी</b></td>
                              <td><?php echo $datas['hindi'];  ?></td>
                            </tr>


                            <tr>
                              <td><b>अन्य  भाषा</b></td>
                              <td><?php echo $datas['other_languages'];  ?></td>
                            </tr>

                            <tr>
                              <td><b>लिंग</b></td>
                              <td><?php echo $datas['gender'];  ?></td>
                            </tr>

                            <tr>
                              <td><b>धर्म</b></td>
                              <td><?php echo $datas['religion'];  ?></td>
                            </tr>

                            <tr>
                              <td><b>क्या आप किसी भी वंचित समुदाय से हैं?</b></td>
                              <td><?php echo $datas['sc_st'];  ?></td>
                            </tr>

                            <tr>
                              <td colspan="2"><b>यदि हाँ, तो कृपया हमें बताएं आप किस समुद्हाय से हैं</b>
                                <br/><?php echo $datas['sc_st_desc'];  ?></td>
                            </tr>

                            <tr>
                              <td colspan="2"><b>वर्तमान संगठन/कार्यालय*</b>
                                <br/><?php echo $datas['present_org'];  ?></td>
                            </tr>

                            <tr>
                              <td colspan="2"><b>वर्तमान व्यवसाय और पद*</b>
                                <br/><?php echo $datas['present_business'];  ?></td>
                            </tr>

                            <tr>
                              <td colspan="2"><b>वर्तमान निवास राज्य *</b>
                                <br/><?php echo $datas['present_state'];  ?></td>
                            </tr>

                            <tr>
                              <td colspan="2"><b>वर्तमान निवास का जिला/शहर *</b>
                                <br/><?php echo $datas['present_city'];  ?></td>
                            </tr>


                            <tr>
                              <td colspan="2"><b>आपकी वर्तमान वार्षिक आय क्या है?*</b>
                                <br/> <?php echo $datas['present_income'];  ?></td>
                            </tr>

                            <tr>
                              <td colspan="2"><b>आपके परिवार की वर्तमान वार्षिक आय क्या है?*</b>
                                <br/> <?php echo $datas['family_income'];  ?></td>
                            </tr>

                            <tr>
                              <td colspan="2"><b>कार्यक्रम के भुगतान करने के लिए क्या आपको वित्तीय सहायता की आवश्यकता होगी?</b>
                                <br/> <?php echo $datas['finance_support'];  ?></td>
                            </tr>

                            <tr>
                              <td colspan="2"><b>कृपया बताएं कि आपको कार्यक्रम के लिए छात्रवृत्ति की आवश्यकता क्यों होगी?</b>
                                <br/> <?php echo $datas['finance_support_desc'];  ?></td>
                            </tr>
                            
                            <tr>
                              <td colspan="2"><b>आपने हमारे बारे में कहाँ से सुना हैं ?</b>
                                <br/> <?php echo $datas['origin'];  ?></td>
                            </tr>

                          </table>                            
                                                 
                        </div>
                        
                        <div class="card items">
                      <div style="padding: 10px;"></div>
                       <h3 style="color: #333;text-align:left;font-size: 20px">अपलोड किये गए दस्तावेज</h3>
                         <table  style="color: #333;" class="table table-striped table-hover">
                          <thead>
                             <tr>
                               <th>क्रमांक</th>
                               <th>दस्तावेज</th>
                             </tr>
                          </thead>
                          <tbody>
                            <?php 
                            try {
                                  $stmt = $pdo->prepare('SELECT * FROM `kyc` WHERE `user_id`="'.$_REQUEST['id'].'"  ORDER BY date DESC');
                              } catch(PDOException $ex) {
                                  echo "An Error occured!"; 
                                  print_r($ex->getMessage());
                              }
                              $stmt->execute();
                              $user = $stmt->fetchAll();   
                              $i=1; 
                              foreach($user as $key=>$value){
                                  $statys = '<label class="label label-info">Pending</label>';
                                  if($value['status']!="Pending"){
                                  $statys = '<label class="label label-default">Approved</label>';
                                }

                                echo '<tr>
                                    <td>'.$i.'</td>
                                    <td><a target="_blank" href="../kyc_documents/'.$value['file'].'" style="color:#555;text-decoration:underline">'.$value['document_name'].'</a></td>                    
                                  </tr>';
                                  $i++;
                            }           
                          ?>                    
                        </tbody>
                      </table>
                    </div>
                </div>

              <?php
              } ?>
                
              <form action="marks_submitted_stage_2.php" method="POST">
                 <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="card items" style="min-height: 600px" >
                      <div style="padding: 10px;"></div> 
                      <p>Each of these questions needs to have a box to take notes and a drop down 0/1/2/3 for scoring. At the end we need a review window where the interviewer will add summary notes of the entire chat.</p>
                      <hr/>
                      <b style="font-size: 17px;"><span style="color:orangered">Ques.</span> It was great to read about your political experiences. Can you tell me a bit more about the issue you worked on? Why did you pick this issue up? What has been the impact so far?</b>  <span style="font-weight:bold;color:green">( Max 500 Words )</span>

                      <div style="padding: 5px;"></div> 
                      <div class="form-group">
                        
                        <textarea class="form-control ckeditor" name="answer1"><?php if(isset($gata['answer1'])){ echo $gata['answer1'];} ?></textarea>
                        <div style="background-color:#edf7ff;padding:15px;">
                            <div class="row">
                              <div class="col-sm-6"><b>Allotted Marks</b></div>
                              <div class="col-sm-6"><select class="form-control marks" data-marks_id="1"  name="marks1">
                                <?php if(isset($gata['mark1'])){ echo '<option>'.$gata['mark1'].'</option>';} ?>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                              </select></div>
                            </div>
                          </div>
                      </div>

                      <hr/>
                      <b style="font-size: 17px;"><span style="color:orangered">Ques.</span> Pick any of the following that you are comfortable with What is your current understanding of the issue? What is the key challenge here? How do you think it can be addressed? What would you do? </b>  <span style="font-weight:bold;color:green">( Max 500 Words )</span>

                      <div style="padding: 5px;"></div> 
                      <div class="form-group">
                        <textarea class="form-control ckeditor" name="answer2"><?php if(isset($gata['answer2'])){ echo $gata['answer2'];} ?></textarea>
                        <div style="background-color:#edf7ff;padding:15px;">
                            <div class="row">
                              <div class="col-sm-6"><b>Allotted Marks</b></div>
                              <div class="col-sm-6"><select class="form-control marks" data-marks_id="2"  name="marks2">
                                <?php if(isset($gata['mark2'])){ echo '<option>'.$gata['mark2'].'</option>';} ?>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                              </select></div>
                            </div>
                          </div>
                      </div>

                      <hr/>
                      <b style="font-size: 17px;"><span style="color:orangered">Ques.</span> Which is the political party or leader that you align with the most? Which role and platform in the future do you aspire to </b>  <span style="font-weight:bold;color:green">( Max 500 Words )</span>

                      <div style="padding: 5px;"></div> 
                      <div class="form-group">
                        <textarea class="form-control ckeditor" name="answer3"><?php if(isset($gata['answer3'])){ echo $gata['answer3'];} ?></textarea>
                        <div style="background-color:#edf7ff;padding:15px;">
                            <div class="row">
                              <div class="col-sm-6"><b>Allotted Marks</b></div>
                              <div class="col-sm-6"><select class="form-control marks" data-marks_id="3"  name="marks3">
                                <?php if(isset($gata['mark3'])){ echo '<option>'.$gata['mark3'].'</option>';} ?>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                              </select></div>
                            </div>
                          </div>
                      </div>

                      <hr/>
                      <b style="font-size: 17px;"><span style="color:orangered">Ques.</span> What are some strengths and weaknesses you have - both at a personal and a professional level? How have you demonstrated them or worked on improving them in the recent past? </b>  <span style="font-weight:bold;color:green">( Max 500 Words )</span>

                      <div style="padding: 5px;"></div> 
                      <div class="form-group">
                        <textarea class="form-control ckeditor" name="answer4"><?php if(isset($gata['answer4'])){ echo $gata['answer4'];} ?></textarea>
                        <div style="background-color:#edf7ff;padding:15px;">
                            <div class="row">
                              <div class="col-sm-6"><b>Allotted Marks</b></div>
                              <div class="col-sm-6"><select class="form-control marks" data-marks_id="4"  name="marks4">
                                <?php if(isset($gata['mark4'])){ echo '<option>'.$gata['mark4'].'</option>';} ?>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                              </select></div>
                            </div>
                          </div>
                      </div>

                      <hr/>
                      <b style="font-size: 17px;"><span style="color:orangered">Ques.</span> You mentioned your non negotiable values (find these from the application) - tell me a time when you chose to, or made a decision/action that directly went against them? What is absolutely non-negotiable for you? OR Elections are getting expensive. How will you manage money for your election? </b>  <span style="font-weight:bold;color:green">( Max 500 Words )</span>

                      <div style="padding: 5px;"></div> 
                      <div class="form-group">
                        <textarea class="form-control ckeditor" name="answer5"><?php if(isset($gata['answer5'])){ echo $gata['answer5'];} ?></textarea>
                        <div style="background-color:#edf7ff;padding:15px;">
                            <div class="row">
                              <div class="col-sm-6"><b>Allotted Marks</b></div>
                              <div class="col-sm-6"><select class="form-control marks" data-marks_id="5"  name="marks5">
                                <?php if(isset($gata['mark5'])){ echo '<option>'.$gata['mark5'].'</option>';} ?>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                              </select></div>
                            </div>
                          </div>
                      </div>

                      <hr/>
                      <b style="font-size: 17px;"><span style="color:orangered">Ques.</span> What is your biggest fear about doing this work? What scares you? What could make you quit? Where do you find your inspiration? What keeps you going? </b>  <span style="font-weight:bold;color:green">( Max 500 Words )</span>

                      <div style="padding: 5px;"></div> 
                      <div class="form-group">
                        <textarea class="form-control ckeditor" name="answer6"><?php if(isset($gata['answer6'])){ echo $gata['answer6'];} ?></textarea>
                        <div style="background-color:#edf7ff;padding:15px;">
                            <div class="row">
                              <div class="col-sm-6"><b>Allotted Marks</b></div>
                              <div class="col-sm-6"><select class="form-control marks" data-marks_id="6"  name="marks6">
                                <?php if(isset($gata['mark6'])){ echo '<option>'.$gata['mark6'].'</option>';} ?>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                              </select></div>
                            </div>
                          </div>
                      </div>

                      <hr/>
                      <b style="font-size: 17px;"><span style="color:orangered">Ques.</span> Do you have any questions for us? Any concerns. </b>  <span style="font-weight:bold;color:green">( Max 500 Words )</span>

                      <div style="padding: 5px;"></div> 
                      <div class="form-group">
                        <textarea class="form-control ckeditor" name="answer7"><?php if(isset($gata['answer7'])){ echo $gata['answer7'];} ?></textarea>
                        <div style="background-color:#edf7ff;padding:15px;">
                            <div class="row">
                              <div class="col-sm-6"><b>Allotted Marks</b></div>
                              <div class="col-sm-6"><select class="form-control marks" data-marks_id="7"  name="marks7">
                                <?php if(isset($gata['mark7'])){ echo '<option>'.$gata['mark7'].'</option>';} ?>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                              </select></div>
                            </div>
                          </div>
                      </div>


                    </div>
                  </div><!-- end col-->    

                  <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="card items" style="min-height:600px;">
                       <h3>Stage 2 Evaluation</h3>  <hr/> 

                       <table class="table table-striped">
                         <thead>
                           <tr>
                             <th>Question</th>
                             <th>Marks Obt.</th>
                           </tr>
                         </thead>
                         <tbody>                           
                             <?php 
                             $array = array(1,2,3,4,5,6,7);
                              for ($i=0; $i <count($array) ; $i++) { 
                                echo '<tr><td><b>Ques '.($i+1).'</b></td> <td><span id="mark_obtained_'.($array[$i]).'">0</span></td></tr>';
                              }
                              ?>
                         </tbody>
                         <tfoot style="background-color: #c1d6e6;">
                           <tr>
                             <td>Total</td>
                             <td><b id="sum">0</b></td>
                           </tr>
                         </tfoot>
                       </table> 


                       <input type="hidden" name="lead_id" value="<?php echo $_REQUEST['id']; ?>"> 
                      <label>Review Status</label>  
                       <select class="form-control" name="status">
                        <?php if($lata['stage_2_clear']!="No") {
                         echo '<option>'.$lata['stage_2_clear'].'</option>';
                        } ?>
                         <option>Unsure</option>
                         <option value="Accept">Moving Forward</option>
                         <option value="Reject">Not Moving Forward</option>
                       </select> 
                       <div style="padding: 10px;"></div>

                       <label>Remarks</label>  
                       <textarea readonly="" class="form-control" name="evaluation_remark" required="" rows="10" placeholder="Enter Remarks"><?php if(isset($gata['stage_2_remarks'])){ echo $gata['stage_2_remarks'];} ?></textarea>               
                       <br/><hr/>
                       <!-- <button type="submit" class="btn btn-success btn-lg btn-block" name="submitteds">SUBMIT REVIEW</button>   -->
                    </div>                        
                </div> 
              </form>      
            </div>       
        <?php include '../administrator/footer.php'; ?>        
      </div>
    </div>
    
    <?php include 'scripts.php'; ?>  
     <script src="//cdn.ckeditor.com/4.15.1/basic/ckeditor.js"></script>
     <script type="text/javascript">
      CKEDITOR.replace( '.ckeditor' );


      $(document).ready(function(){
        var sum = 0;
        $('.marks').each(function() {
          var marks = $(this).val();
          var id= $(this).data("marks_id");
          $("#mark_obtained_"+id).html(marks);
            sum += Number($(this).val());
        });

        $("#sum").html(sum);

        $(".marks").change(function(){
          var marks = $(this).val();
          var id= $(this).data("marks_id");
          $("#mark_obtained_"+id).html(marks);
          var sum = 0;
          $('.marks').each(function() {
              sum += Number($(this).val());
          });

          $("#sum").html(sum);

        });
      });
    </script>    
    <script type="text/javascript">
      $(document).ready(function(){
        $("#modo").click(function(){
          $(".dodo").slideToggle("slow");
        });
      });
    </script>    
  </body>
</html>