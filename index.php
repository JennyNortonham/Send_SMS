<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SMS with Twilio</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action="twilio.php" method="post">
            <h2>HTML Form to Send SMS with Twillio</h2>
            Enter Mobile your sending from:<br>
            <input type="text" placeholder="Mobile From" name="mobileFrom"><br><br>
            Enter Mobile your sending to:<br>
            <input type="text" placeholder="Mobile To" name="mobileTo"><br><br>
            Message<br>
            <textarea placeholder="Message" name="msg"></textarea><br><br>

            <input type="submit" value="Send">
        </form>
    </body>
</html>

