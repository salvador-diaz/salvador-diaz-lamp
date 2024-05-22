<?php declare(strict_types=1);

require_once "src/View.php";
require_once "src//models/Post.php";
require_once __DIR__."/../db.php";

/**
 * Controlador para funciones de posts
 */
class PostsController {
    
    public function index(): string {

        $db = DB::connect();
        $post = new Post($db);

        $posts = $post->getAll();
        
        $view = new View("posts/index", ["posts" => $posts]);
        return $view->render();
    }

    public function post(): string {

        $db = DB::connect();
        $post = new Post($db);

        $post = $post->getOne($_GET["id"]);
        
        $view = new View("posts/post", ["post" => $post]);
        return $view->render();
    }
}
