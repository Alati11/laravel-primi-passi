<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academics</title>
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

        .container-title { 
            width:800px;
            height: 400px;
            margin: 100px auto;
            display:flex;
            justify-content:center;
            align-items: center;
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

        .title-home {
            color: #EE7600;
            font-size: 100px;
            margin-top: 30px;
        }
    </style>

</head>
<body>

    <div class="container">
        <header> 
            <ul class="menu">
                <li>
                    <a class ="header-menu" href="home">Home</a>
                </li>
                <li>
                    <a class ="header-menu" href="contact">Contact</a>
                </li>
                <li>
                    <a class ="header-menu" href="about">About</a>
                </li>
                <li>
                    <a class ="header-menu" href="academics">Academics</a>
                </li>
                <li>
                    <a class ="header-menu" href="courses">Courses</a>
                </li>
                <li>
                    <a class ="header-menu"  href="news">News</a>
                </li>
            </ul>
        </header>
    </div>    
    <div class="container-title">
        <h1 class="title-home">Academics</h1>
    </div>

</body>
</html>