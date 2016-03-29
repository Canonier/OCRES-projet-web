<h2>Mes Objets connectés</h2>

<?= $this->Html->link('Ajouter un objet  ', array('controller' => 'accounts', 'action' => 'addDevice')) ?>

<h3>Mes objets autorisés</h3>

<?php

echo '<table id="datatable" class="display"><thead>';

echo "<tr>";
                                 foreach ($trustedDevices[0]['Device'] as $key => $tvalue) {
                                     echo "<td>$key</td>";
                                 }
                                 echo"<td>email</td>";
                         		echo "</tr>";

    echo "</thead><tbody>";

        foreach ($trustedDevices as $trustedDevice) {

                echo "<tr>";

                echo "<td>".$trustedDevice['Device']['serial']."</td>";
                echo "<td>".$trustedDevice['Device']['description']."</td>";
                echo "<td>".$trustedDevice['Member']['email']."</td>";

                echo "</tr>";

        }
     echo "</tbody></table>";

 ?>

 <h3>Mes objets en attente d'autorisation</h3>

 <?php

 echo '<table id="datatable" class="display"><thead>';

 echo "<tr>";
                                  foreach ($unTrustedDevices[0]['Device'] as $key => $tvalue) {
                                      echo "<td>$key</td>";
                                  }
                                  echo"<td>email</td>";
                          		echo "</tr>";

     echo "</thead><tbody>";

         foreach ($unTrustedDevices as $unTrustedDevice) {

                 echo "<tr>";

                 echo "<td>".$unTrustedDevice['Device']['serial']."</td>";
                 echo "<td>".$unTrustedDevice['Device']['description']."</td>";
                 echo "<td>".$unTrustedDevice['Member']['email']."</td>";

                 echo "</tr>";

         }
      echo "</tbody></table>";

  ?>
