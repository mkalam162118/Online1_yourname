<?php
$EMAIL = $_GET["EMAIL"];
$APPT_DATE = $_GET["APPT_DATE"];
$FROM_LOCATION = $_GET["FROM_LOCATION"];
$TO_LOCATION = $_GET["TO_LOCATION"];


require_once('db_connect.php');
$connect = mysqli_connect( HOST, USER, PASS, DB )
or die("Can not connect");

mysqli_query( $connect, "INSERT INTO Ticket_Booking VALUES ( '', '$EMAIL', '$APPT_DATE', $FROM_LOCATION, $TO_LOCATION )" )
or die("Can not execute query");

echo "Record inserted:
EMAIL = $EMAIL
APPT_DATE = $APPT_DATE
FROM_LOCATION = $FROM_LOCATION
TO_LOCATION = $TO_LOCATION
;

echo "

READ all records";
?>

