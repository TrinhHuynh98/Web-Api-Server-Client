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
                <div class="panel-title">Magament Users</div>
             </div>
           <table id="myTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>name</th>
                        <th>Username</th>
                        <th>email</th>
                        
                        <th> Edit</th>
                        <th> Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($user as $row):
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row->name ?></td>
                            <td><?php echo $row->username ?></td>
                            <td><?php echo $row->email ?></td>
                            <td><?php echo anchor('User/edit/' . $row->user_id, 'Edit', array('class' => 'btn btn-danger')) ?></td>
                            <td><?php echo anchor('User/Delete/' . $row->user_id, 'Delete', array('class' => 'btn btn-info')) ?></td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
            </table>

        </div>
    </div>

    <div class="col-md-3">
        <div class="content-box-large">
            <div class="panel-heading">
                
    
            </div>

        </div>

    </div>
</div>


