<?php

$this->include('panel.layouts.header');

?>
<form action="<?php $this->url('post/update/' . $post['id']) ?>" method="post">
    <section class="form-group">
        <label for="title">title</label>
        <input type="text" name="title" id="title" value="<?php echo $post['title'] ?>" class="form-control" required placeholder="name...">
    </section>
    <section class="form-group">
        <label for="catid">catid</label>
        <input type="text" name="cat_id" id="cat_id" class="form-control" required value="2">        
    </section>
    <section class="form-group">
        <label for="description">description</label>
        <input type="text" name="body" id="body" value="<?php echo $post['body']  ?>" class="form-control" required placeholder="description...">
    </section>

    <button type="submit" class="btn btn-primary">updated</button>
</form>

<?php
    $this->include('panel.layouts.footer');
?>
