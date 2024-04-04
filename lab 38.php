<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="MY Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'could not login. please enter your username and password';
    exit;

}else{
    echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p> you entered {$_SERVER['PHP_AUTH_PW']}as your password.</p>";
    
}


?>