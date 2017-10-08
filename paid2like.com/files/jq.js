$('#like1').click(function() {
	
	$('#like1').hide();
	$('#confirm1').fadeIn('slow');
	});

$('#like2').click(function() {
	
	$('#like2').hide();
	$('#confirm2').fadeIn('slow');
	});

$('#like3').click(function() {
	
	$('#like3').hide();
	$('#confirm3').fadeIn('slow');
	});

$('#like4').click(function() {
	
	$('#like4').hide();
	$('#confirm4').fadeIn('slow');
	});

$('#like5').click(function() {
	
	$('#like5').hide();
	$('#confirm5').fadeIn('slow');
	});

$('#like6').click(function() {
	
	$('#like6').hide();
	$('#confirm6').fadeIn('slow');
	});
$('#like7').click(function() {
	
	$('#like7').hide();
	$('#confirm7').fadeIn('slow');
	});
$('#like8').click(function() {
	
	$('#like8').hide();
	$('#confirm8').fadeIn('slow');
	});
	
$("#confirm1").click(function() {
	$(".box1").fadeOut('slow');
	});
	

$("#confirm2").click(function() {
	$(".box2").fadeOut('slow');
	});

$("#confirm3").click(function() {
	$(".box3").fadeOut('slow');
	});

$("#confirm4").click(function() {
	$(".box4").fadeOut('slow');
	});

$("#confirm5").click(function() {
	$(".box5").fadeOut('slow');
	});

$("#confirm6").click(function() {
	$(".box6").fadeOut('slow');
	});

$("#confirm7").click(function() {
	$(".box7").fadeOut('slow');
	});

$("#confirm8").click(function() {
	$(".box8").fadeOut('slow');
	});

var page1 = $('#page1').val();
var points1 = $('#points1').val();
  $("#confirm1").click(function(){
	  $('#getval').text('Ols wait loading'),
    $.post("check.php",
    {
      page:page1,
      points:points1
    },
    function(data,status){
      $('#credits').text(data),
      $('#getval').hide();
      
    });
  });
  
var page2 = $('#page2').val();
var points2 = $('#points2').val();
  $("#confirm2").click(function(){
	  $('#getval').text('Ols wait loading'),
    $.post("check.php",
    {
      page:page2,
      points:points2
    },
    function(data,status){
      $('#credits').text(data),
      $('#getval').hide();
      
    });
  });
  
var page3 = $('#page3').val();
var points3 = $('#points3').val();
  $("#confirm3").click(function(){
	   
	  $('#getval').text('Ols wait loading'),
    $.post("check.php",
    {
      page:page3,
      points:points3
    },
    function(data,status){
      $('#credits').text(data),
      $('#getval').hide();
      
    });
  });

var page4 = $('#page4').val();
var points4 = $('#points4').val();
  $("#confirm4").click(function(){
	 
	  $('#getval').text('Ols wait loading'),
    $.post("check.php",
    {
      page:page4,
      points:points4
    },
    function(data,status){
      $('#credits').text(data),
      $('#getval').hide();
      
    });
  });



var page5 = $('#page5').val();
var points5 = $('#points5').val();
  $("#confirm5").click(function(){
	  $('#getval').text('Ols wait loading'),
    $.post("check.php",
    {
      page:page5,
      points:points5
    },
    function(data,status){
      $('#credits').text(data),
      $('#getval').hide();
      
    });
  });

var page6 = $('#page6').val();
var points6 = $('#points6').val();
  $("#confirm6").click(function(){
	  $('#getval').text('Ols wait loading'),
    $.post("check.php",
    {
      page:page6,
      points:points6
    },
    function(data,status){
      $('#credits').text(data),
      $('#getval').hide();
      
    });
  });

var page7 = $('#page7').val();
var points7 = $('#points7').val();
  $("#confirm7").click(function(){
	  $('#getval').text('Ols wait loading'),
    $.post("check.php",
    {
      page:page7,
      points:points7
    },
    function(data,status){
      $('#credits').text(data),
      $('#getval').hide();
      
    });
  });

var page8 = $('#page8').val();
var points8 = $('#points8').val();
  $("#confirm8").click(function(){
	  
	  $('#getval').text('Ols wait loading'),
    $.post("check.php",
    {
      page:page8,
      points:points8
    },
    function(data,status){
      $('#credits').text(data),
      $('#getval').hide();
      
    });
  });
  

$('#clickme').click(function() {
	alert(points1);
	});


var name = $('#pname').val();
var pid = $('#pid').val();
var credits = $('#credits').val();
var points = $('#points').val();
var url = "hmdl.tk";
$('#submit_page').click(function(){
	$('#submit_page').hide(),
	$('#loading').text('laoding...'),
    $.post("../admin/add_page.php",
    {
      name:name,
      link:link,
      points:points,
      credits:credits
    },
    function(data,status){
		$('#data').text(data);
      
      });
	});

$('#close1').click(function(){
	$(".box1").fadeOut('1000000'),
	 $.post("skip.php",
    {
      page:page1,
      points:points1
      
    },
    function(data,status){      
    });
	});

$('#close2').click(function(){
	$(".box2").fadeOut('1000000'),
	 $.post("skip.php",
    {
      page:page2,
      points:points2
      
    },
    function(data,status){      
    });
	});

$('#close3').click(function(){
	$(".box3").fadeOut('1000000'),
	 $.post("skip.php",
    {
      page:page3,
      points:points3
      
    },
    function(data,status){      
    });
	});

$('#close4').click(function(){
	$(".box4").fadeOut('1000000'),
	 $.post("skip.php",
    {
      page:page4,
      points:points4
      
    },
    function(data,status){      
    });
	});

$('#close5').click(function(){
	$(".box5").fadeOut('1000000'),
	 $.post("skip.php",
    {
      page:page5,
      points:points5
      
    },
    function(data,status){      
    });
	});

$('#close6').click(function(){
	$(".box6").fadeOut('1000000'),
	 $.post("skip.php",
    {
      page:page6,
      points:points6
      
    },
    function(data,status){      
    });
	});

$('#close7').click(function(){
	$(".box7").fadeOut('1000000'),
	 $.post("skip.php",
    {
      page:page7,
      points:points7
      
    },
    function(data,status){      
    });
	});

$('#close8').click(function(){
	$(".box8").fadeOut('1000000'),
	 $.post("skip.php",
    {
      page:page8,
      points:points8
      
    },
    function(data,status){      
    });
	});
