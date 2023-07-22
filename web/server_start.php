<?php
if(isset($_POST['start'], $_POST['id'])){
    if(!$_POST['id'] === '0' or $_POST['id'] === '1' or $_POST['id'] === '2'){
        echo '不正です。';
        exit;
    }
    $cmd = 'python3 ./cmd/seerver_start.py '.escapeshellcmd($_POST['id']);
    $res = shell_exec($cmd);
    if(!$res === 'completion'){
        echo 'エラーが発生しました。';
        exit;
    }
    echo '<div class="start">';
    echo '<p>サーバーを起動します。</p>';
    echo '</div>';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サーバーを起動</title>
</head>
<body>
    <p>サーバーを起動します。</p>
    <form method="post">
        <p>ドメイン名: </p>
        <input type="hidden" name="start">
        <input type="hidden" name="id" value="0">
        <input type="submit">
    </form>
    <form method="post">
        <p>ドメイン名: </p>
        <input type="hidden" name="start">
        <input type="hidden" name="id" value="1">
        <input type="submit">
    </form>
    <form method="post">
        <p>ドメイン名: </p>
        <input type="hidden" name="start">
        <input type="hidden" name="id" value="2">
        <input type="submit">
    </form>
</body>
</html>
