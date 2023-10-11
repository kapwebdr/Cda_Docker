<?php require_once(DIR_VIEW.'Header.php'); ?>

<h1>
    <?= Controller\View::Get('h1'); ?>
</h1>

<table border="1" width="100%">
    <tr style="background:gray;color:white;font-weight:bold;">
        <td>Nom</td>
        <td>Prénom</td>
    </tr>
<?php 
foreach(Controller\View::Get('users') as $user)
{
    echo '
    <tr>
        <td>'.$user['nom'].'</td>
        <td>'.$user['prenom'].'</td>
    </tr>';
} 
?>
</table>

<?php require_once(DIR_VIEW.'Footer.php'); ?>