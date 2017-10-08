var data = "get1=1&get2=2";             

             $.ajax({
		  url: "http://localhost/ignou/test5.php",
		  data: data,
		  type: "POST",
		  success: function(data, textStatus, jqXHR){
			console.log('Success ' + data);
			alert(data);
		  },
		  error: function (jqXHR, textStatus, errorThrown){
			console.log('Error ' + jqXHR);
		  }
		});