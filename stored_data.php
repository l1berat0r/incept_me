<?php
    require("config.php");

    $conn = new PDO("mysql:host=${config['db_host']};dbname=${config['db_name']}", 
                    $config['db_username'], 
                    $config['db_password'], 
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    //I stored some secret data in MySQL and I need to use them now. If only I could remeber the name of the table...
    //Maybe I could use that old tool I hid somewhere here?

    $sql = "
        SELECT 
            GROUP_CONCAT(t1.content ORDER BY t1.order ASC SEPARATOR '')
        FROM 
            app_1337.I_forgot_the_column_name as t1";

    $q = $conn->query($sql);

    $row = $q->fetch();
    print_r($row[0]);        
?>