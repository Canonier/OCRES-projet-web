<?php $this->assign('title', 'Classement Général');?>

<h2 style="margin-bottom:30px;">Classement Général</h2>

<table id="datatable" class="datatable display classement">
    <thead>
        <tr>
            <td><b>Utilisateurs</b></td>
            <td><b>Score Total</b></td>
            <td class="name"><?= implode('</td><td class="name">', $workouts['sports']) ?></td>
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
<?php $k=0; // Gestion de l'affichage par sport 
        foreach ($workouts['sports'] as $sport) {
            if(!empty($sports[$sport])){
?>
                <td class="count-<?= $k; ?>"><?= array_sum($sports[$sport]); ?></td>
            <?php }else{ ?>
                <td> -- </td>
            <?php }
            $k++;
        }
    } ?>
        </tr>

    </tbody>
</table>



<div style="width:100%;">
    <canvas id="chart-area" width="200" height="200" style="display:block; margin:auto;"></canvas>
</div>


<script>    

    var data = [];

    for (var k = 0; k < $('.classement').find("tr:first td").length - 2; k++) {
        var name = $('.name').eq(k).text();
        var sum = 0;
        // iterate through each td based on class and add the values
        $(".count-" + k).each(function() {

            var value = $(this).text();
            // add only if the value is number
            if(!isNaN(value) && value.length != 0) {
                sum += parseFloat(value);
            }
        });

        data.push({
            value: sum,
            label: name
        });

    };

    console.log(data);

    window.onload = function(){
        var ctx = document.getElementById("chart-area").getContext("2d");
        window.myPie = new Chart(ctx).Doughnut(data);
    };

    </script>