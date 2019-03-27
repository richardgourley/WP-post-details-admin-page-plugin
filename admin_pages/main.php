<div style="background-color: white; padding:17px; margin-right:17px; border-radius:10px; margin-top:10px;">
<?php global $current_user; ?>
<h1 style='padding:15px; border: 2px solid grey; margin-right:13px;'>Hello there <span style='border-radius:3px;padding:9px;color:white; background-color: lightblue'><?php echo $current_user->user_nicename; ?></span></h1>
<h1 style='text-align: center'>Welcome to WP Post Details</h1>

<div style="display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  width: 100%;">
<div style="display: flex;
  flex-direction: column;
  flex-basis: 100%;
  flex: 1;">
<h2>See your recent posting activity</h2>
<form action="<?php echo esc_url( admin_url('admin.php?page=wp-post-details')); ?>" method="post">
   <input type="hidden" name="action" value="last_five_posts">
   <input type="hidden" name="last_five_posts" value="1">
   <input type="submit" name="submit" id="submit" value="Get last 5 posts">
</form>

<form action="<?php echo esc_url( admin_url('admin.php?page=wp-post-details')); ?>" method="post">
   <input type="hidden" name="action" value="last_post">
   <input type="hidden" name="last_post" value="1">
   <input type="submit" name="submit" id="submit" value="Get last post">
</form>
</div>

<div style="display: flex;
  flex-direction: column;
  flex-basis: 100%;
  flex: 1;">
<h2>See how many posts you have</h2>
<form action="<?php echo esc_url( admin_url('admin.php?page=wp-post-details')); ?>" method="post">
   <input type="hidden" name="action" value="num_posts_category">
   <input type="hidden" name="num_posts_category" value="1">
   <input type="submit" name="submit" id="submit" value="Get number of posts per category">
</form>

<form action="<?php echo esc_url( admin_url('admin.php?page=wp-post-details')); ?>" method="post">
   <input type="hidden" name="action" value="num_posts_post_type">
   <input type="hidden" name="num_posts_post_type" value="1">
   <input type="submit" name="submit" id="submit" value="Get number of posts by post type">
</form>
</div>

<div style="display: flex;
  flex-direction: column;
  flex-basis: 100%;
  flex: 1;">
<h2>See how long it's been since you posted somewhere</h2>
<form action="<?php echo esc_url( admin_url('admin.php?page=wp-post-details')); ?>" method="post">
   <input type="hidden" name="action" value="since_last_post_type">
   <input type="hidden" name="since_last_post_type" value="1">
   <input type="submit" name="submit" id="submit" value="Days since you last published for a post type">
</form>
</div>
</div>

