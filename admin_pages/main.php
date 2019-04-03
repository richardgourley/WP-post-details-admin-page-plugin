<div class="wppd_main_page_div">

<div class="wppd_main_page_greeting">
<h1>Hello there <span class="wppd_username_box"><?php echo esc_html(wp_get_current_user()->user_nicename); ?></span></h1>
</div>
<div class="wppd_main_page_header">
<h1 class="wppd_main_page_header_font">Welcome to WP Post Details</h1>
</div>

<div class="wppd_menu_buttons_wrapper">
<div class="wppd_row">
<div class="wppd_column">

<h2>See your recent posting activity</h2>
<form action="<?php echo esc_url( admin_url('admin.php?page=wp-post-details')); ?>" method="post">
   <input type="hidden" name="action" value="last_five_posts">
   <input type="hidden" name="last_five_posts" value="1">
   <input type="submit" name="submit" id="submit" value="5 most recent posts">
   <?php wp_nonce_field( 'last_five_posts_action', 'last_five_posts_nonce' ); ?>
</form>

<form action="<?php echo esc_url( admin_url('admin.php?page=wp-post-details')); ?>" method="post">
   <input type="hidden" name="action" value="last_post">
   <input type="hidden" name="last_post" value="1">
   <input type="submit" name="submit" id="submit" value="Most recent post">
   <?php wp_nonce_field( 'last_post_action', 'last_post_nonce' ); ?>
</form>
</div>

<div class="wppd_column">
<h2>See how many posts you have</h2>
<form action="<?php echo esc_url( admin_url('admin.php?page=wp-post-details')); ?>" method="post">
   <input type="hidden" name="action" value="num_posts_category">
   <input type="hidden" name="num_posts_category" value="1">
   <input type="submit" name="submit" id="submit" value="Number of posts per category">
   <?php wp_nonce_field( 'num_posts_category_action', 'num_posts_category_nonce' ); ?>
</form>

<form action="<?php echo esc_url( admin_url('admin.php?page=wp-post-details')); ?>" method="post">
   <input type="hidden" name="action" value="num_posts_post_type">
   <input type="hidden" name="num_posts_post_type" value="1">
   <input type="submit" name="submit" id="submit" value="Number of posts per post type">
   <?php wp_nonce_field( 'num_posts_post_type_action', 'num_posts_post_type_nonce' ); ?>

</form>
</div>

<div class="wppd_column">
<h2>See how long it's been since you posted somewhere</h2>
<form action="<?php echo esc_url( admin_url('admin.php?page=wp-post-details')); ?>" method="post">
   <input type="hidden" name="action" value="since_last_post_type">
   <input type="hidden" name="since_last_post_type" value="1">
   <input type="submit" name="submit" id="submit" value="Number of days per post type">
   <?php wp_nonce_field( 'since_last_post_type_action', 'since_last_post_type_nonce' ); ?>

</form>

<form action="<?php echo esc_url( admin_url('admin.php?page=wp-post-details')); ?>" method="post">
   <input type="hidden" name="action" value="since_last_post_category">
   <input type="hidden" name="since_last_post_category" value="1">
   <input type="submit" name="submit" id="submit" value="Number of days per category type">
   <?php wp_nonce_field( 'since_last_post_category_action', 'since_last_post_category_nonce' ); ?>

</form>

</div>

</div><!----End row--->

</div><!----End wrapper--->

</div><!---End main div--->
