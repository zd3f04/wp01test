<?php get_header(); ?>
<h2>SFTP TEST</h2>
      <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
      <article class="post">
         <h2>
            <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
         </h2>
         <p class="postmeta">
            Posted in <?php the_category(', '); ?> |
            <?php echo get_the_date(); ?> |
            <a href="<?php comments_link(); ?>">
            <?php echo get_comments_number(); ?> comments</a>
         </p>
         <div class="entry">
            <?php the_content("（続きを読む...）"); ?>
         </div>
      </article><!-- post -->
      <?php endwhile; ?>
      <?php endif; ?>
      <footer>
      <?php if (is_single()): ?>
        <div  id="link">
          <?php previous_post_link('前の記事：%link'); ?>
          <?php next_post_link('次の記事：%link'); ?>
        </div>
        <?php comments_template(); ?>
        <?php if (pings_open()): ?>
          <div id="trackback">
            <p>トラックバックURL</p>
            <p><input type="text" value="<?php trackback_url(); ?>"></p>
          </div>
        <?php endif; ?>
      <?php else: ?>
        <div  id="link">
          <?php previous_posts_link(); ?>
          <?php next_posts_link(); ?>
        </div>
      <?php endif; ?>
      </footer>
<?php get_footer(); ?>