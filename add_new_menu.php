<div id ="add_new_menu">
	<h1><?php echo $lang->line("add_new_menu") ?></h1>
  <a href="index.php?page=menu_create" class ="btn btn-success"><?php echo $lang->line("Create");?></a>
	<div id ="add_new_menu">
    <table class="table table-striped table-bordered">
      <tr>
        <td><?php echo $lang->line("menu_name");?></td>
        <td><?php echo $lang->line("menu_class");?></td>
      </tr>
		<?php
			include "database.php";
			$pdo = Database :: connect();
      $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT * FROM category ORDER BY CATID DESC";
      foreach ( $pdo->query($sql) as $row ){
        echo "<tr>";
          echo "<td>";
          echo $row['CATNAME'];
          echo "</td>";
          echo "<td>";
          echo $row['CATEGORIES_INTEGER_IDX'];
          echo "</td>";
        echo "</tr>";
      }
		?>
    </table>
		
	</div>
</div>
