<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion </title>
</head>
<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $error_msg = "";
    $msg_co = "";

    try {
        $bdd = new PDO("mysql:host=$servername;dbname=utilisateurs", $username, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['pass'];
        if ($email != "" && $password != "") {

            $hashed_password = md5($password);

            $req = $bdd->prepare("SELECT * FROM users WHERE email = :email AND mdp = :password");
            $req->execute(array('email' => $email, 'password' => $hashed_password));
            $rep = $req->fetch();
            if ($rep) {
                $msg_co = "Vous êtes connecté !";
            } else {
                $error_msg = "Email ou mot de passe incorrect";
            }
        }
    }
    ?>

    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="login-root">
            <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
            <div class="loginbackground box-background--white padding-top--64">
                <div class="loginbackground-gridContainer">
                <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
                    <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
                    </div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
                    <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
                    <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
                    <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
                    <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
                    <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
                    <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
                    <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
                    <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
                </div>
                </div>
            </div>
            <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
                <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
                <h1><a href="" rel="dofollow">Connexion</a></h1>
                </div>
                <div class="formbg-outer">
                <div class="formbg">
                    <div class="formbg-inner padding-horizontal--48">
                    <span class="padding-bottom--15">Connecter vous à votre compte</span>
                    <form id="stripe-login" method = "POST" action = "">
                        <div class="field padding-bottom--24">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                        </div>
                        <div class="field padding-bottom--24">
                        <div class="grid--50-50">
                            <label for="password">Password</label>
                            <div class="reset-pass">
                            <a href="#">Mot de passe oublié ?</a>
                            </div>
                        </div>
                        <input type="password" name="pass" id="pass">
                        </div>
                        <div class="field padding-bottom--24">
                        <input type="submit" name="ok" value="Continuer">
                        </div>
                    </form>
                    <?php
                        if($error_msg) {
                            ?>
                            <p><?php echo $error_msg; ?></p>
                            <?php
                        } else {
                            ?>
                            <p><?php echo $msg_co; ?></p>
                            <?php
                        }
                    ?>
                    </div>
                </div>
                <div class="footer-link padding-top--24">
                    <span>Vous n'avez pas de compte? <a href="inscription.php">Inscrivez-vous</a></span>
                    <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
                    <span><a href="#">© Rj-Industries</a></span>
                    <span><a href="#">Contact</a></span>
                    <span><a href="#">Privacy & terms</a></span>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>