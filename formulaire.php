<!DOCTYPE html>
<html lang ="fr">
<head>
    <meta charset ="UTF-8">
    <title> Fiche étudiant </title>
</head>
<body> </body> </html>
<?php
$nom = "Habib ben mahmoud";
$filiere = "Info";
$moyenne = 13.5;
$estBoursier = true;
$anneEtude = 2;
if ($moyenne >= 10)
    {$status = "Admis(e)";}
else
    {$status = "Non admis(e)";} 
switch ($filiere)
{
    case "Info":
        $labelFiliere = "Informatique";
        $classeBadge = "badge-info";
        break;
    case "Elec" :
        $labelFiliere = "Electronique";
        $classeBadge = "badge-elec";
        break;
    default:
    {
        $labelFiliere = "Filiere inconnue";
        $classeBadge = "badge-defaut";
    }
}
?>
<p>Filiere : <?php echo $labelFiliere; ?></p>
<p>
    status : <?php echo $status; ?>
</p>