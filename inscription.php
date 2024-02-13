<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>inscription</title>
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
                <a href=""> <img src="/logo.png" alt="logo" class="logo"> </a>
                </div>
                <div class="formbg-outer">
                <div class="formbg">
                    <div class="formbg-inner padding-horizontal--48">
                    <span class="padding-bottom--15">Inscrivez-vous</span>
                    <form id="stripe-login" method = "POST" action = "traitement.php">
                        <div class="field padding-bottom--24">
                            <label for="nom">Nom*</label>
                            <input type="text" name="nom" id="nom" required>
                        </div>
                        <div class="field padding-bottom--24">
                            <label for="nom">Prenom*</label>
                            <input type="text" name="prenom" id="prenom" required>
                        </div>
                        <div class="field padding-bottom--24">
                            <label for="nom">Pseudo*</label>
                            <input type="text" name="pseudo" id="pseudo" required>
                        </div>                          
                        <div class="field padding-bottom--24">
                            <label for="email">Email*</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div class="field padding-bottom--24">
                        <div class="grid--50-50">
                            <label for="password">Password*</label>
                        </div>
                        <input type="password" name="pass" id="pass">
                        </div>
                        <div class="field padding-bottom--24">
                        <input type="submit" name="ok" value="M'inscrire">
                        </div>
                    </form>
                    </div>
                </div>
                <div class="footer-link padding-top--24">
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