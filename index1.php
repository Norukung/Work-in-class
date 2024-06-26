<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>work in class 610-13</title>
</head>
<body>
    <form method="GET">
            คะแนนทีม ฝรั่งเศส : <input type="text" name="score1"><br>
            คะแนนทีม โปแลนด์ : <input type="text" name="score2"><br>
        <input type="submit" value="ตกลง"><input type="reset" value="ยกเลิก">
    </form>
    <?php
        $score1=$_GET["score1"];
        $score2=$_GET["score2"];
        if ($score1 == $score2) {
            echo 'เสมอ';
        } if ($score1 < $score2) {
            echo 'ฝรั่งเศส แพ้';
        } if ($score1 > $score2) {
            echo 'ฝรั่งเศส ชนะ';
        }
    ?>

    
</body>
</html>