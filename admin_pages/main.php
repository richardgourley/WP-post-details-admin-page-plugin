<div style="background-color: white; padding:17px; margin-right:17px; border-radius:10px; margin-top:10px;">
<?php global $current_user; ?>
<h1 style='padding:22px; margin-right:13px;'>Hello there <span style='border-radius:3px;padding:9px;color:white; background-color: #2e3b48'><?php echo $current_user->user_nicename; ?></span></h1>
<div style="text-align: center; background-color: #2a4d6e; padding:10px; color:white; border-radius:2px;
margin-left:39px; margin-right:39px; margin-top:20px; margin-bottom: 20px;">
<h1 style="text-align: center; color:white; font-size:220%;">Welcome to WP Post Details</h1>
</div>

<div style="padding:20px;">
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
   <input type="submit" name="submit" id="submit" value="5 most recent posts">
</form>

<form action="<?php echo esc_url( admin_url('admin.php?page=wp-post-details')); ?>" method="post">
   <input type="hidden" name="action" value="last_post">
   <input type="hidden" name="last_post" value="1">
   <input type="submit" name="submit" id="submit" value="Most recent post">
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
   <input type="submit" name="submit" id="submit" value="Number of posts per category">
</form>

<form action="<?php echo esc_url( admin_url('admin.php?page=wp-post-details')); ?>" method="post">
   <input type="hidden" name="action" value="num_posts_post_type">
   <input type="hidden" name="num_posts_post_type" value="1">
   <input type="submit" name="submit" id="submit" value="Number of posts per post type">
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
   <input type="submit" name="submit" id="submit" value="Number of days per post type">
</form>

<form action="<?php echo esc_url( admin_url('admin.php?page=wp-post-details')); ?>" method="post">
   <input type="hidden" name="action" value="since_last_post_category">
   <input type="hidden" name="since_last_post_category" value="1">
   <input type="submit" name="submit" id="submit" value="Number of days per category type">
</form>

</div>
</div>
</div>

