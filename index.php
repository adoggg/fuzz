<?php
$action = $_GET['action'] ?? '';
$arg = $_GET['arg'] ?? '';
if(preg_match('/^[a-z0-9_]*$/isD', $action)) {
    die('you are hacker?');
} else {
    $action('', $arg);
}
