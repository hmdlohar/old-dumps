<button id=submit_all onclick="submit_all()">submit All</button>
<?php

$all['enrol'][]=	147822976;
$all['enrol'][]=	147822367;
$all['enrol'][]=	147822303;
$all['enrol'][]=	147822310;
$all['enrol'][]=	147822270;
$all['enrol'][]=	147822407;
$all['enrol'][]=	147817444;
$all['enrol'][]=	147817451;
$all['enrol'][]=	147817469;
$all['enrol'][]=	147817365;
$all['enrol'][]=	147815361;
$all['enrol'][]=	147813827;
$all['enrol'][]=	147815361;
$all['name'][]="BALDANIYA ATULKUMAR PARSORAM";
$all['name'][]="GUNSAI ANJANA MOHANGIRI";
$all['name'][]="Hamid Lohar";
$all['name'][]=".............";
$all['name'][]="VYAS NAYAN VRUJLAL";
$all['name'][]="NEELAPU JAGANATH DURYODHAN";
$all['name'][]="KHOJA NILAMBANU RAMJANALI";
$all['name'][]="SHAH SWETA JAYESHBHAI";
$all['name'][]="PADHIYAR NIRMALSINH PREMSANGJI";
$all['name'][]="VYAS DIXITA GUNVANTBHAI";
$all['name'][]="PATEL ASHOK AMRUTLAL";
$all['name'][]="VEGAD TANVIBEN JAYANTILAL";
$all['name'][]="PATEL ASHOK AMRUTLAL";
$size= sizeof($all['enrol']);

for($x=0;$x<$size;$x++){
	echo "
	{$all['name'][$x]}<br>
<form action='https://webservices.ignou.ac.in/GradecardM/Result.asp' method=POST target=ifram{$x}>
<input type=text name=Program value=MCA>
<input type=text name=eno value={$all['enrol'][$x]}>
<input type=text name=hidden_submit value=OK>
<input type=submit name=submit class=submit>
</form>
<iframe name=ifram{$x} width=1000px height=600px>

</iframe>
";
}
?>

<script>
function submit_all(){
	submit =document.getElementsByClassName('submit');
	for(i=0;i<submit.length;i++){
		submit[i].click();
		}
	}
</script>