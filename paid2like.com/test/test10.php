<link rel=stylesheet href="../files/style.css">
<script type=text/javascript>
function show_main(){
	
	document.getElementById('loginbox2').style.display = 'block';
	}
function close_main(){
	document.getElementById('loginbox2').style.display = 'none';
	}
</script>
<body onload="show_main()">

	<div id=loginbox2>
		<img src=../img/close.png height=30px id=close2 onclick="close_main()">
		<?php
		include 'offer.php';
		?>
	</div>
	



