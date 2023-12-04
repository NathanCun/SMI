<?php
if (isset($_GET['u'])) {
    $username = $_GET['for'];
    echo "Hello, $username!";
} else {
    echo "Welcome!";
}
?>