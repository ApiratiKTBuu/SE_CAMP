<html>

<head>
    <link rel="stylesheet" href="./phpTest.css"/>
    <meta charset="utf-8">
</head>

<body>
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
<div class="container">
    <table>
        <tbody>
            <?php
            for($i = 1;$i<25;$i++){
                $sum = $multi_x * $i;

            echo "
            <tr>
                <td>$multi_x</td>
                <td>x</td>
                <td>$i</td>
                <td>=</td>
                <td>$sum</td>
            </tr>
            ";
            }
            ?>

        </tbody>
    </table>
        </div>
    <style>
        
    </style>
</body>

</html>