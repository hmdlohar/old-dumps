<?php
include 'checklogin.php';
include 'head.php';
include 'profile.php';
if (isset($_GET['fbid'])){
	echo "<script>window.location='{$url}/admin/add_fbid.php';</script>";
	}
?>
<script type="text/javascript" src="files/ajax.js"></script>

	<div id=contain>
		
		<h2>
		Earn Credits By Facebook Likes
		</h2>
		
		<p id=getval></p>
		<p>
			TO EARN CREDITS CLICK ON THE "LIKE" BUTTON. WAIT FOR THE PAGE TO FULLY LOAD IN THE NEW TAB LIKE IT DIRECTLY ON FACEBOOK, AND WAIT APPROXIMATELY 2 SECONDS BEFORE YOU CLOSE IT MANUALLY. CLICK ON X TO CLOSE THE TAB AFTER YOU CLICK "CONFIRM" BUTTON AND WAIT FOR SECOND YOU WILL GET CREDITS IN RIGHT SIDE SECTION.
		</p>

<span id=message1 class=message style="display:none">
congratulation! You got Credits For Liking This Page
</span>
<span id=message2 class=message style="display:none">
Sorry!  it seams you don't liked this page.
</span>
<span id=loading class=message style="display:none">
loading loading
</span>
		<?php
		
		
		$sql_array = "SELECT * FROM log
					WHERE user='$uname'";
					mysql_select_db($dbname);
					$retval = mysql_query($sql_array, $conn);
					$count_array = mysql_num_rows($retval);
					if ($count_array > 0) {
					$rowss = array();
					while($row = mysql_fetch_assoc($retval)){
					$rows[] = "'{$row['link']}'";
				}
					$rowss = implode(',',$rows);
				}
				else
				$rowss = "'nthing'";
		
		$class_likes = 1;
			$sql = "SELECT * FROM page 
			WHERE link not in ($rowss)&&states='1'&&credits > points 
			ORDER BY points DESC LIMIT 8";
			mysql_select_db($dbname);
			$retval = mysql_query($sql, $conn);
			$numrows = mysql_num_rows($retval);
			if($numrows == 0){
				echo "No page to like";
				}
			while(($row = mysql_fetch_array($retval, MYSQL_ASSOC)) && ($class_likes < 9))
			{
			$name = $row['name'];
			$link = $row['link'];
			$points = $row['points'];
			$points_show = $points - 1;	
			
			echo "<div id='box{$class_likes}' class='box'><a href='http://mbasic.facebook.com/{$link}' target=blank class='view'>View</a><img class=close id=close{$class_likes}  onclick=skip('{$link}',{$class_likes},{$points}); src=img/close.png><img class=icon src='http://graph.facebook.com/{$link}/picture?type=large'></b><p id=points>Credits:{$points_show}</p><img id=like_button{$class_likes} class=like1 onclick=getlikes('{$link}',{$class_likes},{$points}); src='img/like.png'><img id=confirm{$class_likes} class=confirm src='img/confirm.png'></div>
			
			";
		$class_likes++;
		}
	
			?>
	<center>	<a href=#><font size=+2 color=blue>Refresh Page</font></a>


		</div>
	</div>
	<div id=right>
		<h2>
		Your Credits</h2>
		<div id="credits">
		<?php if (isset($_SESSION['username'])) {echo $credits;} ?>
		</div>
		<h2>
		Your Money(Rs.)</h2>
		<div id="credits">
		Rs. <?php if (isset($_SESSION['username'])) {echo $money;} ?>/-
		</div><hr color=green>
		<p>
		EVERY TIME YOUR CONTENT GETS LIKED, FOLLOWED, VIEWED, SUBSCRIBED, +1, YOU LOSE CREDITS. IF YOU RUN OUT OF CREDITS, YOU WILL NO LONGER RECEIVE PROMOTIONS. YOU CAN ALWAYS EARN MORE FREE CREDITS ON OUR EARN PAGES OR YOU CAN BUY IT.
		</p>
	</div>
<script type="text/javascript">
	
winRef = new Object();
winRef.closed = true;


function winref(){
if (winRef.closed) var states = 0;
else var states = 1;
if (states == 0) { getlikes2(window.page_id); clearInterval(window.inter); } 
}

	
	
function getlikes(page_id,num,credits){
	window.credits= credits;
	window.num = num;
	window.page_id= page_id;
window.inter = setInterval(winref, 1000);
 document.getElementById('like_button'+num).style.display = "none";
 document.getElementById('message1').style.display = "none";
document.getElementById('message2').style.display = "none";
winRef = window.open("http://mbasic.facebook.com/"+page_id, "wind", "width=600,height=400,scrollbars=yes left=200 top=150")
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {    
   var data=xmlhttp.responseText;
  // document.getElementById("data").innerHTML= data;
   var obj = JSON.parse(xmlhttp.responseText);
   //document.getElementById("data2").innerHTML= obj.likes;
   window.likes =  obj.likes;
    }
  }
xmlhttp.open("GET","http://graph.facebook.com/"+page_id,true);
xmlhttp.send();
}
function sucess(){
	window.credits2 = window.credits-1;
	var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {    
   var data=xmlhttp.responseText;
	document.getElementById("credits").innerHTML = data;
	
    }
  }
xmlhttp.open("GET","check.php?page="+window.page_id+"&points="+window.credits2,true);
xmlhttp.send();
}
function skip(page_id,num,credits){
	credits2 = credits-1;
	var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {    
   var data=xmlhttp.responseText;
   document.getElementById('box'+num).style.display = "none";
    }
  }
xmlhttp.open("GET","skip.php?page="+page_id+"&points="+credits2,true);
xmlhttp.send();
}
function getlikes2(page_id){
document.getElementById('loading').style.display = "block";
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
   var data=xmlhttp.responseText;
  // document.getElementById("data").innerHTML= data;
   var obj = JSON.parse(xmlhttp.responseText);
   //document.getElementById("data2").innerHTML= obj.likes;
   window.likes2 =  obj.likes;
if (window.likes < window.likes2){
	sucess();
document.getElementById('loading').style.display = "none";
document.getElementById('box'+num).style.display = "none";
document.getElementById('message1').style.display = "block";

	}
else{
document.getElementById('loading').style.display = "none";
document.getElementById('message2').style.display = "block";
document.getElementById('box'+num).style.display = "none";
	}
    }
  }
xmlhttp.open("GET","http://graph.facebook.com/"+page_id,true);
xmlhttp.send();



//window.gl2 = setTimeout(getlikes2, 100);
}

</script>

<?php
include 'foot.php';
$page = "earn-facebook.php";
$sql_hitg = "SELECT * FROM mm WHERE link='$page'";
mysql_select_db($dbname);
$retval = mysql_query($sql_hitg,$conn);
while($row = mysql_fetch_array($retval)){
	$old_hit = $row['hit'];
	}
$new_hit = $old_hit+1;
$sql_hitp = "UPDATE mm SET hit='$new_hit' WHERE link='$page'";
mysql_select_db($dbname);
$retval = mysql_query($sql_hitp,$conn);
?>



