<?php
    
    $username=$_post['user'];
    $password=$_post['pass'];

    $username = stripclashes($user);
    $password = stripclashes($pass);
    $username = mysql_real_escape_string($user);
    $password = mysql_real_escape_string($pass);

   

    mysql_connect("localhost","root","");
    mysql_select_db("login 1");

    $result=mysql_query("select * from users where username ='$username' and password='$password'")
               or die("Failed to query database".mysql_error());
    $row = mysql_fetch_array($result);
    if ($row['username']==$username && $row['password'] == $password ){
        echo "Login success!!! welcome ".$row['username'];       	
               
    } else {
    	echo "Failed to Login";

    }           	
?>