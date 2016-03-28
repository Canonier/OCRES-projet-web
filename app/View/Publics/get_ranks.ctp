<?php $this->assign('title', 'Classement Général');?>

<h2 style="margin-bottom:30px;">Classement Général</h2>

<table id="datatable" class="datatable display classement">
    <thead>
        <tr>
            <td><b>Utilisateurs</b></td>
            <td><b>Score Total</b></td>
            <td><?= implode("</td><td>", $workouts['sports']) ?></td>
        </tr>

    </thead>
    <tbody>

<?php foreach ($workouts['membres'] as $member => $sports) { ?>
        <tr>
            <td><?= $member; ?></td>
            
<?php // Gestion des sports / scores 
        $total = array();
        foreach ($sports as $sport => $types) {
            $total[] = array_sum($types) / count($types);
        }
?>
            <td><?= array_sum($total); ?></td>
<?php // Gestion de l'affichage par sport
        foreach ($workouts['sports'] as $sport) {
            if(!empty($sports[$sport])){
?>
                <td><?= array_sum($sports[$sport]); ?></td>
            <?php }else{ ?>
                <td> -- </td>
            <?php }
        }
    } ?>
        </tr>

    </tbody>
</table>

<script type="text/javascript">

$(document).ready(function() {
    $('.classement').DataTable( {
        "order": [[ 1, "desc" ]]
    } );
});

</script>