<?php
include("conn.php");
if(isset($_POST['comment'])){
    echo "sdfsdf";
    $comment = $_POST['comment'];
    $stmt = $conn->prepare("INSERT INTO `comment` (username, comment, pushed_time) VALUES (?,?,?)");
    $stmt->bind_param("sss", $_POST['username'], $comment, date("Y-m-d H:i:s",Time()));
    $stmt->execute();
    $stmt->close();
    Header("Location: comment.php");
}
?>

<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="col-md-6 col-md-offset-3" style="margin-top: 100px;">
            <div class="panel panel-default">
                <div class="panel-heading">留言框</div>
                <div class="panel-body">
                    <div>
                        <form action="comment.php" method="POST">
                            <div class="form-group">
                                <label for="">请留言</label>
                                <textarea name="comment" row="3" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input class="form-control" class="btn btn-primary pull-right" type="submit" value="留言">
                            </div>
                        </form>
                    </div>
                    <div>
                        <ul class="list-group">
                            <?php
                            $stmt = $conn->prepare("SELECT `username`,`comment`,`pushed_time` FROM `comment`");
                            $stmt->execute();
                            $stmt->bind_result($username, $comment, $pushed_time);
                            while ($stmt->fetch()) {
                                echo '<li class="list-group-item"><strong>' . $username . ': </strong>' . $comment . '</li>';
                            }
                            ?>
                        </ul>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
</body>
</html>