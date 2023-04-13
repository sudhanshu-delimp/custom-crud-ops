<?php
global $wpdb;
$table_name = "wp_custom_models";
$query = "SELECT * FROM {$table_name}";
$models = $wpdb->get_results($query);

?>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    <?php echo (empty($id)) ? 'Add Relationship' : 'Update Relationship'; ?>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                    <div class="mb-3">
                            <label for="post_title" class="form-label">Relationship Name</label>
                            <input type="text" name="post_title" class="form-control" id="post_title" value="<?php echo (!empty($value[0]->post_title)) ? $value[0]->post_title : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="movie_name" class="form-label">Post Type</label>
                            <select name="post_type_from" id="post_type_from">
                                <option>Select</option>
                               
                                <?php
                                    foreach($models as $model) {
                                        if($model->id == $value[1]->from){
                                            $sel = 'selected';
                                        }
                                        else{
                                            $sel = '';
                                        }
                                        echo "<option $sel value='$model->id'>$model->model_name</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="movie_imdb_id" class="form-label">Post Type</label>
                            <select name="post_type_to" id="post_type_to">
                                <option value="">Select</option>
                                <?php
                                    foreach($models as $model) {
                                        if($model->id == $value[1]->to){
                                            $sel = 'selected';
                                        }
                                        else{
                                            $sel = '';
                                        }
                                        echo "<option $sel value='$model->id'>$model->model_name</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <?php
                        if ($id) {
                        ?>
                            <input type="hidden" name="row_id" value="<?php echo $id; ?>">
                            <button type="submit" name="relation_update" class="btn btn-primary">Update Relation</button>
                        <?php
                        } else {
                        ?>
                            <button type="submit" name="relation_insert" class="btn btn-primary">Create Relation</button>
                        <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>