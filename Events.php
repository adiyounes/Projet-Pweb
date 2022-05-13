<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="events.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <title>Events</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db";

    $connect = new mysqli($servername, $username, $password,$database);
    
    if($connect){}
    else
    {
        die ("connect failed: %s \n".$connect -> error);
    }
    $query="SELECT eventdesc FROM events";
    $result=mysqli_query($connect, $query);
    if(mysqli_num_rows($result)>0)
    {   
        $description=array();
        while($row = mysqli_fetch_array($result)){
            $description[]=$row['eventdesc'];
        }
    }
    $query="SELECT eventName FROM events";
    $result=mysqli_query($connect, $query);
    if(mysqli_num_rows($result)>0)
    {   
        $eventName=array();
        while($row = mysqli_fetch_array($result)){
            $eventName[]=$row['eventName'];
        }
    }

    ?>
    <nav id="navbar" class="navbar"></nav>
    <section id="events-section">
        <div class="Red-Hat-container">
            <div class="left-container">
                <div class="logo-container">
                    <div class="image-container">
                        <img src="images/Events/Red-Hat.png" alt="">
                    </div>
                    <div class="txt-container">
                        <h2>Red Hat Training Camp</h2>
                    </div>
                </div>
            </div>
            <div class="right-container">
                <?php
                    echo "<h2>".$eventName[0]."</h2>";
                ?> 
                <?php
                    echo "<p>".$description[0]."</p>";
                ?>
            </div>
        </div>
        <div class="MCTF-container">
            <div class="left-container">
                <div class="logo-container">
                    <img src="images/Events/MCTF.png" alt="MCTF">
                </div>
            </div>
            <div class="right-container">
                <div class="title-container">
                <?php
                    echo "<h2>".$eventName[1]."</h2>";
                ?> 
                </div>
                <div class="text-container">
                    <?php
                        echo "<p>".$description[1]."</p>";
                    ?>
                </div>
            </div>
        </div>
        <div class="AGC-container">
            <div class="up-container">
                <div class="title-container">
                <?php
                    echo "<h2>".$eventName[2]."</h2>";
                ?> 
                </div>
                <div class="logo-container">
                    <img src="images/Events/AGC.jpg" alt="" width="100px" height="100px">
                </div>
            </div>
            <div class="down-container">
                <div class="left">
                <?php
                        echo "<p>".$description[2]."</p>";
                    ?>
                </div>
                <div class="right">
                    <h3>
                        Le but d’Algeria Game Challenge:
                    </h3>
                    <ul>
                        <li>
                            <p>◆ Lancer les participants dans un processus d’exploration du
                                métier de développement du jeu vidéo,
                            </p>
                        </li>
                        <li>
                            <p>
                                ◆ Permettre à la communauté de développeurs de jeux vidéo
                                d’échanger et de se structurer,
                            </p>
                        </li>
                        <li>
                            <p>
                                ◆ Encourager et faciliter le développement de studios émergents,
                            </p>
                        </li>
                        <li>
                            <p>
                                ◆ Soutenir la pérennité et faciliter l’expansion des développeurs de
                                jeux vidéo établis,
                            </p>
                        </li>
                        <li>
                            <p>
                                ◆ Permettre une représentation culturelle, commerciale et média-
                                tique plus forte.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="alg-dis-container">
            <div class="left-container">
                <div class="txt-container">
                    <?php
                    echo "<h2>".$eventName[3]."</h2>";
                    ?> 
                    <?php
                        echo "<p>".$description[3]."</p>";
                    ?>
                </div>
                <div class="logo-container">
                    <img src="images/Events/AlgeriaDisrupt.png" alt="">
                </div>
            </div>
            <div class="right-container">
                <div class="logo-container">
                    <h2>ALGERIA 2.0</h2>
                </div>
                <div class="txt-container">
                    <?php
                         echo "<h2>".$eventName[4]."</h2>";
                    ?> 
                    <?php
                        echo "<p>".$description[4]."</p>";
                    ?>
                </div>
            </div>
        </div>
        <div class="winter-hacks">
            <?php
                echo "<h2>".$eventName[5]."</h2>";
            ?> 
            <?php
                echo "<p>".$description[5]."</p>";
            ?>
        </div>
    </section>
</body>

<script src="script.js"></script>

</html>