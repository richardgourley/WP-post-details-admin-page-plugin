<div style="background-color: white; padding:17px; margin-right:17px; border-radius:10px; margin-top:10px;">
<?php global $current_user; ?>
<h1 style='padding:15px; border: 2px solid grey; margin-right:13px;'>Hello there <span style='border-radius:3px;padding:9px;color:white; background-color: lightblue'><?php echo $current_user->user_nicename; ?></span></h1>
<h1 style='text-align: center'>Welcome to WP Post Details</h1>

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

