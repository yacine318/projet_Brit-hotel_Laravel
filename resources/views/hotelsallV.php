<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel='stylesheet' href="<?php echo url('/'); ?>/css/style.css" />
    </head>
    <body>
        <div id="pagewidth" >
    <div id="header"><img src="<?php echo asset('images/logo.png'); ?>" alt="Brit Hotel" height="60"></div>
      <div id="leftcol">
            <h2>Menu</h2>
            <ul>
                <?php include('menuV.php'); ?>
            </ul>
        </div>
            <div id="maincol"><h2>Hôtels BRIT HOTEL</h2>
   <?php
echo "<table>";
echo "<tr><th>Nom Hôtel</th><th>Adresse</th><th>Téléphone</th><th>Équipements</th></tr>";

foreach ($lesHotels as $unHotel) {
    echo "<tr>";
    echo "<td><span class='bleu'>" . $unHotel->nom . "</span></td>";
    echo "<td>" . $unHotel->rue1 . " " . $unHotel->cp . " " . $unHotel->ville . "</td>";
    echo "<td>" . $unHotel->telephone . "</td>";

    echo "<td>";
    foreach ($unHotel->equipements as $unEquipement) {
        echo "<img src='" . asset('images/' . $unEquipement->logo) . "' alt='" . $unEquipement->libelle . "' title='" . $unEquipement->libelle . "' height='20'> ";
    }
    echo "</td>";
    echo "</tr>";

    echo "<tr><td colspan='4'>";
    foreach ($unHotel->photos as $uneP) {
        echo "<img src='" . asset('images/' . $uneP->nomfichier) . "' width='100' height='75' style='object-fit:cover'> ";
    }
    echo "</td></tr>";
}

echo "</table>";
?>
    </body>
</html>