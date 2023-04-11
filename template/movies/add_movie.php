<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    <?php echo (empty($id)) ? 'Add Movie' : 'Update Movie'; ?>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="movie_name" class="form-label">Movie Name</label>
                            <input type="text" name="movie_name" class="form-control" id="movie_name"
                                value="<?php echo (!empty($value->movie_name)) ? $value->movie_name : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="movie_imdb_id" class="form-label">Movie IMDB Id</label>
                            <input type="text" name="movie_imdb_id" class="form-control" id="movie_imdb_id"
                                value="<?php echo (!empty($value->movie_imdb_id)) ? $value->movie_imdb_id : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="movie_runtime" class="form-label">Movie Runtime</label>
                            <input type="text" name="movie_runtime" class="form-control" id="movie_runtime"
                                value="<?php echo (!empty($value->movie_runtime)) ? $value->movie_runtime : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="movie_release_date" class="form-label">Movie Release Date</label>
                            <input type="text" name="movie_release_date" class="form-control" id="movie_release_date"
                                value="<?php echo (!empty($value->movie_release_date)) ? $value->movie_release_date : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="movie_description" class="form-label">Movie Description</label>
                            <textarea type="text" name="movie_description" class="form-control"
                                id="movie_description"><?php echo (!empty($value->movie_description)) ? $value->movie_description : ''; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="movie_images" class="form-label">Movie Images</label>
                            <input type="file" name="movie_images" class="form-control" id="movie_images">
                        </div>
                        <div class="mb-3">
                            <label for="celebrity_videos" class="form-label">Movie Image Galleries</label>
                            <!-- <input type="text" name="movie_image_galleries" class="form-control" id="movie_image_galleries" value="<?php //echo (!empty($value))?$value->movie_image_galleries:'';?>"> -->
                        </div>
                        <div class="mb-3">
                            <label for="movie_videos" class="form-label">Movie Videos</label>
                            <!-- <input type="text" name="movie_videos" class="form-control" id="movie_videos" value="<?php // echo (!empty($value)) ? $value->movie_videos : '';?>"> -->
                        </div>
                        <div class="mb-3">
                            <label for="movie_embeds" class="form-label">Movie Embeds</label>
                            <!-- <input type="text" name="movie_embeds" class="form-control" id="movie_embeds" value="<?php //echo (!empty($value)) ? $value->movie_embeds : '';?>"> -->
                        </div>
                        <div class="mb-3">
                            <label for="movie_external_media" class="form-label">Movie External Media</label>
                            <!-- <input type="text" name="movie_external_media" class="form-control" id="movie_external_media" value="<?php //echo (!empty($value)) ? $value->movie_external_media : '';?>"> -->
                        </div>
                        <div class="mb-3">
                            <label for="movie_cast" class="form-label">Movie Cast</label>
                            <input type="text" name="movie_cast" class="form-control" id="movie_cast"
                                value="<?php echo $value->movie_cast ?>">
                        </div>
                        <div class="mb-3">
                            <label for="movie_crew" class="form-label">Movie Crew</label>
                            <input type="text" name="movie_crew" class="form-control" id="movie_crew"
                                value="<?php echo $value->movie_crew; ?>">
                        </div>
                        <?php
                        if ($id) {
                        ?>
                            <input type="hidden" name="row_id" value="<?php echo $id; ?>">
                            <button type="submit" name="movie_update" class="btn btn-primary">Update</button>
                        <?php
                        } else {
                        ?>
                            <button type="submit" name="movie_insert" class="btn btn-primary">Submit</button>
                            <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>