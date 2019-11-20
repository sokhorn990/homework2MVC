<div class="row">
    <div class="col-md-12">
    <h2 class="text-center text-success" >Information in my family:</h2>
    </div>
</div>
<table class="table table-bordered mt-4">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>age</th>
            <th>Sex</th>
            <th>job</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php
    if (isset($data['data_family'])) {
        foreach ($data['data_family'] as $info) {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $info['id']; ?></td>
                    <td><?php echo $info['name']; ?></td>
                    <td><?php echo $info['age']; ?></td>
                    <td><?php echo $info['sex']; ?></td>
                    <td><?php echo $info['job']; ?></td>
                    <td>
                        <a href="index.php?action=detail&id=<?php echo $info['id'];?>"> <i class="material-icons text-success"> remove_red_eye </i></a>                
                        <a href="index.php?action=edit&id=<?php echo $info['id'];?>"><i class="material-icons "> edit </i></a>                       
                        <a href="index.php?action=delete&id=<?php echo $info['id'];?>"> <i class="material-icons text-danger"> delete </i> </a>            
                    </td>
                </tr>
            </tbody>
    <?php
        }
    }
    ?>
</table>