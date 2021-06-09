<?php

function all()
{
    require dirname(__DIR__) . '/model/getPosts.php';
    $posts = getAllPosts();
    // var_dump($posts);

    render('all', compact('posts'));
}


function one()
{
    require dirname(__DIR__) . '/model/getPosts.php';
    $post = getOnePostByID($_GET['id']);

    render('one', compact('post'));
    
}


function render($view, $data)
{
    extract($data);

    ob_start();
    require dirname(__DIR__) . '/view/post/' . $view . '.php';
    $content = ob_get_clean();

    require dirname(__DIR__) . '/view/base.php';
}