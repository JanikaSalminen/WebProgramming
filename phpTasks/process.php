<?php 
include 'header.php'; 
?>
<div class="article">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nimi = isset($_POST["nimi"]) ? $_POST["nimi"] : "";
        $sukunimi = isset($_POST["sukunimi"]) ? $_POST["sukunimi"] : "";

        echo "Hello " . $nimi . " " . $sukunimi . ", You are welcome to my site."; 
    }
    ?>
</div>
<?php include 'footer.php'; ?>

