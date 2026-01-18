<?php get_header(); ?>

<div class="container-404">
    <h2 class="page-heading">oh! what?? 404?</h2>
    <img src="<?php echo get_template_directory_uri(); ?>/img/cat.jpg"/>

   <h3>Sorry, I think you're lost. plz try the following links.</h3> 

   <ul>
    <li><a href="<?php echo site_url('/blog') ?>">Blog List</a></li>
    <li><a href="<?php echo site_url('/projects') ?>">Projects List</a></li>
    <li><a href="<?php echo site_url('/about') ?>">About Me</a></li>
    <li><a href="<?php echo site_url('') ?>">Home Page</a></li>
   </ul>

</div>

<?php get_footer(); ?>