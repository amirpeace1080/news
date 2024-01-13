<?php

$this->include('panel.layouts.header');

?>
<form action="<?php $this->url('category/store') ?>" method="post">
    <section class="form-group">
        <label for="name">name</label>
        <input type="text" name="name" id="name" class="form-control" required placeholder="name...">
    </section>

    <section class="form-group">
        <label for="description">description</label>
        <input type="text" name="description" id="description" class="form-control" required placeholder="description...">
    </section>

    <button type="submit" class="btn btn-primary">created</button>
</form>

<?php
    $this->include('panel.layouts.footer');
?>
