<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Signup.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <title>Inscription</title>
</head>

<body class="form">
    <nav id="navbar" class="navbar">
        <?php
        include './nav.php';
        ?>
    </nav>
    <div class="page-content">
        <h2>Inscription</h2>
        <div class="form-content">
            <?php
            include './dbconnect.php';
            $query = "SELECT facultyName FROM facultés order by facultyid";
            $result = mysqli_query($connect, $query);
            if (mysqli_num_rows($result) > 0) {
                $faculties = array();
                while ($row = mysqli_fetch_array($result)) {
                    $faculties[] = $row['facultyName'];
                }
            }

            $query1 = "SELECT year FROM Year order by yearid";
            $result = mysqli_query($connect, $query1);
            if (mysqli_num_rows($result) > 0) {
                $year = array();
                while ($row = mysqli_fetch_array($result)) {
                    $year[] = $row['year'];
                }
            }

            $msg = '';
            if (isset($_GET['error'])) {
                $msg = 'Numéro de telephone ou matriclue utilisée';
                echo '<div id="alert" class="alert alert-fail"><h3>' . $msg . '</h3><a onclick="document.getElementById(`alert`).style.display=`none`"><i class="fas fa-window-close"></i></a></div>';
            }
            if (isset($_GET['seccuss'])) {
                $msg = 'Inscription success';
                echo '<div id="alert" class="alert alert-seccuss"><h3>' . $msg . '</h3><a onclick="document.getElementById(`alert`).style.display=`none`"><i class="fas fa-window-close"></i></a></div>';
            }
            ?>
            <form class="form-detail" action="./register.php" method="post" id="myform">
                <div class="form-left">
                    <h2>Infomations Générales</h2>
                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="first_name" id="first_name" class="input-text" placeholder="Prénom" required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="last_name" id="last_name" class="input-text" placeholder="Nom" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <input type="txt" name="Matricul" class="Matricul" id="Matricul" pattern="[0-9.]+" placeholder="Matricul" required>
                    </div>
                    <div class="form-row">
                        <select name="Faculté" id="faculté" onchange="fetch(this.value)">
                            <?php
                            $index = 0;
                            for ($index = 0; $index < count($faculties); $index++) {
                                echo "<option class='option' value='" . $faculties[$index] . "'>" . $faculties[$index] . "</option>";
                            }
                            ?>
                        </select>
                        <span class="select-btn">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </div>
                    <div class="form-row">
                        <select name="Annee">
                            <?php
                            $index = 0;
                            for ($index = 0; $index < count($year); $index++) {
                                echo "<option class='option' value='" . $year[$index] . "'>" . $year[$index] . "</option>";
                            }
                            ?>
                        </select>
                        <span class="select-btn">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </div>
                    <div class="form-row">
                        <select name="sp" id="sp">
                            <?php
                            $query2 = "SELECT spName FROM spécialités order by spid";
                            $result = mysqli_query($connect, $query2);
                            if (mysqli_num_rows($result) > 0) {
                                $sp = array();
                                while ($row = mysqli_fetch_array($result)) {
                                    $sp[] = $row['spName'];
                                }
                            }

                            $index = 0;
                            for ($index = 0; $index < count($sp); $index++) {
                                echo "<option class='option' value='" . $sp[$index] . "'>" . $sp[$index] . "</option>";
                            }
                            ?>
                        </select>
                        <span class="select-btn">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </div>
                    <div class="form-row">
                        <input type="text" name="email" id="email" class="input-text" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email" required>
                    </div>
                    <div class="form-row">
                        <input type="text" name="PhoneNumber" id="email" class="input-text" pattern="[0-9.]+" placeholder="Numéro de Téléphone" required>
                    </div>
                </div>
                <div class="form-right">
                    <h2>Les motivations et les objectives</h2>
                    <div class="form-row">
                        <input type="text" name="motives" id="motives" class="input-text" placeholder="Motivations" required>
                    </div>
                    <div class="form-row">
                        <input type="text" name="objectives" id="objectives" class="input-text" placeholder="Objectives" required>
                    </div>
                    <div class="form-row-last">
                        <input type="submit" name="register" class="register" value="Inscrire">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="stats">
        <h2>Statistiques</h2>
        <div class="parfac">
            <h2>Statistique par faculté</h2>
        <table id="stat">
            <tr>
                <th style="text-align: center">Faculté</th>
                <th style="text-align: center">Pourcentage</th>
                <th style="text-align: center">Nombres</th>
            </tr>

            <?php
            function pourcentage($x, $y)
            {
                return ($x * 100) / $y;
            }


            $querynbF = "SELECT COUNT(*) FROM facultés";
            $resultnbF = mysqli_query($connect, $querynbF);
            $nbF = array();
            $nbF = mysqli_fetch_array($resultnbF);

            $index = 0;

            $queryALL = "SELECT COUNT(*) FROM utilisateur";
            $resultALL = mysqli_query($connect, $queryALL);
            $nbtot = array();
            $nbtot = mysqli_fetch_array($resultALL);

            $tot = $nbtot[0];


            for ($index = 0; $index < $nbF[0]; $index++) {
                $queryF = "SELECT facultyName FROM facultés order by facultyid";
                $resultF = mysqli_query($connect, $queryF);

                if (mysqli_num_rows($resultF) > 0) {
                    $fac = array();
                    while ($row = mysqli_fetch_array($resultF)) {
                        $fac[] = $row['facultyName'];
                    }
                }

                $queryC = "SELECT COUNT(*) FROM utilisateur WHERE faculté='" . $fac[$index] . "'";
                $resultC = mysqli_query($connect, $queryC);
                if (!$resultC) {
                } else {
                    $nb = array();
                    while ($row = mysqli_fetch_array($resultC)) {
                        $nb[] = $row['COUNT(*)'];
                    }


                    $rs = pourcentage($nb[0], $tot);
                    echo "<tr>
                            <td>" . $fac[$index] . "</td>
                            <td>" . $rs . "</td>
                            <td>" . $nb[0] . "</td>
                        </tr>";
                }
            }
            ?>
        </table>
        </div>
        <div class="parfac parannee">
            <h2>Statistique par Année d'étude</h2>
        <table id="stat">
            <tr>
                <th style="text-align: center">Année d'étude </th>
                <th style="text-align: center">Pourcentage</th>
                <th style="text-align: center">Nombres</th>
            </tr>

            <?php
            function pourcentage1($x, $y)
            {
                return ($x * 100) / $y;
            }


            $querynbY = "SELECT COUNT(*) FROM year";
            $resultnbY = mysqli_query($connect, $querynbY);
            $nbY = array();
            $nbY = mysqli_fetch_array($resultnbY);

            $index = 0;

            $queryALL = "SELECT COUNT(*) FROM utilisateur";
            $resultALL = mysqli_query($connect, $queryALL);
            $nbtot = array();
            $nbtot = mysqli_fetch_array($resultALL);

            $tot = $nbtot[0];


            for ($index = 0; $index < $nbY[0]; $index++) {
                $queryY = "SELECT year FROM year order by yearid";
                $resultY = mysqli_query($connect, $queryY);

                if (mysqli_num_rows($resultY) > 0) {
                    $year = array();
                    while ($row = mysqli_fetch_array($resultY)) {
                        $year[] = $row['year'];
                    }
                }

                $queryYY = "SELECT COUNT(*) FROM utilisateur WHERE year='" . $year[$index] . "'";
                $resultYY = mysqli_query($connect, $queryYY);
                if (!$resultYY) {
                } else {
                    $nb = array();
                    while ($row = mysqli_fetch_array($resultYY)) {
                        $nb[] = $row['COUNT(*)'];
                    }


                    $rs = pourcentage1($nb[0], $tot);
                    echo "<tr>
                            <td>" . $year[$index] . "</td>
                            <td>" . $rs . "</td>
                            <td>" . $nb[0] . "</td>
                        </tr>";
                }
            }
            ?>
        </table>
        </div>
        
    </div>
</body>

</html>