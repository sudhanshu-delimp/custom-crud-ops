<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    <?php echo (empty($id)) ? 'Add Import' : 'Update Import'; ?>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title"
                                value="<?php echo (!empty($value->title)) ? $value->title : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input type="text" name="status" class="form-control" id="status"
                                value="<?php echo (!empty($value->status)) ? $value->status : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="post_status" class="form-label">Post Status</label>
                            <input type="text" name="post_status" class="form-control" id="post_status"
                                value="<?php echo (!empty($value->post_status)) ? $value->post_status : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="get_status" class="form-label">Get Status</label>
                            <input type="text" name="get_status" class="form-control" id="get_status"
                                value="<?php echo (!empty($value->get_status)) ? $value->get_status : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="finished_at" class="form-label">Created At</label>
                            <input type="number" name="created_at" class="form-control" id="created_at"
                                value="<?php echo (!empty($value->created_at)) ? $value->created_at : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="started_at" class="form-label">Started At</label>
                            <input type="number" name="started_at" class="form-control" id="started_at"
                                value="<?php echo (!empty($value->started_at)) ? $value->started_at : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="finished_at" class="form-label">Finished At</label>
                            <input type="number" name="finished_at" class="form-control" id="finished_at"
                                value="<?php echo (!empty($value->finished_at)) ? $value->finished_at : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="input_parameters" class="form-label">Input Parameters</label>
                            <textarea name="input_parameters" class="form-control" id="input_parameters">
                                 <?php echo (!empty($value->input_parameters) ? ($value->input_parameters) : '') ?>
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="endpoint" class="form-label">Endpoint</label>
                            <input type="text" name="endpoint" class="form-control" id="endpoint"
                                value="<?php echo (!empty($value->endpoint)) ? $value->endpoint : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="error" class="form-label">Error</label>
                            <input type="text" name="error" class="form-control"
                                id="error"><?php echo (!empty($value->error)) ? $value->error : ''; ?>
                        </div>
                        <div class="mb-3">
                            <label for="robot_id" class="form-label">Robot Id</label>
                            <input type="text" name="robot_id" class="form-control"
                                id="robot_id"><?php echo (!empty($value->robot_id)) ? $value->robot_id : ''; ?>
                        </div>
                        <div class="mb-3">
                            <label for="bulk_run_id" class="form-label">Bulk Run Id</label>
                            <input type="text" name="bulk_run_id" class="form-control" id="bulk_run_id" value="<?php echo (!empty($value->bulk_run_id))?$value->bulk_run_id:'';?>">
                        </div>
                        <div class="mb-3">
                            <label for="task_count" class="form-label">Task Count</label>
                            <input type="number" name="task_count" class="form-control" id="task_count" value="<?php echo (!empty($value->task_count)) ? $value->task_count : '';?>"> 
                        </div>
                        <div class="mb-3">
                            <label for="captured_texts" class="form-label">Captured Texts</label>
                            <textarea name="captured_texts" class="form-control" id="captured_texts">
                                 <?php echo (!empty($value->captured_texts) ? ($value->captured_texts) : '') ?>
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="captured_lists" class="form-label">Captured Lists</label>
                            <textarea name="captured_lists" class="form-control" id="captured_lists">
                                 <?php echo (!empty($value->captured_lists) ? ($value->captured_lists) : '') ?>
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="captured_screenshots" class="form-label">Captured Screenshots</label>
                            <textarea name="captured_screenshots" class="form-control" id="captured_screenshots">
                                 <?php echo (!empty($value->captured_screenshots) ? ($value->captured_screenshots) : '') ?>
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="video_recording" class="form-label">Video Recording</label>
                            <input type="text" name="video_recording" class="form-control" id="video_recording"
                                value="<?php echo (!empty($value->video_recording)) ? $value->video_recording : '' ?>">
                        </div>
                        <?php
                        if ($id) {
                        ?>
                            <input type="hidden" name="row_id" value="<?php echo $id; ?>">
                            <button type="submit" name="import_update" class="btn btn-primary">Update</button>
                        <?php
                        } else { 
                        ?>
                            <button type="submit" name="import_insert" class="btn btn-primary">Submit</button>
                            <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>