$('#like_it').click(function() {
		$('#like_it').hide(),
		$('#confirm_it').fadeIn('slow');
	});

$('#confirm_it').click(function() {
		$('#confirm_it').hide(),
		$('#pls_wait').fadeIn('slow'),
		$.post("confirm.php",
    {
      doing:'it'
    },
    function(data,status){
		if (data == 'yes'){
			alert("Thank You for liking page");
			}
		else{
			alert("Your did not liked the page!"),
			window.location.href = "../index.php";
			}
	});
});

