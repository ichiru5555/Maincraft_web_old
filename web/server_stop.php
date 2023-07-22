<?php
if(isset($_POST['stop'], $_POST['id'])){
    if(!$_POST['id'] === '0' or $_POST['id'] === '1' or $_POST['id'] === '2'){
        echo '不正です。';
        exit;
    }
    $cmd = escapeshellcmd('python3 ./cmd/seerver_stop.py '.$_POST['id']);
    $res = shell_exec($cmd);
    if(!$res === 'completion'){
        echo 'エラーが発生しました。';
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サーバー停止</title>
</head>
<body>
    <p>サーバーを停止します。</p>
    <form method="post">
        <p>ドメイン名: </p>
        <input type="hidden" name="stop">
        <input type="hidden" name="id" value="0">
        <input type="submit">
    </form>
    <form method="post">
        <p>ドメイン名: </p>
        <input type="hidden" name="stop">
        <input type="hidden" name="id" value="1">
        <input type="submit">
    </form>
    <form method="post">
        <p>ドメイン名: </p>
        <input type="hidden" name="stop">
        <input type="hidden" name="id" value="2">
        <input type="submit">
    </form>
</body>
</html>
