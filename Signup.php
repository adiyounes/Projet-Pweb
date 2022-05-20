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
                        <select name="Faculté">
                            <?php
                                $index = 0;
                                for($index=0;$index<count($faculties);$index++){
                                    echo "<option class='option' value='".$faculties[$index]."'>".$faculties[$index]."</option>";
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
                                for($index=0;$index<count($year);$index++){
                                    echo "<option class='option' value='".$year[$index]."'>".$year[$index]."</option>";
                                }
                            ?> 
                        </select>
                        <span class="select-btn">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </div>
                    <div class="form-row">
                        <select name="sp">
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
                                for($index=0;$index<count($sp);$index++){
                                    echo "<option class='option' value='".$sp[$index]."'>".$sp[$index]."</option>";
                                }
                            ?>
                        </select>
                        <span class="select-btn">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </div>
                    <div class="form-row">
                        <input type="text" name="email" id="email" class="input-text"  pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email" required>
                    </div>
                    <div class="form-row">
                        <input type="text" name="PhoneNumber" id="email" class="input-text"  pattern="[0-9.]+" placeholder="Numéro de Téléphone" required>
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
    </div>
</body>

</html>