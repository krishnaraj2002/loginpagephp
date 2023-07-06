<?php
session_start();

if (isset($_SESSION['uname'])) {

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Registration page</title>

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

    </style>

</head>
<body>
<div class="container">
    <div class="card">



        <h1>Success!<br><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
            </svg></h1>
        <a href="logoutas.php" class="btn btn-primary">Logout</a>


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
<?php
}
else{
    header("Location: login1.php");
    exit();
}
?>