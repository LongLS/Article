<!DOCTYPE html>
<html>
<head>
    <title>List All</title>
</head>
    <body>
        <?php foreach ($posts as $post) : ?>
            <div>
                <img src="<?php echo $post['url_img'] ?>">
                <h2><?php echo $post['title'] ?></h2>
                <p><?php echo $post['content'] ?></p>
                <p><?php echo $post['time'] ?></p>
                <p><?php echo $post['tag'] ?></p>
            </div>
        <?php endforeach;?>
    </body>
</html>