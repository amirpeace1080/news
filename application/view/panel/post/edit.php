<?php

$this->include('panel.layouts.header');

?>
<form action="<?php $this->url('post/update/' . $post['id']) ?>" method="post">
    <section class="form-group">
        <label for="name">name</label>
        <input type="text" name="name" id="name" value="<?php echo $post['name'] ?>" class="form-control" required placeholder="name...">
    </section>

    <section class="form-group">
        <label for="description">description</label>
        <input type="text" name="description" id="description" value="<?php echo $post['description']  ?>" class="form-control" required placeholder="description...">
    </section>

    <button type="submit" class="btn btn-primary">updated</button>
</form>

<?php
    $this->include('panel.layouts.footer');
?>
