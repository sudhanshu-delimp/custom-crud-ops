<?php
global $wpdb;
$table_name = "wp_2_bcc_imports_data";
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
                        <th scope="col">Title</th>
                        <th scope="col">Status</th>
                        <th scope="col">Post Status</th>
                        <th scope="col">Get Status</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($items)) {
                        foreach ($items as $key => $item) {
                    ?>
                            <tr>
                                <th scope="row"><?php echo ($key + 1); ?></th>
                                <td><?php echo $item->title; ?></td>
                                <td><?php echo $item->status; ?></td>
                                <td><?php echo $item->post_status; ?></td>
                                <td><?php echo $item->get_status; ?></td>
                                <td><?php echo $item->created_at; ?></td>
                                <td><a class="text-decoration-none" href="admin.php?page=add-import&id=<?php echo $item->ID; ?>">Edit</a></td>
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