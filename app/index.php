<?php
require __DIR__ . '/vendor/autoload.php';

use Pages\PostPage;

$url = $_SERVER['REQUEST_URI'];

switch ($url) {
    case '/':
        PostPage::printHello();
        break;
    case '/posts':
        PostPage::printPosts();
        break;
    default:
        die(404);
}