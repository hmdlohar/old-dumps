<?php
for ($x=0;$x<=50;$x++) {
$num = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);
shuffle($num);
$pnum = $num[2];
$snum = $num[4];
$my_array = array("anjali","ankita","anvaya","bansika","bhavika","binki","cindy","corina","debalina","dipali","divya","dixita","farhin","gayatri","gopi","gunjan","indra","jahal","kanika","khayati","khushabu","kinjal","komal","lakshita","laxmi","mamta","mandira","manisha","mansi","mona","namrata","namrata","neeta","neha","nidhi","nikita","nilam","nilam","nirjala","nivadita","pari","pari","parita","parul","payal","pooja","pooja","pooja","pooja","poojam","preeti","preeti","priya","priya","priyanka","punita","purvi","rashmi","rohini","roshani","rupal","sangita","sapna","sapna","sapna","satakshi","sharmili","shreya","shruti","sifia","simar","smriti","smriti","sonam","sradha","sudhika","sumati","tara","tina","urvashi","vandna","vimala");
$my_array2 = array("varma","mahera","rayma","chavda","thacker","patel","kumari","vedita","sharma","gadhavi","srinivasan","pujara","rayma","juneja","parmar","gupta","gadhavi","juneja","meena","patel","kumbhar","gupta","maheta","sharam","hirani","hirani","khan","hirani","vanjara","chande","dayal","patel","patel","patel","kumbhar","kumbhar","dayal","sharma","pande","hirani","gupta","sharma","hirani","gupta","vagela","mahajan","rabadiya","shah","suthar","s","gupta","kashyap","gandhi","parmar","yadav","yadav","yadav","maheta","chavda","chavda","chavada","gupta","gupta","gupta","patel","kapoor","sharma","shingh","kapoor","gupta","shah","kumari","pujara","sharma","shina","gupta","shah","varma","shing","bhimani","yadav","patil");
shuffle($my_array);
shuffle($my_array2);

echo $my_array[$pnum];echo "_";echo rand(100,999);
echo $my_array2[$snum];echo ".";echo rand(1006,9990);
echo "@gmail.com<br>";
}
?>