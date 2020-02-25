<h2>Create Post</h2>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('users/create_user'); ?>
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Add Name">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="Add Email">
  </div>

  <div class="form-group">
    <label>Description</label>
    <textarea id="editor1" class="form-control" name="description" placeholder="Add Description"></textarea>
  </div>

 
  <button type="submit" class="btn btn-info">Submit</button>
</form>
