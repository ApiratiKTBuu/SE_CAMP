<!doctype heml>
<html>
    <head>
        <title>Javascript 101</title>
    </head>
    <body>
        <h1>Javascript</h1>
        <button onclick="alert('Hello world')">Click Me!</button>
        <script>
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

            console.log(document.getElementByID('myh1').text);
        </script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\SE_CAMP\example-app\resources\views/welcome.blade.php ENDPATH**/ ?>