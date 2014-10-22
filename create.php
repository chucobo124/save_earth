<script src="ckeditor/ckeditor.js"></script>
<form class="span10 offset1" method="POST" action="con_create.php">
	<div class ="row">
    
    <?php
    require "database.php";
    $pdo = Database::connect();
    $sql = "Select * FROM category ORDER BY CATID DESC" ;?>
		<h1><?php echo $lang->line("create_new_article"); ?></h1>
    <?php echo $lang->line("Title");?><input type="text" name= "name"><br/>
    <?php echo $lang->line("Title2");?><input type="text" name="name2"><br/>
    <?php echo $lang->line("class");?><select name="class"> 
      <?php foreach($pdo->query($sql) as $row){
              echo "<option value=\"".$row['CATID']."\">";
              echo $row['CATNAME'];
              echo "</option>";
            }
      ?>
    </select><br/>
    <?php echo $lang->line("short");?><textarea cols="100" rows="10" name="short"></textarea><br/>
    <?php echo $lang->line("link");?><input type="text" name="link"><br/>
    <?php echo $lang->line("display");?><br/>
    <?php echo $lang->line("yes");?><input type="radio" name="display" value="1" checked="checked">
    <?php echo $lang->line("no");?><input type="radio" name = "display" value = "0"><br/>
    <?php echo $lang->line("create_at");?><input type="text" name = "create" value = "20141010"><br/>
    <?php echo $lang->line("modify_at");?><input type="text" name = "modify" value = "20141010"><br/>
    <textarea name="text" cols="3000" rows="700"></textarea>
    <input type="submit" value = <?php echo $lang->line("submit")?>>
    <script>
    CKEDITOR.replace( 'text',{
    height: '800px'
});

    </script>
</form>
