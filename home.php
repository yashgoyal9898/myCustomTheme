<?php /* Template Name: Custom Home Template */ ?>
<?php get_header(); ?>

<main>
  <section class="banner-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5">
          <div class="banner-right">
            <span class="sub-heading">Best Destinations around the world</span>
            <h1>Travel, enjoy and live a new and full life</h1>
            <p>Built Wicket longer admire do barton vanity itself do in it. Preferred to sportsmen it engrossed listening. Park gate sell they west hard for the.</p>
            <div class="banner-btns">
              <a href="#" class="banner-btn">Find out more</a>
              <div class="banner-btn-second">
                <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-play-button.svg" alt=""></div>
                <a href="#">Play Demo</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7 bannerLeftImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-image.webp" alt="banner image"></div>
      </div>
    </div>
  </section>
  <section>
        <div class="container">
            <div class="blog-content">
                    <h2>All Blog Post</h2>
                    <div class="row gy-4">
                <?php 
                    $posts = get_posts(array(
                        'post_type'      => 'post', // Retrieves only posts
                        'posts_per_page' => 6,     // Limits to 5 posts (adjust as needed)
                    ));
                    foreach ($posts as $post) {
                        $current_date = date_i18n('Y-m-d', current_time('timestamp')); // Retrieves the current date in YYYY-MM-DD format
                ?>
                    <div class="col-md-4">
                        <div class="bp-content">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-images.png" alt="">
                            </div>
                            <time><?php echo $current_date; ?></time>
                            <a href="<?php the_permalink(); ?>"><h3><?php echo $post->post_title; ?></h3></a>
                            <p>Like to know the secrets of transforming a 2-14 team into a 3x Super Bowl winning Dynasty?</p>
                        </div>
                    </div>
                <?php 
                }
                ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>