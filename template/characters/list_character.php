<?php 
global $wpdb;
$table_name = "wp_2_bcc_characters_data";
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
                    <th scope="col">Character Name</th>
                    <th scope="col">Character Title Choice</th>
                    <th scope="col">Character Movie</th>
                    <th scope="col">Character Show</th>
                    <th scope="col">Celebrity Celebrity</th>
                    <!--<th scope="col">Celebrity Images</th>
                    <th scope="col">Celebrity Image Galleries</th>
                    <th scope="col">Celebrity Videos</th>
                    <th scope="col">Celebrity Embeds</th>
                    <th scope="col">Celebrity External Media</th>
                    <th scope="col">Celebrity Filmography</th> -->
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
                                        <td><?php echo $item->character_name;?></td>
                                        <td><?php echo $item->character_title_choice;?></td>
                                        <td><?php echo $item->character_movie;?></td>
                                        <td><?php echo $item->character_show;?></td>
                                        <td><?php echo $item->character_celebrity;?></td>
                                        <!-- <td><?php echo $item->celebrity_images;?></td>
                                        <td><?php echo $item->celebrity_image_galleries;?></td>
                                        <td><?php echo $item->celebrity_videos;?></td>
                                        <td><?php echo $item->celebrity_embeds;?></td>
                                        <td><?php echo $item->celebrity_external_media;?></td>
                                        <td><?php echo $item->celebrity_filmography;?></td> -->
                                        <td><a class="text-decoration-none" href="admin.php?page=add-character&id=<?php echo $item->ID; ?>">Edit</a></td>
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
