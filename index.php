<?php
session_start();
$persinf[] = $_SESSION['persinf'];
print_r($persinf);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Недвижимость</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="shortcut icon" href="resources/favicon.ico" type="image/x-icon">
        <style>
            html{background-color: #4f4f4f;}
            .main_conteiner{width: 80%; 
                            max-width: 1200px;
                            min-width: 600px;
                            background-color: red; 
                            height: 100px; 
                            margin: auto;
                            border-style: solid;
                            border-color: black;

            }
            header{height: 15%;
                   max-height: 200px;
                   min-height: 100px;
                   align-items: flex-start;
                   /*background: linear-gradient(to bottom, #228B22, transparent);*/                   
            }            
        </style>
    </head>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script type="text/javascript">
        window.jQuery || document.write("<script type=\"text/javascript\" src=\"js/jquery-2.2.2.min.js\"><\/script>");
    </script>
    <body>
        <!--<header><img src="resources/logo.png" width="120pt" height="120pt"></header>-->

        <table class="main_conteiner">            
            <tr>
                <td><div id="panel1"><a href="pages/login_page.php">Логин</a></div></td>
                <td><div id="panel2"><a href="pages/signup.php">Регистрация</a></div></td>
            <a href="pages/signup.php"></a>
                <td><div id="panel3"></div></td>
            </tr>
        </table>        
    </body>
</html>