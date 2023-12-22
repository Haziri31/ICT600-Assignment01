<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale = 1">
        <title>My Profile</title>
        
        <!-- Design navigation bar -->
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity = "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin = "anonymous">
        <!-- Design page shortcut icon -->
        <link rel = "shortcut icon" href = "../images/icon.png">
        <!-- Design page layout -->
        <link rel = "stylesheet" href = "../css/style.css" type = "text/css">
    </head>

    <body>
        <?php
            // Insert header reference
            include ('header.php');
        ?>

        <div class = "outer">
            <div class = "profile">
                <br>
                <img src = "../images/me.jpg" class = "prof-image" alt = "me">
                <br><br>
                <ul class = "prof-list">
                    <li>Full Name : Hazeem Fitri Bin Ahmad Shaberi</li>
                    <li>Student No. : 2021614276</li>
                    <li>Programme : CS240</li>
                    <li>Group : 5B</li>
                </ul>
            </div>
        </div>

        <?php
            // Insert footer reference
            include ('footer.php');
        ?>
    </body>
</html>