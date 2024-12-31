<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<?php the_post(); ?>

<?php
  $title = get_the_title();
  $page_header = get_field('page_header');
  $hero_body = $page_header['body'];
?>

<?php get_template_part(
  'template-parts/page-header',
  null,
  array(
    'title' => $title,
    'body' => $hero_body
  )
); ?>

<?php get_footer(); ?>
