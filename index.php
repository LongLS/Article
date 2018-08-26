<?php
/**
 * Created by PhpStorm.
 * User: longls
 * Date: 26/08/2018
 * Time: 18:42
 */

$action = $_GET['action'];

require_once ('controllers/post-controller.php');

$postController = new PostController();

if ($action == 'list') {
    $postController ->getPost();
}

elseif ($action == 'add') {
    $postController->addPost();
}

elseif ($action == 'doAdd') {
    $postController->doAdd();
}
