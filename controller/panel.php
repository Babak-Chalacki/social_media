<?php

include "../model/database.php";
// $usersPost = $connection->query("SELECT * FROM posts INNER JOIN users ON posts.user_id = users.id;");
// $usersPost = $connection->query("SELECT *, users.id AS karbar_id, posts.id AS post_id FROM posts INNER JOIN users ON posts.user_id = users.id ORDER BY TIME DESC");
$usersPost = $connection->query("SELECT *, users.id AS karbar_id, posts.id AS post_id FROM posts INNER JOIN users ON posts.user_id = users.id ORDER BY TIME DESC");



// get comments
$post_array = array();
foreach($usersPost as $userPost){
    $post_id = $userPost["post_id"];

    $userPost["likes"] = $connection->query("SELECT COUNT(*) AS count 
 FROM likes
      WHERE post_id = $post_id; ")->fetch_assoc();



    $userPost["comments"] = $connection->query("SELECT * FROM comments INNER JOIN users ON comments.user_id = users.id WHERE post_id = $post_id") ;
    // print_r(array($userPost["comments"])) ;

    $post_array[] = $userPost;
}
// get comments


