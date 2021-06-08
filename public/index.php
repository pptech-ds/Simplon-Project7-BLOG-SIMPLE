<?php 

try {
    $page = isset($_GET['page']) ? $_GET['page'] : 'post.all';

    // var_dump($page);

    if ($page === 'post.all') {
        ob_start();
        require dirname(__DIR__) . '/view/post/all.php';
        $content = ob_get_clean();
        require dirname(__DIR__) . '/view/base.php'; 
    } elseif ($page === 'post.one') {
        ob_start();
        require dirname(__DIR__) . '/view/post/one.php';
        $content = ob_get_clean();
        require dirname(__DIR__) . '/view/base.php'; 
    } elseif ($page === 'user.connection') {
        ob_start();
        require dirname(__DIR__) . '/view/user/connectionForm.php';
        $content = ob_get_clean();
        require dirname(__DIR__) . '/view/base.php'; 
    } else {
        throw new Exception('404');
    }
} catch (Exception $e) {
    ob_start();
    require dirname(__DIR__) . '/view/error/error404.php';
    $content = ob_get_clean();
    require dirname(__DIR__) . '/view/base.php'; 
}
    