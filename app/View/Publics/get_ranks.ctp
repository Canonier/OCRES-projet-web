<?php $this->assign('title', 'Classement Général');?>

<h2 style="margin-bottom:30px;">Classement Général</h2>

<table id="datatable" class="display">
    <thead>
        <tr>
            <td><b>Utilisateurs</b></td>
            <td><b>Score Moyen</b></td>

<?php $proper_types = array();

foreach ($types as $key => $type) { // permet d'afficher les onglets du tableau, et de corriger les index dans le tableau $types devenu $proper_types.
    echo "<td>Score $type</td>";
    $proper_types[] = $type;
} ?>

        </tr>

    </thead>
    <tbody>

<?php foreach ($workouts as $workout) {

    if(!empty($workout["log_average"])){ ?>

        <tr>
            <td><?= $workout['email']; ?></td>
            <td><?= round( array_sum($workout["log_average"]) / count($proper_types), 3); ?></td>

<?php
        for ($j=0; $j < count($proper_types); $j++) { 
            if(array_key_exists($proper_types[$j], $workout["log_average"])){ ?>
                <td><?= $workout["log_average"][$proper_types[$j]]; ?></td>
<?php       }else{ ?>
                <td> -- </td>
<?php } } ?>
        </tr>
<?php } } ?>

    </tbody>
</table>