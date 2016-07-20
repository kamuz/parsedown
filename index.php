<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Index</title>
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/solarized-light.css">
  <script src="assets/js/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
</head>
<body>
  <?php
  require_once 'libs/Parsedown.php';
  $parsedown = new Parsedown();
  $text = file_get_contents('docs/events.md');
  echo $parsedown->text($text);
  ?>
</body>
</html>