<?php

function afficherTableau($rows, $headers) {
		?>

		<table border="1">
		    <tr>
		    <?php foreach ($headers as $header): ?>
		        <th><?php echo $header; ?></th>
		    <?php endforeach; ?>
		    </tr>

			<?php foreach ($rows as $row): ?>
			    <tr>
			    <?php for ($k = 0; $k < count($headers); $k++): ?>
			    	<?php if ($k == 0){ ?>
			    		<td><?php echo '<a href=formulaireUtilisateur.php?id='.$row[$k].' >'.$row[$k].'</a>'; ?></td>
			    	<?php } else { ?>
			    		<td><?php echo $row[$k]; ?></td>
			    	<?php } ?>
			        
			    <?php endfor; ?>
			    </tr>
			<?php endforeach; ?>

		</table>
		<?php

}

function getHeaderTable() {
	$headers = array();
	$headers[] = "ID";
	$headers[] = "nom";
	$headers[] = "prenom";
	$headers[] = "age";
	$headers[] = "adresse";
	return $headers;
}


//var_dump($data_cells[0]);die;

$data_cell = array();
$data_cells = array();

$data_cell[] = "1";
$data_cell[] = "toto";
$data_cell[] = "johon";
$data_cell[] = "19";
$data_cell[] = "15 rue des archives";
$data_cells[] = $data_cell;

 unset($data_cell);
 $data_cell = array();
$data_cell[] = "2";
$data_cell[] = "_toto";
$data_cell[] = "_johon";
$data_cell[] = "19";
$data_cell[] = "15 rue des archives";
$data_cells[] = $data_cell;
 unset($data_cell);
 $data_cell = array();
$data_cell[] = "3";
$data_cell[] = "itoto";
$data_cell[] = "ijohon";
$data_cell[] = "19";
$data_cell[] = "15 rue des archives";
$data_cells[] = $data_cell;
//afficherTableau($data_cells, $headers);
?>





 