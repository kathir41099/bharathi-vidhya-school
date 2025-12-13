<?php
// No redirects here — just clean PHP start
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bharathi Vidyalaya Nursery & Primary School</title>

      <link rel="shortcut icon" href="assets/img/logo1.png" type="image/png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Project CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- HEADER -->
<?php include "includes/header.php"; ?>

<!-- MAIN CONTENT -->
<section class="container text-center py-5">
    <h1 class="fw-bold">Welcome to Bharathi Vidyalaya</h1>
    <p class="lead">Nursery & Primary School</p>
    <p class="text-muted">Learn • Grow • Shine</p>
</section>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3 mt-4">
    © <?= date("Y") ?> Bharathi Vidyalaya Nursery & Primary School. All Rights Reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>window.location='home.php'</script>
</body>
</html>
