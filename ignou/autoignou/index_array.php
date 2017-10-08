<?php
//step1

include 'db.php';
$enrol_array=array("136174035","136174067","136174114","136174114","136174114","136174121","136174139","136174146","136174185","136174192","136174200","136174200","136174200","136174225","136174257","136174271","136174296","136174296","136174304","136174329","136174343","136174350","136174368","136174368","136174375","136174382","136174382","136174390","136174408","136174422","136174447","136174454","136174454","136174454","136174461","136174479","136174486","136174486","136174493","136174501","136174501","136174501","136174540","136174572","136174580","136174620","136174637","136174637","136174637","136174644","136174651","136174651","136174683","136174709","136174716","136174723","136174748","136174755","136174755","136174794","136174810","136174827","136174834","136174866","136174898","136174906","136174920","136174977","136174991","136174991","136174991","136175005","136175012","136175012","136175012","136175020","136175037","136175044","136175044","136175051","136175069","136175069","136175090","136175109","136175116","136175123","136175130","136175148","136175148","136175162","136175170","136175187","136175187","136175187","136175194","136175202","136175210","136175210","136175227","136175234","136175234","136175241","136175273","136175280","136175306","136175313","136175313","136175345","136175345","136175360","136175360","136175377","136175377","136175384","136175384","136175417","136175431","136175431","136175431","136175463","136175470","136175488","136175495","141513025","141513025","141513040","141513040","141513057","141513057","141513064","141513064","141513071","141513071","141513089","141513089","141513096","141513096","141513104","141513104","141513111","141513111","141513129","141513129","141513136","141513136","141513143","141513143","141513150","141513150","141513168","141513168","141513175","141513175","141513208","141513208","141513215","141513215","141513222","141513222","141513230","141513230","141513254","141513254","141513261","141513261","141513301","141513301","141513319","141513319","141513326","141513326","141513358","141513358","141513372","141513372","141513380","141513380","141513397","141513397","141513405","141513405","141513412","141513412","141513437","141513437","141513444","141513444","141513451","141513451","141513469","141513469","141513476","141513476","141513483","141513483","141513490","141513490","141513509","141513509","141513516","141513516","141513523","141513523","141513530","141513530","141513548","141513548","141513555","141513555","141513562","141513562","141513570","141513570","141513627","141513627","141513659","141513659","141513698","141513698","141513720","141513720","141513738","141513738","141513745","141513745");
$file = fopen("old.txt","r+");
$getenrol = fgets($file);
if (isset($_GET['enrol'])){
$enrol_no = $_GET['enrol'];
$enrol = $enrol_array[$enrol_no];
}
else {$enrol = $enrol_array[0];}
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
echo sizeof($enrol_array);
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
$enrolnext2=$enrol_no +1;
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
window.location.assign("index_array.php?enrol=<?php echo $enrolnow ?>")
	}
if (counte>20){
 document.getElementById("result1").innerHTML = "found";
window.location.assign("index_array.php?enrol=<?php echo $enrolnext2 ?>")
 getlikes(enrolnow,'in_enrol.php');

	}
}
result();

</script>


</div>