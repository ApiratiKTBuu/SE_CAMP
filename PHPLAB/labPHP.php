<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./phpStyles.css">
</head>
<body>
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    
    <div class="Multiply-table">
    <table>
           
            <?php 
                for($i = 1 ; $i <= 24;$i++){
                $sum = $i*$multi_x;
                echo"<tbody>
                    <tr>
                        <td>$multi_x</td>
                        <td>x</td>
                        <td>$i</td>
                        <td>=</td>
                        <td>$sum</td>
                    </tr></tbody>";
                
            
                }
            ?>
    
        
    </table>
            </div>
</body>

</html>