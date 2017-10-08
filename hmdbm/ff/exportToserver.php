<?php


?>
Localhost<br>
start:<input id=cnumStart>End:<input id=cnumEnd><br>
<button onclick=exportToServer1() id=exportToServer>ExportToserver</button><br>
<button onclick=importFromServer1() id=exportToServer>ImportFromServer</button><br>


hmdlohar.co.nf:<br>
<button onclick=exportToServer2() id=exportToServer>ExportToserver</button><br>
<button onclick=importFromServer2() id=exportToServer>ImportFromServer</button><br>

<hr>
<p id=result>res</p>

<script src="jquery.js"></script>
<script>
	result=document.getElementById("result");
function exportToServer1(){
	cnumStart=parseInt(document.getElementById("cnumStart").value);
	cnumEnd=parseInt(document.getElementById("cnumEnd").value);
	cnumNow=cnumStart;
	importExport(cnumNow,"export.php","http://hmdlohar.000webhostapp.com/fblohar/putAllInfo.php",cnumStart,cnumEnd);
}
function importExport(cnumNow,url1,url2,cnumStart,cnumEnd){
	console.log("exporting"+cnumNow);
	$.post(url1,
    {
        "export": cnumNow
    },
    function(data, status){
		$.post(url2,
		{
			"import": data,
			"cnum": cnumNow
		},
		function(data, status){
			if(status=="success"){
				if(cnumNow<=cnumEnd){
					cnumNow++;
					importExport(cnumNow,url1,url2,cnumStart,cnumEnd);
					result.innerHTML="Exported"+cnumNow;
				}
				else{
					alert("Completed");
				}
			}
			else{
				alert("Error at "+cnumNow);
			}
		});
    });
}
function importFromServer1(){
	cnumStart=parseInt(document.getElementById("cnumStart").value);
	cnumEnd=parseInt(document.getElementById("cnumEnd").value);
	cnumNow=cnumStart;
	importExport(cnumNow,"http://hmdlohar.co.nf/hmdbm/ff/export.php","import.php",cnumStart,cnumEnd);
}
function exportToServer2(){
	cnumStart=parseInt(document.getElementById("cnumStart").value);
	cnumEnd=parseInt(document.getElementById("cnumEnd").value);
	cnumNow=cnumStart;
	importExport(cnumNow,"export.php","http://localhost/hmdbm/ff/import.php",cnumStart,cnumEnd);
}
function importFromServer2(){
	cnumStart=parseInt(document.getElementById("cnumStart").value);
	cnumEnd=parseInt(document.getElementById("cnumEnd").value);
	cnumNow=cnumStart;
	importExport(cnumNow,"http://localhost/hmdbm/ff/export.php","import.php",cnumStart,cnumEnd);
}
</script>