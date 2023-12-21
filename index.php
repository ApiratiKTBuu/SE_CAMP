<html>
    <body>
        <h1> this is PHP <?php echo 'Hello User';?></h1>
        <div>
            <p>1</p>
            <?php
            $var_a = 1;
            $var_a = "1$var_a";
            print_r($var_a);
            echo "<br>";
            var_dump($var_a);
            echo "<br>";
            echo $var_a + "2";
            echo "<br>";
            echo $var_a . "2";
            $arry = [];
            $arry[] = 1;
            $arry[] = 2;
            $arry[0] = 3;
            echo "<br>";
            print_r($arry);
            for($i = 0;$i < sizeof($arry);$i++)

            { 
                # die;
                // die;
                /*
                die;
                */
                echo "<h1> my h1 </h1>"
                ?>
                <p>2</p>
                <?php
            }
            ?>
            <p>3</p>
        </div>
        <h1><?php echo "Hello world<br><br>"; ?></h1>
        <?php echo "<h1>Hello world<br><br></h1>"; ?>
        <?php $var_a = "SE CAMP" ?>
        <?php echo $var_b = 'Hello $var_a' ?>
        <br>
        <?php echo $var_c = "Hello $var_a" ?>   
        <br>
        <?php 
            $var_c = $var_b = '1';
            $var_c = '1';
            echo $var_b <=> $var_c;
            echo "<br>";
            if($var_b === $var_c){
                // true
                echo '$var_b === $var_c';
            }else if ($var_b <> $var_c){
                // true
                echo '$var_b <> $var_c';
            }else{
                // false
                echo 'else';
            }
        ?>
        <br>
        <?php echo $var_c = 4; ?>
        <br>
        <?php 
            echo $var_c; 
            echo "<br>";
            switch($var_c){
                case 1:
                    echo "1";
                    break;
                case 2:
                    echo "2";
                    break;
                default:
                echo "default";
            }
            echo "<br>";

            $arry = array(1, 2, 3, 4);
            $arry1 = [1, 2, 3];
            $arry2[] = 1;
            $arry2[] = 2;
            $arry2[] = 3;
            $arry2[] = "Hello";
            $arry2['SE'] = "world";
            ?>
            <?php print_r($arry); ?> 
            <pre><?php print_r($arry); ?> </pre>
            <pre><?php print_r($arry1); ?> </pre>
            <pre><?php print_r($arry2); ?> </pre>
            <?php for($i = 0; $i < count($arry2);$i++){
                ?>
                <h3><?php echo $arry2[$i]; ?> </h3>
                <?php
            }
            ?>

            <?php foreach( $arry2 as $key => $value) { ?>
                <h3><?php echo $arry2[$key]; ?> : <?php echo "KEY: $key";?> : <?php echo "Value: $value"; ?></h3>
            
            <?php } ?>

            <?php 
            pRe($arry);
            
            ?>


            <?php 
            function pre($value){
                echo "<pre>";
                print_r($value);
                echo "</pre>";
            }
            ?>


        <form action="" method="post">
            <input type="text" name = "my_val" />
            <button type=""submit>บันทึก</button>

        </form>
        <h1><?php 
            print_r($_REQUEST);
            if(isset($_POST['my_val'])){
            echo $_POST['my_val'];
        } ?></h1>


        
    </body>
    </html>