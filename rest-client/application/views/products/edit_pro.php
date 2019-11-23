 <!-- Page body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- Product edit card start -->
            <div class="card">
                <div class="card-header">
                        <h5>Product Update</h5>
                </div>
                <div class="card-block">
                                <div class="row">
                                    <div class="col-sm-12">
                                     <?php echo form_open_multipart('Products/edit'); ?>
                                     <?php echo form_hidden('pro_id',$products[0]->pro_id); ?>
                                     
                                        <div class="product-edit">
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-ui-user"></i></span>
                                                                    <input class="form-control" value="<?php echo $products[0]->pro_name ?>" name="name" placeholder="Product Name" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-copy-alt"></i></span>
                                                                    <input class="form-control" name="price" placeholder="short" type="text" value="<?php echo $products[0]->short ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-cur-dollar"></i></span>
                                                                    <input class="form-control" name="price" placeholder=" Price" type="text" value="<?php echo $products[0]->price ?>">
                                                                </div>
                                                            </div> 

                                                            <div class="col-sm-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-cur-dollar"></i></span>
                                                                    <input class="form-control" name="price" placeholder=" Category" type="text" value="<?php echo $products[0]->ca_id ?>">
                                                                </div>
                                                            </div> 
                                                        </div>                                     
                                                             <div class="form-group">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update
                                                                </button>
                                                            </div>

                                                        </div>
                                                </div>
                                               
                                        </div>
                                            <!-- Product edit card end -->
                                   <?php echo form_close(); ?>
                                </div>                                  
                         </div>
                    </div>
                </div>                                  
            </div>
        </div>
 </div>
                            
             

   

