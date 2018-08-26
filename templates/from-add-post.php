<!DOCTYPE html>
<html>
<head>
    <title>Add Post</title>
</head>

<body>
<h2>Add Post</h2>
 <form action="?action = doAdd" method="post">
     <input type="text" name="title"/><br>
     Content of post
     <textarea name="content"></textarea>
     Url img
     <input type="text" name="url_img"/><br>
     Tag
     <input type="text" name="tag"/><br>
     <input type="submit" name="ok" value="Add">
 </form>
</body>
</html>