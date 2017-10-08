<?php
include "../common.php";
$retval=sql_query("select * from menu_test where perent='bollymovie' limit 601,1000");
$name2=array();
while($row=mysql_fetch_array($retval)){
	$link=$row['link'];
	$name=$row['name'];
	$id=$row['id'];
	$u_link=$row['u_link'];
	$cat=$row['cat'];
	$perent=$row['perent'];
	$retval2=sql_query("select * from menu_test where perent='$u_link'");
	while($row=mysql_fetch_array($retval2)){
		$name2=$row['name'];
		$link2=$row['link'];
		$perent2=$row['perent'];
		$cat2=$row['cat'];
		$u_link2=$row['u_link'];
		//echo sql_query("delete from menu2 where perent='$perent2'");
	if(num_rows("menu2","u_link","$u_link2")==0){
		$name3=explode("-hmd-",$name2);
		//print_r($name3);
		$name3[2]=mysql_real_escape_string($name3[2]);
		$name3[1]=mysql_real_escape_string($name3[1]);
		$name3[0]=mysql_real_escape_string($name3[0]);
	//sql_query("insert into menu2 (name,link,perent,cat,u_link,singer,size) values ('$name3[0]','$u_link2','$perent2','$cat2','$u_link2','$name3[1]','$name3[2]')");
	}else{echo "song<br>";}
		}
	//echo sql_query("update menu_test set u_link='$id' where id=$id");
	if(num_rows("menu2","u_link","$u_link")==0){
	//sql_query("insert into menu2 (name,link,perent,cat,u_link) values ('$name','$u_link','Bollywood_Movies_Songs','$cat','$u_link')");
	}else{echo "movie<br>";}

	
	//$link2=str_replace("localhost","localhost/hmdsweb/curl/test1.php?url=http://www.mymp3song.com",$link);
	//echo "{$row['link']}-----<a href={$link2}&perent={$u_link}&id={$id}>href</a><br>";
	}
//print_r($name2);
/*
$id=5;
$retval=sql_query("select link,u_link from menu_test where id={$id}");
$row=mysql_fetch_array($retval);
echo $row[0];
$link2=str_replace("localhost","localhost/hmdsweb/curl/test1.php?url=http://www.mymp3song.com",$row[0]);
echo $link2;
$link3="{$link2}&perent={$row[1]}&id={$id}";
echo "<br>{$link3}";
*/
?>
<p id=result style="position:fixed;right:25px;top:20px;">result</p>
<!--
<scriptgsd>
hmd=document.getElementsByClassName("hmdc");
for(x=0;x<hmd.length;x++){
		//final1=hmd[x].innerHTML.replace("<div>","").replace("</div>","").replace("Mp3 Songs [","-hmd-").replace("]","");
		final1=hmd[x].innerHTML.split(":");
		final2=final1[0].split("-hmd-");
		a_link=final2[1];
		while(a_link.indexOf(" ")>0){
		a_link=a_link.replace(" ","_");
		}
		u_link=a_link+"_"+final2[0]
		ajax2(u_link,final2[0]);
		
	}
function result_add(text){
	document.getElementById("result").innerHTML=document.getElementById("result").innerHTML+"<br>"+text;
}
function ajax2(name,id){
	item=0;
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
		
    
   data = xmlhttp.responseText;
result_add(data);
    }
  }
xmlhttp.open("GET","test2.php?pedit2="+name+"&item="+item+"&id="+id,true);
xmlhttp.send();
//hmd=document.getElementsByClassName("catList")[0].getElementsByClassName("catRow")[0].getElementsByTagName("a");
}
function is_inner(inner,tag){
	hmd=document.getElementsByTagName(tag);
	hmd2=-1;
	for(x=0;x<hmd.length;x++){
		if(hmd[x].innerHTML.indexOf(inner)>=0){
			hmd2=x;
			break;
			}
	}
	return hmd2;
}
</script>