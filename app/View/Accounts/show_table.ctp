<?php
      
		echo '<table id="table_id" class="display"><thead>';

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
	?>


<script>

$(document).ready( function () {
    $('#table_id').DataTable();
} );

</script>