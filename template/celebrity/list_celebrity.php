<?php 
global $wpdb;
$table_name = "wp_2_bcc_celebrities_data";
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
                    <th scope="col">Celebrity Name</th>
                    <th scope="col">Celebrity IMDB Id</th>
                    <th scope="col">Celebrity Birth Date</th>
                    <th scope="col">Celebrity Birth Place</th>
                    <th scope="col">Celebrity Bio</th>
                    <th scope="col">Celebrity Images</th>
                    <th scope="col">Celebrity Image Galleries</th>
                    <th scope="col">Celebrity Videos</th>
                    <th scope="col">Celebrity Embeds</th>
                    <th scope="col">Celebrity External Media</th>
                    <th scope="col">Celebrity Filmography</th>
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
                                        <td><?php echo $item->celebrity_name;?></td>
                                        <td><?php echo $item->celebrity_imdb_id;?></td>
                                        <td><?php echo $item->celebrity_birth_date;?></td>
                                        <td><?php echo $item->celebrity_birth_place;?></td>
                                        <td><?php echo $item->celebrity_bio;?></td>
                                        <td><?php echo $item->celebrity_images;?></td>
                                        <td><?php echo $item->celebrity_image_galleries;?></td>
                                        <td><?php echo $item->celebrity_videos;?></td>
                                        <td><?php echo $item->celebrity_embeds;?></td>
                                        <td><?php echo $item->celebrity_external_media;?></td>
                                        <td><?php echo $item->celebrity_filmography;?></td>
                                        <td><a class="text-decoration-none" href="admin.php?page=add-celebrity&id=<?php echo $item->ID; ?>">Edit</a></td>
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
