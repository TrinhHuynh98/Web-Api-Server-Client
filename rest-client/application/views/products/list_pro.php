<div class="row">
    <div class="col-md-9">
        <div class="content-box-large">
            <?php
            if ($this->session->flashdata('success')) {
                echo "<div class='alert alert-info'>";
                echo $this->session->flashdata('success');
                echo "</div>";
            } elseif ($this->session->flashdata('failed')) {

                echo "<div class='alert alert-danger'>";
                echo $this->session->flashdata('failed');
                echo "</div>";
            } elseif ($this->session->flashdata('wrong')) {
                echo "<div class='alert alert-danger'>";
                echo $this->session->flashdata('wrong');
                echo "</div>";
            } elseif ($this->session->flashdata('Delete')) {
                echo "<div class='alert alert-danger'>";
                echo $this->session->flashdata('Delete');
                echo "</div>";
            } elseif ($this->session->flashdata('Cancel')) {
                echo "<div class='alert alert-danger'>";
                echo $this->session->flashdata('Cancel');
                echo "</div>";
            }
            ?>   
            <div class="panel-heading">
                <div class="panel-title">Magament Products</div>
             </div>
           <table id="myTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Category</th>
                        <th>Name Poducts</th>
                        <th>Price</th>
                        <th>Short</th>
                        
                        <th> Edit</th>
                        <th> Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($products as $row):
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row->ca_name ?></td>
                            <td><?php echo $row->pro_name ?></td>
                            <td><?php echo $row->price ?></td>
                            <td><?php echo $row->short ?></td>
                            <td><?php echo anchor('products/edit/' . $row->user_id, 'Edit', array('class' => 'glyphicon glyphicon-pencil')) ?></td>
                            <td><?php echo anchor('products/Delete/' . $row->user_id, 'Delete', array('class' => 'glyphicon glyphicon-trash')) ?></td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
            </table>

        </div>
    </div>

    <div class="col-md-3">
        <div class="content-box-large">
            <div class="panel-heading">
                
            <button name="submit" class="btn btn-outline-info" ><a href="<?php echo site_url('products/add') ?>"><i class="glyphicon glyphicon-plus"></i>Add new</a></button>
                    
            </div>

        </div>

    </div>
</div>


