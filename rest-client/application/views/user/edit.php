<?php echo form_open_multipart('user/edit', 'class="form-horizontal" role="form"');
echo form_hidden('user_id',$user[0]->user_id);
?>
<div class="row">
    <div class="col-md-6">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Edit User</div>
            </div>
            <div class="panel-body">
               
                <input type="text" name="name"  value="<?php echo $user[0]->name ?>" class="form-control">
                <input type="text" name="username"  value="<?php echo $user[0]->username ?>" class="form-control">
                <input type="text" name="email"  value="<?php echo $user[0]->email ?>" class="form-control">
                <input type="text" name="password"  value="<?php echo $user[0]->password ?>" class="form-control">

            </div>

            <div class="form-group"> 
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                  </div>
            </div>
              
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="content-box-large">
            <div class="panel-body">
                
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>