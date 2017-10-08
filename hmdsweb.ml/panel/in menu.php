<?php
include "../common.php";
if(isset($_POST['in_menu'])){
$name=$_POST['name'];
$link=$_POST['link'];
$perent=$_POST['perent'];
$date=$_POST['date'];
$u_link=$_POST['u_link'];
$degree=$_POST['degree'];
$cat=$_POST['cat'];
$img=get_perent($_POST['perent']);
if(num_rows("menu","link",$link)==0){
	echo sql_query("insert into menu (name,link,perent,date,u_link,degree,cat,img) values ('$name','$link','$perent','$date','$u_link','$degree','$cat','$img')");
	}else{echo "link already in";}
}
?>
<form action="" method="POST">
Name:<input type=text name=name>
link:<input type=text name=link>
perent:<select name=perent>
<?php
$retval=sql_query("select name,link from menu where perent='music'|| perent='video' || perent='full_movie' order by perent");
while($row=mysql_fetch_array($retval)){
	echo "<option value={$row['link']}>{$row['name']}</option>";
	}
?>
</select>
Date:<input type=text name=date value=<?php echo date("ymd"); ?>>
U_Link:<input type=text name=u_link>
Degree:<select name=degree>
<option value=1>1</option>
<option value=2>2</option>
<option value=3>3</option>
<option value=4>4</option>
<option value=5>5</option>
</select>
Cat:<select name=cat>
<option value=obj>obj</option>
<option value=menu>menu</option>
</select>
<input type=submit name=in_menu>

</form>
<p id=result style="position:fixed;right:25px;top:20px;">result</p>
<table border=1 cellspacing=0>
<?php
$retval=sql_query("select * from menu order by id desc limit 50");
while($row=mysql_fetch_array($retval)){
		$name=$row['name'];
		$link=$row['link'];
		$perent=$row['perent'];
		$cat=$row['cat'];
		$u_link=$row['u_link'];
		$id=$row['id'];
		
	echo "<tr><td>{$id}</td><td size=30>".td_field("name",$name,$id,"edit")."</td><td size=30>".td_field("link",$link,$id,"edit")."</td><td size=30>".td_field("u_link",$u_link,$id,"edit")."</td><td>".td_field("perent",$perent,$id,"edit")."</td><td><a href='obj.php?link={$link}' target=new{$id}>OBJ</a></td></tr>";
}

?>


<script src="../common.js"></script>
<script>
window.inter1=setInterval(function(){
	st1=document.getElementsByName("name")[0].value;
	document.getElementsByName("link")[0].value=convert_link(st1);
		
	},500);
function edit(field,id,div){
	value=document.getElementById(div).value;
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
   document.getElementById('result').innerHTML=data;
    }
  }
xmlhttp.open("GET","edit.php?edit=menu&id="+id+"&feild="+field+"&value="+value,true);
xmlhttp.send();
}
function edit_status(field,id,div){
	value=document.getElementById(div).value;
	if(value==0){newval=1;}else{newval=0;}
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
   document.getElementById('result').innerHTML=data;
    }
  }
xmlhttp.open("GET","edit.php?edit=menu&id="+id+"&feild=status&value="+newval,true);
xmlhttp.send();
}
function del(id){
//alert(id);
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
   document.getElementById('result').innerHTML=data;
    }
  }
xmlhttp.open("GET","edit.php?del="+id,true);
xmlhttp.send();
}

</script>