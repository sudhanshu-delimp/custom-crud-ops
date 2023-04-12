<?php 
global $wpdb;
$table_name = "wp_2_bcc_shows_data";
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
                    <th scope="col">Show Name</th>
                    <th scope="col">Show IMDB Id</th>
                    <th scope="col">Show Runtime</th>
                    <th scope="col">Show Release Date</th>
                    <th scope="col">Show Status</th>
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
                                        <td><?php echo $item->show_name;?></td>
                                        <td><?php echo $item->show_imdb_id;?></td>
                                        <td><?php echo $item->show_runtime;?></td>
                                        <td><?php echo $item->show_release_date;?></td>
                                        <td><?php echo $item->show_status;?></td>
                                        <td><a class="text-decoration-none" href="admin.php?page=add-show&id=<?php echo $item->ID; ?>">Edit</a></td>
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
