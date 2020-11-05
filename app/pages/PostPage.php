<?php

namespace Pages;

use PDO;
use PDOException;

class PostPage
{
    public static function printHello(){
        echo "hello";
    }
    public static function printPosts(){
        $dbuser = $_ENV['POSTGRES_USER'];
        $dbpass = $_ENV['POSTGRES_PASS'];

        try {
            $pdo = new PDO("pgsql:host=postgres;dbname=blog", $dbuser, $dbpass);
            $statement = $pdo->query("SELECT * FROM public.posts");
            $posts = $statement->fetchAll(PDO::FETCH_OBJ);

            echo "<h2>Posts</h2>";
            echo "<ul>";
            foreach ($posts as $post ) {
                echo "<li>".$post->id."</li>";
            }
            echo "</ul>";

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}