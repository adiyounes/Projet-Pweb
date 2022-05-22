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
    <nav id="navbar" class="navbar">
        <?php
            include './nav.php';
        ?>
    </nav>
    <section id="contact">
        <div class="sponsors">
            <div class="s-container">
                <h2>Sponsors</h2>    
                <div class="wrapper">
                    <div class="s-slides">
                        <div class="s-slide"><img src="Logos/s2.png" alt="" height="75%" width="75%"></div>
                        <div class="s-slide"><img src="Logos/s3.png" alt="" height="75%" width="75%"></div>
                        <div class="s-slide"><img src="Logos/s4.png" alt="" height="75%" width="75%"></div>
                        <div class="s-slide"><img src="Logos/s5.png" alt="" height="75%" width="75%"></div>
                        <div class="s-slide"><img src="Logos/s6.png" alt="" height="50%" width="75%"></div>
                        <div class="s-slide"><img src="Logos/s7.png" alt="" height="50%" width="75%"></div>
                        <div class="s-slide"><img src="Logos/s8.png" alt="" height="50%" width="75%"></div>
                        <div class="s-slide"><img src="Logos/s1.png" alt="" height="75%" width="75%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="visiteus">
            <div>
                <h2>Suivez nous</h2>
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
                    <h2>Nous contacter</h2>
                    <hr>
                    <?php
                        $msg='';
                        if(isset($_GET['error']))
                        {
                            $msg = "SVP remplir les espaces vides ou service n'est pas desponible";
                            echo '<div class="alert alert-fail"><h3>'.$msg.'</h3></div>';
                        }
                        if(isset($_GET['seccuss']))
                        {
                            $msg = 'Votre message a été envoyé';
                            echo '<div class="alert alert-seccuss"><h3>'.$msg.'</h3></div>';
                        }
                    ?> 
                    
            </div>
            <div id="send" class="form-container">
                <form action="mail.php" method="post">
                    <input type="text" name="name" placeholder="Nom" class="form-control mb-2">
                    <input type="text" name="email" placeholder="Email" class="form-control mb-2">
                    <input type="text" name="phone" placeholder="Numero de Telephone" class="form-control mb-2">
                    <textarea name="message" class="form-control mb-2" placeholder="Message"></textarea>
                    <button class="btn btn-success" name="btn-send">Envoyer</button>
                </form>
            </div>
        </div>        
    </section>
    <script src="script.js"></script>

</body>
</html>