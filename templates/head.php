<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php global $wp; $current_url = home_url(add_query_arg(array(),$wp->request)); ?>
  <link rel="canonical" href="<?php echo $current_url; ?>" />
  <script type="text/javascript">
    if (window.location.protocol != "https:") {
      window.location.href = "https:" + window.location.href.substring(window.location.protocol.length);
    }
  </script>

  <?php wp_head(); ?>

</head>
