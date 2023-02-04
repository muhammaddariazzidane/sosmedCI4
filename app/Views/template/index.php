<!DOCTYPE html>
<html data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Title</title>
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">

  <style>
    * {
      font-family: 'Karla', sans-serif;
    }

    a {
      color: #9ca3af;
      text-decoration: none !important;
    }

    .bg-primary {
      background-color: #9333ea !important;
    }

    .ic {
      transform: rotate(90deg) !important;
      display: inline-block;
    }
  </style>
</head>

<body>
  <?= $this->include('components/navbar') ?>
  <?= $this->include('components/formCreate') ?>

  <?= $this->renderSection('main') ?>

  <script src="/js/bootstrap.bundle.js"></script>
</body>

</html>