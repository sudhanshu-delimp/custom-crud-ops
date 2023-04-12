<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    <?php echo (empty($id)) ? 'Add Character' : 'Update Character'; ?>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="character_name" class="form-label">Character Name</label>
                            <input type="text" name="character_name" class="form-control" id="character_name"
                                value="<?php echo (!empty($value->character_name)) ? $value->character_name : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="character_title_choice" class="form-label">Character Title Choice</label>
                            <input type="text" name="character_title_choice" class="form-control" id="character_title_choice"
                                value="<?php echo (!empty($value->character_title_choice)) ? $value->character_title_choice : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="character_movie" class="form-label">Character Movie</label>
                            <select name="character_movie" class="form-control" id="character_movie"
                                value="<?php echo (!empty($value->character_movie)) ? $value->character_movie : ''; ?>">
                                <option value="1">Xyz Movie</option>
                                <option value="2">Abc Movie</option>
                                <option value="3">Pqr Movie</option>
                                <option value="4">Efg Movie</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="character_show" class="form-label">Character Show</label>
                            <select name="character_show" class="form-control" id="character_show"
                                value="<?php echo (!empty($value->character_show)) ? $value->character_show : ''; ?>">
                                <option value="1">Xyz</option>
                                <option value="2">Abc</option>
                                <option value="3">Pqr</option>
                                <option value="4">Efg</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="character_celebrity" class="form-label">Character Celebrity</label>
                            <select name="character_celebrity" class="form-control"
                                id="character_celebrity"><?php echo (!empty($value->character_celebrity)) ? $value->character_celebrity : ''; ?>
                                <option value="1">Xyz</option>
                                <option value="2">Abc</option>
                                <option value="3">Pqr</option>
                                <option value="4">Efg</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="character_primary" class="form-label">Character Primary</label>
                            <input type="number" name="character_primary" class="form-control" id="character_primary" value="<?php echo (!empty($value->character_primary) ? ($value->character_primary) : '') ?>">
                        </div>
                        <div class="mb-3">
                            <label for="character_primary" class="form-label">Character Description</label>
                            <textarea name="character_description" class="form-control" id="character_description">
                                <?php echo (!empty($value->character_description) ? ($value->character_description) : '') ?>
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="character_character" class="form-label">Character Character</label>
                            <select name="character_character" class="form-control"
                                id="character_character"><?php echo (!empty($value->character_character)) ? $value->character_character : ''; ?>
                                <option value="1">Xyz</option>
                                <option value="2">Abc</option>
                                <option value="3">Pqr</option>
                                <option value="4">Efg</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="movie_embeds" class="form-label">Character Images</label>
                            <input type="text" name="character_images" class="form-control" id="character_images" value="<?php echo (!empty($value->character_images)) ? $value->character_images : '';?>">
                        </div>
                        <div class="mb-3">
                            <label for="character_image_galleries" class="form-label">Character Image Galleries</label>
                            <input type="text" name="character_image_galleries" class="form-control" id="character_image_galleries" value="<?php echo (!empty($value->character_image_galleries)) ? $value->character_image_galleries : '';?>"> 
                        </div>
                        <div class="mb-3">
                            <label for="character_videos" class="form-label">Character Videos</label>
                            <input type="text" name="character_videos" class="form-control" id="character_videos"
                                value="<?php echo (!empty($value->character_videos)) ? $value->character_videos : '' ?>">
                        </div>
                        <div class="mb-3">
                            <label for="character_embeds" class="form-label">Character Embeds</label>
                            <input type="text" name="character_embeds" class="form-control" id="character_embeds"
                                value="<?php echo (!empty($value->character_embeds)) ? $value->character_embeds : '' ?>">
                        </div>
                        <div class="mb-3">
                            <label for="character_external_media" class="form-label">Character External Media</label>
                            <input type="text" name="character_external_media" class="form-control" id="character_external_media"
                                value="<?php echo (!empty($value->character_external_media)) ? $value->character_external_media : '' ?>">
                        </div>
                        <?php
                        if ($id) {
                        ?>
                            <input type="hidden" name="row_id" value="<?php echo $id; ?>">
                            <button type="submit" name="character_update" class="btn btn-primary">Update</button>
                        <?php
                        } else { 
                        ?>
                            <button type="submit" name="character_insert" class="btn btn-primary">Submit</button>
                            <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>