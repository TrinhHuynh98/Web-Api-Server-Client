<?php echo form_open_multipart('products/add', 'class="form-horizontal" role="form"') 

?>
<style type="text/css">
    div h2{
  font-family: myFirstFont;
}
</style>

<div class="row">
    <div class="col-md-12">
        <h2 style="text-align: center;">Add Products</h2>
    </div>     
</div>

<div class="row">

    <div class="col-md-6">
        <div class="content-box-large">

            <div class="panel-heading">
                <div class="panel-title">Products Name</div>
            </div>
            <div class="panel-body">
                <input type="text"  required="" name="pro_name"  class="form-control">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="content-box-large">

            <div class="panel-heading">
                <div class="panel-title">Image Products</div>
            </div>
            <div class="panel-body">
                <input type="file" name="userfile" class="form-control">

            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="content-box-large">

            <div class="panel-heading">
                <div class="panel-title">Category</div>
            </div>
            <div class="panel-body">
                
                <select name="ca_id" class="form-control">
                    <?php foreach ($products as $row): ?>
                        <option value="<?php echo $row->ca_id ?>"><?php echo $row->ca_name ?></option>
                    <?php endforeach; ?>
                </select>
            
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="content-box-large">

            <div class="panel-heading">
                <div class="panel-title">Price</div>
            </div>
            <div class="panel-body">
                <input type="text"  required="" name="pro_name"  class="form-control">
            </div>
        </div>
    </div>


    <div class="col-md-9">
        <div class="content-box-large">
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="content-box-large">

                            <div class="panel-heading">
                                <div class="panel-title">Description</div>
                            </div>
                            <div class="panel-body">
                                <input type="text"  required="" name="short"  class="form-control">
                            </div>
                        
                    </div>

                    <div class="col-md-3">
                        <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" name="submit" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </div>
                </div>


                
            </div>


        </div>    
        
    </div>

</div>
<?php echo form_close(); ?>
