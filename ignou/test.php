

page
<script>
var data = "url=http://localhost/ignou/test5.php&get1=1&get2=2";             

             $.ajax({
		  url: "test2.php",
		  data: data,
		  type: "POST",
		  success: function(data, textStatus, jqXHR){
			console.log('Success ' + data);
			
		  },
		  error: function (jqXHR, textStatus, errorThrown){
			console.log('Error ' + jqXHR);
			
		  }
		});
</script>
<script src=jquery.js></script>