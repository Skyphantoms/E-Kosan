
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/style/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>E-Kosan</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <form name="login" action="register" method="post" onsubmit="" class="form">
                <h3 >E-Kosan</h3>
                <div class="input-box">
                    <input class="place-user" type="text" placeholder="Username" required id="username" name="username">
                    <i class='bx bxs-user' ></i>
                </div>
                <div class="input-box">
                    <input class="place-pass" type="password" placeholder="Password" required id="password" name="password">
                    <i class='bx bxs-lock' ></i>
                </div>
                <div class="input-box">
                    <input class="place-email" type="email" placeholder="Email" required id="email" name="email">
                    <i class='bx bx-envelope'></i>
                </div>
                <button type="submit" class="btn">Register</button>
                <p>Sudah punya akun ?<a href="login">Masuk</a></p>
            </form>
        </div>
    </div>  
    
</body>
</html>