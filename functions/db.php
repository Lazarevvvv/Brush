<?php

$dbhost = "localhost";
$dbname = "brush";
$username = "root";
$password = "123456789";

$db = mysqli_connect($dbhost, $username, $password, $dbname);

// получение всех статей
function get_singles_all(){
    global $db;
    $singles = $db->query("SELECT * FROM singles");
    return $singles;
}
// получения стать по айди
function get_singles_by_id($id){
    global $db;
    $singles_by_id = $db->query("SELECT * FROM singles WHERE id = $id");
    foreach ($singles_by_id as $single_by_id){
        return $single_by_id;
    }
}
// получения категорий 
function get_categories_all(){
    global $db;
    $categories = $db->query("SELECT * FROM categories");
    return $categories;
}
// получения информации о сайте
function get_about_us(){
    global $db;
    $sidebars_right = $db->query("SELECT * FROM right_sidebar");
    return $sidebars_right;
}
// получения названия категорий по ее айди
function get_categories_by_id($id){
    global $db;
    $categories_by_id = $db->query("SELECT * FROM categories WHERE id = $id");
    foreach ($categories_by_id as $category_by_id){
        return $category_by_id;
    }
}
// получения автора по айди
function get_authors_by_id($id){
    global $db;
    $authors = $db->query("SELECT * FROM authors WHERE id = $id");
    foreach ($authors as $author){
        return $author;
    }
}
// добавления просмотров
function views_update($id){
    global $db;
    $db->query("UPDATE  singles SET views=views + 1 WHERE id = $id");
}

// просмотр статей по категориям
function get_allsingles_by_id($id){
    global $db;
    $singles_by_id = $db->query("SELECT * FROM singles WHERE category_id = $id");
    
        return $singles_by_id;
    
}