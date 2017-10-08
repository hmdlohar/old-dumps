<p id=result style="position:fixed;right:25px;top:20px;color:green;">result</p>
<?php
include "../common.php";
if(isset($_GET['link'])){
	$link=$_GET['link'];
	if(num_rows("obj","link",$link)==0){
		echo "Obj dose not exist do u want to create it? <a href='?cr_obj={$link}'>Create Obj</a>";
		}
	else{
		echo "<table>";
		$retval=sql_query("select * from obj where link='$link'");
		while($row=mysql_fetch_array($retval)){
		$name=$row['name'];
		$link=$row['link'];
		$menu_id=$row['menu_id'];
		$html=$row['html'];
		$u_link=$row['u_link'];
		$id=$row['id'];
		$multi_link=$row['multi_link'];
		echo "<tr><td>{$id}</td><td size=30>".td_field("name",$name,$id,"edit")."</td><td size=30>".td_field("link",$link,$id,"edit")."</td><td size=30>".td_field("u_link",$u_link,$id,"edit")."</td><td>".td_field("menu_id",$menu_id,$id,"edit")."</td><td></td></tr>
		<tr><td colspan=3><textarea id=multi_link{$id} class=multi_link cols=70 rows=10>{$multi_link}</textarea><button onclick=edit('multi_link','{$id}','multi_link{$id}')>EDIT</button></td><td colspan=2>
			<table id=table2>
			";
			$multi_link=json_decode($multi_link,true);
echo sizeof($multi_link);
for($x=0;$x<sizeof($multi_link);$x++){
	echo "<tr><td><input type=text class=table21 value='{$multi_link[$x]['name']}'></td><td><input type=text class=table22 value='{$multi_link[$x]['link']}'></td></tr>";
	}
			echo "
			
			<tr><td><input type=text class=table21></td><td><input type=text class=table22></td></tr>
			<tr><button onclick=add_tr()>Add</button><button onclick=convert()>Convert</button></tr>
			</table>
			
		</td></tr>
		";
		
			}
		}
}
function create_obj($link){
	$retval=sql_query("select * from menu where link='{$link}'");
	while($row=mysql_fetch_array($retval)){
		if(num_rows("obj","link",$link)==0){
			$row['link']=mysql_real_escape_string($row['link']);
			$row['u_link']=mysql_real_escape_string($row['u_link']);
			echo sql_query("insert into obj (name,link,date,u_link,menu_id) values ('{$row['name']}','{$row['link']}','{$row['date']}','{$row['u_link']}','{$row['id']}')");
			}else echo "alerady exist";
		}
}
if(isset($_GET['cr_obj'])){
	$link=$_GET['cr_obj'];
	create_obj($link);
}
?>
<table id=select_avi>
<tr><td><select id=formate>
<option value="3GP">3GP</option>
<option value="MP4">MP4</option>
<option value="HQ_AVI">HQ_AVI</option>
</select></td><td>
<select id=formate_num>
<option value=1>1</option>
<option value=2>2</option>
<option value=3>3</option>
<option value=4>4</option>
<option value=5>5</option>
</select>
</td><td>
<button id=click_formate onclick=add_formate()>add_formate</button>
</td></tr>
</table>

<script src="../common.js"></script>
<script>
function add_formate(){
	formate=document.getElementById("formate").value;
	formate_num=document.getElementById("formate_num").value;
	//alert(formate+formate_num);
	for(x=0;x<formate_num;x++){
		tmp=document.createElement("tr");	
		x2=x+1;
tmp.innerHTML="<td><input type=text class=table21 value='Download["+formate+"] part-"+x2+"'></td><td><input type=text class=table22></td>";
document.getElementById("table2").appendChild(tmp);
	}
}
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
xmlhttp.open("GET","edit.php?edit=obj&id="+id+"&feild="+field+"&value="+value,true);
xmlhttp.send();
}
function edit_text(field,id,div){
	value=document.getElementById(div).innerHTML;
	console.log(value);
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
xmlhttp.open("GET","edit.php?edit=obj&id="+id+"&feild="+field+"&value="+value,true);
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
function add_tr(){
tmp=document.createElement("tr");	
tmp.innerHTML="<td><input type=text class=table21></td><td><input type=text class=table22></td>";
document.getElementById("table2").appendChild(tmp);
return tmp;
}
function convert(){
arr=new Object();
table21=document.getElementsByClassName("table21");
table22=document.getElementsByClassName("table22");
for(x=0;x<table21.length;x++){
	arr[x]=({name:table21[x].value,link:table22[x].value});
	console.log(arr);
	}
document.getElementsByClassName("multi_link")[0].innerHTML=JSON.stringify(arr);
}
</script>