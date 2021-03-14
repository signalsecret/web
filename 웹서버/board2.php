<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <title>모의해킹 : 게시판</title>
    </head>
    <h1>모의해킹 게시글</h1>
    <body>
        <?php
        echo htmlspecialchars($_GET['title']);
        echo '<br>';
        echo htmlspecialchars($_GET['str']);
        ?>
    </body>
</html>
