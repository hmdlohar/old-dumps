<?php
//step1

include 'db.php';
$file = fopen("old.txt","r+");
$getenrol = fgets($file);
if (isset($_GET['enrol'])){
$enrol = $_GET['enrol'];
}
else {$enrol = $getenrol;}
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

echo $result;
return $result;
}
if ($enrol % 100 == 0){
$sql = 	"INSERT INTO record
		(number)
		VALUES
		('$enrol')";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
	}
$enrolnow= $enrol+1;
$enrolnext = (10-($enrol % 10)) +$enrol;
$file = fopen("old.txt","w+");
fwrite($file,$enrolnow);
?>

<?php
?>
<div id=iframe style="border: 1px solid black; width:600px; height:200px">
<?php
$datan = get_enrol($enrol);
$datanow = base64_encode($datan);
?>
<p id=result1>res1</p>
<p id=result2 onclick="result()">res2</p>
<script type=text/javascript>
	var enrolnow ="<?php echo $enrol; ?>";
	var datanow ="<?php echo $datanow; ?>";
function getlikes(enrol,url){
	
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
		
    
   window.enrol = xmlhttp.responseText;
  //document.getElementById("result2").innerHTML= xmlhttp.responseText;
 // alert(window.enrol);
   //var obj = JSON.parse(xmlhttp.responseText);
   document.getElementById("result2").innerHTML= window.enrol;

    }
  }
xmlhttp.open("GET",url+"?enrol="+enrol,true);
xmlhttp.send();

}
	
function getCount(parent, getChildrensChildren){
    var relevantChildren = 0;
    var children = parent.childNodes.length;
    for(var i=0; i < children; i++){
        if(parent.childNodes[i].nodeType != 3){
            if(getChildrensChildren)
                relevantChildren += getCount(parent.childNodes[i],true);
            relevantChildren++;
        }
    }
    return relevantChildren;
}

var element = document.getElementById("iframe");
var counte = getCount(element, true);


function result(){
//alert(getCount(element, true));
if (counte<20){
 document.getElementById("result1").innerHTML = "not found";
window.location.assign("index1.php?enrol=<?php echo $enrolnow ?>")
	}
if (counte>20){
 document.getElementById("result1").innerHTML = "found";
window.location.assign("index1.php?enrol=<?php echo $enrolnext ?>")
 getlikes(enrolnow,'in_enrol.php');

	}
}
result();

</script>


</div>