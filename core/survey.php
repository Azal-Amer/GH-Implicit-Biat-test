<?php 
require_once("IATname.inc"); 
require_once('locations.php');
session_start()

?>
<html>
<head>
<title>Greenhill Demographics</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style type="text/css"> @import "css/iat.css";</style>	
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/IAT.js"></script>
</head>

<body>
    
<div id="surveylist">
	<form id="demographics">
		Please answer some questions about yourself:
        <ol id="demoglist">
            <li><p>Gender</p>
                <p> 
                    <input id="gender_male" name="gender" type="checkbox" value="Male"/>
                    <label for="gender_male">Male</label>
                <br>     
                    <input id="gender_female" name="gender" type="checkbox" value="Female"/>
                    <label for="gender_female">Female</label>
                <br>     
                    <input id="gender_enby" name="gender" type="checkbox" value="Nonbinary"/>
                    <label for="gender_enby">Nonbinary</label>
                <br>     
                    <input id="gender_genderqueer" name="gender" type="checkbox" value="Genderqueer"/>
                    <label for="gender_genderqueer">Genderqueer</label>
                <br>     
                    <input id="gender_genderfluid" name="gender" type="checkbox" value="Genderfluid"/>
                    <label for="gender_genderfluid">Genderfluid</label>
                <br>     
                    <input id="gender_agender" name="gender" type="checkbox" value="Agender"/>
                    <label for="gender_agender">Agender</label>
                
                <br>     
                    <input id="gender_none" name="gender" type="checkbox" value="none"/>
                    <label for="gender_none">Don't know/choose not to answer</label>
                <br>    
                    <input id="gender_other" name="gender" type="checkbox" value="Other"/>
                    <label for="gender_other">Other</label>
                    
                <br>
                    <p>If you answered other, please respond here:</p>
                    <input id="gender" name="custom_gender" type="text"  value=""/>

                </p>
            </li>            
            <!-- <li><p><label for="age">Year of Birth</label></p>
                <span> 
                    <select id="age" name="age">
                        <option value="unselected" selected="selected"></option>
						<?php for ($i=99;$i>0;$i--) echo "<option value=".(112-$i).">" . (1900 + $i) . "</option>"; ?>
	 				</select>
                </span> 
            </li>          -->
            <!-- <li>
				<label for="loc">Current Location:&nbsp;</label>
    		    <select id="loc" name="loc">';
    				<?php foreach($Countries as $abbr => $country) echo "<option value='" . $abbr . "'>" . $country . "</option>"; ?>	    
    	    	</select>
            </li>          -->
            <li>
                <p>Ethnicity</p>
                <p>      
                    <input id="race_white" name="race" type="checkbox" value="White"/> 
                    <label for="race_white">White</label>
                <br>      
                    <input id="race_black" name="race" type="checkbox" value="Black"/> 
                    <label for="race_black">Black or African-American</label>
                <br>    
                    <input id="race_latino" name="race" type="checkbox" value="Latino"/> 
                    <label for="race_latino">Hispanic or Latinx</label>
                <br>
                    <input id="race_indian" name="race" type="checkbox" value="South-Asian"/> 
                    <label for="race_indian">South Asian</label>
                <br> 
                    <input id="race_asian" name="race" type="checkbox" value="East-Asian"/> 
                    <label for="race_asian">East Asian</label>
                <br> 
                    <input id="race_asian" name="race" type="checkbox" value="South-East-Asian"/> 
                    <label for="race_asian">South East Asian</label>
                <br>
                    <input id="race_hawaii" name="race" type="checkbox" value="Hawaiian"/> 
                    <label for="race_hawaii">Hawaiian or Pacific Islander</label>
                <br> 
                    <input id="race_amind" name="race" type="checkbox" value="AmInd"/> 
                    <label for="race_amind">Indigenous American or Alaskan Native</label>
                <br> 
                    <input id="race_other" name="race" type="checkbox" value="Other"/> 
                    <label for="race_other">Other</label>

                <br>
                    <p>If you answered other, please respond here:</p>
                    <input id="gender" name="custom_ethnicity" type="text"  value=""/>
                </p>
            </li>         

            <li>
                <p>Grade Level</p>
                    <p>      
                        <input id="grade_freshman" name="grade" type="radio" value="9"/> 
                        <label for="grade_freshman">Freshman (9th)</label>
                    <br>      
                        <input id="grade_sophmore" name="grade" type="radio" value="10"/> 
                        <label for="grade_sophmore">Sophmore (10th)</label>
                    <br>    
                        <input id="grade_junior" name="grade" type="radio" value="11"/> 
                        <label for="grade_junior">Junior (11th)</label>
                    <br>
                        <input id="grade_senior" name="grade" type="radio" value="12"/> 
                        <label for="grade_senior">Senior (12th)</label>
                    <br>
                        <input id="grade_teacher" name="grade" type="radio" value="-1"/> 
                        <label for="grade_teacher">Teacher/Faculty</label>
                    </p>
            </li>
            <li><p>Dietary Prefrences</p>
                <p> 
                    <input id="dietary_veget" name="dietary" type="checkbox" value="Vegetarian"/>
                    <label for="dietary_veget">Vegetarian</label>
                <br>    
                    <input id="dietary_vegan" name="dietary" type="checkbox" value="Vegan"/>
                    <label for="dietary_vegan">Vegan</label>
                <br>     
                    <input id="dietary_gluten" name="dietary" type="checkbox" value="Gluten Free"/>
                    <label for="dietary_gluten">Gluten Free</label>
                <br>     
                    <input id="dietary_lactose" name="dietary" type="checkbox" value="Lactose intolorant"/>
                    <label for="dietary_lactose">Lactose intolorant</label>
                <br>     
                    <input id="dietary_halal" name="dietary" type="checkbox" value="Halal"/>
                    <label for="dietary_halal">Halal</label>
                <br>     
                    <input id="dietary_allergy" name="dietary" type="checkbox" value="Allergy"/>
                    <label for="dietary_allergy">Allergy</label>
                    <p>Please enter the allergy here:</p>
                        <input id="dietary" name="custom_allergy" type="text"  value=""/>
                    </p>
                
                <br>    
                    <input id="dietary_other" name="dietary" type="checkbox" value="Other"/>
                    <label for="dietary_other">Other</label>
                    
                <br>
                    <p>If you answered other, please respond here:</p>
                    <input id="dietary" name="custom_dietary" type="text"  value=""/>

                </p>
            </li>   
        </ol>
		<div id="error-1"></div>
		<div id="participant">
			<!-- <p>Enter your name, a pseudonym, or continue with the random identifier provided.</p> -->
			<!-- <p><input type="text" id="sub" name="sub" value="<?php echo base_convert(mt_rand(0x19A100, 0x39AA3FF), 10, 36); ?>"></p> -->
            <!-- <p><input type="text" id="sub" name="sub" value="<?php echo $_COOKIE["PHPSESSID"]; ?>"></p> -->

		</div>
        
        <input type="button" value="Submit Demographics" onclick="checkDemographics()"/>

    </form>
    
       
</div>
</body>