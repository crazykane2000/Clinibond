<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    $pdo_auth = authenticate_admin();
    $pdo = new PDO($dsn, $user, $pass, $opt);
    include 'function.php';
    $lata = get_data_id_data("users", "id", $_REQUEST['id']);    
    $gata = "";
    $gata = get_data_id_data("user_info", "phone", $lata['phone']);   

    //print_r($gata);
    
?>
<!DOCTYPE html>
<html>
<head>
  <?php include 'head.php'; ?>
  
  </head>
  <body class="sidebar-mini fixed  pace-done sidebar-collapse">
    <div class="wrapper">
      <!-- Navbar-->
      <?php include 'navbar.php'; ?>

       <div class="content-wrapper " style="">
         <div class="page-title" style="padding: 32px;    background-color: #41cd52;box-shadow: 0px 2px 10px rgba(0,0,0,.2);">
          <div class="row" style="width: 100%;margin-left:0px;">
           <div class="col-sm-3 lft">
            <div style="padding: 20px;" class="mobss"></div>
              <div class="lft_pad">
                <div style="padding: 10px;"></div>
                <h1 style="font-family: 'Century Gothic';color: #fff;font-size: 25px;font-weight: normal;"><div style="font-weight: bold;color: #fff"><?php echo $lata['first_name']; ?>'s Application </div><span style="font-size: 14px;">View His Clinical Data</span></h1>
                
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
               
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                  <div class="card items" style="min-height:600px;">
                    <div style="padding: 20px"></div>
                         <center> <img src="profile/default.jpg" style="width: 150px;;border-radius: 50%;filter:grayscale(1);">

                         <div style="padding:7px;"></div>
                          <div class="century" style="font-weight: bold;font-size: 24px;color: #41cd52;text-transform: uppercase;"><?php echo $lata['first_name']." ".$lata['last_name']; ?></div>
                          <div>Patient Data Provider</div>
                          <hr/>
                          
                          <table class="table table-striped">
                              <tr>
                              <td><b>First Name</b></td>
                              <td><?php echo $lata['first_name'];  ?> </td>
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
                              <td><?php echo $gata['age'];  ?> Years</td>
                            </tr>
                             <tr>
                              <td style="width: 150px"><b>Tx Address </b></td>
                              <td><div style="word-break: break-all;"><?php echo $lata['tx_address'];  ?></div></td>
                            </tr>
                            
                            <tr>
                              <td colspan="2"><b>QR Code </b></td>
                            </tr>
                            <tr>
                              <td colspan="2">
                                <center><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?php echo $lata['tx_address'];  ?>&choe=UTF-8"  /></center>
                              </td>
                            </tr>

                          </table>                            
                                                 
                        </div>
                        
                   
                    
                </div>
              
           
                  
                  <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="card items" style="min-height: 600px" >  
                      <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                          <div style="padding: 10px;"></div> 
                          <h4>Clinical Data </h4>
                           <hr/>
                            <div style="padding: 10px;"></div> 
                            
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>Data</th>
                                  <th>Value</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td style="font-weight: bold;">Current Diagnosis</td>
                                  <td><?php echo $gata['current_diagnosis']; ?></td>
                                </tr>

                                <tr>
                                  <td style="font-weight: bold;">Time of Diagnosis</td>
                                  <td><?php echo $gata['time_of_diagnosis']; ?></td>
                                </tr>


                                <tr>
                                  <td style="font-weight: bold;">Current Medicines</td>
                                  <td><?php echo $gata['current_meds']; ?></td>
                                </tr>

                                <tr>
                                  <td style="font-weight: bold;">Past Medicines</td>
                                  <td><?php echo $gata['past_meds']; ?></td>
                                </tr>

                                <tr>
                                  <td style="font-weight: bold;">Current Age</td>
                                  <td><?php echo $gata['age']; ?> Years</td>
                                </tr>


                                <tr>
                                  <td style="font-weight: bold;">Gender</td>
                                  <td><?php echo $gata['gender']; ?></td>
                                </tr>


                                <tr>
                                  <td style="font-weight: bold;">Current Weight</td>
                                  <td><?php echo $gata['weight']; ?> KGs</td>
                                </tr>
                                <tr>
                                  <td style="font-weight: bold;">Ethnicity</td>
                                  <td><?php echo $gata['ethinicity']; ?></td>
                                </tr>
                                <tr>
                                  <td style="font-weight: bold;">ECOG</td>
                                  <td><?php echo $gata['ecog']; ?></td>
                                </tr>

                                <tr>
                                  <td style="font-weight: bold;">Current Address</td>
                                  <td><?php echo $gata['address']; ?></td>
                                </tr>

                                <tr>
                                  <td style="font-weight: bold;">Current City</td>
                                  <td><?php echo $gata['city']; ?></td>
                                </tr>

                                <tr>
                                  <td style="font-weight: bold;">Current State</td>
                                  <td><?php echo $gata['state']; ?></td>
                                </tr>


                                <tr>
                                  <td style="font-weight: bold;">Current Country</td>
                                  <td><?php echo $gata['country']; ?></td>
                                </tr>

                                <tr>
                                  <td style="font-weight: bold;">Current Zip Code</td>
                                  <td><?php echo $gata['zip_code']; ?></td>
                                </tr>

                                <tr>
                                  <td style="font-weight: bold;">Current Clinical Findings</td>
                                  <td><?php echo $gata['clinical_findings']; ?></td>
                                </tr>

                                <tr>
                                  <td style="font-weight: bold;">Past Medical History </td>
                                  <td><?php echo $gata['past_medical_history']; ?></td>
                                </tr>

                                <tr>
                                  <td style="font-weight: bold;">Known Allergies</td>
                                  <td><?php echo $gata['known_allergies']; ?></td>
                                </tr>

                                <tr>
                                  <td style="font-weight: bold;">Family Medical and Genetics </td>
                                  <td><?php echo $gata['family_medical_genetics']; ?></td>
                                </tr>

                                <tr>
                                  <td style="font-weight: bold;">Are they under any Medical Studies/research or supervision?</td>
                                  <td><?php echo $gata['are_they_on_studies']; ?></td>
                                </tr>

                                <tr>
                                  <td style="font-weight: bold;">Are they able to give Concent </td>
                                  <td><?php echo $gata['are_they_consent']; ?></td>
                                </tr>

                                <tr>
                                  <td style="font-weight: bold;">Do they use Tobaco or Alchohol </td>
                                  <td><?php echo $gata['alchohol_tobaco_use']; ?></td>
                                </tr>


                                <tr>
                                  <td style="font-weight: bold;">What is their Consent? </td>
                                  <td><?php echo $gata['consents']; ?></td>
                                </tr>

                                <tr>
                                  <td style="font-weight: bold;">Data of this Data Submission </td>
                                  <td><?php echo $gata['date']; ?></td>
                                </tr>
                              </tbody>
                            </table>

                        </div>
                      </div>                 
                    </div>
                  </div><!-- end col-->    

                 
                    
                </div>               
            </div>

            <div id="uyh" class="alert alert-success alert-dismissible fade in" style="width:300px;position: fixed;right: 0px;bottom: 0px;display: none;">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Success!</strong> Your Responses are auto saved!
              <div id="bn"></div>
            </div>
         
       
        <?php include 'footer.php'; ?>        
      </div>
    </div>
    
    <!-- Javascripts-->

    <?php include 'add_modal.php';  ?>
    <?php include 'update_modal.php';  ?>

    <?php include 'modal.php'; ?>
    <?php include 'scripts.php'; ?>
    <script src="//cdn.ckeditor.com/4.15.1/basic/ckeditor.js"></script>
    <script>
      CKEDITOR.replace( '.ckeditor' );
      </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#modo").click(function(){
          $(".dodo").slideToggle("slow");
        });
      });

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

      $(document).ready(function(){ 
          setInterval(function(){   
              
            var marks1 = $("#marks1").val();
            var marks2 = $("#marks2").val();
            var marks3 = $("#marks3").val();
            var marks4 = $("#marks4").val();
            var marks5 = $("#marks5").val();
            var marks6 = $("#marks6").val();

            var answer1 = CKEDITOR.instances['answer1'].getData();
            var answer2 = CKEDITOR.instances['answer2'].getData();
            var answer3 = CKEDITOR.instances['answer3'].getData();
            var answer4 = CKEDITOR.instances['answer4'].getData();
            var answer5 = CKEDITOR.instances['answer5'].getData();
            var answer6 = CKEDITOR.instances['answer6'].getData();
            var answer7 = CKEDITOR.instances['answer7'].getData();
            var stage_status = $("#stage_status").val();
            var evaluation_remark = $("#evaluation_remark").val();
            var final_note = CKEDITOR.instances['final_note'].getData();
            var final_status = $("#final_status").val();
            //alert(final_note);

            var id = $("#lead_id").val();

            $("#bn").load("autosave_functionality.php?lead_id=<?php echo $_REQUEST['id']; ?>&lead_aloted_to_member=<?php echo $lata['alloted_to_name_stage_2']; ?>", {'marks1':marks1, 'marks2':marks2, 'marks3':marks3, 'marks4':marks4, 'marks5':marks5, 'marks6':marks6, 'answer1':answer1, 'answer2':answer2, 'answer3':answer3, 'answer4':answer4, 'answer5':answer5, 'answer6':answer6, 'answer7':answer7,'evaluation_remark':evaluation_remark, 'stage_status':stage_status , 'final_note':final_note, 'final_status':final_status  });

            $("#uyh").show("slow");            
          }, 30000);  
       });  

      setInterval(function(){ $("#uyh").hide("slow");  }, 5000);

      $("#save").click(function(){
        var marks1 = $("#marks1").val();
            var marks2 = $("#marks2").val();
            var marks3 = $("#marks3").val();
            var marks4 = $("#marks4").val();
            var marks5 = $("#marks5").val();
            var marks6 = $("#marks6").val();

            var answer1 = CKEDITOR.instances['answer1'].getData();
            var answer2 = CKEDITOR.instances['answer2'].getData();
            var answer3 = CKEDITOR.instances['answer3'].getData();
            var answer4 = CKEDITOR.instances['answer4'].getData();
            var answer5 = CKEDITOR.instances['answer5'].getData();
            var answer6 = CKEDITOR.instances['answer6'].getData();
            var answer7 = CKEDITOR.instances['answer7'].getData();
            var final_note = CKEDITOR.instances['final_note'].getData();
            var stage_status = $("#stage_status").val();
            var evaluation_remark = $("#evaluation_remark").val();
            var final_status = $("#final_status").val();

            //alert(final_note);

            var id = $("#lead_id").val();

            $("#kishan").load("autosave_functionality.php?lead_id=<?php echo $_REQUEST['id']; ?>&lead_aloted_to_member=<?php echo $lata['alloted_to_name_stage_2']; ?>", {'marks1':marks1, 'marks2':marks2, 'marks3':marks3, 'marks4':marks4, 'marks5':marks5, 'marks6':marks6, 'answer1':answer1, 'answer2':answer2, 'answer3':answer3, 'answer4':answer4, 'answer5':answer5, 'answer6':answer6, 'answer7':answer7, 'evaluation_remark':evaluation_remark, 'stage_status':stage_status, 'final_note':final_note, 'final_status':final_status });
            $("#uyh").show("slow");  
      });


    </script>   
    <div id="kishan"></div> 
  </body>
</html>