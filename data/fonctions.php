<?php
function connect(){
    
}
function GetTitre($idAppli){
    $bdd=connect();
    $sql="SELECT Libelle frome app where idApp=".$idAppli;
    $rqt=$bdd->query($sql);
    if($rqt){
        $rst=$rqt->fetch("PDO::FETCH_ASSOC");
        return $rst['Libelle'];
    }
}