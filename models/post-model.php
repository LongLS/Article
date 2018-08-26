<?php
/**
 * Created by PhpStorm.
 * User: longls
 * Date: 26/08/2018
 * Time: 18:47
 */
class PostModel {
    public function getPost() {
        $connect = mysqli_connect('localhost','root', '1', 'test_project');
        mysqli_set_charset($connect, 'utf8');

        if (mysqli_connect_error()) {
            echo 'COnnect error' . mysqli_connect_error();
        }

        $result = $connect->query('SELECT * FROM posts');

        $posts = array();

        if ($result->num_rows > 0) {
            while ($post = mysqli_fetch_assoc($result)) {
                $posts[] = $post;
            }
        }

        return $posts;
    }

    public function addPost($post) {
        $connect = mysqli_connect('localhost','root', '1', 'test_project');
        mysqli_set_charset($connect, 'utf8');

        if (mysqli_connect_error()) {
            echo 'COnnect error' . mysqli_connect_error();
        }

        $time = date('Y-m-d H:i:s');

        $result = "INSERT INTO `test_project` (`id`, `title`, `content`, `time`, `url_img`, `tag`) 
                  VALUES (NULL, '" . $post['title'] . "', '" . $post['content'] . "', '" . $time . "',
                  '" . $post['url_img'] . "', '" . $post['tag'] . "');";

        $sr = $connect->query($result);

        return $sr;
        /*if ($sr) {
            echo 'Success';
        }else {
            echo 'Fail';
        }*/
    }
}