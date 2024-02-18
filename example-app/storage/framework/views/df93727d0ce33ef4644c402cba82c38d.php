<!doctype html>
<html>
    <head>
        <title>Javascript 101</title>
    </head>
    <body>
        <h1>Prepend</h1><h1 id="myh1">Javascript</h1><h1>Append</h1>
        <button onclick="alert('Hello world')">Click Me!</button>
        <input type="text" id="my_number">
        <button type="submit" onclick="myFunction()" >submit number</button>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                console.log("Hello world - document.ready");
                console.log($('#myh1').text());
                console.log($('#my_number').val());
                $('#myh1').text("Javascript 101");
                $('#my_number').val(100);
            })
            function myFunction(){
                let my_number = parseInt($('my_number').val());
                for(let i = 0 ; i < my_number;i++){
                    $('#myh1').after(`<h1 class="my_gen_number">${i}</h1>`)
                }
                console.log($('#my_number').val());
                console.log(document.getElementById('my_number').value);
                console.log("Click submit number");
                $('my_gen_number').each(function(val){
                   $(val).remove();
                })

            }
            console.log("Hello world")
            let myval;
            myval = '10';
            myval2 = '2';
            console.log(myval, myval2);
            myval3 = parseInt(myval) + parseInt(myval2);
            console.log(myval3);
            myval3 = myval + myval2;
            console.log(myval3);
            myval3 = myval - myval2;
            console.log(myval3);
            myval3 = myval * myval2;
            console.log(myval3);
            myval3 = myval / myval2;
            console.log(myval3);
        </script>
        <script>
            let myval4 = [1, 2, 3, 4];

            myval4[5] = 5;
            myval4[6] = [6, 5, 4, 5, 8];
            console.log(myval4);

            for(i = 0; i < myval4.length; i++){
                console.log("In For",myval4[i],"Index=>", i);
            }

            myval4.forEach(function(value, index){
                console.log("In ForEach", value ,"Index=>",index);
            });

            console.log(document.getElementById("myh1"));
        </script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\SE_CAMP\example-app\resources\views/welcome.blade.php ENDPATH**/ ?>