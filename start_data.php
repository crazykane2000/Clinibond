<?php include 'administrator/connection.php';
  include 'administrator/function.php';
  include 'administrator/pdo_class_data.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>CliniBond</title>
    <link rel="icon" href="assets/images/favicon.html" type="image/png" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Root Multipurpose Landing Page Template">
    <meta name="keywords" content="Root HTML Template, Root Landing Page, Landing Page Template">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700%7CRoboto:300,400,500%7CMuli:300,400" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.css"> <!-- Resource style -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css"> <!-- Resource style -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
  
  body {
    background-color: #fff;
    font-family: Raleway;
  }

  #regForm {
    background-color: #ffffff;
    margin: 100px auto;
    margin-top:0px;
    font-family: Raleway;
    padding: 40px;
    width: 70%;
    min-width: 300px;
  }

  .no-search .select2-search {
    display:none
}

  
  input,select,textarea {
    padding: 10px;
    width: 100%;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
    border-radius: 5px;
    font-size: 14px;
  }

  /* Mark input boxes that gets an error on validation: */
    input.invalid {
      background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
      display: none;
    }

    button {
      background-color: #41cd52;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      font-size: 17px;
      font-family: Raleway;
      cursor: pointer;
      border-radius: 5px;
    }

    button:hover {
      opacity: 0.8;
    }

    #prevBtn {
      background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
      height: 40px;
      width: 40px;
      padding: 10px;
      margin: 0 6px;
      background-color: #eee;
      border: none;  
      border-radius: 50%;
      display: inline-block;
      opacity: 1;
    }

    .select2-container--default.select2-container--focus .select2-selection--multiple {
      border: solid #999 1px;
      outline: 0;
      padding: 4px;
  }

    .step.active {
      opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
      background-color: #4CAF50;
    }

    .checkbox{
      padding: 4px;
    }
</style>


  </head>
  <body>

    <div class="wrapper">
      <?php include  'header.php'; ?>

      <div id="main" class="main">
        <div style="padding: 30px;"></div>

        <div id="services" class="pi-points" style="background-color: #f4f4f4">
          <div class="container" >
            <div class="row text-center">
              <div class="col-sm-8 col-sm-offset-2">
                <div class="points-intro text-center">
                  <?php see_status2($_REQUEST); ?>
                 </div>
              </div>
              <div class="col-sm-12 wow fadeInDown" data-wow-delay="0.1s">
                
                <div class="point-text" style="text-align: left;">
                 <form id="regForm" action="action_page.php" onsubmit="return kishan();">
                  <!--<h1>Share your profile</h1>-->
                  <!--<p>Share your profile, To move forward with our admissions process, we ask that you share either your medical or Personal profile. *</p>-->
                  <!--<hr/>-->
                  <!-- One "tab" for each step in the form: -->
                  <div style="text-align:center;margin-top:40px;">
                    <span class="step">1</span>
                    <span class="step">2</span>
                    <span class="step">3</span>
                    <span class="step">4</span>
                    <span class="step">5</span>
                    <span class="step">6</span>
                  </div>
                  <div class="tab">
                    
                    <p>
                        <button class="btn btn-success" type="button">Step 1 </button><br/>
                        <br/>
                       <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; font-size:20px">Current diagnosis/conditions*:</label>
                       <br/> <span>Instructions : Please select all your current medical condition/diagnoses from the drop down menu below. If you don’t see your condition, choose “Other” and type in the condition/diagnosis. You can enter up to 10 diagnoses/medical conditions</span>
                        <div style="padding: 3px;font-weight: bold;"></div>
                        
                        <select oninput="this.className = ''" id="select2" multiple="" name="current_diagnosis[]" style="display: none;width: 100%">
                          <option>Joint pain, tenderness and stiffness. Medical Condition 1</option>
                          <option>Restricted movement of joints. Medical Condition 2</option>
                          <option>Inflammation in and around the joints. Medical Condition 3</option>
                          <option>Coughing. Medical Condition 4</option>
                          <option>A tight sensation in the chest. Medical Condition 5</option>
                          <option>Breathlessness Medical Condition 6</option>
                          <option>Eye drops. Medical Condition 7</option>
                          <option>Laser surgery. Medical Condition 8</option>
                          <option>Finding an unexpected lump. Medical Condition 9</option>
                          <option>Unexplained weight loss. Medical Condition 10</option>
                        </select>


                        <!-- <div class="checkbox"><label style="width: 100%"><input type="checkbox" name="current_diagnosis[]" value="Medical Condition 1" class="" style="position: relative;display: inline !important;width:20px;" > Joint pain, tenderness and stiffness. Medical Condition 1</label></div>

                         <div class="checkbox"><label style="width: 100%"><input type="checkbox" name="current_diagnosis[]" value="Medical Condition 2" class="" style="position: relative;display: inline !important;width:20px;" > Restricted movement of joints. Medical Condition 2</label></div>

                          <div class="checkbox"><label style="width: 100%"><input type="checkbox" name="current_diagnosis[]" value="Medical Condition 3" class="" style="position: relative;display: inline !important;width:20px;" >  Inflammation in and around the joints. Medical Condition 3</label></div>


                           <div class="checkbox"><label style="width: 100%"><input type="checkbox" name="current_diagnosis[]" value="Medical Condition 4" class="" style="position: relative;display: inline !important;width:20px;" > Coughing. Medical Condition 4</label></div>

                           <div class="checkbox"><label style="width: 100%"><input type="checkbox" name="current_diagnosis[]" value="Medical Condition 5" class="" style="position: relative;display: inline !important;width:20px;" > A tight sensation in the chest. Medical Condition 5</label></div>

                           <div class="checkbox"><label style="width: 100%"><input type="checkbox" name="current_diagnosis[]" value="Medical Condition 6" class="" style="position: relative;display: inline !important;width:20px;" > Breathlessness Medical Condition 6</label></div>

                           <div class="checkbox"><label style="width: 100%"><input type="checkbox" name="current_diagnosis[]" value="Medical Condition 7" class="" style="position: relative;display: inline !important;width:20px;" > Eye drops. Medical Condition 7</label></div>

                           <div class="checkbox"><label style="width: 100%"><input type="checkbox" name="current_diagnosis[]" value="Medical Condition 8" class="" style="position: relative;display: inline !important;width:20px;" >  Laser surgery. Medical Condition 8</label></div>

                           <div class="checkbox"><label style="width: 100%"><input type="checkbox" name="current_diagnosis[]" value="Medical Condition 9" class="" style="position: relative;display: inline !important;width:20px;" >  Finding an unexpected lump. Medical Condition 9</label></div>

                           <div class="checkbox"><label style="width: 100%"><input type="checkbox" name="current_diagnosis[]" value="Medical Condition 10" class="" style="position: relative;display: inline !important;width:20px;" > Unexplained weight loss. Medical Condition 10</label></div>

                           <div class="checkbox"><label style="width: 100%"><input type="checkbox" name="other_diagnosis" value="Others" id="other_diagnosis" class="" style="position: relative;display: inline !important;width:20px;" > Others</label></div> -->

                           <!--  <select oninput="this.className = ''" name="current_diagnosis" id="current_diagnosis">
                              <option>Medical Condition 1 </option>
                              <option>Medical Condition 2 </option>
                              <option>Medical Condition 3 </option>
                              <option>Medical Condition 4 </option>
                              <option>Medical Condition 5 </option>
                              <option>Medical Condition 7 </option>
                              <option>Medical Condition 8 </option>
                              <option>Medical Condition 9 </option>
                              <option>Medical Condition 10 </option>
                              <option>Others </option>
                            </select> -->

                            <div class="checkbox"><label style="width: 100%"><input type="checkbox" name="" value="Others" id="other_diagnosis" class="" style="position: relative;display: inline !important;width:20px;" > Others</label></div>
                    </p>

                    <div style="padding: 20px;background-color: #f9f9f9;display: none;" id="mortar">
                      <h4 style="font-weight: bold;">Enter your medical condition</h4>
                      <span>Leave blank if not applicable</span>
                      <hr/>
                      <div class="row">
                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="conditions[]" class="leave" placeholder="Enter Condition 1">
                        </div>

                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="conditions[]" class="leave" placeholder="Enter Condition 2">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="conditions[]" class="leave" placeholder="Enter Condition 3">
                        </div>

                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="conditions[]" class="leave" placeholder="Enter Condition 4">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="conditions[]" class="leave" placeholder="Enter Condition 5">
                        </div>

                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="conditions[]" class="leave" placeholder="Enter Condition 6">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="conditions[]" class="leave" placeholder="Enter Condition 7">
                        </div>

                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="conditions[]" class="leave" placeholder="Enter Condition 8">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="conditions[]" class="leave" placeholder="Enter Condition 9">
                        </div>

                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="conditions[]" class="leave" placeholder="Enter Condition 10">
                        </div>
                      </div>
                    </div>
                   
                    <div style="padding: 10px;"></div>
                    <p><label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; ">When did this condition start or you were first diagnosed? </label>
                      <br/><span>(Year; if you’re not sure exactly when, put down the nearest year you can remember).</span>
                      <div style="padding: 3px;font-weight: bold;"></div>
                      <input type="number" placeholder="Time of diagnosis" oninput="this.className = ''" name="time_of_diagnosis" id="time_of_diagnosis" min="1900" max="<?php echo date("Y"); ?>"></p>

                  </div>



                 

                  <div class="tab">
                    <p> <button class="btn btn-success" type="button">Step 2 </button><br/>
                        <br/>
                      <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; "> Current meds* :</label>
                      <div style="padding: 3px;font-weight: bold;"></div>
                      <select oninput="this.className = ''" id="select21" multiple="" name="current_meds[]" style="display: none;width: 100%">
                          <option>Atorvastatin
                          <option>Levothyroxine</option>
                          <option>Lisinopril</option>
                          <option>Metformin Hydrochloride</option>
                          <option>Amlodipine</option>
                          <option>Metoprolol</option>
                          <option>Albuterol</option>
                          <option>Omeprazole</option>
                          <option>Losartan Potassium</option>
                          <option>Simvastatin</option>
                          <option>Gabapentin</option>
                          <option>Acetaminophen</option>
                          <option>Hydrochlorothiazide</option>
                          <option>Sertraline Hydrochloride</option>
                          <option>Montelukast</option>
                          <option>Fluticasone</option>
                          <option>Amoxicillin</option>
                          <option>Furosemide</option>
                          <option>Pantoprazole Sodium</option>
                          <option>Acetaminophen</option>
                          <option>Prednisone</option>
                          <option>Escitalopram Oxalate</option>
                          <option>Fluoxetine Hydrochloride</option>
                          <option>Dextroamphetamine</option>
                          <option>Tramadol Hydrochloride</option>
                          <option>Insulin Glargine</option>
                          <option>Bupropion</option>
                          <option>Ibuprofen</option>
                          <option>Rosuvastatin</option>
                          <option>Pravastatin Sodium</option>
                          <option>Trazodone Hydrochloride</option>
                          <option>Tamsulosin Hydrochloride</option>
                          <option>Carvedilol</option>
                          <option>Meloxicam</option>
                          <option>Citalopram</option>
                          <option>Duloxetine</option>
                          <option>Alprazolam</option>
                          <option>Potassium</option>
                          <option>Clopidogrel Bisulfate</option>
                          <option>Aspirin</option>
                          <option>Ranitidine</option>
                          <option>Atenolol</option>
                          <option>Cyclobenzaprine</option>
                          <option>Glipizide</option>
                          <option>Methylphenidate</option>
                          <option>Azithromycin</option>
                          <option>Clonazepam</option>
                          <option>Oxycodone</option>
                          <option>Allopurinol</option>
                          <option>Venlafaxine</option>
                          <option>Lisinopril</option>
                          <option>Warfarin</option>
                          <option>Propranolol Hydrochloride</option>
                          <option>Hydrochlorothiazide</option>
                          <option>Cetirizine</option>
                          <option>Estradiol</option>
                          <option>Norethindrone</option>
                          <option>Lorazepam</option>
                          <option>Quetiapine Fumarate</option>
                          <option>Zolpidem Tartrate</option>
                          <option>Ergocalciferol</option>
                          <option>Budesonide</option>
                          <option>Spironolactone</option>
                          <option>Ondansetron</option>
                          <option>Insulin Aspart</option>
                          <option>Apixaban</option>
                          <option>Naproxen</option>
                          <option>Lamotrigine</option>
                          <option>Fluticasone Propionate</option>
                          <option>Pregabalin</option>
                          <option>Glimepiride</option>
                          <option>Diclofenac</option>
                          <option>Fenofibrate</option>
                          <option>Paroxetine</option>
                          <option>Clonidine</option>
                          <option>Loratadine</option>
                          <option>Diltiazem Hydrochloride</option>
                          <option>Hydroxyzine</option>
                          <option>Amitriptyline</option>
                          <option>Doxycycline</option>
                          <option>Ethinyl Estradiol </option>
                          <option>Lisdexamfetamine Dimesylate</option>
                          <option>Sitagliptin Phosphate</option>
                          <option>Latanoprost</option>
                          <option>Cephalexin</option>
                          <option>Tizanidine</option>
                          <option>Finasteride</option>
                          <option>Lovastatin</option>
                          <option>Topiramate</option>
                          <option>Insulin Lispro</option>
                          <option>Sulfamethoxazole</option>
                          <option>Buspirone Hydrochloride</option>
                          <option>Oseltamivir Phosphate</option>
                          <option>Ferrous Sulfate</option>
                          <option>Amoxicillin</option>
                          <option>Valsartan</option>
                          <option>Levetiracetam</option>
                          <option>Hydralazine Hydrochloride</option>
                          <option>Mirtazapine</option>
                          <option>Rivaroxaban</option>
                          <option>Aripiprazole</option>
                          <option>Oxybutynin</option>
                          <option>Esomeprazole</option>
                          <option>Alendronate Sodium</option>
                          <option>Folic Acid</option>
                          <option>Triamcinolone</option>
                          <option>Tiotropium</option>
                          <option>Thyroid</option>
                          <option>Ciprofloxacin</option>
                          <option>Isosorbide Mononitrate</option>
                          <option>Sumatriptan</option>
                          <option>Insulin Detemir</option>
                          <option>Benzonatate</option>
                          <option>Famotidine</option>
                          <option>Diazepam</option>
                          <option>Ropinirole Hydrochloride</option>
                          <option>Hydrochlorothiazide</option>
                          <option>Benazepril Hydrochloride</option>
                          <option>Metronidazole</option>
                          <option>Methocarbamol</option>
                          <option>Nifedipine</option>
                          <option>Baclofen</option>
                          <option>Methotrexate</option>
                          <option>Testosterone</option>
                          <option>Ezetimibe</option>
                          <option>Celecoxib</option>
                          <option>Guanfacine</option>
                          <option>Donepezil Hydrochloride</option>
                          <option>Hydroxychloroquine</option>
                          <option>Clindamycin</option>
                          <option>Divalproex Sodium</option>
                          <option>Morphine</option>
                          <option> Levonorgestrel</option>
                          <option>Prednisolone</option>
                          <option>Enalapril Maleate</option>
                          <option>Pioglitazone</option>
                          <option>Cyanocobalamin</option>
                          <option>Norethindrone</option>
                          <option>Meclizine Hydrochloride</option>
                          <option>Valacyclovir</option>
                          <option>Albuterol Sulfate; Ipratropium Bromide</option>
                          <option>Docusate</option>
                          <option>Liraglutide</option>
                          <option>Hydrocortisone</option>
                          <option>Verapamil Hydrochloride</option>
                          <option>Cefdinir</option>
                          <option>Nortriptyline Hydrochloride</option>
                          <option>Timolol</option>
                          <option>Dulaglutide</option>
                          <option>Promethazine Hydrochloride</option>
                          <option>Acyclovir</option>
                          <option>Fluconazole</option>
                          <option>Methylprednisolone</option>
                          <option>Metformin Hydrochloride; Sitagliptin Phosphate</option>
                          <option>Ramipril</option>
                          <option>Dexmethylphenidate Hydrochloride</option>
                          <option>Brimonidine Tartrate</option>
                          <option>Oxcarbazepine</option>
                          <option>Risperidone</option>
                          <option>Levofloxacin</option>
                          <option>Chlorthalidone</option>
                          <option>Atomoxetine Hydrochloride</option>
                          <option>Polyethylene Glycol 3350</option>
                          <option>Calcium; Cholecalciferol</option>
                          <option>Mupirocin</option>
                          <option>Ethinyl Estradiol; Etonogestrel</option>
                          <option>Drospirenone; Ethinyl Estradiol</option>
                          <option>Phentermine</option>
                          <option>Carbidopa; Levodopa</option>
                          <option>Omega-3-acid Ethyl Esters</option>
                          <option>Desogestrel; Ethinyl Estradiol</option>
                          <option>Guaifenesin</option>
                          <option>Rizatriptan Benzoate</option>
                          <option>Irbesartan</option>
                          <option>Progesterone</option>
                          <option>Doxazosin Mesylate</option>
                          <option>Linagliptin</option>
                          <option>Adalimumab</option>
                          <option>Nitrofurantoin</option>
                          <option>Budesonide</option>
                          <option> Benazepril Hydrochloride</option>
                          <option>Hydrochlorothiazide; Valsartan</option>
                          <option>Digoxin</option>
                          <option>Acetaminophen; Butalbital</option>
                          <option>Insulin Degludec</option>
                          <option>Ketoconazole</option>
                          <option>Nitroglycerin</option>
                          <option>Temazepam</option>
                          <option>Amiodarone Hydrochloride</option>
                          <option>Memantine Hydrochloride</option>
                          <option>Canagliflozin</option>
                          <option>Ketorolac Tromethamine</option>
                          <option>Liothyronine Sodium</option>
                          <option>Lithium</option>
                          <option>Dicyclomine Hydrochloride</option>
                          <option>Pramipexole Dihydrochloride</option>
                          <option>Nebivolol Hydrochloride</option>
                          <option>Terazosin</option>
                          <option>Magnesium</option>
                          <option>Colchicine</option>
                        </select>

                    </p>

                     <div class="checkbox"><label style="width: 100%"><input type="checkbox" name="" value="Others" id="other_diagnosis2" class="" style="position: relative;display: inline !important;width:20px;" > Others current medicines</label></div>
                   

                    <div style="padding: 10px;background-color: #f9f9f9;display: none;" id="mortar2">
                      <h4 style="font-weight: bold;">Enter your current medicines</h4>
                      <span>Leave blank if not applicable</span>
                      <hr/>
                      <div class="row">
                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="current_meds[]" class="leave" placeholder="Enter current medicines 1">
                        </div>

                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="current_meds[]" class="leave" placeholder="Enter current medicines 2">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="current_meds[]" class="leave" placeholder="Enter current medicines 3">
                        </div>

                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="current_meds[]" class="leave" placeholder="Enter current medicines 4">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="current_meds[]" class="leave" placeholder="Enter current medicines 5">
                        </div>

                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="current_meds[]" class="leave" placeholder="Enter current medicines 6">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="current_meds[]" class="leave" placeholder="Enter current medicines 7">
                        </div>

                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="current_meds[]" class="leave" placeholder="Enter current medicines 8">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="current_meds[]" class="leave" placeholder="Enter current medicines 9">
                        </div>

                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="current_meds[]" class="leave" placeholder="Enter current medicines 10">
                        </div>
                      </div>
                    </div>

                    <div style="padding: 10px;"></div>
                    <p>
                      <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; ">Past meds* :</label>
                      <br/><span>If you don’t remember any of your past medications, don’t worry! Choose “I don’t remember”. The more information we have, though, the more accurately we can match you with a trial</span>
                      <div style="padding: 3px;font-weight: bold;"></div>
                      <select oninput="this.className = ''" id="select22" multiple="" name="past_meds[]" style="display: none;width: 100%">
                          <option>Atorvastatin
                          <option>Levothyroxine</option>
                          <option>Lisinopril</option>
                          <option>Metformin Hydrochloride</option>
                          <option>Amlodipine</option>
                          <option>Metoprolol</option>
                          <option>Albuterol</option>
                          <option>Omeprazole</option>
                          <option>Losartan Potassium</option>
                          <option>Simvastatin</option>
                          <option>Gabapentin</option>
                          <option>Acetaminophen</option>
                          <option>Hydrochlorothiazide</option>
                          <option>Sertraline Hydrochloride</option>
                          <option>Montelukast</option>
                          <option>Fluticasone</option>
                          <option>Amoxicillin</option>
                          <option>Furosemide</option>
                          <option>Pantoprazole Sodium</option>
                          <option>Acetaminophen</option>
                          <option>Prednisone</option>
                          <option>Escitalopram Oxalate</option>
                          <option>Fluoxetine Hydrochloride</option>
                          <option>Dextroamphetamine</option>
                          <option>Tramadol Hydrochloride</option>
                          <option>Insulin Glargine</option>
                          <option>Bupropion</option>
                          <option>Ibuprofen</option>
                          <option>Rosuvastatin</option>
                          <option>Pravastatin Sodium</option>
                          <option>Trazodone Hydrochloride</option>
                          <option>Tamsulosin Hydrochloride</option>
                          <option>Carvedilol</option>
                          <option>Meloxicam</option>
                          <option>Citalopram</option>
                          <option>Duloxetine</option>
                          <option>Alprazolam</option>
                          <option>Potassium</option>
                          <option>Clopidogrel Bisulfate</option>
                          <option>Aspirin</option>
                          <option>Ranitidine</option>
                          <option>Atenolol</option>
                          <option>Cyclobenzaprine</option>
                          <option>Glipizide</option>
                          <option>Methylphenidate</option>
                          <option>Azithromycin</option>
                          <option>Clonazepam</option>
                          <option>Oxycodone</option>
                          <option>Allopurinol</option>
                          <option>Venlafaxine</option>
                          <option>Lisinopril</option>
                          <option>Warfarin</option>
                          <option>Propranolol Hydrochloride</option>
                          <option>Hydrochlorothiazide</option>
                          <option>Cetirizine</option>
                          <option>Estradiol</option>
                          <option>Norethindrone</option>
                          <option>Lorazepam</option>
                          <option>Quetiapine Fumarate</option>
                          <option>Zolpidem Tartrate</option>
                          <option>Ergocalciferol</option>
                          <option>Budesonide</option>
                          <option>Spironolactone</option>
                          <option>Ondansetron</option>
                          <option>Insulin Aspart</option>
                          <option>Apixaban</option>
                          <option>Naproxen</option>
                          <option>Lamotrigine</option>
                          <option>Fluticasone Propionate</option>
                          <option>Pregabalin</option>
                          <option>Glimepiride</option>
                          <option>Diclofenac</option>
                          <option>Fenofibrate</option>
                          <option>Paroxetine</option>
                          <option>Clonidine</option>
                          <option>Loratadine</option>
                          <option>Diltiazem Hydrochloride</option>
                          <option>Hydroxyzine</option>
                          <option>Amitriptyline</option>
                          <option>Doxycycline</option>
                          <option>Ethinyl Estradiol </option>
                          <option>Lisdexamfetamine Dimesylate</option>
                          <option>Sitagliptin Phosphate</option>
                          <option>Latanoprost</option>
                          <option>Cephalexin</option>
                          <option>Tizanidine</option>
                          <option>Finasteride</option>
                          <option>Lovastatin</option>
                          <option>Topiramate</option>
                          <option>Insulin Lispro</option>
                          <option>Sulfamethoxazole</option>
                          <option>Buspirone Hydrochloride</option>
                          <option>Oseltamivir Phosphate</option>
                          <option>Ferrous Sulfate</option>
                          <option>Amoxicillin</option>
                          <option>Valsartan</option>
                          <option>Levetiracetam</option>
                          <option>Hydralazine Hydrochloride</option>
                          <option>Mirtazapine</option>
                          <option>Rivaroxaban</option>
                          <option>Aripiprazole</option>
                          <option>Oxybutynin</option>
                          <option>Esomeprazole</option>
                          <option>Alendronate Sodium</option>
                          <option>Folic Acid</option>
                          <option>Triamcinolone</option>
                          <option>Tiotropium</option>
                          <option>Thyroid</option>
                          <option>Ciprofloxacin</option>
                          <option>Isosorbide Mononitrate</option>
                          <option>Sumatriptan</option>
                          <option>Insulin Detemir</option>
                          <option>Benzonatate</option>
                          <option>Famotidine</option>
                          <option>Diazepam</option>
                          <option>Ropinirole Hydrochloride</option>
                          <option>Hydrochlorothiazide</option>
                          <option>Benazepril Hydrochloride</option>
                          <option>Metronidazole</option>
                          <option>Methocarbamol</option>
                          <option>Nifedipine</option>
                          <option>Baclofen</option>
                          <option>Methotrexate</option>
                          <option>Testosterone</option>
                          <option>Ezetimibe</option>
                          <option>Celecoxib</option>
                          <option>Guanfacine</option>
                          <option>Donepezil Hydrochloride</option>
                          <option>Hydroxychloroquine</option>
                          <option>Clindamycin</option>
                          <option>Divalproex Sodium</option>
                          <option>Morphine</option>
                          <option> Levonorgestrel</option>
                          <option>Prednisolone</option>
                          <option>Enalapril Maleate</option>
                          <option>Pioglitazone</option>
                          <option>Cyanocobalamin</option>
                          <option>Norethindrone</option>
                          <option>Meclizine Hydrochloride</option>
                          <option>Valacyclovir</option>
                          <option>Albuterol Sulfate; Ipratropium Bromide</option>
                          <option>Docusate</option>
                          <option>Liraglutide</option>
                          <option>Hydrocortisone</option>
                          <option>Verapamil Hydrochloride</option>
                          <option>Cefdinir</option>
                          <option>Nortriptyline Hydrochloride</option>
                          <option>Timolol</option>
                          <option>Dulaglutide</option>
                          <option>Promethazine Hydrochloride</option>
                          <option>Acyclovir</option>
                          <option>Fluconazole</option>
                          <option>Methylprednisolone</option>
                          <option>Metformin Hydrochloride; Sitagliptin Phosphate</option>
                          <option>Ramipril</option>
                          <option>Dexmethylphenidate Hydrochloride</option>
                          <option>Brimonidine Tartrate</option>
                          <option>Oxcarbazepine</option>
                          <option>Risperidone</option>
                          <option>Levofloxacin</option>
                          <option>Chlorthalidone</option>
                          <option>Atomoxetine Hydrochloride</option>
                          <option>Polyethylene Glycol 3350</option>
                          <option>Calcium; Cholecalciferol</option>
                          <option>Mupirocin</option>
                          <option>Ethinyl Estradiol; Etonogestrel</option>
                          <option>Drospirenone; Ethinyl Estradiol</option>
                          <option>Phentermine</option>
                          <option>Carbidopa; Levodopa</option>
                          <option>Omega-3-acid Ethyl Esters</option>
                          <option>Desogestrel; Ethinyl Estradiol</option>
                          <option>Guaifenesin</option>
                          <option>Rizatriptan Benzoate</option>
                          <option>Irbesartan</option>
                          <option>Progesterone</option>
                          <option>Doxazosin Mesylate</option>
                          <option>Linagliptin</option>
                          <option>Adalimumab</option>
                          <option>Nitrofurantoin</option>
                          <option>Budesonide</option>
                          <option> Benazepril Hydrochloride</option>
                          <option>Hydrochlorothiazide; Valsartan</option>
                          <option>Digoxin</option>
                          <option>Acetaminophen; Butalbital</option>
                          <option>Insulin Degludec</option>
                          <option>Ketoconazole</option>
                          <option>Nitroglycerin</option>
                          <option>Temazepam</option>
                          <option>Amiodarone Hydrochloride</option>
                          <option>Memantine Hydrochloride</option>
                          <option>Canagliflozin</option>
                          <option>Ketorolac Tromethamine</option>
                          <option>Liothyronine Sodium</option>
                          <option>Lithium</option>
                          <option>Dicyclomine Hydrochloride</option>
                          <option>Pramipexole Dihydrochloride</option>
                          <option>Nebivolol Hydrochloride</option>
                          <option>Terazosin</option>
                          <option>Magnesium</option>
                          <option>Colchicine</option>
                        </select>
                    </p>

                    <div class="checkbox"><label style="width: 100%"><input type="checkbox" name="" value="Others" id="other_diagnosis3" class="" style="position: relative;display: inline !important;width:20px;" > Others current medicines</label></div>
                   

                    <div style="padding: 10px;background-color: #f9f9f9;display: none;" id="mortar3">
                      <h4 style="font-weight: bold;">Enter your past medicines</h4>
                      <span>Leave blank if not applicable</span>
                      <hr/>
                      <div class="row">
                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="past_meds[]" class="leave" placeholder="Enter past medicines 1">
                        </div>

                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="past_meds[]" class="leave" placeholder="Enter past medicines 2">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="past_meds[]" class="leave" placeholder="Enter past medicines 3">
                        </div>

                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="past_meds[]" class="leave" placeholder="Enter past medicines 4">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="past_meds[]" class="leave" placeholder="Enter past medicines 5">
                        </div>

                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="past_meds[]" class="leave" placeholder="Enter past medicines 6">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="past_meds[]" class="leave" placeholder="Enter past medicines 7">
                        </div>

                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="past_meds[]" class="leave" placeholder="Enter past medicines 8">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="past_meds[]" class="leave" placeholder="Enter past medicines 9">
                        </div>

                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="past_meds[]" class="leave" placeholder="Enter past medicines 10">
                        </div>
                      </div>
                    </div>
                    <div style="padding: 10px;"></div>

                    <p>
                      <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; "> ECOG* scale, if known (0-5)</label>
                      <div style="padding: 3px;font-weight: bold;"></div>
                      <select oninput="this.className = ''" name="ecog" >
                        <option value="0">Select ECOG Value</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option value="I dont know">I don't know</option>
                        <option>Not applicable</option>
                      </select>
                    </p>


                  </div>

                  


                  <div class="tab">
                    <p> <button class="btn btn-success" type="button">Step 3 </button><br/>
                        <br/>
                      <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; "> Known allergies (food, medication, other) :</label>
                      <div style="padding: 3px;font-weight: bold;"></div>
                      <input placeholder="Known allergies" oninput="this.className = ''" name="known_allergies[]">
                    </p>
                    
                     <div class="checkbox"><label style="width: 100%"><input type="checkbox" name="" value="Others" id="knownalergiess" class="" style="position: relative;display: inline !important;width:20px;" > Others known allergies</label></div>
                   
                    
                    <div style="padding: 20px;background-color: #f9f9f9;display: none;" id="mortar223">
                      <h4 style="font-weight: bold;">Enter your known allergies</h4>
                      <span>Leave blank if not applicable</span>
                      <hr/>
                      <div class="row">
                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="known_allergies[]" class="leave" placeholder="Enter known allergy 1">
                        </div>

                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="known_allergies[]" class="leave" placeholder="Enter known allergy 2">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="known_allergies[]" class="leave" placeholder="Enter known allergy 3">
                        </div>

                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="known_allergies[]" class="leave" placeholder="Enter known allergy 4">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="known_allergies[]" class="leave" placeholder="Enter known allergy 5">
                        </div>

                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="known_allergies[]" class="leave" placeholder="Enter known allergy 6">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="known_allergies[]" class="leave" placeholder="Enter known allergy 7">
                        </div>

                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="known_allergies[]" class="leave" placeholder="Enter known allergy 8">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="known_allergies[]" class="leave" placeholder="Enter known allergy 9">
                        </div>

                        <div class="col-sm-6" style="margin-bottom: 14px;">
                          <input type="text" name="known_allergies[]" class="leave" placeholder="Enter known allergy 10">
                        </div>
                      </div>
                    </div>


                    <p>
                      <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; ">Family history/genetic conditions (close relatives up to grandparents)* :</label>
                      <div style="padding: 3px;font-weight: bold;"></div>
                      <select oninput="this.className = ''"  name="family_history" id="family_history" multiple="" style="width: 100%;display: none;">
                        <option>Family History</option>
                        <option>Genetic Conditions </option>
                        <option>Close Relatives up to Grandparents </option>
                        <option>None</option>
                        <option>Others</option>
                      </select>
                    </p>

                    <div style="padding: 10px;background-color: #f5f5f5;display: none;" id="family_history_tab">
                      <p>
                        <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; ">Please let us know</label>
                        <div style="padding: 3px;font-weight: bold;"></div>
                        <textarea placeholder="Clinical Significants Desc" oninput="this.className = ''" rows="6" name="family_history_desc"></textarea>
                      </p>
                    </div>
                  </div>





                  <div class="tab">
                    <p><button class="btn btn-success" type="button">Step 4 </button><br/>
                        <br/>
                      <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; ">Date of Birth (DD/MM/YYYY) :</label>
                      <div style="padding: 3px;font-weight: bold;"></div>
                      <input placeholder="Date of Birth" oninput="this.className = ''" name="age" id="dob">
                    </p>


                    <p>
                      <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; ">Biological Sex :</label>
                      <div style="padding: 3px;font-weight: bold;"></div>
                      <Select  oninput="this.className = ''" name="gender">
                        <option>Male</option>
                        <option>Female</option>
                      </Select>
                    </p>

                    <div class="row">
                      <div class="col-lg-6">
                        <p>
                          <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; ">Weight :</label>
                          <div style="padding: 3px;font-weight: bold;"></div>
                          <input placeholder="Weight" oninput="this.className = ''" name="weight">
                        </p>
                      </div>
                      <div class="col-lg-6">
                        <p>
                          <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; ">Lb/Kg :</label>
                          <div style="padding: 3px;font-weight: bold;"></div>
                          <select oninput="this.className = ''" name="weight_scale">
                            <option>Pound</option>
                            <option>Kilogram</option>
                          </select>
                        </p>
                      </div>
                    </div>

                      <p>
                        <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; ">Ethinicity/Race :</label>
                        <div style="padding: 3px;font-weight: bold;"></div>
                        <select  oninput="this.className = ''" name="ethinicity">
                          <option>Latino</option>
                          <option>Hispanic</option>
                          <option>White</option>
                          <option>Black</option>
                          <option>African-American</option>
                          <option>Asian</option>
                          <option>Native American</option>
                          <option>Native Hawaiian</option>
                          <option>Pacific Islander</option>
                          <option>Other</option>
                          <option>Prefer not to say</option>
                        </select>
                    </p>
                  </div>

                   <div class="tab">
                    
                     <p> <button class="btn btn-success" type="button">Step 5 </button><br/>
                        <br/><label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; ">Zip Code</label>
                    <div style="padding: 3px;font-weight: bold;"></div>
                    <input placeholder="Zip Code" oninput="this.className = ''" name="zip_code"></p>
                  <!--   <p>
                      <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; ">Address</label>
                      <div style="padding: 3px;font-weight: bold;"></div>
                      <input placeholder="Address" oninput="this.className = ''" name="address">
                    </p>

                      <p>
                        <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; ">City</label>
                      <div style="padding: 3px;font-weight: bold;"></div>
                      <input placeholder="City" oninput="this.className = ''" name="city">
                    </p> -->

                      <div id="blolo">
                        <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; ">State</label>
                        <div style="padding: 3px;font-weight: bold;"></div>
                        <select name="state" class="leave">
                        	<option value="Alabama">Alabama</option>
                        	<option value="Alaska">Alaska</option>
                        	<option value="Arizona">Arizona</option>
                        	<option value="Arkansas">Arkansas</option>
                        	<option value="California">California</option>
                        	<option value="Colorado">Colorado</option>
                        	<option value="Connecticut">Connecticut</option>
                        	<option value="Delaware">Delaware</option>
                        	<option value="District Of Columbia">District Of Columbia</option>
                        	<option value="Florida">Florida</option>
                        	<option value="Georgia">Georgia</option>
                        	<option value="Hawaii">Hawaii</option>
                        	<option value="Idaho">Idaho</option>
                        	<option value="Illinois">Illinois</option>
                        	<option value="Indiana">Indiana</option>
                        	<option value="Iowa">Iowa</option>
                        	<option value="Kansas">Kansas</option>
                        	<option value="Kentucky">Kentucky</option>
                        	<option value="Louisiana">Louisiana</option>
                        	<option value="Maine">Maine</option>
                        	<option value="Maryland">Maryland</option>
                        	<option value="Massachusetts">Massachusetts</option>
                        	<option value="Michigan">Michigan</option>
                        	<option value="Minnesota">Minnesota</option>
                        	<option value="Mississippi">Mississippi</option>
                        	<option value="Missouri">Missouri</option>
                        	<option value="Montana">Montana</option>
                        	<option value="Nebraska">Nebraska</option>
                        	<option value="Nevada">Nevada</option>
                        	<option value="New Hampshire">New Hampshire</option>
                        	<option value="New Jersey">New Jersey</option>
                        	<option value="New Mexico">New Mexico</option>
                        	<option value="New York">New York</option>
                        	<option value="North Carolina">North Carolina</option>
                        	<option value="North Dakota">North Dakota</option>
                        	<option value="Ohio">Ohio</option>
                        	<option value="Oklahoma">Oklahoma</option>
                        	<option value="Oregon">Oregon</option>
                        	<option value="Pennsylvania">Pennsylvania</option>
                        	<option value="Rhode Island">Rhode Island</option>
                        	<option value="South Carolina">South Carolina</option>
                        	<option value="South Dakota">South Dakota</option>
                        	<option value="Tennessee">Tennessee</option>
                        	<option value="Texas">Texas</option>
                        	<option value="Utah">Utah</option>
                        	<option value="Vermont">Vermont</option>
                        	<option value="Virginia">Virginia</option>
                        	<option value="Washington">Washington</option>
                        	<option value="West Virginia">West Virginia</option>
                        	<option value="Wisconsin">Wisconsin</option>
                        	<option value="Wyoming">Wyoming</option>
                        </select>			
                    </div>

                      <p>
                        <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; ">Country</label>
                        <div style="padding: 3px;font-weight: bold;"></div>
                        <select placeholder="Country" oninput="this.className = ''" name="country" id="country">
                          <option value="">Select Country</option>
                          <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antartica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo">Congo, the Democratic Republic of the</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                            <option value="Croatia">Croatia (Hrvatska)</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="East Timor">East Timor</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="France Metropolitan">France, Metropolitan</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                            <option value="Holy See">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran (Islamic Republic of)</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                            <option value="Korea">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao">Lao People's Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon" >Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macau">Macau</option>
                            <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia">Micronesia, Federated States of</option>
                            <option value="Moldova">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russia">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                            <option value="Saint LUCIA">Saint LUCIA</option>
                            <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia (Slovak Republic)</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                            <option value="Span">Spain</option>
                            <option value="SriLanka">Sri Lanka</option>
                            <option value="St. Helena">St. Helena</option>
                            <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syrian Arab Republic</option>
                            <option value="Taiwan">Taiwan, Province of China</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States" selected="">United States</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Viet Nam</option>
                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                            <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                            <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </p>

                   
                  </div>

                 

                   <div class="tab">
                      <p> <button class="btn btn-success" type="button">Step 6 </button><br/>
                        <br/>
                        <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; ">Are you currently participating in any other clinical trial or taking any investigational product or medicine?*</label>
                        <div style="padding: 3px;font-weight: bold;"></div>
                        <select oninput="this.className = ''" name="are_they_on_studies">
                           <option value="">Select your answer</option>
                          <option>Yes</option>
                          <option>No</option>
                          <option>I’m not sure</option>
                        </select>
                      </p>

                      <p>
                        <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; ">Are you over 18?</label>
                        <div style="padding: 3px;font-weight: bold;"></div>
                        <select oninput="this.className = ''" name="are_they_consent">
                          <option value="">Select your answer</option>
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                      </p>

                      <p>
                        <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; ">Do you or have you ever smoked tobacco regularly?</label>
                        <div style="padding: 3px;font-weight: bold;"></div>
                        <select oninput="this.className = ''" name="alchohol_tobaco_use">
                           <option value="">Select your answer</option>
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                      </p>

                      <p>
                        <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; ">Do you or have you ever drank alcohol regularly?</label>
                        <div style="padding: 3px;font-weight: bold;"></div>
                        <select oninput="this.className = ''" name="only_alchohol">
                           <option value="">Select your answer</option>
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                      </p>

                      <p>
                        <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; ">Have you ever been found to not be mentally fit to give consent by a judge? (We know this is a strange question! We have to ask for legal purposes to make sure you can give consent)</label>
                        <div style="padding: 3px;font-weight: bold;"></div>
                        <select oninput="this.className = ''" name="mentally_fit">
                           <option value="">Select your answer</option>
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                      </p>

                      <div class="row">
                        <div class="col-lg-6">
                          <p>
                            <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; ">Full name</label>
                            <div style="padding: 3px;font-weight: bold;"></div>
                            <input placeholder="Full name" oninput="this.className = ''" name="person_name">
                          </p>
                        </div>

                        <div class="col-lg-6">
                          <p>
                            <label style="font-family:Nunito;text-align: left;color: #333;font-weight: bold; "> Date</label>
                            <div style="padding: 3px;font-weight: bold;"></div>
                            <input placeholder="Date" value="<?php echo date("d-m-Y H:i:s"); ?>" readonly oninput="this.className = ''" name="dates">
                          </p>
                        </div>

                        <div class="col-sm-12">
                          <a data-toggle="modal" data-target="#myModal">To wrap up the consent, please read  our Terms and Conditions</a>
                          <div id="myModal" class="modal fade" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Terms and Conditions</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
                                  </div>
                                  <div class="modal-footer">
                                    <div class="checkbox">
                                     
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>


                        </div>
                      </div>


                     
                    
                  </div>
                  <input type="hidden" name="email" value="<?php echo base64_decode($_REQUEST['email_data']); ?>">
                  <input type="hidden" name="phone" value="<?php echo base64_decode($_REQUEST['phone_data']); ?>">

                  <div style="overflow:auto;">
                    <div style="float:right;margin-top:20px;">
                      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                      <button type="button" id="nextBtn" onclick="nextPrev(1)">I consent</button>
                    </div>
                  </div>
                  <!-- Circles which indicates the steps of the form: -->
                  
                </form>
                </div>
              </div>
              
              
            </div>
          </div>
        </div>


       <?php include 'footer.php'; ?>
      </div> <!-- Main -->
    </div><!-- Wrapper -->


    <!-- Jquery and Js Plugins -->
    <script type="text/javascript" src="assets/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins.js"></script>
    <script type="text/javascript" src="assets/js/validator.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>

    <script>
      $(document).ready(function(){

        $("#other_diagnosis").click(function(event) {
          if ($(this).is(":checked"))
             $("#mortar").show("slow");
          else
             $("#mortar").hide("slow");
        });

        $("#other_diagnosis2").click(function(event) {
          if ($(this).is(":checked"))
             $("#mortar2").show("slow");
          else
             $("#mortar2").hide("slow");
        });
        
        $("#country").change(function(){
            var country = $(this).val();
           /// alert(country);
            if(country!="United States"){
                $("#blolo").hide();
            }else{
                $("#blolo").show();
            }
        });
        
        $("#knownalergiess").click(function(event) {
          if ($(this).is(":checked"))
             $("#mortar223").show("slow");
          else
             $("#mortar223").hide("slow");
        });

        $("#other_diagnosis3").click(function(event) {
          if ($(this).is(":checked"))
             $("#mortar3").show("slow");
          else
             $("#mortar3").hide("slow");
        });


       
         $("#family_history").change(function(){
          var change_val = $(this).val();
          if (change_val=="Others") {
            $("#family_history_tab").show("slow");
          }else{
            $("#family_history_tab").hide("slow");
          }       
        });

         $('#dob').datepicker({format: "dd-mm-yyyy", endDate: '-18Y'});
         // $('#time_of_diagnosis').datepicker({format: "yyyy"});
      });

      var currentTab = 0; // Current tab is set to be the first tab (0)
      showTab(currentTab); // Display the current tab
      function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
          document.getElementById("prevBtn").style.display = "none";
        } else {
          document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {

          document.getElementById("nextBtn").innerHTML = "I Consent";
        } else {
          document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
      }

      function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
          // ... the form gets submitted:
          document.getElementById("regForm").submit();
          return false;
        }
        showTab(currentTab);
      }

      function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
          // If a field is empty...
          if (y[i].value == "") {

            if (!y[i].classList.contains("leave")) {
              y[i].className += " invalid";
              valid = false;
            }
            // add an "invalid" class to the field:            
            // and set the current valid status to false
            
          }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
          document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
      }

      function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
          x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
      }
    </script>
    <script src="dist/jquery.inputmask.js"></script>
    <script src="dist/bindings/inputmask.binding.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          $('#select2').select2({ placeholder: "Select a diagnosis/conditions"});
          $('#select21').select2({ placeholder: "Select Current Medicines"});
          $('#select22').select2({ placeholder: "Select Past Medicines"});
          $('#family_history').select2({ placeholder: "Select History"});

          $(".alert").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert").slideUp(500);
        });


      });


    </script>  
  </body>
</html>
