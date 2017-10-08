<?php include 'head.php'; ?>
<div id=body>
<p id=title_para>About Me.</p>

<p id=para>
Hello, My Name is Hamid Lohar. I am working Online. I am making likes on facebook pages, Photos, and follows on Facebook Profile. It is done by Social media exchange websites like "www.like4like.org","www.addmefast.com". I am also making likes by inviting frnds. I am aslo porviding this service for YouTube. </span>.
</p>

<p id=title_para>Price List.</p>

<p id=para>
	
</p>

<div id=subject_list>
<p id=title_para>Avelable Subjects</p>
	<a href=sub/mcs21.php>MCA21 - Data Structor (Avelable)</a>
	<a href=under_construction.php>MCS23 - Database Management (Comming Soon)</a>
	<a href=under_construction.php>MCS24 - Object Orianted JAVA (Comming Soon)</a>
</div>

<?php include 'foot.php'; 
$open = fopen("hit.html", "r+");
$value = fgets($open);
$close = fclose($open);

$value++;
$open = fopen("hit.html", "w+");
fwrite($open,$value);
fclose($open);
echo "hit:{$value}";
?>