<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソートする配列を代入
        $nums = [15, 4, 18, 23, 10 ];
        function sort_2way ($array , $order) {
            if ($order === true) {
                echo '昇順にソートします';
                echo '<br>';
                sort($array);
                foreach ($array as $value) {
                    echo $value;
                    echo '<br>';
                }
            }else {
                echo '降順にソートします';
                echo '<br>';
                rsort($array);
                foreach ($array as $value) {
                    echo $value;
                    echo '<br>';
                }
            }
        }
                sort_2way($nums,true);
                sort_2way($nums,false);
        ?>
    </p>
</body>

</html>