<?php $this->include('panel.layouts.header'); ?>

<section class="mb-2 d-flex justify-content-between align-items-center ">
    <h2 class="h4">category</h2>
    <a href="<?php $this->url('category/create')  ?>" class="btn btn-sm btn-success">create</a>    
</section>
<section class="table-reponsive">
    <table class="table table-striped table-">
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>description</th>
                <th>setting</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($categories as $category){ ?>
            <tr>
                <td><?php echo $category['id'] ?></td>
                <td><?php echo $category['name'] ?></td>
                <td><?php echo $category['description'] ?></td>
                <td>
                    <a href="<?php $this->url('category/edit' . $category['id']) ?>" class="btn btn-info btn-sm">edit</a>
                    <a href="<?php $this->url('category/destroy' . $category['id']) ?>" class="btn btn-danger btn-sm">delete</a>

                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</section>

<?php $this->include('panel.layouts.footer'); ?>