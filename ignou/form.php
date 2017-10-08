<?php
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
echo "<a href=?enrol={$enrolo}>Previous Page</a>";
?>


<script type="text/javascript">
function formAutoSubmit () {
var frm = document.getElementById("formid");
frm.submit();
}

//window.onload = formAutoSubmit;
</script>
<p id=title>title</p>

<form id=formid action="http://admission.ignou.ac.in/changeadmdata/admissionstatusnew.asp" method="POST" target="hidden_iframe">
<input type=text name=EnrNo value=<?php echo $enrol; ?>>
<input type=text name=program value=<?php echo $cource; ?>>
<input type=submit name=Submit>
</form>
<iframe id=hidden_iframe name="hidden_iframe" height=500 width=1000></iframe>
<script type="text/javascript">

</script>
<script src=jquery.js></script>
<script src=jq.js></script>