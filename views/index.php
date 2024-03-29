<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="container mt-5" style = "width : 30%;">
                <form action="<?= DOM ?>index/upload" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="mt-3">
                        <label class="form-label">Upload Image</label>
                        <input class="form-control" type="file" name="image">
                    </div>
                    <div class="mt-5">
                        <button type="submit" name="uploadImage" class="form-control btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>