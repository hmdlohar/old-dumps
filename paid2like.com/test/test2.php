<!DOCTYPE html>
<html>
<body>

<p>Click the button to open a new window with some specifications.</p>

<button onclick="myFunction()">Try it</button>

<script>
	var page= "anisha778";
	var points= "10";
	
	var opened = window.open("test3.php?page="+page+"&points="+points, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=100, left=100, width=800, height=400");
	
	opened.  = function(){
		alert("hiiiiiiiii");
		}
		
	
function myFunction() {
    window.open("test3.php?page="+page+"&points="+points, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=100, left=100, width=800, height=400");
}
</script>

</body>
</html>

<script src="../files/jquery.js"></script>
<script src="test.js"></script>
