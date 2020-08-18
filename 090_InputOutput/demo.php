<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fail {
            color: red;
        }
        .pass {
            color: lightgreen;
        }
    </style>
</head>
<body>
    <?php
        $scoreList = array(100, 98, 50, 95);
    ?>
    <ul>
        <?php foreach($scoreList as $score) { ?>
            <!-- <li>:D</li> -->
            <li><?php echo ":D&nbsp($score)"; ?></li>
            <!-- <li><?= $score; ?></li> -->
        <?php } ?>
    </ul>
    <hr>
    <ul>
        <?php foreach($scoreList as $score) { ?>
            <?php if($score < 60) { ?>
                <li class="fail"><?php echo ":D&nbsp($score)"; ?></li>
            <?php } else { ?>
                <li class="pass"><?php echo ":D&nbsp($score)"; ?></li>
            <?php } ?>
        <?php } ?>
    </ul>
    <hr>
    <ul>
        <?php foreach($scoreList as $score) { ?>
            <li class="<?php echo ($score < 60) ? "fail" : "pass"; ?>"><?php echo ":D&nbsp($score)"; ?></li>
        <?php } ?>
    </ul>
</body>
</html>