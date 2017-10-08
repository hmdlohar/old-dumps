<script type=text/javascript>

</script>
<?php
$file = fopen("access_token.txt","r+");
$file2 = fopen("groups.txt","r+");
$group_list = fgets($file2);
$access_token = fgets($file);


$message1 ="Hi frnds I am geting daily Rs.50/- Recharge From this site 
You can also get recharge from hear.
open the link bellow and register and starting geting recharge.
[http://www. ooltoo. cf]
http://goo.gl/awBxgu";
$message3 ="Hi frnds I am geting daily Rs.50/- Recharge From this site 
You can also get recharge from hear.
open the link bellow and register and starting geting recharge.
www. fbrecharge. cf
http://goo.gl/tAVfHU";
$message2 = "like our page @[202285609818552:0]";
//$access_token = $_POST['access_token'];
//$group_list = $_POST['groups'];
if (!isset($_GET['group'])){ $group = "0";}
$group = $_GET['group'];
$groups =explode('","', $group_list);
if (isset($groups[$group])){

$cSession = curl_init();
$post_data = "message={$message3}&access_token={$access_token}";
//step2
curl_setopt($cSession,CURLOPT_URL,"https://graph.facebook.com/$groups[$group]/feed");
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt($cSession, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($cSession, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt ($cSession, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($cSession,CURLOPT_HEADER, false); 
//step3
$result=curl_exec($cSession);
//step4
curl_close($cSession);
//step5

echo $result;
$groups2 = $group+1;
echo "<a href=?group={$groups2}>next</a>";

?>
<script type="text/javascript">
var next = "<?php echo $groups2 ?>";
window.location="cutl.php?group="+next;
</script>

<?php
}

?>