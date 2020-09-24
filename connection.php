<?php

    $server="sql107.epizy.com";
    $username="epiz_26815084";
    $password="k2ApOFers6Tkv5";
    $dbname="epiz_26815084_loan";
    $con = mysqli_connect($server,$username,$password,$dbname);

    mysqli_select_db($con,'crud');

    /*if($con)
    {
        echo "Connected";
    }
    else
    {
        echo "Not connected";
    }*/
    
    
?>