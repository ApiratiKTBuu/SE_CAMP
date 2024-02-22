<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>JQUERY MULTIPY TABLE</title>
        <link rel="stylesheet" href="{{ url('assets/dist/css/my_table.css') }}">
        <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class="side-nav">
            <ul class="nav-links">
                <li><a href="#"><i class="fa-solid fa-table"></i><p>Multiplication table</p></a></li>
                <li><a href="#"><i class="fa-solid fa-user"></i><p>User</p></a></li>
                <li><a href="#"><i class="fa-solid fa-paperclip"></i><p>Project</p></a></li>
                <li><a href="#"><i class="fa-solid fa-user-graduate"></i><p>Advisor</p></a></li>
                <div class="active"></div>
            </ul>
        </div>
        <header>
            <img src="assets/dist/img/myimg/Img_OnlineExhibition_logo.png" class="logo">
            <p class="username-header" id="username">{{ Auth::user()->name }}</p>
        <nav class="navbar">
        </nav>
        <div id="hamberger-menu-container">
            <a href="#" id="menu-edit-user-data">edit user data</a><br> <a href="/logout"
            id="menu-logout">logout</a><br><a href="#" onclick="toggleHamberger()">CLOSE</a>
        </div>
        </header>
        <div class="table-container">
            <input type="text" id="number" placeholder="input number" onkeyup="multiplyFunction()">
            <button type="submit" id="Number-button" onclick="multiplyFunction()" >SUBMIT</button>

                <table><br><br><br>
                    <tbody id="my_tbody">

                    </tbody>
                </table>
            <form>

            </form>

        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            function multiplyFunction(){
                let my_number = parseInt($('#number').val());
                if($.isNumeric($('#number').val())){
                let my_code_tr = `<tr><th>Num1</th><th>Operator</th><th>Mult</th><th>#</th><th>Res</th></tr>`;

                for(let i = 1 ; i <= 24;i++){
                    let result = my_number * i;
                    my_code_tr += `<tr><td>${my_number}</td><td>x</td><td>${i}</td><td>=</td><td>${result}</td></tr>`;
                }
                $('#my_tbody').html(my_code_tr)
            }else{
                $('#my_tbody').html(`<h1>Please Input The Number!!<h1>`)
            }
            }
        </script>
        <script>
            let IsEnableHamberger_menu = false;
            $('#username').click(function(){
                if(IsEnableHamberger_menu == false){$('#hamberger-menu-container').css({
                    'display' : 'block'
                });
                IsEnableHamberger_menu = true;
                }else{
                    $('#hamberger-menu-container').css({
                    'display' : 'none'
                });
                IsEnableHamberger_menu = false;
                };
            });
            function toggleHamberger(){
                    $('#hamberger-menu-container').css({
                    'display' : 'none'
                });
                IsEnableHamberger_menu = false;
            }
        </script>
    </body>

</html>
