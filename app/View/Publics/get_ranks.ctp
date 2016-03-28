<?php
//Lecture en Html de la table ordered

         			echo '<table id="datatable" class="display"><thead>';

                         		echo "<tr>";
                         		$tmp = array_slice($workouts, 0, 1);

                                 foreach ($tmp[0] as $key => $value) {
                                    //
                                    echo "<td>$key</td>";
                                 }

                                    echo "<td>Type</td>";
                         		echo "</tr>";

                         		echo "</thead><tbody>";

                         		foreach ($workouts as $workout) {
         		    foreach ($workout["log_average"] as $type => $value) {
                                        echo "<tr>";

                                        echo "<td>".$workout['email']."</td>";
                                        echo "<td>$value</td>";
                                        echo "<td>$type</td>";




                                        echo "</tr>";
                                     }


                         		}
                         		echo "</tbody></table>";
?>