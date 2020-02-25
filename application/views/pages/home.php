
<a class="btn btn-success btn-lg mt-4" href="<?php echo base_url(); ?>users/create">Create User</a>

<table class="table table-bordered mt-4">
       <thead>
          <tr>
             <th>ID</th>
             <th>Name</th>
             <th>Email</th>
             <th>Description</th>
             <td colspan="2" class="text-center"><strong>Action</strong></td>
          </tr>
       </thead>
       <tbody>
          <?php if($users): ?>
          <?php foreach($users as $user): ?>
          <tr>
             <td><?php echo $user->id; ?></td>
			 <td><?php echo $user->name; ?></td>
			 <td><?php echo $user->email; ?></td>
             <td><?php echo $user->description; ?></td>
             <td>
					 <a href="<?php echo base_url('users/edit/'.$user->id) ?>" class="btn btn-primary">Edit</a></td>
             <td>
                <form action="<?php echo base_url('users/delete_user/'.$user->id) ?>" method="post">
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
</table>
