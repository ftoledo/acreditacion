<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php use_stylesheet('/sfDoctrinePlugin/css/global.css', 'first') ?> 
    <?php use_stylesheet('/sfDoctrinePlugin/css/default.css', 'first') ?> 
    <?php use_stylesheet('superfish.css')?>

    <?php use_javascript('jquery-1.4.4.min.js')?>
    <?php use_javascript('hoverIntent.js')?>
    <?php use_javascript('superfish.js')?>
    
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <?php if ($sf_user->isAuthenticated()):?>
        <?php include_partial ('global/menu')?>
    <?php endif;?>
    <?php echo $sf_content ?>
  </body>
</html>
