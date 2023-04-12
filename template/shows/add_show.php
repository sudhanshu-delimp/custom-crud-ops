<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    <?php echo (empty($id)) ? 'Add Show' : 'Update Show'; ?>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="show_name" class="form-label">Show Name</label>
                            <input type="text" name="show_name" class="form-control" id="show_name"
                                value="<?php echo (!empty($value->show_name)) ? $value->show_name : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="show_imdb_id" class="form-label">Show IMDB Id</label>
                            <input type="text" name="show_imdb_id" class="form-control" id="show_imdb_id"
                                value="<?php echo (!empty($value->show_imdb_id)) ? $value->show_imdb_id : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="show_runtime" class="form-label">Show Runtime</label>
                            <input type="number" name="show_runtime" class="form-control" id="show_runtime"
                                value="<?php echo (!empty($value->show_runtime)) ? $value->show_runtime : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="show_release_date" class="form-label">Character Show</label>
                            <input type="text" name="show_release_date" class="form-control" id="show_release_date"
                                value="<?php echo (!empty($value->show_release_date)) ? $value->show_release_date : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="show_status" class="form-label">Show Status</label>
                            <input type="text" name="show_status" class="form-control"
                                id="show_status"><?php echo (!empty($value->show_status)) ? $value->show_status : ''; ?>
                        </div>
                        <div class="mb-3">
                            <label for="character_primary" class="form-label">Show Description</label>
                            <textarea name="show_description" class="form-control" id="show_description">
                                 <?php echo (!empty($value->show_description) ? ($value->show_description) : '') ?>
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="show_images" class="form-label">Show Images</label>
                            <input type="text" name="show_images" class="form-control" id="show_images" value="<?php echo (!empty($value->show_images))?$value->show_images:'';?>">
                        </div>
                        <div class="mb-3">
                            <label for="show_image_galleries" class="form-label">Show Image Galleries</label>
                            <input type="text" name="show_image_galleries" class="form-control" id="show_image_galleries" value="<?php echo (!empty($value->show_image_galleries)) ? $value->show_image_galleries : '';?>"> 
                        </div>
                        <div class="mb-3">
                            <label for="show_videos" class="form-label">Show Videos</label>
                            <input type="text" name="show_videos" class="form-control" id="show_videos"
                                value="<?php echo (!empty($value->show_videos)) ? $value->show_videos : '' ?>">
                        </div>
                        <div class="mb-3">
                            <label for="show_embeds" class="form-label">Show Embeds</label>
                            <input type="text" name="show_embeds" class="form-control" id="show_embeds"
                                value="<?php echo (!empty($value->show_embeds)) ? $value->show_embeds : '' ?>">
                        </div>
                        <div class="mb-3">
                            <label for="show_external_media" class="form-label">Show External Media</label>
                            <input type="text" name="show_external_media" class="form-control" id="show_external_media"
                                value="<?php echo (!empty($value->show_external_media)) ? $value->show_external_media : '' ?>">
                        </div>
                        <div class="mb-3">
                            <label for="show_cast" class="form-label">Show Cast</label>
                            <input type="text" name="show_cast" class="form-control" id="show_cast"
                                value="<?php echo (!empty($value->show_cast)) ? $value->show_cast : '' ?>">
                        </div>
                        <div class="mb-3">
                            <label for="show_crew" class="form-label">Show Crew</label>
                            <input type="text" name="show_crew" class="form-control" id="show_crew"
                                value="<?php echo (!empty($value->show_crew)) ? $value->show_crew : '' ?>">
                        </div>
                        <?php
                        if ($id) {
                        ?>
                            <input type="hidden" name="row_id" value="<?php echo $id; ?>">
                            <button type="submit" name="show_update" class="btn btn-primary">Update</button>
                        <?php
                        } else { 
                        ?>
                            <button type="submit" name="show_insert" class="btn btn-primary">Submit</button>
                            <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>