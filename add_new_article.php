<div id ="add_new_article">
	<h1><?php echo $lang->line("add_new_article") ?></h1>
	<div id ="new_article">
		<?php
			include "database.php";
			$pdo = Database :: connect();
		?>
	</div>
</div>