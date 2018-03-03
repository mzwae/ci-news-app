<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>
<div class="form-group">
  <label>Title</label>
  <input type="input" name="title" class="form-control" placeholder="Add title"><br>
</div>
<div class="form-group">
  <label>Text</label>
  <textarea class="form-control" id="textEditor" name="text" rows="8" cols="80" placeholder="Add news item"></textarea><br>
</div>
  <input type="submit" name="submit" value="Add news item" class="btn btn-success">
<?php echo form_close(); ?>
