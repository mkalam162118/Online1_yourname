<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM t0" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>f0</th> <th>f1</th> <th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $ID</td>";
		echo "<td> $EMAIL </td>";
        echo "<td> $APPT_DATE </td>";
        echo "<td> $FROM_LOCATION </td>";
        echo "<td> $TO_LOCATION </td>";
        echo "<td> $STATUS </td>";
		echo "<td> <a href = 'delete.php?id=$id'> addBooking </a> </td>";
		echo "<td> <a href = 'update_input.php?id=$id&f0=$f0&f1=$f1'> ConfirmBooking </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=create_input.php>CREATE a new record</a>";
?>