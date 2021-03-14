<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <title>XSS 취약한 페이지</title>
    </head>
    <h1> XSS 게시글 작성</h1>
    <body>
        <form method='get' action="board2.php">
            <p><input type="text" name="title"></p>
            <p><textarea name="str"></textarea></p>
            <p><input type="submit" value="제출"></p>
        </form>
    </body>
</html>
