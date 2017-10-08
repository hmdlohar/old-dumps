<?php
function request($url){
$cSession = curl_init();
$post_data = "EnrNo=&program=MCA&Submit=submit";
//step2
curl_setopt($cSession,CURLOPT_URL,$url);
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt ($cSession, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($cSession,CURLOPT_HEADER, false); 
//step3
$result=curl_exec($cSession);
//step4
curl_close($cSession);
//step5

return $result;
}
echo request("http://emwpa.ml/tally/book_public.php?ac_def=cap_007");
?>