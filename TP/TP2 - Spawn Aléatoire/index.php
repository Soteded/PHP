<html>
    <head>
    <?php
        $database_host = 'localhost';
        $database_port = '3306';
        $database_dbname = 'spawn';
        $database_user = 'root';
        $database_password = 'root';
        $database_charset = 'UTF8';
        $database_options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];

        $pdo = new PDO(
            'mysql:host=' . $database_host . 
            ';port=' . $database_port . 
            ';dbname=' . $database_dbname . 
            ';charset=' . $database_charset, 
            $database_user,
            $database_password,
            $database_options
        );?>
    </head>
    <body>
        <h1>Spawn Random</h1>
        <?php
            session_start();
            $alt = rand(3,6);
            if ($_SESSION['previous'] == $alt){
                while ($_SESSION['previous'] == $alt) {
                    $alt = rand(3,6);
                }
                $query = $pdo->prepare('SELECT * FROM spawn_ville WHERE id=?');
                $query->execute([$alt]);

                while ($spawn = $query->fetch()) {?>
                    <img src="images/<?=$spawn['img']?>" style="max-width:400px;max-height:400px;"/>
                    <br>
                    Nom de spawn : <?=$spawn['nom']?>;
                <?php }
            } else {
                $query = $pdo->prepare('SELECT * FROM spawn_ville WHERE id=?');
                $query->execute([$alt]);

                while ($spawn = $query->fetch()) {?>
                    <img src="images/<?=$spawn['img']?>" style="max-width:400px;max-height:400px;"/>
                    <br>
                    Nom de spawn : <?=$spawn['nom']?>
                <?php }
            $_SESSION['previous'] = $alt;
            }
        ?>
        <br>
        <br>
        <a href="javascript:window.location.reload()">Nouveau Spawn</a>
        <br>
        <br>
        <form action="" method="get" class="form-example">
            <div class="form-example">
                <label for="name">Nom de la ville : </label>
                <input type="text" name="name" id="nom_ville" required maxlength="22">
            </div>
            <div class="form-example">
                <label for="link">Photo de la ville : </label>
                <input type="text" name="name" id="image_ville" required>
            </div>
            <div class="form-example">
                <input type="submit" value="Ajouter !">
            </div>
            </form>
        <?php
            $spawn->exec('INSERT INTO spawn_ville(nom,img) VALUES(`nom_ville`,`image_ville`)');
        ?>
    </body>
</html>