<?php require 'functions.php'; ?>
<?php get_header(); ?>

<section>
    <!-- Banner Section -->
    <div class="banner-blog wow animate__animated animate__fadeIn d-flex align-items-center justify-content-center">

        <div class="banner-blog-text">
            <div class="container">
                <div class="text-center neon-text">
                    <h1 class=" wow animate__animated animate__fadeInDown">Blog</h1>
                    <h5 class="wow animate__animated animate__fadeInUp">Dive into the World of Neon NFTs! Explore
                        insights, trends, and stories behind the art. Stay inspired and informed with our latest updates
                        and creative journeys.</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Основний контент -->
    <div class="mt-5">
        <div class="container mt-5">
            <div class="row align-items-center">
                <!-- Зображення -->
                <div class="col-md-6 wow animate__animated animate__fadeInLeft">
                    <div class="floating-image2">
                        <img class="img-fluid mx-auto d-block" src="images/rakieta.webp" alt="Floating Image">
                    </div>
                </div>
                <!-- Текст -->
                <div class="col-md-6 wow animate__animated animate__fadeInRight mt-4 mt-md-0">
                    <h3 class="text-primary">
                        Unleashing the Glow of Creativity – Where Neon Art Meets Digital Innovation. Explore the future
                        of NFTs with bold, luminous designs crafted to captivate and inspire!
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Posts Section -->
    <div class="center-blog-content">
        <div class="container blog-list mt-5 pb-5 content">
            <h2 class="text-center text-primary mb-4">Latest Posts</h2>
            <div class="row">
                <?php
                $posts = get_blog_posts(); // Предположимо, функція повертає масив постів
                if (!empty($posts)):
                    foreach ($posts as $post): ?>
                        <div class="col-12 col-sm-6 col-md-4 mb-4 wow animate__animated animate__fadeIn"
                            style="border-radius:30px;">
                            <a href="<?= $post['url']; ?>" class="text-decoration-none">
                                <div class="post-card p-4 h-100 shadow-sm ">
                                    <img src="<?= $post['image']; ?>" class="post-card-img-top img-fluid"
                                        alt="<?= $post['title']; ?>">
                                    <div class="post-card-body">
                                        <h5 class="post-card-title general-text-color"><?= $post['title']; ?></h5>
                                        <p class="post-card-text general-text-color"><?= $post['excerpt']; ?></p>
                                        <a href="<?= $post['url']; ?>" class="neon-button">Read More</a>
                                    </div>
                                </div>

                            </a>
                        </div>
                    <?php endforeach;
                else: ?>
                    <p class="text-center w-100">No posts available.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>