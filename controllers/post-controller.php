<?php
/**
 * Created by PhpStorm.
 * User: longls
 * Date: 26/08/2018
 * Time: 18:43
 */

class PostController {

    public function getPost() {
        require_once ('./models/post-model.php');

        $postModel = new PostModel();
        $posts = $postModel ->getPost();

        require_once ('./views/post-view.php');
        $postView = new PostView();
        $postView ->showAll($posts);
    }

    public function addPost() {
        require_once ('./views/post-view.php');
        $postView = new PostView();
        $postView ->fromAddPost();
    }

    public function doAdd() {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $url_img = $_POST['url_img'];
        $tag = $_POST['tag'];

        $post = array(
            'title'  => $title,
            'content' => $content,
            'url_img' => $url_img,
            'tag' => $tag,
        );

        require_once ('./models/post-model.php');

        $postModel = new PostModel();
        $status = $postModel ->addPost($post);

        require_once ('./views/post-view.php');
        $postView = new PostView();
        $postView ->notifyAddPost($status);

        /*echo $title . '<br>';
        echo $content . '<br>';
        echo $url_img . '<br>';
        echo $tag . '<br>';*/
    }
}