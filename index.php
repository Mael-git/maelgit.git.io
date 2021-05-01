<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>COMMANDE</title>
    </head>
    <body>
            <main>
                <p>Passez votre commande !</p>
                <div class="box">
                    <a href="#">
                        <img src="img/i2309-tacos-a-la-mexicaine.jpg" width="150px" height="150px">
                        <div class="descrip">
                            <label for="show">TACOS</label>
                        </div>
                    </a>
                </div>
                <div class="box">
                    <a href="#">
                        <img src="img/gettyimages-186820551-612x612.jpg" width="150px" height="150px">
                        <div class="descrip">
                        <label for="show">PIZZA</label>
                        </div>
                    </a>
                </div>
                <div class="box">
                    <a href="#">
                        <img src="img/nlKRwI08_400x400.jpg" width="150px" height="150px">
                        <div class="descrip">
                            <label for="show">POULET</label>
                        </div>
                    </a>
                </div>
                <div class="box">
                    <a href="#">
                        <img src="img/f.jpg" width="150px" height="150px">
                        <div class="descrip">
                            <label for="show">DIP<em style="color:red;">N</em>DIP</label>
                        </div>
                    </a>
                </div>
                <input type="checkbox" id="show">
                <div class="bg">
                    <div id="demo" class="modal">
                        <label for="show" class="close_btn">&times;</label>
                        <form id="demo" method="post" action="target.php">
                            <h1>Enregistrez-vous</h1>
                            <input type="text" name="pseudo" placeholder="Pseudo" required>
                            <input type="password" name="password" placeholder="Password" required>
                            <input type="submit" name="inscrire" value="S'inscrire">
                        </form>
                    </div>
                </div>
            </main>
    </body>
</html>
