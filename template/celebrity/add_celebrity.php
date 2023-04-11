<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    <?php echo (empty($id)) ? 'Add Celebrity' : 'Update Celebrity'; ?>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row form-group">
                            <div class="col-md-12 mb-3">
                                <label for="celebrity_name" class="form-label">Celebrity Name</label>
                                <input type="text" name="celebrity_name" class="form-control" id="celebrity_name" value="<?php echo (!empty($value->celebrity_name)) ? $value->celebrity_name : ''; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="celebrity_imdb_id" class="form-label">Celebrity IMDB ID</label>
                                <input type="text" name="celebrity_imdb_id" class="form-control" id="celebrity_imdb_id" value="<?php echo (!empty($value->celebrity_imdb_id)) ? $value->celebrity_imdb_id : ''; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="celebrity_birth_date" class="form-label">Celebrity Birth Date</label>
                                <input type="text" name="celebrity_birth_date" class="form-control" id="celebrity_birth_date" value="<?php echo (!empty($value->celebrity_birth_date)) ? $value->celebrity_birth_date : ''; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="celebrity_birth_place" class="form-label">Celebrity Birth Place</label>
                                <input type="text" name="celebrity_birth_place" class="form-control" id="celebrity_birth_place" value="<?php echo (!empty($value->celebrity_birth_place)) ? $value->celebrity_birth_place : ''; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="celebrity_bio" class="form-label">Celebrity Bio</label>
                                <textarea type="text" name="celebrity_bio" class="form-control" id="celebrity_bio"><?php echo (!empty($value->celebrity_bio)) ? $value->celebrity_bio : ''; ?></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="celebrity_image_galleries" class="form-label">Celebrity Image Galleries</label>
                                <input type="file" name="celebrity_image_galleries" class="form-control" id="celebrity_image_galleries" value="<?php // echo (!empty($value))?$value->celebrity_imdb_id:'';
                                                                                                                                                ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="celebrity_videos" class="form-label">Celebrity Videos</label>
                                <!-- <input type="text" name="celebrity_videos" class="form-control" id="celebrity_videos" value="<?php //echo (!empty($value))?$value->celebrity_videos:'';?>"> -->
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="celebrity_embeds" class="form-label">Celebrity Embeds</label>
                                <!-- <input type="text" name="celebrity_embeds" class="form-control" id="celebrity_embeds" value="<?php // echo (!empty($value)) ? $value->celebrity_embeds : '';?>"> -->
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="celebrity_external_media" class="form-label">Celebrity External Media</label>
                                <!-- <input type="text" name="celebrity_external_media" class="form-control" id="celebrity_external_media" value="<?php //echo (!empty($value)) ? $value->celebrity_external_media : '';?>"> -->
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="celebrity_filmography" class="form-label">Celebrity Filmography</label>
                                <!-- <input type="text" name="celebrity_filmography" class="form-control" id="celebrity_filmography" value="<?php //echo (!empty($value)) ? $value->celebrity_filmography : ''; 
                                                                                                                                            ?>"> -->
                            </div>
                        </div>
                        <?php
                        if ($id) {
                        ?>
                            <input type="hidden" name="row_id" value="<?php echo $id; ?>">
                            <button type="submit" name="celebrity_update" class="btn btn-primary">Update</button>
                        <?php
                        } else {
                        ?>
                            <button type="submit" name="celebrity_insert" class="btn btn-primary">Submit</button>
                        <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-4">

        </div>
    </div>
</div>