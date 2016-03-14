<?php

   //Lecture en Html de la table members
		echo '<table id="datatable" class="display"><thead>';

		echo "<tr>";
        foreach ($members[0]['Member'] as $key => $value) {
            echo "<td>$key</td>";
        }
		echo "</tr>";

		echo "</thead><tbody>";

		foreach ($members as $member) {
		    echo "<tr>";

		    foreach ($member['Member'] as $key => $value) {
                echo "<td>$value</td>";
            }

			echo "</tr>";
		}
		echo "</tbody></table>";


   //Lecture en Html de la table bonds
		echo '<table id="datatable" class="display"><thead>';

        		echo "<tr>";
                foreach ($bonds[0]['Bond'] as $key => $value) {
                    echo "<td>$key</td>";
                }
        		echo "</tr>";

        		echo "</thead><tbody>";

        		foreach ($bonds as $bond) {
        		    echo "<tr>";

        		    foreach ($bond['Bond'] as $key => $value) {
                        echo "<td>$value</td>";
                    }

        			echo "</tr>";
        		}
        		echo "</tbody></table>";

    //Lecture en Html de la table workouts
        			echo '<table id="datatable" class="display"><thead>';

                        		echo "<tr>";
                                foreach ($workouts[0]['Workout'] as $key => $value) {
                                    echo "<td>$key</td>";
                                }
                        		echo "</tr>";

                        		echo "</thead><tbody>";

                        		foreach ($workouts as $workout) {
                        		    echo "<tr>";

                        		    foreach ($workout['Workout'] as $key => $value) {
                                        echo "<td>$value</td>";
                                    }

                        			echo "</tr>";
                        		}
                        		echo "</tbody></table>";


     //Lecture en Html de la table workouts
         			echo '<table id="datatable" class="display"><thead>';

                         		echo "<tr>";
                                 foreach ($workouts[0]['Workout'] as $key => $value) {
                                     echo "<td>$key</td>";
                                 }
                         		echo "</tr>";

                         		echo "</thead><tbody>";

                         		foreach ($workouts as $workout) {
                         		    echo "<tr>";

                         		    foreach ($workout['Workout'] as $key => $value) {
                                         echo "<td>$value</td>";
                                     }

                         			echo "</tr>";
                         		}
                         		echo "</tbody></table>";


//Lecture en Html de la table devices
         			echo '<table id="datatable" class="display"><thead>';

                         		echo "<tr>";
                                 foreach ($devices[0]['Device'] as $key => $value) {
                                     echo "<td>$key</td>";
                                 }
                         		echo "</tr>";

                         		echo "</thead><tbody>";

                         		foreach ($devices as $device) {
                         		    echo "<tr>";

                         		    foreach ($device['Device'] as $key => $value) {
                                         echo "<td>$value</td>";
                                     }

                         			echo "</tr>";
                         		}
                         		echo "</tbody></table>";







	?>





