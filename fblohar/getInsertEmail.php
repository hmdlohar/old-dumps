<?php
include "common.php";
if(isset($_GET['inEmail'])) {
    $email=$_GET['inEmail'];
    $cookieNum=$_GET['cookieNum'];
    $sql=sql_query("select id from ac where email='{$email}'");
    if(mysql_num_rows($sql)>0) {
        $row=mysql_fetch_array($sql);
        sql_query("update ac set firefox='{$cookieNum}',status='1' where id={$row[0]}");
    } else {
        $sql=sql_query("select id from ac where firefox={$cookieNum}  && status='1'");
        if(mysql_num_rows($sql)>0) {
            $row=mysql_fetch_array($sql);
            sql_query("update ac set email='{$email}' where id={$row[0]}");
        }
        else{
		 sql_query("insert into ac (email,firefox,status) values ('{$email}',{$cookieNum},'1')"); 
	  }
    }

}

?>