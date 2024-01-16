<html>
    <head>
        <style>
            html{
                color: white;
                background: rgb(32, 33, 36);
            }
            .multiply-table{
                width: 70%;
                max-width: 200px;
                height: 80%;
                margin: 0 auto;
                overflow: scroll;
            }
            .home-button{
                border: none;
                border-radius: 50px;
                background-color: #ffffff90;
                color: #ffffff;
                padding: 12px 24px;

            }
            .home-button:hover{
                background-color: #000000;
                cursor: pointer;
            }
            .home{
                width: 70%;
                max-width: 200px;
                height: 90%;
                margin: 0 auto;
            }
            ::-webkit-scrollbar-track
            {
                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0);
                background-color: #f5f5f500;
                border-radius: 10px;
            }

            ::-webkit-scrollbar
            {
                width: 16px;

                background-color: #f5f5f500;
            }

            ::-webkit-scrollbar-thumb
            {
                border-radius: 90px;
                background-color: #ffffff00;
                background-image: -webkit-gradient(linear,
                                                    40% 0%,
                                                    75% 84%,
                                                    from(#000000),
                                                    to(#ffffff00),
                                                    color-stop(.6,#969696))
            }

        </style>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        if(is_numeric($myinput)){
            echo"<h1>This is the multiply table of $myinput.</h1>";
            echo '<div class="multiply-table">
                    <table>';
        for($i = 1 ; $i<=24; $i++) {
                $sum = $myinput*$i;
                echo "
                <tboby>
                <tr>
                <td>$myinput</td>
                <td>x</td>
                <td>$i</td>
                <td>=</td>
                <td>$sum</td>
                </tr>
                </tbody>";}
                echo "</table></div>";
            }else{
                echo "<h1>Your input was invalid. Please input number.</h1>";

        }
?>
<div class="home">
<button type="button" class="home-button" id="btnHome" onClick="window.location.href = './my-multiply-table';">BACK</button>
</div>
</body>
    <footer>
    </footer>
</html>
<?php /**PATH C:\xampp\htdocs\SE_CAMP\example-app\resources\views/myfolder/MymultiplyTable.blade.php ENDPATH**/ ?>