<h2>Mes Objets connectés</h2>


<h3>Mes objets autorisés</h3>

<?php

echo '<table id="datatable" class="display trustedDevice"><thead>';

echo "<tr>";
                                 echo"<td>serial</td>";
                                 echo"<td>description</td>";
                                 echo"<td>email</td>";
                                 echo"<td>action</td>";
                         		 echo "</tr>";

    echo "</thead><tbody>";

        if(!empty($trustedDevices)){
        foreach ($trustedDevices as $trustedDevice) {



                echo "<tr>";


                echo "<td>".$trustedDevice['Device']['serial']."</td>";
                echo "<td>".$trustedDevice['Device']['description']."</td>";
                echo "<td>".$trustedDevice['Member']['email']."</td>"; ?>
                <td><a href="<?= $this->Html->url(array('controller' => 'accounts', 'action' => 'deletedevice',$trustedDevice['Device']['serial'])); ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>




                   <?php  echo "</tr>";
                   }

                   }

                    else{

                    }





     echo "</tbody></table>";

 ?>

 <h3>Mes objets en attente d'autorisation</h3>

 <?php

 echo '<table id="datatable" class="display unTrustedDevice"><thead>';

 echo "<tr>";
                                   echo"<td>serial</td>";
                                   echo"<td>description</td>";
                                   echo"<td>email</td>";
                                   echo"<td>action</td>";
                          		echo "</tr>";

     echo "</thead><tbody>";
        if(isset($unTrustedDevices)){
         foreach ($unTrustedDevices as $unTrustedDevice) {

                 echo "<tr>";

                 echo "<td>".$unTrustedDevice['Device']['serial']."</td>";
                 echo "<td>".$unTrustedDevice['Device']['description']."</td>";
                 echo "<td>".$unTrustedDevice['Member']['email']."</td>"; ?>
                 <td>

                     <a href="<?= $this->Html->url(array('controller' => 'accounts', 'action' => 'trustdevice', $unTrustedDevice['Device']['serial'])); ?>"><span class="glyphicon glyphicon-ok" style="color: green" aria-hidden="true"></span></a>
                     <a href="<?= $this->Html->url(array('controller' => 'accounts', 'action' => 'deletedevice', $unTrustedDevice['Device']['serial'])); ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>

                    </td>

                 <?php echo "</tr>";

         }
         }
      echo "</tbody></table>";

  ?>

<script type="text/javascript">

$(document).ready(function() {
    $('.trustedDevice').DataTable( {
        "columnDefs": [ {
        "targets": 3,
         "orderable": false,

        } ]
    } );
});


</script>
