<?php
$domain = '';
$timeout = '0.5';
$je = ping($domain, '25565', $timeout);
$be = ping($domain, '19132', $timeout, true);
if($je){
    $message_je = '<div class="start">'.'サーバーは起動しているためアクセスできます。'.'</div>';
}else{
    $message_je = '<div class="stop">'.'サーバーは停止しているためアクセスできません。'.'</div>';
}
if($be){
    $message_be = '<div class="start">'.'サーバーは起動しているためアクセスできます。'.'</div>';
}else{
    $message_be = '<div class="stop">'.'サーバーは停止しているためアクセスできません。'.'</div>';
}
function ping($host, $prot, $timeout, $udp=false){
    $fs = @fsockopen($host, $prot, $error_code, $error_message, $timeout);
    if($udp === true){
        $fs = @fsockopen('udp://'.$host, $prot, $error_code, $error_message, $timeout);
    }
    if($fs){
        return true;
    }else{
        return false;
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイクラ状態</title>
    <style type="text/css">
        html{
            text-align: center;
            font-size: 25px;
        }
        .start{
            color: #33CC66;
        }
        .stop{
            color: #CC0000;
        }
    </style>
</head>
<body>
    <p>マインクラフトサーバーの状態を確認できます。</p>
    <p>Java版の状態</p>
    <p><?php echo $message_je;?></p>
    <p>統合版の状態</p>
    <p><?php echo $message_be;?></p>
</body>
</html>
