<span id=page_header>Add Facebook, Youtube, Tweeter Account.</span><br><hr>
<p id=para style="font-size:15px">YOUR ACCOUNT WILL APPER IN OUR EARNING AREA WHERE OTHER MEMBERS WILL LIKE THEM. THE MORE CREDITS YOU HAVE THE MORE YOU CAN PROMOTE IN THE EARN AREA. TO EARN CREDITS YOU ARE PAYING OUT, START LIKING OTHER ACCOUNT LINKS ON OUR SITE. ONCE YOUR CREDITS RUN OUT, YOUR ACCOUNT WILL BE PAUSED, UNTIL YOU EARN MORE.</p>
<hr>


<form action="pages/in_account.php" method=POST>
	<font color=red size=+1><p style="margin-left:180px" id=red_error>
	<?php if(isset($_GET['error'])){echo "Account Already In our Database";} ?>
	</p></font>
<table><tr><td>Select Account</td><td>
<select name=page_type id=page_type onchange=page_types()>
<?php
		if ($view == "home"){
			$sql_left = "SELECT * FROM list where link != 'home'&& other=1 ORDER BY id  asc LIMIT 30";
			}else{
		$sql_left = "SELECT * FROM list where mm='earn'&& link != 'home'&& other=1 ORDER BY id  asc LIMIT 30";
	}
		mysql_select_db( $dbname );
		$retval = mysql_query( $sql_left, $conn );
		while($row = mysql_fetch_array($retval)){
		$name = $row['name'];
		$link = $row['link'];
		$hit = $row['hit'];
		$mm = $row['mm'];
		$main_containt = $row['other'];
		if ($mm == 'xxxpics'){
echo "<a href={$url}?list={$link}&view={$mm}>{$name} (18+)</a>";
			}
			else{
		echo "<option value={$link}>{$name}</option>";
	}		}
		?>
</select></td></tr>
<tr>
<td>Name:- </td><td> <input type=text name=page_name id=page_name2 size=50></td>
</tr>
<tr>
<td>Account Link:- </td><td> <input type=text name=page_link id=page_link value="http://www.facebook.com/pagename" size=50>
</td>
</tr>
<tr>
<td>Money Per Like/Follow:- </td><td> <select name=points id=points>
<?php 
for ($i=0.06;$i<=0.21;$i= $i+0.01){
echo "<option value={$i}>Rs.{$i}</option>";
	}
?>
</select></td>
</tr>
<tr>
	<input type=hidden name=link_id id=link_id>
<td></td><td> <input type=button value="Add Account" onclick="check_link()" id=add_button><input type=submit disabled=yes id=submit_add name=add_submit style="display:none;disabled:ture;"></td>
</tr>
</table>

<br><font color=blue size=+1>Account Link Should Be like Bellow:</font><br>
<font color=green>Facebook:-</font><br>
http://www.facebook.com/pagename<br>
http://www.facebook.com/photo.php?fbid=xxxxxxxxxx<br>
http://www.facebook.com/permalink.php?story_fbid=xxxxxxxxxx&id=xxxxxxxxxx
<br><br>
<font color=green>Youtube:-</font><br>


<br><br>
<font color=green>Tweeter:-</font><br>

</center></div>
</form>

<script type="text/javascript">
	var submit_add = document.getElementById('submit_add');
	var add_button = document.getElementById('add_button');
	var red_error =document.getElementById('red_error');
function page_types(){
	var page_link = document.getElementById('page_link');
	var page_type = document.getElementById('page_type');
	var type_inner=page_type.value;
	switch(type_inner){
		case "earn-facebook":
			page_link.value="http://www.facebook.com/pagename";
			break;
		case "earn-facebook-post":
			page_link.value="http://www.facebook.com/photo.php?fbid=xxxxxxxxxx";
			break;	
		case "earn-facebook-follow":
			page_link.value="http://www.facebook.com/username";
			break;	
		case "earn-facebook-share":
			page_link.value="http://www.facebook.com/photo.php?fbid=xxxxxxxxxx";
			break;	
			}
}
function check_link(){
	add_status(1);
	var page_name2 = document.getElementById('page_name2');
	var page_link = document.getElementById('page_link');
	var points = document.getElementById('points');
	var page_type = document.getElementById('page_type');
	var page_type2 = page_type.options[page_type.options.selectedIndex].value;
	var page_type3 = page_type.options.selectedIndex;
	if(page_name2.value==null || page_name2.value==""){
		red_error.innerHTML="Enter Account Name";
		add_status(0);
		return false;
		
		}
	switch(page_type2){
		case "earn-facebook":
			earn_facebook();
			break;
		case "earn-facebook-post":
			earn_facebook_post();
			break;	
		case "earn-facebook-follow":
			earn_facebook_follow();
			break;	
		case "earn-facebook-share":
			earn_facebook_post();
			break;	
			}

	
}
function earn_facebook(){
	var link_pos = page_link.value.indexOf("http://www.facebook.com/");
	if(link_pos==0){
		var main_id = page_link.value.substr(24);
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
	    if(xmlhttp.status==404){
	  document.getElementById('red_error').innerHTML = "Link Not Found";}
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
   window.enrol = xmlhttp.responseText;

   var obj = JSON.parse(xmlhttp.responseText);
   document.getElementById('link_id').value=obj.id;
   if (obj.category != undefined){
			submit_add.disabled= false;
			submit_add.click();
	   }else {document.getElementById('red_error').innerHTML = "Please Enter Valued Facebook Page Link";
				add_status(0);}

    }
  }
xmlhttp.open("GET","http://graph.facebook.com/"+main_id,true);
xmlhttp.send();

		} else {
			red_error.innerHTML="Enter Valued Link";
			add_status(0);
			}
}
function earn_facebook_post(){
	var link_pos = page_link.value.indexOf("http://www.facebook.com/photo.php?fbid=");
	if(link_pos==0){
		var main_id = page_link.value.substr(39);
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
	    if(xmlhttp.status==404){
	  document.getElementById('red_error').innerHTML = "Link Not Found";}
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
   window.enrol = xmlhttp.responseText;

   var obj = JSON.parse(xmlhttp.responseText);
   if(obj[0]!=undefined){
   document.getElementById('link_id').value=main_id;
   if (obj[0].like_info.like_count != undefined){
			submit_add.disabled= false;
			submit_add.click();
	   }}else {document.getElementById('red_error').innerHTML = "Please Enter Valued Facebook Photo Link";
				add_status(0);}

    }
  }
xmlhttp.open("GET","https://api.facebook.com/method/fql.query?format=json&query=SELECT+like_info+FROM+photo+WHERE+object_id%3D"+main_id,true);
xmlhttp.send();

		} else {
			red_error.innerHTML="Enter Valued Link";
			add_status(0);
			}
}
function earn_facebook_follow(){
	var link_pos = page_link.value.indexOf("http://www.facebook.com/");
	if(link_pos==0){
		var main_id = page_link.value.substr(24);
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
	    if(xmlhttp.status==404){
	  document.getElementById('red_error').innerHTML = "Link Not Found";}
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
   window.enrol = xmlhttp.responseText;

   var obj = JSON.parse(xmlhttp.responseText);
   document.getElementById('link_id').value=obj.id;
   window.obj=obj;
   if (obj.last_name != undefined){
			submit_add.disabled= false;
			submit_add.click();
	   }else {document.getElementById('red_error').innerHTML = "Please Enter Valued Facebook Profile Link";
				add_status(0);}

    }
  }
xmlhttp.open("GET","https://graph.facebook.com/"+main_id,true);
xmlhttp.send();

		} else {
			red_error.innerHTML="Enter Valued Link";
			add_status(0);
			}
}

function add_status(states){
	if(states == 1){
			add_button.value = "Please Wait";
	add_button.disabled = true;
		}
	if(states == 0){
			add_button.value = "Add Account";
	add_button.disabled = false;
		}
		
}


function link_verify(num){
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
   window.enrol = xmlhttp.responseText;

   var obj = JSON.parse(xmlhttp.responseText);
   document.getElementById("result2").innerHTML= window.enrol;

    }
  }
xmlhttp.open("GET",url+"?enrol="+enrol,true);
xmlhttp.send();
}
</script>