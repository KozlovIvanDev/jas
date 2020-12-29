<?php
/* mysql_html_table
// Written by: Michael P. Bourque (michael@mbourque.com)
//
// This very simple script will display your mysql table in an html table
// with an option to do simple pagination like next and previous. If you
// like this, then please send me an email to inspire me to do more with it.
//
// To use:
// 1. Add this to any php page.
// 2. Edit the variables below
// 3. Upload to your server
// 4. Point your browser to this file
// 5. For pagination, add to the link (above) ?Pagesize=20
//    Example:
//    http://yourserver.domain.com/mysql_html_table.php?Pagesize=20


 Set the variables for the database */

$Host      = "localhost";
$User      = "root";
$Password  = "";
$DBName    = "userlistdb"; // Database name
$TableName = "monday"; // Name of table to display

// Do not edit below this line

$Link = mysqli_connect ($Host, $User, $Password);

if ( $Pagesize ) {
	if( !$start ) $start = 1;
	pagination($start,$Link,$DBName,$TableName,$Pagesize);
	$PaginationQuery = "LIMIT " . $start . ", " . $Pagesize;
}

$Query = "SELECT * FROM $TableName " . $PaginationQuery;
$Result = mysqli_query ($DBName, $Query, $Link);

// Create a table with headers.
print ("<TABLE BORDER=1>\n");
print ("<TR>\n");
for ($i = 0; $i < mysqli_num_fields($Result); $i++) {
	print "<TD>".mysqli_field_name($Result, $i)."</TD>\n";
}
print ("</TR>\n");

// Fetch the results from the database.
while ($Row = mysqli_fetch_array ($Result)) {
 	print ("<TR>\n");
	for ($i = 0; $i < mysqli_num_fields($Result); $i++) {
		print "<TD>$Row[$i]</TD>\n";
	}
	print ("</TR>\n");
}
print ("</TABLE>\n");

mysqli_close ($Link);

function pagination($start,$Link, $DBName, $TableName, $Pagesize) {

	if ( !$Pagesize ) return;

	$Query = "SELECT count(*) as count FROM $TableName";
	$Result = mysqli_query($Query);
	$row = mysqli_fetch_array($Result);
	$numrows = $row['count'];
	if($start >= $Pagesize) {
	   echo "<a href=\"" . $PHP_SELF . "?Pagesize=$Pagesize&start=" . ($start - $Pagesize) .
	        "\">Previous</a> | \n";
	} else {
	        echo "Previous | \n";
	}
	if($numrows > ($start + $Pagesize)) {
	   echo "<a href=\"" . $PHP_SELF . "?Pagesize=$Pagesize&start=" . ($start + $Pagesize) .
	        "\">Next</a>\n";
	} else {
	        echo "Next | \n";
	}
	print "Page " . floor(($start / $Pagesize)+1);
	print " of " . ceil(($numrows / $Pagesize));
	print " | " . $numrows . " Records";

}

?>



