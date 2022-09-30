<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メモ詳細</title>
</head>

<body>
    <?php
    require('dbconnect.php');
    $stmt = $db->prepare('select * from memos where id=?');
    if (!$stmt) {
        die($db->error);
    }
    $id = 11;
    $stmt->bind_param('i', $id);
    $stmt->execute();

    $stmt->bind_result($id, $memo, $created);
    $stmt->fetch();
    ?>

    <div><?php echo htmlentities($memo); ?></div>
</body>

</html>
