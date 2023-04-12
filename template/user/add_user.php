<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    <?php echo (empty($id)) ? 'Add Account' : 'Update Account'; ?>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="<?php echo (!empty($value)) ? $value->name : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" value="<?php echo (!empty($value)) ? $value->email : ''; ?>" aria-describedby="emailHelp">
                        </div>
                        <?php
                        if ($id) {
                        ?>
                            <input type="hidden" name="row_id" value="<?php echo $id; ?>">
                            <button type="submit" name="update" class="btn btn-primary">Update</button>
                        <?php
                        } else {
                        ?>
                            <button type="submit" name="insert" class="btn btn-primary">Submit</button>
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