<?php

	$ID = $_GET["ID"];

	$EMAIL = $_GET["EMAIL"];

	$APPT_DATE = $_GET["APPT_DATE"];

	$FROM_LOCATION = $_GET["FROM_LOCATION"];

	$TO_LOCATION = $_GET["TO_LOCATION"];

    $STATUS = $_GET["STATUS"];

?>



<h1>Update Record</h1>



<form method=get action=confirm.php>



	<input type=hidden name=ID value='<?php echo $ID; ?>'> <br>



	ID: <input type=text name=ID value='<?php echo $ID; ?>'>

	<p>

	EMAIL: <input type=text name=EMAIL value='<?php echo $EMAIL; ?>'>

	<p>
    
    APPT_DATE: <input type=text name=APPT_DATE value='<?php echo $APPT_DATE; ?>'>

	<p>

    APPT_DATE: <input type=text name=APPT_DATE value='<?php echo $APPT_DATE; ?>'>

	<p>
	<input type=submit value=Update>

</form>