<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>

<?php
if ( is_singular() && has_post_thumbnail( $post->ID ) ) {
  $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
?>

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@arikan" />
<meta name="twitter:title" content="<?php the_title(); ?> - Burak Arikan" />
<meta name="twitter:description" content="<?php the_excerpt(); ?>" />
<meta name="twitter:image" content="<?= $large_image_url[0] ?>" />
<meta name="twitter:url" content="<?php the_permalink(); ?>" />
<meta name="twitter:image:src" content="<?= $large_image_url[0] ?>">
<meta name="twitter:domain" content="http://burak-arikan.com">

<meta property="og:url" content="<?php the_permalink(); ?>" />
<meta property="og:title" content="<?php the_title(); ?> - Burak Arikan" />
<meta property="og:description" content="<?php the_excerpt(); ?>" />
<meta property="og:image" content="<?= $large_image_url[0] ?>" />

<?php } else { ?>
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@arikan" />
    <meta name="twitter:title" content="Burak Arikan" />
    <meta name="twitter:description" content="<?php the_excerpt(); ?>" />
    <meta name="twitter:image" content="<?= $large_image_url[0] ?>" />
    <meta name="twitter:url" content="<?php the_permalink(); ?>" />
    <meta name="twitter:image:src" content="<?= $large_image_url[0] ?>">
    <meta name="twitter:domain" content="http://burak-arikan.com">

    <meta property="og:url" content="<?php the_permalink(); ?>" />
    <meta property="og:title" content="Burak Arikan" />
    <meta property="og:description" content="<?php the_excerpt(); ?>" />
    <meta property="og:image" content="<?= $large_image_url[0] ?>" />
<?php } ?>
</head>
