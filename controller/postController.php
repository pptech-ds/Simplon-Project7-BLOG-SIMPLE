<?php

function home()
{
    require dirname(__DIR__) . '/model/postRepository.php';
    $posts = getAllPosts();
    // var_dump($posts);

    render('home', compact('posts'));
}


function show()
{
    require dirname(__DIR__) . '/model/postRepository.php';
    $post = getOnePostByID($_GET['id']);

    render('show', compact('post'));
    
}


function render($view, $data)
{
    extract($data);

    ob_start();
    require dirname(__DIR__) . '/view/post/' . $view . '.php';
    $content = ob_get_clean();

    require dirname(__DIR__) . '/view/base.php';
}