<?php 
session_start();
 if (!isset($_SESSION['user'])) die('Acces interzis!');
?>
<?php require_once 'header.php'; ?>
<?php require_once 'db.php'; ?>

<div class="container flex flex-items-center p-3">
	<table>
		<caption>Lista pacienti</caption>
		<thead>
			<tr>
				<th>Nume</th>
				<th>Varsta</th>
				<th>Ultima internare</th>
			</tr>
		</thead>
		<tbody>
			<?php $result = $mysqli->query("SELECT * FROM `pacienti` ORDER BY `nume` ASC");
			while($row = $result->fetch_assoc()) { ?>
				<tr>
					<td><?php echo $row['nume']; ?></td>
					<td><?php echo $row['varsta']; ?></td>
					<td><?php echo $row['ultimul_control']; ?></td>
				</tr>
		<?php } ?>
		</tbody>
	</table>
</div>


<?php require_once 'footer.php'; ?>