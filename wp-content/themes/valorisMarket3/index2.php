<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title><?php wp_title(''); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
  <?php wp_head(); ?>
</head>
<body>

  <header id="header">
      <h1><?php echo bloginfo('name'); ?></h1>
      <?php bloginfo('stylesheet_url'); ?>
      <nav id="navigation">
      </nav>
  </header>

  <div id="wrap">
      <section id="content">
      </section>

      <aside id="sidebar">
      </aside>
  </div>

  <footer id="footer">
  </footer>

  <?php wp_footer(); ?>
</body>
</html>