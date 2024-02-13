<?php session_start();
 $id_session = session_id();

// print("Session Id: ".$id);
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title><?= $titre ?? "accueil"?></title> 
        <meta name="author" content="Julien Falconnet">
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <header>
            <img src="resoc.jpg" alt="Logo de notre réseau social"/>
            <nav id="menu">
                <a href="news.php">Actualités</a>
                <a href="wall.php?user_id=<?php  echo $_USER?>">Mur</a>
                <a href="feed.php?user_id=<?php echo $_USER?>">Flux</a>
                <a href="tags.php?tag_id=1">Mots-clés</a>
            </nav>
            <nav id="user">
                <a href="#">Profil</a>
                <ul>
                    <li><a href="settings.php?user_id=<?php $_USER?>">Paramètres</a></li>
                    <li><a href="followers.php?user_id=<?php $_USER?>">Mes suiveurs</a></li>
                    <li><a href="subscriptions.php?user_id=<?php $_USER?>">Mes abonnements</a></li>
                </ul>
            </nav>
        </header>
        <?php $_USER = ""?>
       
    <?php   
           /*
     
            $_session['alias'] = 'livai';
            $_session['email']  = 'livai@test.org';
                echo $_session['alias'];   

            if($id_session){
                echo ' ID de session (récupéré via session_id()) : <br>'
                .$id_session. '<br>';
            }
            echo '<br><br>';
            if(isset($_COOKIE['PHPSESSID'])){
                echo 'ID de session (récupéré via $_COOKIE) : <br>'
                .$_COOKIE['PHPSESSID'];
            }
        ?>
*/
        