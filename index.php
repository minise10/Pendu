<?php
    session_start();

    if(isset($_GET["changer"])){
        unset($_SESSION['mot']);
        unset($_SESSION['lettre']);
        unset($_SESSION['essai']);
        unset($_SESSION['victoire']);
        
    }
    
    if(!isset($_SESSION['lettre'])){
        $_SESSION['lettre']="";
    }
    
    if(!isset($_SESSION['essai'])){
        $_SESSION['essai']=0;
    }
    
    if(!isset($_SESSION['victoire'])){
        $_SESSION['victoire']=0;
    }
    
    
    if(!isset($_SESSION['mot'])){

        $dsn = "mysql:host=localhost:3306;dbname=blablalba";
        $dbuser = "useruserusuesu";
        $dbpass = "";

        try {

            $bdd = new PDO($dsn, $dbuser, $dbpass);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $bdd->exec("SET CHARACTER SET utf8");
        } 
        catch (PDOException $err) {
            echo " - ERREUR BDD : " . $err->getMessage();
            die();
        }

         $sql = "SELECT mot FROM mots ORDER BY RAND() LIMIT 1";
         $result = $bdd->query($sql);
         $_SESSION['mot'] = $result->fetchColumn();
         $_SESSION['motcache']="";
         for($i=1;$i<=strlen($_SESSION['mot']);$i++){
                    
            $_SESSION['motcache'].="_";
        }
            
  
    }
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
	<link rel="stylesheet" href="./css/style.css"/>
    <title>Pendu</title>
  </head>
  <body>
      
      <form method="post" action="traitement.php">
          <input type="text" name="lettre" autofocus></input>
        <input type="submit"></input>
      </form>  
    
      
        <?php
        $tentative = 8-$_SESSION['essai'];
            echo "<div id='mot'>".$_SESSION['motcache']."</div></br>";
            //echo $_SESSION['mot'];
            echo "ce mot a " .strlen($_SESSION['mot']). " lettres </br> ";
            echo "lettres déjà utilisées : ".$_SESSION['lettre']."</br>";
            echo "Tentatives restantes : ".$tentative."</br>";
            //echo "essaie: ".$_SESSION['essai']."</br>";
           
        ?>
      
      <p><?php if ($_SESSION['motcache'] == $_SESSION['mot']){
                echo "gagné !";
                $_SESSION['victoire']=1;
      }Elseif($_SESSION['essai']== 8){
                echo "perdu ! le mot était ".$_SESSION['mot'];
      }
      ?>
          
      </p>
      <?php echo "<p><img src ='img/pendu".$_SESSION['essai'].".png'></p>"; ?>
      <a href="index.php?changer">Changer de mot</a>
    <!-- jQuery -->
    <script
          src="https://code.jquery.com/jquery-3.3.1.min.js"
          integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
          crossorigin="anonymous">
    </script>
  </body>
</html>

    
