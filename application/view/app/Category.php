<?php $this->include('app.layouts.header' , ['categories' => $categories]); ?>

<section class="container my-5">
    <section class="row">
        <section class="col-12">
            <h1><?php echo $category['name'] ?></h1>
            <hr>            
        </section>
    </section>
    <section class="row">
        <?php foreach($posts as $post){ ?>
            <section class="col-md-4">
                <h2 style="font-size: 1.2rem; font-weight: bold;">
                    <?php echo $post['title'] ?>
                </h2>
                <p>
                    <?php echo substr($post['body'],0, 120); ?>                    
                </p>
                <p>
                    <a role="button" class="btn btn-primary" href="<?php $this->url('home/show/'. $post['id']); ?>">
                        view details
                    </a>
                </p>
            </section>
         <?php } ?>   
    </section>
</section>

<?php $this->include('app.layouts.footer'); ?>