<?php 
    require_once('bin/function.php');

    $bdd = connect();

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $idProduit = $_GET['id'];

        
        $sql = "SELECT * FROM produit WHERE id = :id";
        $sth = $bdd->prepare($sql);
        $sth->bindParam(':id', $idProduit);
        $sth->execute();

        $produit = $sth->fetch(PDO::FETCH_ASSOC);
    }
?>

<?php require_once('bin/_header.php'); ?>

<div class="detproduct-main">
    <h1><?php echo $produit['Nom']; ?></h1>


    <div class="detproduct-main-element1">
        <img src="<?php echo $produit['Image']?>" alt="">

        <div class="detproduct-main-element1-content">
            
            <div class="detproduct-main-element1-content-box1">
                <p>
                <span class="important">Description du produit : <br></span>
                <?php echo $produit['Description']?></p>
            </div>

            <div class="detproduct-main-element1-content-box2">
                <p>Stock :<?php echo $produit['Stock']?></p>
            </div>
            
            <div class="detproduct-main-element1-content-box3">
                <p><?php echo $produit['Prix'];?>€</p>
            </div>
           
        </div>
        
    </div>
    <div class="detproduct-links">
        <a href="">Acheter</a>
    </div>
    

    

</div>
