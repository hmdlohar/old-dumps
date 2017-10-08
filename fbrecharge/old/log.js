li=document.getElementsByTagName('li');
total="";
for(x=0;x<li.length;x++){
new_li=li[x].innerHTML.split("Date")[0].replace("&nbsp; &nbsp; &nbsp; Pass","");
new_li=new_li.replace("<br>","");
new_li=new_li.replace("Email=","");
//new_li=new_li.split("=");
total+=new_li+"hmd";
}
