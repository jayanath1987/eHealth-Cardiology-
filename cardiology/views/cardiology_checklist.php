<?php
/*
--------------------------------------------------------------------------------
HHIMS - Hospital Health Information Management System
Copyright (c) 2011 Information and Communication Technology Agency of Sri Lanka
<http: www.hhims.org/>
----------------------------------------------------------------------------------
This program is free software: you can redistribute it and/or modify it under the
terms of the GNU Affero General Public License as published by the Free Software 
Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,but WITHOUT ANY 
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR 
A PARTICULAR PURPOSE. See the GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License along 
with this program. If not, see <http://www.gnu.org/licenses/> 
---------------------------------------------------------------------------------- 
Date : June 2016
Author: Mr. Jayanath Liyanage   jayanathl@icta.lk

Programme Manager: Shriyananda Rathnayake
URL: http://www.govforge.icta.lk/gf/project/hhims/
__________________________________________________________________________________

*/
include "header.php"
	
?>
<?php echo Modules::run('menu'); //runs the available menu option to that usergroup ?>
<div class="container" style="width:95%;">
	<div class="row" style="margin-top:55px;">
	  <div class="col-md-2 ">
	  </div>
	  <div class="col-md-10 " >
		<?php
		$patInfo ="";
		//$mdsPermission = MDSPermission::GetInstance();
		//if ($mdsPermission->haveAccess($_SESSION["UGID"],"patient_Edit"))
		$tools = "<img src='".base_url()."/images/patient.jpg' width=100 height=100 style='padding:2px;'>";
		echo  "<div id ='patientBanner' class='well'  style='padding:0px;'>\n";
		echo  "<table width=100% border=0 class='' style='font-size:0.95em;'>\n";
		echo  "<tr><td  rowspan=5 valign=top align=left width=10>".$tools."</td><td>Full Name:</td><td><b>";
		echo  $patient_info["Personal_Title"];
		echo  $patient_info["Personal_Used_Name"]."&nbsp;";
		echo  $patient_info["Full_Name_Registered"];
		echo "</b></td><td>HIN:</td><td><b>".$patient_info["HIN"]."</b>";
		echo  "<td  rowspan=5 valign=top align=left width=10>";
		//echo  "<input type='button' class='btn btn-xs btn-warning pull-right' onclick=self.document.location='".site_url('form/edit/patient/'.$patient_info["PID"])."' value='Edit'>";
		echo  "<tr><td>Gender:</td><td><b>".$patient_info["Gender"]."</b></td>";
		echo  "<td>NIC:</td><td>".$patient_info["NIC"]."</td></tr>\n";
		echo  "<tr><td>Date of birth:</td><td><b>".$patient_info["DateOfBirth"]."</b></td><td >Address:</td><td rowspan=3 valign=top>";
		echo  $patient_info["Address_Street"]."&nbsp;";
		echo  $patient_info["Address_Street1"]."<br>";
		echo  $patient_info["Address_Village"]."<br>";
		//echo  $patient_info["Address_DSDivision"]."<br>";
		echo  $patient_info["Address_District"]."<br>";
		echo  "</td></tr>\n";
		echo  "<tr><td>Age:</td><td><b>~";
		if ($patient_info["Age"]["years"]>0){
			echo  $patient_info["Age"]["years"]."Yrs&nbsp;";
		}
		echo  $patient_info["Age"]["months"]."Mths&nbsp;";
		echo  $patient_info["Age"]["days"]."Dys&nbsp;";
		echo  "</b></td><td></td></tr>\n";
		echo  "<tr><td>Civil Status:</td><td>".$patient_info["Personal_Civil_Status"]."</td><td></td></tr>\n";
		echo  "</table></div>\n";
		?>


			<div class="panel panel-default"  style="padding:2px;margin-bottom:1px;" >
                            <div class="panel-heading" ><center><b>CARDIAC CATHETERIZATION PRE-PROCEDURE CHECK LIST</b></center></div>
                            <div class="panel-heading" ><b>BASIC INFORMATION</b></div>
					<?php
						//echo '<form action="'.site_url("admission/new_reffer").'" method="POST">';
                                        echo '<form action="#" method="POST">';
							echo '<table class="table table-condensed"  style="font-size:0.95em;margin-bottom:0px;">';
								echo '<tr>';
									echo '<td>';
										echo 'Date & Time of Admission: <input type="text" readonly class="form-control input-sm" style="width:150px;" name ="AdmissionDate" value="'.date("Y-m-d H:i:s").'">';
									echo '</td>';
									echo '<td>';
										echo 'Onset Date: <input type="text" readonly  name ="OnSetDate"  class="form-control input-sm" style="width:150px;"  value="'.date("Y-m-d").'">';
									echo '</td>';
									echo '<td>';
										echo 'Bead head no: <input type="text"  name ="BHT"  class="form-control input-sm" style="width:150px;"  value=""  autofocus>';
									echo '</td>';
								echo '</tr>';
                                                                echo '</table><br>';
                                                                ?>
                                                                <!-- end of basic information -->
                                                               
                                                                <div class="panel-heading" ><b>HISTORY</b></div>
                                                                <?php
                                                                echo '<table class="table table-condensed"  style="font-size:0.95em;margin-bottom:0px;">';
									echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'Chest Pain:  <input type="radio" name="chestpain" value="yes"> YES<input type="radio" name="chestpain" value="no" checked> NO';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="chestpain_Remarks" name="chestpain_Remarks" placeholder="Angina Class I II III IV"></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                        echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'SOB:  <input type="radio" name="sob" value="yes"> YES<input type="radio" name="sob" value="no" checked> NO';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="sob_Remarks" name="sob_Remarks" placeholder="NYHA Class I II III IV"></textarea>';
									echo '</td>';
									echo '</tr>';	
                                                                        echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'Orthopnoea:  <input type="radio" name="orthopnoea" value="yes"> YES<input type="radio" name="orthopnoea" value="no" checked> NO';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="orthopnoea_Remarks" name="orthopnoea_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                          echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'History of melena:  <input type="radio" name="history_melena" value="yes"> YES<input type="radio" name="history_melena" value="no" checked> NO';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="history_melena_Remarks" name="history_melena_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                          echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'History of Bleeding:  <input type="radio" name="history_bleeding" value="yes"> YES<input type="radio" name="history_bleeding" value="no" checked> NO';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="history_bleeding_Remarks" name="history_bleeding_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                          echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'Past surgical procedures (Non-cardiac):  <input type="radio" name="past_surgical_procedure" value="yes"> YES<input type="radio" name="past_surgical_procedure" value="no" checked> NO';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="past_surgical_procedure_Remarks" name="past_surgical_procedure_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                          echo '<tr>';
                                                                        echo '<td width="32%">';
									echo 'Upcoming Surgical Procedures:  <input type="radio" name="up_surgical_procedure" value="yes"> YES<input type="radio" name="up_surgical_procedure" value="no" checked> NO';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="up_surgical_procedure_Remarks" name="up_surgical_procedure_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                          echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'Use of Alcohol:  <input type="radio" name="alcohol_use" value="yes"> YES<input type="radio" name="alcohol_use" value="no" checked> NO';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="alcohol_use_Remarks" name="alcohol_use_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                          echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'Smoking:  <input type="radio" name="smoking" value="yes"> YES<input type="radio" name="smoking" value="no" checked> NO';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="smoking_Remarks" name="smoking_Remarks" placeholder="Current smoker/Ex-smoker"></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                          echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'Non-Adherence to the Medication:  <input type="radio" name="med_adherence" value="yes"> YES<input type="radio" name="med_adherence" value="no" checked> NO';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="med_adherence_Remarks" name="med_adherence_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                          echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'History of Drug Addiction:  <input type="radio" name="drug_addiction" value="yes"> YES<input type="radio" name="drug_addiction" value="no" checked> NO';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="drug_addiction_Remarks" name="drug_addiction_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
							echo '</table><br>';
                                                        ?>
                                                                   <div class="panel-heading" ><b>PAST MEDICAL HISTORY</b></div>
                                                                <?php
                                                                echo '<table class="table table-condensed"  style="font-size:0.95em;margin-bottom:0px;">';
                                                                  echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'ACS:  <input type="radio" name="acs" value="yes"> YES<input type="radio" name="acs" value="no" checked> NO';
									echo '</td>';
                                                                         echo '<td width="10%">';
										echo 'STEMI:';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="acs_stemi_Remarks" name="acs_stemi_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                        echo '<tr>';
                                                                        echo '<td width="32%">';
									echo '</td>';
                                                                         echo '<td width="10%">';
										echo 'NSTEMI:';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="acs_nstemi_Remarks" name="acs_nstemi_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                        echo '<tr>';
                                                                        echo '<td width="32%">';
									echo '</td>';
                                                                         echo '<td width="10%">';
										echo 'UA:';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="acs_ua_Remarks" name="acs_ua_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                        echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'Previous Thrombolysis:  <input type="radio" name="thrombolysis" value="yes"> YES<input type="radio" name="thrombolysis" value="no" checked> NO';
									echo '</td>';
                                                                         echo '<td width="10%">';echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="thrombolysis_Remarks" name="thrombolysis_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';                                                                               
                                                      
                                                                        echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'Previous PCI:  <input type="radio" name="previous_pci" value="yes"> YES<input type="radio" name="previous_pci" value="no" checked> NO';
									echo '</td>';
                                                                         echo '<td width="10%">';echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="previous_pci_Remarks" name="previous_pci_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                        echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'Previous CABG:  <input type="radio" name="previous_cabg" value="yes"> YES<input type="radio" name="previous_cabg" value="no" checked> NO';
									echo '</td>';
                                                                         echo '<td width="10%">';echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="previous_cabg_Remarks" name="previous_cabg_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                        echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'CCU/ ICU Admissions:  <input type="radio" name="ccu_admission" value="yes"> YES<input type="radio" name="ccu_admission" value="no" checked> NO';
									echo '</td>';
                                                                         echo '<td width="10%">';echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="ccu_admission_Remarks" name="ccu_admission_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                         echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'HTN:  <input type="radio" name="htn" value="yes"> YES<input type="radio" name="htn" value="no" checked> NO';
									echo '</td>';
                                                                         echo '<td width="10%">';echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="htn_Remarks" name="htn_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                         echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'Dyslipidaemia:  <input type="radio" name="dyslipidaemia" value="yes"> YES<input type="radio" name="dyslipidaemia" value="no" checked> NO';
									echo '</td>';
                                                                         echo '<td width="10%">';echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="dyslipidaemia_Remarks" name="dyslipidaemia_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                         echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'CCF:  <input type="radio" name="ccf" value="yes"> YES<input type="radio" name="ccf" value="no" checked> NO';
									echo '</td>';
                                                                         echo '<td width="10%">';echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="ccf_Remarks" name="ccf_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                         echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'DM:  <input type="radio" name="ccu_admission" value="yes"> YES<input type="radio" name="dm" value="no" checked> NO';
									echo '</td>';
                                                                         echo '<td width="10%">';echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="dm_Remarks" name="dm_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                         echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'CVA:  <input type="radio" name="cva" value="yes"> YES<input type="radio" name="cva" value="no" checked> NO';
									echo '</td>';
                                                                         echo '<td width="10%">';echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="cva_Remarks" name="cva_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                        echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'Renal Diseases:  <input type="radio" name="renal_disease" value="yes"> YES<input type="radio" name="renal_disease" value="no" checked> NO';
									echo '</td>';
                                                                         echo '<td width="10%">';
										echo 'Stage:';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="renal_disease_stage_Remarks" name="renal_disease_stage_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                        echo '<tr>';
                                                                        echo '<td width="32%">';
									echo '</td>';
                                                                         echo '<td width="10%">';
										echo 'GFR:';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="renal_disease_gfr_Remarks" name="renal_disease_gfr_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                        
                                                                        echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'Chronic Liver Disease:  <input type="radio" name="chronic_liver_disease" value="yes"> YES<input type="radio" name="chronic_liver_disease" value="no" checked> NO';
									echo '</td>';
                                                                         echo '<td width="10%">';echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="chronic_liver_disease_Remarks" name="chronic_liver_disease_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                           echo '<tr>';
                                                                        echo '<td width="32%">';
										echo 'Previous Cancers:  <input type="radio" name="previous_cancer" value="yes"> YES<input type="radio" name="previous_cancer" value="no" checked> NO';
									echo '</td>';
                                                                         echo '<td width="10%">';echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="previous_cancer_Remarks" name="previous_cancer_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                        echo '</table><br>';?>
                                                                   
                                                                   <div class="panel-heading" ><b>DRUGS AND ALLERGY</b></div>
                                                                <?php
                                                                echo '<table class="table table-condensed"  style="font-size:0.95em;margin-bottom:0px;">';
                                                                echo '<tr>';
                                                                        echo '<td width="42%">';
										echo 'Is the patient on Aspirin:  <input type="radio" name="aspirin" value="yes"> YES<input type="radio" name="aspirin" value="no" checked> NO';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="aspirin_Remarks" name="aspirin_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                        echo '<tr>';
                                                                        echo '<td width="42%">';
										echo 'History of allergy to Aspirin:  <input type="radio" name="allergy_aspirin" value="yes"> YES<input type="radio" name="allergy_aspirin" value="no" checked> NO';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="allergy_aspirin_Remarks" name="allergy_aspirin_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                         echo '<tr>';
                                                                        echo '<td width="42%">';
										echo 'Is the Patient on Clopidogrel/ Other anti-platelet agent:  <input type="radio" name="clopidogrel" value="yes"> YES<input type="radio" name="clopidogrel" value="no" checked> NO';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="clopidogrel_Remarks" name="clopidogrel_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                         echo '<tr>';
                                                                        echo '<td width="42%">';
										echo 'Is the patient on warfarin/Anticoagulation:  <input type="radio" name="warfarin" value="yes"> YES<input type="radio" name="warfarin" value="no" checked> NO';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="warfarin_Remarks" name="warfarin_Remarks" placeholder="If Yes      a) When is the last dose ?       b) What is the INR?"></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                         echo '<tr>';
                                                                        echo '<td width="42%">';
										echo 'Is the Patient on Heparin/LMWH:  <input type="radio" name="heparin" value="yes"> YES<input type="radio" name="heparin" value="no" checked> NO';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="heparin_Remarks" name="heparin_Remarks" placeholder="  a) When is the last dose?   b) What is the aPTT?"></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                           echo '<tr>';
                                                                        echo '<td width="42%">';
										echo 'Is the patient on Metformin:  <input type="radio" name="metfomin" value="yes"> YES<input type="radio" name="metfomin" value="no" checked> NO';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="metfomin_Remarks" name="metfomin_Remarks" placeholder="If Yes, stop Metformin 24 hrs prior to the procedure and restart after 48hrs of the procedure"></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                           echo '<tr>';
                                                                        echo '<td width="42%">';
										echo 'History of Contrast/Iodine allergy?:  <input type="radio" name="contrast" value="yes"> YES<input type="radio" name="contrast" value="no" checked> NO';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="contrast_Remarks" name="contrast_Remarks" placeholder="If yes, arrange the premedication"></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                            echo '<tr>';
                                                                        echo '<td width="42%">';
										echo 'History of Latex/Plaster Allergy?:  <input type="radio" name="latex" value="yes"> YES<input type="radio" name="latex" value="no" checked> NO';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="latex_Remarks" name="latex_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                echo '</table><br>';?>
                                                                   
                                                                   <div class="panel-heading" ><b>LAB INVESTIGATIONS</b></div>
                                                                <?php
                                                                echo '<table class="table table-condensed"  style="font-size:0.95em;margin-bottom:0px;">';
                                                                echo '<tr>';
                                                                        echo '<td width="20%">';
										echo 'FBC:';
									echo '</td>';
                                                              echo '<td width="20%">';
										echo '<textarea class="form-control input-sm" id="fbc_hb" name="fbc_hb" placeholder="Hb"></textarea>';
									echo '</td>';
									echo '<td width="20%">';
										echo '<textarea class="form-control input-sm" id="fbc_platelet" name="fbc_platelet" placeholder="Platelet"></textarea>';
									echo '</td>';
                                                                        echo '<td width="20%">';
										echo '<textarea class="form-control input-sm" id="fbc_wbc" name="fbc_wbc" placeholder="WBC"></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                         echo '<tr>';
                                                                        echo '<td width="20%">';
										echo 'INR:';
									echo '</td>';
                                                              echo '<td width="20%">';
										echo '<textarea class="form-control input-sm" id="inr1" name="inr1" ></textarea>';
									echo '</td>';
									echo '<td width="20%">';
										echo '<textarea class="form-control input-sm" id="inr2" name="inr2" ></textarea>';
									echo '</td>';
                                                                        echo '<td width="20%">';
										echo '<textarea class="form-control input-sm" id="inr3" name="inr3" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                          echo '<tr>';
                                                                        echo '<td width="20%">';
										echo 'S. Creatinine:';
									echo '</td>';
                                                              echo '<td width="20%">';
										echo '<textarea class="form-control input-sm" id="creatinine" name="creatinine" ></textarea>';
									echo '</td>';
									echo '<td width="20%">';
										echo '<textarea class="form-control input-sm" id="creatinine_urea" name="creatinine_urea" placeholder="Urea" ></textarea>';
									echo '</td>';
                                                                        echo '<td width="20%">';
										echo '<textarea class="form-control input-sm" id="creatinine_urea" name="creatinine_gfr" placeholder="GFR"></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                          echo '<tr>';
                                                                        echo '<td width="20%">';
										echo 'SGPT/ALT:';
									echo '</td>';
                                                              echo '<td width="20%">';
										echo '<textarea class="form-control input-sm" id="sgpt2" name="sgpt2" ></textarea>';
									echo '</td>';
									echo '<td width="20%">';
										echo '<textarea class="form-control input-sm" id="sgpt_ast" name="sgpt_ast" placeholder="SGOT/AST"></textarea>';
									echo '</td>';
                                                                        echo '<td width="20%">';
										echo '<textarea class="form-control input-sm" id="sgpt2" name="sgpt2" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                             echo '<tr>';
                                                                        echo '<td width="20%">';
										echo 'HIV status:';
									echo '</td>';
                                                              echo '<td width="20%">';
										echo '<textarea class="form-control input-sm" id="hiv_status" name="hiv_status" ></textarea>';
									echo '</td>';
									echo '<td width="20%">';
										echo '<textarea class="form-control input-sm" id="hiv_status" name="hiv_status"></textarea>';
									echo '</td>';
                                                                        echo '<td width="20%">';
										echo '<textarea class="form-control input-sm" id="hiv_status" name="hiv_status" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                             echo '<tr>';
                                                                        echo '<td width="20%">';
										echo 'Hepatitis screen:';
									echo '</td>';
                                                              echo '<td width="20%">';
										echo '<textarea class="form-control input-sm" id="hepatitis" name="hepatitis" ></textarea>';
									echo '</td>';
									echo '<td width="20%">';
										echo '<textarea class="form-control input-sm" id="hepatitis" name="hepatitis"></textarea>';
									echo '</td>';
                                                                        echo '<td width="20%">';
										echo '<textarea class="form-control input-sm" id="hepatitis" name="hepatitis" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                
                                                         echo '</table><br>';  
                                                         ?>
                                                                    <div class="panel-heading" ><b>CARDIAC INVESTIGATIONS</b></div>
                                                                <?php
                                                                echo '<table class="table table-condensed"  style="font-size:0.95em;margin-bottom:0px;">';
									echo '<tr>';
                                                                        echo '<td width="25%">';
										echo 'ECG:';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="ecg_Remarks" name="ecg_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                        echo '<tr>';
                                                                        echo '<td width="25%">';
										echo 'Troponin:';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="troponin_Remarks" name="troponin_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                        echo '<tr>';
                                                                        echo '<td width="25%">';
										echo 'Echocardiogram:';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="echocardiogram_Remarks" name="echocardiogram_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                        echo '<tr>';
                                                                        echo '<td width="25%">';
										echo 'Stress Test:';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="stress_Remarks" name="stress_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                        echo '<tr>';
                                                                        echo '<td width="25%">';
										echo 'CTCA:';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="ctca_Remarks" name="ctca_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                        echo '<tr>';
                                                                        echo '<td width="25%">';
										echo 'Nuclear Imaging:';
									echo '</td>';
									echo '<td >';
										echo '<textarea class="form-control input-sm" id="nuclear_Remarks" name="nuclear_Remarks" ></textarea>';
									echo '</td>';
									echo '</tr>';
                                                                        echo '</table><br>';  
							                echo '<button type="submit" name="Save" id="fixedbutton" value="Save" class="btn btn-primary ">';
									echo '<span class="glyphicon glyphicon-floppy-disk"></span> Save';
									echo '</button>';
						echo '</form>';
					?>
			</div>	<!-- END OPD INFO-->			
		</div>
	</div>
</div>
