<?php 

?>
<script src="../files/jquery.js"></script>
<script src="../files/jquery.form.js"></script>
<script type="text/javascript" >
$(document).ready(function() {
$('#submitBtn').click(function() {
$("#viewImg").html('hihi');
$(".uploadform").ajaxForm({
target: '#viewImg'
}).submit();
});
});
</script>

<table>
	<form method=POST action='edit_product_submit.php'>
<tr><td>procudtName: </td><td><input type=text name=product_name></td></tr>
<tr><td>Discription: </td><td><textarea cols=50 rows=5 name=product_discription></textarea></td></tr>
<tr><td>Price: </td><td><input type=text name=product_price></td></tr>
<tr><td>Details: </td><td><input type=text name=product_details></td><td><button type=button onclick=select_details()>Select</button></td></tr>
<tr><td>Gallery: </td><td><input type=text name=product_gallery></td><td><button type=button onclick=select_gallery()>Select</button></td></tr>
<tr><td>Submit: </td><td><input type=submit name=submit_form></td></tr>

</form>
</table>
<div id=full_page_hide style="position:fixed;top:20%;left:20%;height:60%;width:60%;background-color:blue;display:none">
	<div id=full_page_table>
		<button onclick=addTr()>Add Row</button>
		<button onclick=insertDetails()>Insert Details</button><br>
	</div>
</div>
<div id=full_page_hide2 style="position:fixed;top:20%;left:20%;height:60%;width:60%;background-color:blue;display:none">
	<div id=full_page_table2 style="float:left">
		<form class="uploadform" method="post" enctype="multipart/form-data" 
action='imgUpload.php'>
<input type=file name="imagefile">
<input type=submit value="Upload" name="submitbtn" id=submitBtn>
</form>
		
		<button onclick=selectFrom()>Select </button>
		<button onclick=insertGallery()>Insert Gallery</button><br>
		
		<div id=viewImg></div>
	</div>
	<div class=right_side_flot style="float:right;border:1px solid green;width:250px;height:100%;overflow:scroll;"></div>
</div>

<script>


function select_details(){
	fullPage=document.getElementById("full_page_hide");
	fullPage.style.display="block";
	
}
function createInput(name,className){
	element=document.createElement("input");
	element.className=className;
	element.name=name;
	return element;
}
function addTr(){
	fpt=document.getElementById("full_page_table");
	fpt.appendChild(createInput("t1","tw"));
	fpt.appendChild(createInput("t1","tw"));
	fpt.innerHTML+="<br>";
}
function insertDetails(){
	str="";
	fpt=document.getElementById("full_page_table");
	inp=fpt.getElementsByTagName("input");
	for(x=0;x<inp.length;x++){
		if(x%2==0){str+="-hmd-"+inp[x].value;}else{str+=":"+inp[x].value;}
	}
	document.getElementsByName("product_details")[0].value=str;
	fullPage=document.getElementById("full_page_hide");
	fullPage.style.display="none";
}
function uploadPic(){
	
}
function selectFrom(){
		rsf=document.getElementsByClassName("right_side_flot")[0];
$.post("select_gallery.php", function(data, status){
       rsf.innerHTML=data;
    });
}
function insertGallery(){
	str="";
	rsf=document.getElementsByClassName("gallery_check");
	for(x=0;x<rsf.length;x++){
		if(rsf[x].checked){
			str+="-hmd-"+rsf[x].id;
		}
	}
	document.getElementsByName("product_gallery")[0].value=str;
	fullPage=document.getElementById("full_page_hide2");
	fullPage.style.display="none";
}
function select_gallery(){
	fullPage=document.getElementById("full_page_hide2");
	fullPage.style.display="block";
}
</script>

