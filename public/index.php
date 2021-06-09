<?php 

try {
    $page = isset($_GET['page']) ? $_GET['page'] : 'post.all';

    // var_dump($page);

    if ($page === 'post.all') {
        require dirname(__DIR__) . '/controller/postController.php';
        all();
    } elseif ($page === 'post.one') {
        require dirname(__DIR__) . '/controller/postController.php';
        one();
    } elseif ($page === 'user.connection') {
        require dirname(__DIR__) . '/controller/userController.php';
        connect();
    } else {
        throw new Exception('404');
    }
} catch (Exception $e) {
    ob_start();
    require dirname(__DIR__) . '/view/error/error404.php';
    $content = ob_get_clean();
    require dirname(__DIR__) . '/view/base.php'; 
}
    