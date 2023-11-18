<?php /* Template Name: Blog Template */ ?>
<?php get_header(); ?>



    <main>
        <section>
            <div class="container">
                <div class="post-content">
                    <div class="pc-title">
                        <time datetime="2023-11-18" pubdate>November 18, 2023</time>
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    </main>


<?php get_footer(); ?>