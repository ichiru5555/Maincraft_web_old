<?php
$res = shell_exec('python3 ./cmd/info.py');
$res = str_replace('True','有効',$res);
$res = str_replace('False','無効',$res);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サーバーの情報</title>
</head>
<body>
    <p>サーバーの情報を出します。</p>
    <?php echo $res?>
</body>
</html>
