<?php
/**
 * Created by PhpStorm.
 * User: longls
 * Date: 26/08/2018
 * Time: 20:10
 */

class PostView {
    public function showAll($posts) {
        require_once ('./templates/posts.php');
    }

    public function fromAddPost() {
        require_once ('./templates/from-add-post.php');
    }

    public function notifyAddPost($status) {
        if ($status) {
            echo 'Add success, <<a href="http://localhost:8080/?action=list">Click back to Home</a>';
        } else {
            echo 'Add fail';
        }
    }
}