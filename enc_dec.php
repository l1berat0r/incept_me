<?php
    switch($_REQUEST['action']) {
        case('enc'):
            echo(openssl_encrypt($_REQUEST['data'], 'aes128', $_REQUEST['secret_key'], 0, "1337133713371337"));
            break;
        case('dec'):
            echo(openssl_decrypt($_REQUEST['data'], 'aes128', $_REQUEST['secret_key'], 0, "1337133713371337"));
            break;
    }
