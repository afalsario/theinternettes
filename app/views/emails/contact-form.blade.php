<?php

$name = Input::get('name');
$email = Input::get('email');
$phone = Input::get('phone');
$web = Input::get('web');
$message = Input::get('message');   

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contact Form</title>
    </head>
    <body>
        <h3>Hey, Internettes! We've got mail!</h3>

        <div>
            <p>
                Name: <?= $name; ?> <br>
                Email: <?= $email; ?> <br>
                Phone: <?= $phone; ?> <br>
                Web Address: <?= $web; ?> <br>
                Message: <?= $message; ?> <br>
            </p>
        </div>

    </body>
</html>