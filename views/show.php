<div class="content-header">
    <div class="container mt-4" style = "width: 70%">
        <div class = "flex justify-content-between">
            <div class="mb-3">
                <a href="<?= DOM ?>" class="btn btn-success">Back</a>
            </div>
        </div>
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
            <tr>
                <th>Image</th>
            </tr>
            </thead>
            <tbody >
                <tr>
                    <td>
                        <img src="<?=DOM . 'public/upload/' . $data['original']?>"/>
                        <img src="<?=DOM . 'public/upload/' . $data['new']?>"/>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
