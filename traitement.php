<?php

session_start();


$lettre = $_POST['lettre'];
var_dump($lettre);

//on vire les accents
  $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ', 'Ά', 'ά', 'Έ', 'έ', 'Ό', 'ό', 'Ώ', 'ώ', 'Ί', 'ί', 'ϊ', 'ΐ', 'Ύ', 'ύ', 'ϋ', 'ΰ', 'Ή', 'ή');
  $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o', 'Α', 'α', 'Ε', 'ε', 'Ο', 'ο', 'Ω', 'ω', 'Ι', 'ι', 'ι', 'ι', 'Υ', 'υ', 'υ', 'υ', 'Η', 'η');
$lettre= str_replace($a, $b, $lettre);



//mets les majuscules en miniscules
$lettre = strtolower($lettre);



//regex pour autoriser que les lettres de a à z
$masque="/([a-z])/";
$regex = preg_match($masque,$lettre);

//si on détecte que c'est pas entre a et z alors on transforme en ""
//surtout pour viré les / ; , etc.
if ($regex<>1){
    $lettre="";
}


//compte le nombre de fois qu'une lettre apparait dans un mot:
//si $occurence = 0 : la lettre n'apparait pas
//si $occurence >0 :  la lettre apparait autant de fois que la valeur de $occurrence
$occurence = substr_count($_SESSION['mot'],$lettre);


$lettreutilisee = substr_count($_SESSION['lettre'],$lettre);



//Test si la lettre apparait ET que la lettre entrée est bien une lettre d'un seul caractère ET qu'il reste des essais au joueur ET que la lettre n'est pas "" ET que la partie n'est pas gagné
//Cas où la lettre entrée existe dans le mot :
if (($occurence>0)&&(strlen($lettre)==1)&&($_SESSION['essai']<8)&&($lettre<>"")&&($_SESSION['victoire']==0)&&($lettreutilisee==0)){
    
    //$offset pour la position de la lettre (on la démarre à 0 pour la première lettre)
    $offset=0;
    
    //lettre détecté
    for($i=1; $i<=$occurence;$i++){
        //retourne la position de la lettre on démarre à $offset (à 0 pour le premier tour)
        $pos = strpos($_SESSION['mot'],$lettre,$offset);
        //on remplace dans le mot caché la lettre à la position $pos indiqué
        $_SESSION['motcache'] = substr_replace($_SESSION['motcache'],$lettre,$pos,1);
        //on "update" la valeur de  $offset pour faire commencer à la position suivant de la lettre précédement remplacée 
        $offset=$pos+1;
    }
    
    //on met à jour la liste des lettres essayer par le joueur
    $_SESSION['lettre']=$_SESSION['lettre'].$lettre."-";
    //on renvoie à index pour continuer le jeu
    header('Location: index.php');

 //Cas où la lettre entrée n'existe pas dans le mot :   
}Elseif(($occurence==0)&&(strlen($lettre)==1)&&($_SESSION['essai']<8)&&($lettre<>"")&&($_SESSION['victoire']==0)&&($lettreutilisee==0)){
    
    //le joueur perd un essai
    $_SESSION['essai']+=1;
    //on met à jour la liste des lettres essayer par le joueur
    $_SESSION['lettre']=$_SESSION['lettre'].$lettre."-";
    //on renvoie à index pour continuer le jeu
    header('Location: index.php');

//Cas où le joueur essait de continuer de jouer après qu'il a gagné ou perdu    
}Elseif(($_SESSION['victoire']==1)||($_SESSION['essai']>=8)){
    header('Location: index.php?changer');
    die();

//Cas où l'entrée a été sanitizé ou qu'il y a eu plusieurs lettres    
}Elseif(($_POST['lettre']=="")||(strlen($lettre)>1)){  
    header('Location: index.php');


}Elseif($lettreutilisee>=1){  
    header('Location: index.php');    
    
//Cas autre pas forcément prévu    
}Else{
    $_SESSION['essai']+=1;
    header('Location: index.php');
}