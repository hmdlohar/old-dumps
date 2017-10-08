<?php
$access_token = "CAACEdEose0cBAC12IkJxakFqqp4PZBZA9vBo1QASFlM3bKUZArdZC3ZARQQ2CTGbJ2ZCxLWUdSJVkTZAu5DkBMjrmbleNgjJPjZAaVbZCVJ3sCTWY5YWwNvZAm5okkLJhb6OEwqrXOEo9yGfEZAZBONPfoYYjhDAtWRwE1UX0mb1QXAgLxL84Ord1tuY";
$message = "Hi frnds I am geting daily Rs.50/- Recharge From this site 
You can also get recharge from hear.
open the link bellow and register and starting geting recharge.
http://goo.gl/vhsfKf";
$link = "";
echo "<form action=edit.php method=POST><textarea name=data cols=100 rows=30><ol>";
$groups = array("226847957475499","1591894297704209","595875217125593","226664380838303","1448860125390868","420384228061942","601276823228526","824108560947913","632644630080122","310595605785547","140974742644860","705519506197578","524191301042045","815540288486798","1441076516151495","1503763483193853","263606040516997","162930233865094","1428188650790725","728100937210052","595895497198725","1411016865835866","198398040354155","169844996485139","182913791762161","592536554117079","316577311856666","483751951677389","585141428258622","1449424045306399","211587399013770","1438698736416977","1385743501715759","295851940548079","696950207036423","1389762941263303","271196113060247");
foreach($groups as $value) {
 echo "
	 <li><form action='https://graph.facebook.com/{$value}/feed' method=POST target='blank'><input type=text name=link value='{$link}'><input type=text name=message value='{$message}'><input type=text name=access_token value='{$access_token}'><input type=submit></form></li><br>";
}
?>
</textarea></ol><input type=submit>
</form>
<a href=test1.php>test1</a>
