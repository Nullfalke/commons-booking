

<div class="cb-headline"><?php echo __('Welcome, stranger!', $this->plugin_slug ); ?> </div>
<p><?php echo __('If you don´t have an account, please register here: ', $this->plugin_slug ); ?><a href="<?php echo wp_registration_url(); ?>">Register</a></p>
<div class="cb-login cb-box">
   <?php wp_login_form( $args ); ?>
 </div>