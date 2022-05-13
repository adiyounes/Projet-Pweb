<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <title>Contact</title>
</head>
<body>
    <nav id="navbar" class="navbar"></nav>
    <section id="contact">
        <div class="visiteus">
            <div>
                <h2>Visite Us</h2>
                <hr>
            </div>
            <div class="contact-container">
                <div class="social facebook">
                    <a href="https://web.facebook.com/Micro.Club.USTHB">
                        <img src="images/Facebook-logo.png" alt="">
                    </a>
                </div>
                <div class="social instagram">
                    <a href="https://www.instagram.com/microclub_usthb/">
                        <img src="images/Instagram_logo_2016.svg.png" alt="">
                    </a>
                </div>
                <div class="social linkedin">
                    <a href="https://www.linkedin.com/in/micro-club-usthb/">
                        <img src="images/LinkedIn_logo_initials.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                    <h2>contact us</h2>
                    <hr>
                    <?php
                        $msg='';
                        if(isset($_GET['error']))
                        {
                            $msg = 'please fill in the blanks';
                            echo '<div class="alert-fail"><h3>'.$msg.'</h3></div>';
                        }
                        if(isset($_GET['seccuss']))
                        {
                            $msg = 'your message is sent';
                            echo '<div class="alert-seccuss">'.$msg.'</div>';
                        }
                    ?> 
                    
            </div>
            <div class="form-container">
                <form action="mail.php" method="post">
                    <input type="text" name="name" placeholder="Name" class="form-control mb-2">
                    <input type="text" name="email" placeholder="Email" class="form-control mb-2">
                    <input type="text" name="phone" placeholder="Phone Number" class="form-control mb-2">
                    <textarea name="message" class="form-control mb-2" placeholder="Message"></textarea>
                    <button class="btn btn-success" name="btn-send">Submit</button>
                </form>
            </div>
        </div>        
    </section>
    <script src="script.js"></script>

</body>
</html>