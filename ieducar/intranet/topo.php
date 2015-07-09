<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/bootstrap.php';
  $entityName = $GLOBALS['coreExt']['Config']->app->entity->name;
  $logoUrl = $GLOBALS['coreExt']['Config']->modules->app_report->logo_url;

  if (! $logoUrl) {
    $logoUrl = '/modules/Reports/ReportLogos/' . $GLOBALS['coreExt']['Config']->report->logo_file_name;
  }
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel=stylesheet type='text/css' href='styles/reset.css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel=stylesheet type='text/css' href='styles/header.css' />
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
