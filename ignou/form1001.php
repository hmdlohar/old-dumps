<?php
include 'old.php';
if (isset($_GET['cource'])){
$cource = $_GET['cource'];
	}
else{$cource = "MCA";}
if (isset($_GET['enrol'])){
$enrol = $_GET['enrol'];
	}
else{$enrol = "147822303";}
$enroln = $enrol+1;
$enrolo = $enrol-1;
echo "<a href=?enrol={$enroln}>Next Page</a>";
echo "<a href=?enrol={$enrolo}>Previous Page</a><ol start=0>";


$start = $enrolnow;
$count = 1999;
$end = $count+$start;
for ($j=$start;$j<=$end;$j=$j+100){
$start2=$j;
$end2=$j+9;
for ($i=$start2;$i<=$end2;$i++){
?>
<li><form action="http://admission.ignou.ac.in/changeadmdata/admissionstatusnew.asp" method="POST" target="<?php echo "{$i}" ?>">
<input type=text name=EnrNo value=<?php echo $i; ?>>
<input type=text name=program value=<?php echo $cource; ?>>
<input type=submit name=Submit class=submit>
</form>
<iframe name="<?php echo $i; ?>" height=50 width=1000></iframe>
<?php
}
}
?>
<!--
<script src=jquery.js></script>
<script src=jq.js></script>