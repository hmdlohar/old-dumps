<?php
include 'db.php';
function get_enrol($enrol){
$cSession = curl_init();
$post_data = "EnrNo={$enrol}&program=MCA&Submit=submit";
//step2
curl_setopt($cSession,CURLOPT_URL,"http://admission.ignou.ac.in/changeadmdata/admissionstatusnew.asp");
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt ($cSession, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($cSession,CURLOPT_HEADER, false); 
//step3
$result=curl_exec($cSession);
//step4
curl_close($cSession);
//step5


return $result;
}

if (isset($_GET['enrol'])) {
$enrol = $_GET['enrol'];
$datan = get_enrol($enrol);
$datanow = base64_encode($datan);

$sql = 	"INSERT INTO enrol3
		(number,link)
		VALUES
		('$enrol','$datanow')";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
}


?>