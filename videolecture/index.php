<?php include 'head.php'; ?>
<div id=body>
<p id=title_para>What is MCA VIDEO LECTURE?</p>

<p id=para>
MCA VIDEO LECTURE is website where you can find Video Lectures DVDs which is useful to MCA. This Video lectures are  avelable free to download on http://www.nptel.ac.in and many other websites.in but we are providing that video in DVD. This website specily provide video lecture which is useful to <span id=red>MCA IGNOU</span>.
</p>

<p id=title_para>Special Subject Set For MCA IGNOU</p>

<p id=para>
	We provide Special Subject Set for MCA IGNOU. We consider MCA IGNOU syllabus and make video set of perticuler subject by finding videos across the internet. We find most of videos on http://www.nptel.ac.in but if other videos needed we try to find it on Youtube or any other website and make special subject set for MCA IGNOU. Bellow You can find Subject which are avelable.
</p>

<div id=subject_list>
<p id=title_para>Avelable Subjects</p>
	<a href=sub/sem2_assignment.php id=new_update>MCA-SEM-2 SOlved Assignment  <font color=green>All In One Zip File</font></a>
	<a href=sub/mcs21.php>MCA21 - Data Structor (Avelable)</a>
	<a href=under_construction.php>MCS23 - Database Management (Comming Soon)</a>
	<a href=under_construction.php>MCS24 - Object Orianted JAVA (Comming Soon)</a>
</div>
<script type="text/javascript">

function blinkColor()
{
  document.getElementById("new_update").style.background="#a6a8e9"
  setTimeout("setblinkColor()",500)
}

function setblinkColor()
{
  document.getElementById("new_update").style.background="#fbfbdf"
  setTimeout("blinkColor()",500)
}
blinkColor();

</script>
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