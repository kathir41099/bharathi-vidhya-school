
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bharath Nursery & Primary School</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/admission.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/rules.css">

</head>
<body>
<?php include "includes/header.php"; ?>
<?php
$boys_uniform = [
    ["Monday", "White shirt & White Half Pant", "White & White"],
    ["Tuesday", "White shirt & Grey Half Pant", "Black & Black"],
    ["Wednesday", "White shirt & Grey Half Pant", "Black & Black"],
    ["Thursday", "White shirt & Grey Half Pant", "Black & Black"],
    ["Friday", "House T-Shirt & White Half Pant", "White & White"],
];

$girls_uniform = [
    ["Monday", "White shirt & White Half Skirt", "White & White", "White"],
    ["Tuesday", "White shirt & Grey Half Skirt", "Black & Black", "Black"],
    ["Wednesday", "White shirt & Grey Half Skirt", "Black & Black", "Black"],
    ["Thursday", "White shirt & Grey Half Skirt", "Black & Black", "Black"],
    ["Friday", "House T-Shirt & White Half Skirt", "White & White", "White"],
];
?>
<!-- Banner Section -->
<section class="about-banner">
    <h1>School Uniform</h1>
    <div class="breadcrumb-area">
        <a href="index.php">Home</a> &nbsp; ➜ &nbsp; <span>Rules</span>
    </div>
</section>

<!-- About Content Section -->
<div class="container py-5">
    <div class="container mb-5">

        <p class="top-label">Uniform</p>
        <h2 class="section-title mb-3">School Uniform</h2>
        <p>In all working days students must has to come to school in Neat & Clean regular School Uniform.</p>
    </div>
    <div class="row align-items-center">

        <h2 class="section-title">Boys</h2>
<table>
    <tr>
        <th>Days</th>
        <th>Uniform</th>
        <th>Shoes & Socks</th>
    </tr>
    <?php foreach ($boys_uniform as $row): ?>
    <tr>
        <td><?= $row[0] ?></td>
        <td><?= $row[1] ?></td>
        <td><?= $row[2] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<h2 class="section-title ">Girls</h2>
<table>
    <tr>
        <th>Days</th>
        <th>Uniform</th>
        <th>Shoes & Socks</th>
        <th>Ribbon</th>
    </tr>
    <?php foreach ($girls_uniform as $row): ?>
    <tr>
        <td><?= $row[0] ?></td>
        <td><?= $row[1] ?></td>
        <td><?= $row[2] ?></td>
        <td><?= $row[3] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

    </div>
</div>


<?php include "includes/footer.php"; ?>