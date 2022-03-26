<?php
    //FLAG1{H7JOIe546WbOn0o5bT1OnPGJ}
    if(array_key_exists('filename', $_REQUEST)) {
        $filename = pathinfo($_REQUEST['filename'], PATHINFO_BASENAME);
        echo("<h1>$filename</h1>");
        echo "<pre>";
        echo(htmlentities(file_get_contents($filename)));
        echo "</pre>";
        
    } else {
?>

<html>
    <body>
        Thanks to this tool I may view files on my server without remebering all these stupid passwords...<br><br>
        <form action="/file_content.php" method="GET">
            <input name="filename" type="text">
            <input type="submit" value="Show me the file">
        </form>
    </body>
</html>

<?php
    }
?>
