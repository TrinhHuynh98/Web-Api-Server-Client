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
                <div class="panel-title">Category</div>
             </div>

             <table id="myTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($category as $row):
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row->ca_name ?></td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
            </table>


        </div>
    </div>

    <div class="col-md-3">
        <div class="content-box-large">
            <div class="panel-heading">

                <ul> </ul>
                           
            </div>

        </div>

    </div>
</div>


