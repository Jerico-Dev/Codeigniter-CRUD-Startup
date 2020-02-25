<h2>Edit User</h2>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('users/update_user'); ?>
<input type="hidden" name="id" value="<?php echo $user->id; ?>">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" value="<?php echo $user->name; ?>" required=true>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" value="<?php echo $user->email; ?>" required=true>
  </div>

  <div class="form-group">
    <label>Description</label>
    <textarea id="editor1" class="form-control" name="description"><?php echo $user->description; ?></textarea>
  </div>

 
  <button type="submit" class="btn btn-info">Submit</button>
</form>
