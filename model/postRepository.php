<?php

function getDBConnection() :PDO
{
    $user = 'root';
    $pass = '';
    $dbname = 'blog';
    $host = 'localhost';

    try {
        $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
        $options = [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];
        $dbh = new PDO($dsn, $user, $pass, $options);

        return $dbh;
        
    } catch (PDOException $e) {
        print 'Error !: ' . $e->getMessage() . '<br/>';
        die();
    }
}


function getAllPosts() :array
{
    try {
        $query = 'SELECT id, title, LEFT(content, 100) as content, user, date FROM post';

        $req = getDBConnection()->query($query);
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $posts = $req->fetchAll();
        $req->closeCursor();
        
        return $posts;

    } catch (PDOException $e) {
        print 'Error !: ' . $e->getMessage() . '<br/>';
        die();
    }
}



function getOnePostByID($id) :array
{
    try {
        $query = 'SELECT * FROM post WHERE id=?';

        $request = getDBConnection()->prepare($query);
        $request->execute([$id]);
        $request->setFetchMode(PDO::FETCH_ASSOC);
        $post = $request->fetch();
        $request->closeCursor();

        $dbh = null;

        return $post;

    } catch (PDOException $e) {
        print 'Error !: ' . $e->getMessage() . '<br/>';
        die();
    }
}