<html>
    <meta>
        <!-- I need a key, but it can't be publicly known, so I hid it -->
        <script src="secret.js"></script>
    </meta>
    <body>
        I needed a tool to encryt and decrypt some secret messages. I use AES so nobody will break it!<br><br>

        <form>
            <textarea id="text_to_encrypt" name="text" rows="10" cols="100"><?= $_REQUEST['query'] ?></textarea><br><br>            
            <button class="enc-dec" data-action="enc">Encrypt</button>
            <button class="enc-dec" data-action="dec">Decrypt</button>
        </form>

    </body>
<html>