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
            #var_dump($var_a);
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
    </body>
    </html>