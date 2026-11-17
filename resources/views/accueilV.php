<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Brit Hôtel - Accueil</title>
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>">
</head>
<body>
<div id="pagewidth">

    <div id="header"><img src="<?php echo asset('images/logo.png'); ?>" alt="Brit Hotel" height="60"></div>

    <div id="leftcol">
        <h2>Menu</h2>
        <ul>
            <?php include('menuV.php'); ?>
        </ul>
    </div>

    <div id="maincol">

        <?php if (session('success')): ?>
            <div style="color: green; padding: 10px; margin-bottom: 15px; border: 1px solid green; background-color: #e6ffe6;">
                <?php echo session('success'); ?>
            </div>
        <?php endif; ?>

        <h2>Bienvenue chez Brit Hôtel</h2>
        <p>Découvrez nos <?php echo $nbHotels; ?> hôtels en Bourgogne et en Rhône-Alpes.</p>

        

        <h3>Nos hôtels à la une</h3>
        <?php foreach ($lesHotels as $unHotel): ?>
            <div style="margin-bottom: 15px;">
                <span class="bleu"><?php echo $unHotel->nom; ?></span><br>
                <?php echo $unHotel->rue1 . " " . $unHotel->cp . " " . $unHotel->ville; ?><br>
                <?php $laPhoto = $unHotel->photos->first(); ?>
                <?php if ($laPhoto): ?>
                    <img src="<?php echo asset('images/' . $laPhoto->nomfichier); ?>" width="150" height="100" style="object-fit:cover">
                <?php endif; ?>
            </div>
        <?php endforeach; ?>

    </div>
</div>
</body>
</html>