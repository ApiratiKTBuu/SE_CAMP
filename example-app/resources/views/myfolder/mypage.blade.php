<html>
    <head>
        <style>
            html{
                color: white;
                background: rgb(32, 33, 36);
            }
            .submit-button{
                border: none;
                border-radius: 50px;
                background-color: #ffffff90;
                color: #ffffff;
                padding: 6px 12px;
                pointer-events: none;
            }
            .enable{
                pointer-events: auto;
                background-color: #000;
                cursor: pointer;
            }
            .container{
                width: 70%;
                max-width: 500px;
                height: 80%;
                margin: 0 auto;
                margin-top: 10%;
            }
        </style>
    </head>
    <h1>My Multiply table</h1>
    <div class="container">

    <form method="post" action="/my-multiply-table">
        @csrf
        <h2>Please enter the multiplier number :<h2>
        <input type="text" name="myinput" id="">
        <button type="submit" class="submit-button">Submit</button>
    </form>
    </div>
    <script>
        function init(){
            const input = document.querySelectorAll('input');
            const isFill = [...input].every(({value}) =>
            value.trim().length);
            const submit = document.querySelector('.submit-button');
            submit.classList.toggle('enable',isFill);
        }
        document.addEventListener('keyup',init,false);
    </script>
</html>
