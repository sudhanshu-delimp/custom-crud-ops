<?php 
global $wpdb;
$table_name = "wp_userstable";
$query = "SELECT * FROM {$table_name}";
$items = $wpdb->get_results($query);
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-sm-12">
            <table class="table" id="example">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                        if(!empty($items)){
                            foreach($items as $key=>$item){
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo ($key+1);?></th>
                                        <td><?php echo $item->name;?></td>
                                        <td><?php echo $item->email;?></td>
                                        <td><a class="text-decoration-none" href="admin.php?page=add-account&id=<?php echo $item->user_id; ?>">Edit</a></td>
                                    </tr>
                                <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
