<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<?php the_post(); ?>

<?php get_template_part('template-parts/home/hero')?>
<?php get_template_part('template-parts/home/body1')?>
<?php get_template_part('template-parts/home/body2')?>
<?php get_template_part('template-parts/donate-cta')?>

<?php get_footer(); ?>
