<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>
  <label for="title">Title</label>
  <input type="input" name="title"><br>

  <label for="text">Text</label>
  <textarea name="text" rows="8" cols="80"></textarea><br>

  <input type="submit" name="submit" value="Add news item">
<?php echo form_close(); ?>
