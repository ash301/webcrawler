<!--
this is php needed to print submission successful message
-->
<?php
$msg = $_GET[msg];
if ($msg == '1')
{
	echo '<p>your information was submitted successfully.</p>';
}

?>

<!-- process.php is my file which performs fetching process
 -->
<form action = "core/process.php" method = "post" />

<!--create form -->
<input type ="hidden" name = "formID" value = "form1" />
<input type = "hidden" name = "redirect_to" value = "http://www.favideos.tk" />

<p>Input: <input type = "text" name = "input" /> </p>
<p>Input2 : <input type = "text" name = "input2" /></p>

<p>TextArea : <textarea rows = "20" cols="30" name = "textarea"></textarea></p>

<p>
Dropdown:
<select name= "dropdown">
	<option value="value1">value1</option>
	<option value="value2">value2</option>
	<option value = "value3">value3</option>
	
</select>	
</p>

<p>Radio1 : <input type="radio" name = "radio" value="radio1" /> Radio2 : <input type="radio" name="radio2" value="radio2" /></p>

<p>Checkbox : <input type = "checkbox" name = "checkbox" value="checkbox1" />Checkbox2 : <input type="checkbox" name = "checkbox2" value="checkbox2" /></p>

<input type="submit" value="Submit" />

</form>

