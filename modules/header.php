<?php
session_start();
require_once 'data/fonctions.php';
require_once 'data/variables.php';
?>
<div id="header">
    <div class='content'>
        <div class="lienHeader"><a href="" class="fa fa-home"></a></div>
        <div class="lienHeader"><a href="" class="fa  fa-list"></a></div>
        <div class="TitreHeader"><h1 >
            <?php 
            if(isset($_GET['appli'])){
                echo GetTitre($_GET['appli']);
            }else{
                echo $titrePortail;
            }
            ?>
            </h1></div>
        <div class="profil">
            <?php
            if(isset($_SESSION['on'])){ // on hover, déploie le menu profil
                ?> 
            <div class="headeMenuProfil"><?php $_SESSION['Nom'] ?></div>
                <?php
            }else{
                ?>
            <a href="">Se connecter</a>
            <a href="">S'inscrire</a>
                <?php
            }
            ?>
        </div>
        <ul class="menuProfil" hidden>
            <li>Mon compte</li>
            <li>Mes appli</li>
            <li>Se déconnecter</li>
        </ul>
    </div>
</div>
<?php
if(isset($_SESSION['on']) && !$_SESSION['on']){
    ?>
    
<?php
}
?>