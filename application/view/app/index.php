<?php
$this->include('panel.layouts.header',['categories'=> $categories]);
?>

<section class="container my-5 ">
    <section class="row">
        <section class="col-md-12">
            <h1><?php $post['title'] ?></h1>
            <h5 class="d-flex-justify-content-between align-items-center">
                <a href="<?php $this->url('/home/category/' . $post['id']) ?>">
                    <?php echo $post['category'] ?>
                </a>
                <span class="date-time">
                    <?php echo $post['created_at'] ?>
                </span>
            </h5>
            <article class="bg-article p-3">
                <p>
                    <?php echo $post['body'] ?>
                </p>
            </article>
        </section>
    </section>
</section>

<?php
    $this->include('panel.layouts.footer');
?>

?>