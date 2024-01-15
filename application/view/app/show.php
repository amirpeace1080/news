<?php $this->include('app.layouts.header' , ['categories' => $categories]); ?>

<section class="container my-5">
    <section class="row">
        <section class="col-md-12">
            <h1><?php echo $post['title'] ?></h1>
            <h5 class="d-flex-justify-content-between align-item-center">
                <a href="<?php $this->url('/home/category/' . $post['cat_id']) ?>">
                    <?php $post['category'] ?>
                </a>
                <span class="date_time"><?php $post['created_at'] ?></span>
            </h5>
            <article class="bg-article p-3">
                <p>
                    <?php echo $post['body'] ?>
                </p>
            </article>
        </section>
    </section>
</section>

<?php $this->include('app.layouts.footer'); ?>