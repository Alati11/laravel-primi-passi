<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <link rel="stylesheet" href="./css/app.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            }

            ul,
            ol,
            li,
        menu {
                list-style: none;
        }

        .container { 
            width:800px;
            height: 100px;
            margin: 0 auto;
            background-color: gray;

        }
        .menu {
            display: flex;
            justify-content: center;
            align-items: flex-end;
            gap: 30px;
        }

        .header-menu {
            font-size: 20px;
            margin-top: 30px;
            color: white;
        }
    </style>
    
</head>
<body>

    <div class="container">
        <header> 
            <ul class="menu">
                <li>
                    <a class ="header-menu" href="">Home</a>
                </li>
                <li>
                    <a class ="header-menu" href="contact">Contact</a>
                </li>
                <li>
                    <a class ="header-menu" href="#">About</a>
                </li>
                <li>
                    <a class ="header-menu" href="#">Academics</a>
                </li>
                <li>
                    <a class ="header-menu" href="#">Courses</a>
                </li>
                <li>
                    <a class ="header-menu"  href="#">News</a>
                </li>
            </ul>
        </header>
    </div>    

</body>
</html>