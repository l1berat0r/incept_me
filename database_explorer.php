<html>
    <body>
        It so frustrating to use phpmyadmin. I need my own tool. I hope nobody will find this site, I hid it well.<br><br>

        <form action="database_explorer.php" method="GET">
            <textarea name="query" rows="10" cols="100"><?= $_REQUEST['query'] ?></textarea><br>
            <input type="submit" value="Query">
        </form>

<?php
    require("config.php");
    if(array_key_exists('query', $_REQUEST)) {
        $conn = new PDO("mysql:host=${config['db_host']};dbname=${config['db_name']}", $config['db_username'], $config['db_password']);

        $sql = $_REQUEST['query'];

        $q = $conn->query($sql);

        while ($row = $q->fetch()){
            var_dump($row);
            print_r("<br>");
        }
    }
?>

    </body>
<html>