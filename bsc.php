<style>
/* Style for the form container */
.border_table {
    width: 100%;
    border-collapse: collapse;
    border: 2px solid #007BFF;
    margin-bottom: 20px;
    background-color: #F0F0F0;
}

/* Style for form labels */
.form-group b {
    color: #007BFF;
}

/* Style for text inputs */
input[type="text"], input[type="date"], select, textarea {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 5px solid skyblue;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #f9f9f9; /* Background color for additional inputs */
    color: #333; /* Text color */
    font-size: 14px;
}

/* Style for the additional input text fields on focus */
.additional-input:focus {
    border-color: #007BFF; /* Change border color on focus */
    outline: none; /* Remove the default outline */
    box-shadow: 0 0 5px #007BFF; /* Add a subtle shadow on focus */
}

/* Style for radio buttons and checkboxes */
input[type="radio"], input[type="checkbox"] {
    margin-right: 5px;
}

/* Style for the submit button */
input[type="submit"] {
    background-color: #007BFF;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* Style for the submit button on hover */
input[type="submit"]:hover {
    background-color: #0056b3;
}
</style>

<table class="table-responsive border_table" >
    <tbody>
           
                <p>Name & Status :</p>
                    <div class="form-group">
                        <b>Registor No :<input type="text" placeholder="Enter Your reg no"  name="regno" maxlength="46" =""> </b>  
                    </div>
                       
                    <div class="form-group">
                        <b>Fullname :<input type="text" placeholder="Enter Your Fullname"  name="fullname" maxlength="46" =""> </b>          
                        <b>Age :  <input type="text" placeholder="Age" name="age"=""></b>
                    </div>
                
                    <div class="form-group"><b>Gender :
                        <select name="gender" ="">
                           <option  value="">-- Gender --</option>
                           <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          <option value="Others">Others</option>
                        </select> </b>

                     <b>Date Of Birth : <input type="date" placeholder="Birthdate" name="dob" maxlength="46" height="30%" =""></b>
                    </div>
                    
                    <div class="form-group">
                               
                        <b>Civil Status :</b>
                            <select name="cs" ="">                                                     
                        		<option  value="">--Status--</option>
	                        	<option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Separeted">Separated</option>
                                <option value="Single Parent">Single Parent</option>
                                <option value="Widow or Widower">Widow or Widower</option>
                            </select> 
                        
                        <b>Religion :  </b>      
                            <select name="religion" ="">
                                <option  value="">-- Religious Affiliation --</option>
                                <option value="Hindu">Hindu</option>
                                <option value="christianity">christianity</option>
                                <option value="Islam">Islam</option>
                                <option value="Other">Others</option>
                            </select>
                            </div>
                            <p> Permanent Address :</p>
                            <div class="form-group"> 
                                <b>  Address:</b>
                                <input type="text" placeholder="Address" name="home_address" maxlength="46" ="">
                                    
                             <b> Pincode :</b>
                                <input type ="text" placeholder="Postal Code" name="pincode"maxlength="46">
                            </div>
                </td>
                        <p>Educational Background : </p>
                            <div class="form-group">
                              <b>  Course Degree :</b>
                                                        
                                <select name="course">
                                    <option value="M.SC COMPUTER SCIENCE">M.SC. COMPUTER SCIENCE</option>
                                </select>
                                <b>   YR.Graduated :</b>
                                   
                                <select name="batch" >
                                    <option  value="">--Batch--</option>
                                    <option value="Batch 2010">Batch 2010</option>
                                    <option value="Batch 2011">Batch 2011</option>
                                    <option value="Batch 2012">Batch 2012</option>
                                    <option value="Batch 2013">Batch 2013</option>
                                    <option value="Batch 2014">Batch 2014</option>
                                    <option value="Batch 2015">Batch 2015</option>
                                    <option value="Batch 2016">Batch 2016</option>
                                    <option value="Batch 2017">Batch 2017</option>
                                    <option value="Batch 2018">Batch 2018</option>
                                    <option value="Batch 2019">Batch 2019</option>
                                    <option value="Batch 2020">Batch 2020</option>
                                    <option value="Batch 2021">Batch 2021</option>
                                    <option value="Batch 2022">Batch 2022</option>
                                    <option value="Batch 2023">Batch 2023</option>
                                </select>
                            </div> 
                            
                        <p>Social Network I.D : </p>
                            
                            <div class="form-group">
                              
                                <b>Phone Number:</b>
                                    <input name="phonenumber" type="text" maxlength="46" >   
                               
                                <b>  Email Address:</b>
                                    <input type="text" name="email" maxlength="46" >
                            
                            </div>                                      
                      
                        <p>Employability Status :</p>
                            <div class="form-group">
                           
                                <b>  Are you presently?:</b>

                                    <input name="estatus" type="radio" value = "Employed" maxlength="46"  checked><b>Employed</b>
                                    <input name="estatus" type="radio" value = "Higher Studies" maxlength="46" ><b>Higher Studies</b>
                                    <input name="estatus" type="radio" value = "Unemployed" maxlength="46" ><b>Unemployed</b>                                    
                                    <input name="estatus" type="radio" value = "Business Details" maxlength="46" ><b>Business Details</b>

                                                       
                            </div> 
                    </tbody>
                </table>
            <br>
                <table  >
                    <tbody>
                        <div  id="employed-section" class="form-group">
                        <div style="text-align: center;font-family: Arial; font-size: 14px; background: black; border: solid 1px #eaeaea;color: white;"> Questions for Employed</div>
                            <br>
                              
                                <b>    1. type of Organization ? :</b>
                                 <select name="organization">
                                    <option value="">--Select--</option>
                                    <option  value="Government Organization (GO)">Government Organization (GO)</option>
                                    <option  value="Private Organization">Private Organization</option>
                                    <option  value="Cooperative">Cooperative</option>
                                    <option  value="Non-Government Organization (NGO)">Non-Government Organization</option>
                                    <option  value="Peoples Organization">Peoples Organization</option>
                                  </select>
                                
                               <br>  <br>    <b>  2.  Occupational classification? : </b>
                                                                            
                                        <input type = "text" name = "profession">
                                                                                                        
                                <br>  <br>   <b>  3. Employment type? : </b>
                                                                          
                                        <input name="etype" type="radio" value = "Working Fulltime" maxlength="46" ><b>Working Fulltime</b>
                                        <input name="etype" type="radio" value = "Working Partime" maxlength="46" ><b>Working Partime</b>
                                        <input name="etype" type="radio" value = "Others" maxlength="46" ><b>Others</b>
                                            
                                <br>    <br>  <b> 4. Place of work ? :</b>
                                                
                                        <input name="location" type="checkbox" value = "local" maxlength="46" ><b>Local</b>
                                        <input name="location" type="checkbox" value = "abroad" maxlength="46" ><b>Abroad</b>                                                                               
                                                           
                                <br>   <br> <b> 5. Job Situation? :</b>
                                       
                                            <input name="status" type="checkbox" value = "Permanent" maxlength="46"><b>Permanent</b>
                                            <input name="status" type="checkbox" value = "Contractual" maxlength="46"><b>Contractual</b> 
                                            <input name="status" type="checkbox" value = "Casual" maxlength="46"><b>Casual</b>
                                            <input name="status" type="checkbox" value = "Others" maxlength="46" ><b>Others</b>                                                                                                                              
                                             
                                <br>    <br> <b> 6. Number of years in Company or in your Work? :</b>
                                              
                                            <input name="year" type="radio" value = "1-5 yrs" maxlength="46" ><b>1-5</b>
                                            <input name="year" type="radio" value = "6-10 yrs" maxlength="46" ><b>6-10</b>
                                            <input name="year" type="radio" value = "10-15 yrs" maxlength="46" ><b>10-15</b>
                                            <input name="year" type="radio" value = "16-20 yrs" maxlength="46" ><b>16-20</b>
                                            <input name="year" type="radio" value = "20-25 yrs" maxlength="46" ><b>20-25</b>
                                            <input name="year" type="radio" value = "25 yrs above" maxlength="46" ><b>25 above</b>
                                                        
                                <br>   <br> <b> 7. How much is your yearly income : </b>
                                                                            
                                            <input type = "text" name = "income">
                                </textarea>
                            </div>
                        </div>
                    </tbody>
                </table>

                <table >
                    <tbody>
                    <div id="higher-studies-section" class="form-group">
                        <div style="text-align: center;font-family: Arial; font-size: 14px; background: black; border: solid 1px #eaeaea;color: white;"> Higher studies</div>
                            <br>
                               
                                <b> 1.College Name :</b>
                                  
                                    <input type = "text" name = "c_name">
        
                                <br>  <br> <b>  2. University:</b>
                                                  
                                    <input type = "text" name = "university">
                                                             
                                <br> <br> <b> 3. Course Name : </b> 
                                    
                                    <input type = "text" name = "course_name"> 
                                                                                                                     
                                <br>  <br><b> 4. College Address:</b>
                                                                           
                                    <input type = "text" name = "c_address">
                    </tbody>
                </table> 
            
                <table >
                    <tbody>   
                    <div id="unemployed-section" class="form-group">            				
                        <div style="font-family: Arial; font-size: 14px; background: black;border: solid 1px #eaeaea;color: white;text-align:center;"> Questions for Unemployed</div>
                            <br>
                               
                                <b>  1. Please state your reason(s) why you are not employed :</b>
                                    
                                    <textarea name = "reason" style="width: 25%; height: 3%;"></textarea>                         
                                        
                                <br> <br><b>  2. Do you consider CFCST/College of ICT and the course you selected as a factor for not being employed? :</b>
                                           
                                    <input name="consider" type="radio" value = "Yes"><b>Yes</b>
                                    <input name="consider" type="radio" value = "No"><b>No</b>
                                                                 
                            </div>
                        </div>
                    </tbody>
                </table>
                <table >
                    <tbody>
                    <div  id="business-details-section" class="form-group">
                        <div style="text-align: center;font-family: Arial; font-size: 14px; background: black; border: solid 1px #eaeaea;color: white;">Business Details</div>
                            <br>
                               
                                <b> 1.Business Name :</b>
                                  
                                    <input type = "text" name = "b_name">
        
                                <br>  <br> <b>  2.Business Address :</b>
                                                  
                                    <input type = "text" name = "b_address">
                                                             
                                <br> <br> <b> 3. Earn Per Year: </b> 
                                    
                                    <input type = "text" name = "b_income"> 
                                                                                                                     
                                
                    </tbody>
                </table> 
                <table>
                                 
                                 <div class="form-group">
                                 <div style="text-align: center;font-family: Arial; font-size: 14px; background: black; border: solid 1px #eaeaea;color: white;">Proof Details</div>
                                 <b>Proof:</b><br>
				                    <input type="file" name="uploadfile" value="" />
			
                        </div>
                    </div>
                </table>
                <script>
// Get references to the relevant sections
const employedSection = document.getElementById('employed-section');
const higherStudiesSection = document.getElementById('higher-studies-section');
const unemployedSection = document.getElementById('unemployed-section');
const businessDetailsSection = document.getElementById('business-details-section');

// Function to toggle the visibility of sections based on employability status
function toggleSections() {
    const employabilityStatus = document.querySelector('input[name="estatus"]:checked').value;

    // Hide all sections initially
    employedSection.style.display = 'none';
    higherStudiesSection.style.display = 'none';
    unemployedSection.style.display = 'none';
    businessDetailsSection.style.display = 'none';

    // Show the selected section based on employability status
    if (employabilityStatus === 'Employed') {
        employedSection.style.display = 'block';
    } else if (employabilityStatus === 'Higher Studies') {
        higherStudiesSection.style.display = 'block';
    } else if (employabilityStatus === 'Unemployed') {
        unemployedSection.style.display = 'block';
    } else if (employabilityStatus === 'Business Details') {
        businessDetailsSection.style.display = 'block';
    }
}

// Attach the toggleSections function to the radio button change event
const employabilityRadioButtons = document.querySelectorAll('input[name="estatus"]');
employabilityRadioButtons.forEach((radioButton) => {
    radioButton.addEventListener('change', toggleSections);
});

// Initial call to toggleSections to set the initial state based on the default selected radio button
toggleSections();
</script>