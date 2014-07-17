<div id ="add_new_article">
	<h1><?php echo $lang->line("add_new_article") ?></h1>
	<div id ="new_article">
		<?php
			include "database.php";
			$pdo = Database :: connect();
		?>
		<div class = "row">
			<p>
               <a href="index.php?page=create" class="btn btn-success"><?php echo $lang->line("Create")?></a>
            </p>
			<table class= "table table-striped table-bordered">
				<thead>
					<tr>
						<th>
							<?php echo $lang->line("Category") ?>
						</th>
						<th>
							<?php echo $lang->line("Title") ?>
						</th>
						<th>
							<?php echo $lang->line("Title2") ?>
						</th>
						<th>
							<?php echo $lang->line("Content") ?>
						</th>
						<th>
							<?php echo $lang->line("Action") ?>
						</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql = 'SELECT * FROM post ORDER BY POSTID DESC';
						foreach ($pdo->query($sql) as $row){
							echo '<tr>';
							echo '<td>'.$row['CATEGORY_CATID_OID'];
							echo '<td>'.$row['TITLE'];
							echo '<td>'.$row['TITLE2'];
							echo '<td>'.$row['CONTENT'];
							echo '<td><a class="btn btn-default" href="index.php?page=read?id='.$row['POSTID'].'">Read</a>';
							echo '<a class="btn btn-default" href="index.php?page=edit?id='.$row['POSTID'].'">Edit</a></td>';
						}
					Database::disconnect();
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>