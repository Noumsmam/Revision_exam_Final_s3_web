<?php
// Use the application-generated CSP nonce (set in config.php)
// SecurityHeadersMiddleware already sends the CSP header.
$nonce = '';
if (class_exists('\Flight')) {
  $nonce = \Flight::get('csp_nonce') ?? '';
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?? 'Takalo Takalo' ?></title>
  <link rel="stylesheet" href="/assets/css/style2.css">
  <link rel="stylesheet" href="/assets/css/main.css">
</head>

<body>
  <?php
  $requestPath = $_SERVER['REQUEST_URI'] ?? '/';
  $requestPath = parse_url($requestPath, PHP_URL_PATH);
  $firstSegment = trim(explode('/', trim($requestPath, '/'))[0] ?? '');
  $noLayout = in_array(strtolower($firstSegment), ['', 'inscription']);
  if (!$noLayout) {
    include 'fragments/header-admin.html';
  }
  ?>

  <main id="view-content">
    <?= $content ?>
  </main>

  <?php if (!$noLayout) { include 'fragments/footer-admin.html'; } ?>

  <script src="/assets/vendor/jquery/jquery-3.2.1.min.js" nonce="<?= $nonce ?>"></script>
  <script src="/assets/vendor/bootstrap/js/popper.js" nonce="<?= $nonce ?>"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.min.js" nonce="<?= $nonce ?>"></script>
  <script src="/assets/vendor/select2/select2.min.js" nonce="<?= $nonce ?>"></script>
  <script src="/assets/vendor/tilt/tilt.jquery.min.js" nonce="<?= $nonce ?>"></script>
  <script src="/assets/js/main.js" nonce="<?= $nonce ?>"></script>
  <script src="/assets/js/includes.js" nonce="<?= $nonce ?>"></script>
  <script nonce="<?= $nonce ?>">
    document.addEventListener('DOMContentLoaded', function() {
        $('.js-tilt').tilt({
            scale: 1.1
        });
    });
  </script>
</body>

</html>