<?php 
require_once("IATname.inc"); 
require_once('locations.php');
?>
<html>
<head>
<title><?php echo $IATname; ?> IAT Survey</title>
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
            <li><p><label for="age">Year of Birth</label></p>
                <span> 
                    <select id="age" name="age">
                        <option value="unselected" selected="selected"></option>
						<?php for ($i=99;$i>0;$i--) echo "<option value=".(112-$i).">" . (1900 + $i) . "</option>"; ?>
	 				</select>
                </span> 
            </li>         
            <li>
				<label for="loc">Current Location:&nbsp;</label>
    		    <select id="loc" name="loc">';
    				<?php foreach($Countries as $abbr => $country) echo "<option value='" . $abbr . "'>" . $country . "</option>"; ?>	    
    	    	</select>
            </li>         
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
                    <input id="race_indian" name="race" type="checkbox" value="Indian"/> 
                    <label for="race_indian">Asian Indian</label>
                <br> 
                    <input id="race_asian" name="race" type="checkbox" value="Asian"/> 
                    <label for="race_asian">Other Asian</label>
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
                <p> 
                    <label for="edu">Highest education level attained</label>        
                </p> 
                <p>
                    <select id="edu" name="edu"> 
                        <option value="unselected" selected="selected"></option>
                        <option value="none">No schooling completed, or less than 1 year</option>
                        <option value="elem">Nursery, kindergarten, and elementary (grades 1-8)</option>
                        <option value="high">High school (grades 9-12, no degree)</option>
                        <option value="hs">High school graduate (or equivalent)</option>
                        <option value="college">Some college (1-4 years, no degree)</option>
                        <option value="as">Associate's degree (including occupational or academic degrees)</option>
                        <option value="bs">Bachelor's degree (BA, BS, AB, etc)</option>
                        <option value="ms">Master's degree (MA, MS, MENG, MSW, etc)</option>
                        <option value="md">Professional school degree (MD, DDC, JD, etc)</option>
                        <option value="phd">Doctorate degree (PhD, EdD, etc)</option>
                    </select>
                </p> 
            </li>
        </ol>
		<div id="error-1"></div>
		<div id="participant">
			<p>Unique Random Identifier.</p>
			<p><input type="text" disabled = "True" id="sub" name="sub" value="<?php echo base_convert(mt_rand(0x19A100, 0x39AA3FF), 10, 36); ?>"></p>
		</div>
        
        <input type="button" value="Submit Demographics" onclick="checkDemographics()"/>

    </form>
    
       
</div>
</body>