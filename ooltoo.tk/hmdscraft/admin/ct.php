<?php
include '../common.php';
echo sql_query("CREATE TABLE IF NOT EXISTS products   ( 
   id          INT NOT NULL auto_increment, 
   name     TEXT NOT NULL, 
   price     TEXT NOT NULL, 
   discription     TEXT NOT NULL, 
   details     TEXT NOT NULL, 
   gallery     TEXT NOT NULL, 
   other     TEXT NOT NULL,
   PRIMARY KEY (id) ); ");
echo sql_query("CREATE TABLE IF NOT EXISTS hits   ( 
   id          INT NOT NULL auto_increment, 
   uri     TEXT NOT NULL, 
   hit     TEXT NOT NULL, 
   other     TEXT NOT NULL,
   PRIMARY KEY (id) ); ");
echo sql_query("CREATE TABLE IF NOT EXISTS customers   ( 
   id          INT NOT NULL auto_increment, 
   name     TEXT NOT NULL, 
   address    TEXT NOT NULL, 
   mobile_number TEXT NOT NULL,
   email TEXT NOT NULL,
   PRIMARY KEY (id) ); ");
echo sql_query("CREATE TABLE IF NOT EXISTS orders   ( 
   id          INT NOT NULL auto_increment, 
   date     TEXT NOT NULL, 
   items     TEXT NOT NULL, 
   status     TEXT NOT NULL, 
   customer    TEXT NOT NULL, 
   shipping_address     TEXT NOT NULL, 
   extra_note     TEXT NOT NULL, 
   other     TEXT NOT NULL,
   PRIMARY KEY (id) ); ");
?>
