<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Login page</title>

    <style>
        *{
            margin: 0;
            padding: 0;

            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .container {
            width:100%;
            height: 100vh;
            background-image: url("photo.jpeg");
            background-position: center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card{
            width: 90%;
            max-width: 480px;
            height: auto;
            color: #fff;
            text-align: center;
            padding: 50px 35px;
            border: 1px solid rgba(255,255,255,0.3);
            background: rgba(255,255,255,0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0,0,0,0.1);
            backdrop-filter: blur(3px);
        }
        .card img{
            width: 140px;
            border-radius: 50%;
        }
        .card h1{
            font-size: 40px;
            font-weight: 600;
            margin-top: 20px;
        }

        .card .links img{
            width: 40px;
            border-radius: 50%;
            margin: 10px 5px;
            transition: background 0.5s;
        }
        .card .links img:hover{
            background: #ff01cf;
        }
        .error {
            background: #F2DEDE;
            color: #A94442;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
        }
        .btn{
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            font-weight: 500;
            background: #fff;
            color: #ff01cf;
            padding: 10px 30px;
            border-radius: 30px;
            margin: 30px 0 10px;
        }
        input{
            display: inline-block;
            padding: 5px 25px ;
            border-radius: 30px;
            margin-left: 0;
            font-size: 17px;
            color: black !important;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card">

        <img src="photo.jpeg">
        <h1>Login Page </h1><br>


        <div class="row">
            <form action="login.php" method="post">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error" style="">
                        <?php echo $_GET['error']; ?>s</p>
                <?php } ?>

                <div class="col-sm-4" style="height:50px;padding: 10px">

                    <label for="uname">Name</label>

                </div>
                <div class="col-sm-8">
                    <input type="text" name ="uname" id = "uname" placeholder=" Enter user Name"><br><br>
                </div>

                <div class="col-sm-4" style="height:50px;padding: 10px">
                    <label for="password">Password</label>

                </div>
                <div class="col-sm-8 ">
                    <input type="password" name ="password" id = "password" placeholder=" Enter password"><br><br>
                </div>
                <!--<div class="col-sm-12" style="margin:auto">
                    <input type="checkbox" name ="remember" id = "remember">
                    <label for="remember">Remember me</label>
                </div>-->
                <button type="submit" class = "btn btn-primary" id="submit" style="color:rgb(208, 24, 153)">submit</button>
            </form>
        </div>

        <!--<a href="#" type="submit" style="margin: 0;" class="btn">submit</a>-->


        <div class = "links">
            <a href="https://instagram.com/crazy_krishna370?igshid=YmMyMTA2M2Y="> <img src="insta.png"> </a>
            <a href="https://www.facebook.com/mersal.krishna.520"> <img src="facebook.png"> </a>
            <a href="https://www.linkedin.com/in/krishna-raj-b08214207"> <img src="linkedin1.png"> </a>
        </div>
    </div>

</div>
</body>
</html>