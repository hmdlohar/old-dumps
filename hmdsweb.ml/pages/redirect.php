<?php
$link=$_GET['redirect'];
echo "<script>
var link='{$link}';
</script>";

?>
<div class=section>
	<div class=section_heading>
		<div class=sh_text>Redirecting...</div>
	</div>
	<div class=section_containt style="color:white">
		You are no going to redirected to download link in <font id=inter1 color=blue>10</font>seconds
	</div>
</div>
<script>
function count_sec(sec){
	
	window.inter1=setInterval(function(){if(sec==0){clearInterval(window.inter1);document.location.assign(link); }else{document.getElementById("inter1").innerHTML=sec;sec--;}},1000);
	
}
count_sec(10);
</script>