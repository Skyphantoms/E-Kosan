<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>E-Kosan</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <form name="login" action="auth.php" method="post" onsubmit="" class="form">
                <h3 >E-Kosan</h3>
                <div class="input-box">
                    <input class="place-user" type="text" placeholder="username" required id="username" name="username">
                    <i class='bx bxs-user' ></i>
                </div>
                <div class="input-box">
                    <input class="place-pass" type="password" placeholder="password" required id="password" name="password">
                    <i class='bx bxs-lock' ></i>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </div>  
    
</body>
</html>