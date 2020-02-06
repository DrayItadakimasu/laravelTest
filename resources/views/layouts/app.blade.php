<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEST</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class='navigation-line'>
        <div class="container">
            <a class="logo" href="#">
                <img src="images/logo.png" alt="">
            </a>
            <div class="menu">
                <ul>
                    <li><a href="#">Контакты</a></li>
                    <li><a href="#">О нас</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    
    @yield('content')

    <footer>
        <img src="images/logo.png" alt="">
    </footer>
</body>
</html>