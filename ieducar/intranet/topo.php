<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/bootstrap.php';
  $entityName = $GLOBALS['coreExt']['Config']->app->entity->name;
  $logoFileName = $GLOBALS['coreExt']['Config']->report->logo_file_name;
  $logoUrl = '/modules/Reports/ReportLogos/' . $logoFileName;
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel=stylesheet type='text/css' href='styles/reset.css' />
    <link rel=stylesheet type='text/css' href='styles/header.css' />
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
  </head>

  <body>
    <div class="header">
        <a class="logo" href="/">iEducar</a>
        <span class="entity">
          <img src="<?php echo $logoUrl; ?>" alt="brasao" />
          <?php echo $entityName; ?>
        </span>
    </div>
  </body>
</html>
