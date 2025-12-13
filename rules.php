
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bharath Nursery & Primary School</title>

    <link rel="shortcut icon" href="assets/img/logo1.png" type="image/png">
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
$boys_uniform_lkg_ukg = [
    ["Monday", "Green Shirt and Drawer", "White & White"],
    ["Tuesday", "Green Shirt and Drawer", "Black & Black"],
    ["Wednesday", "Green Shirt and Drawer", "Black & Black"],
    ["Thursday", "Green Shirt and Drawer", "Black & Black"],
    ["Friday", "Pink Shirt and Drawer", "White & White"],
    ["Saturday", "Colour Dress", "White & White"],
];

$boys_uniform_1_2 = [
    ["Monday", "Violet Shirt and Drawer", "White & White"],
    ["Tuesday", "Violet Shirt and Drawer", "Black & Black"],
    ["Wednesday", "Violet Shirt and Drawer", "Black & Black"],
    ["Thursday", "Violet Shirt and Drawer", "Black & Black"],
    ["Friday", "Yellow Shirt and Green Pant", "White & White"],
    ["Saturday", "Colour Dress", "White & White"],
];

$uniform_3_4_5 = [
    ["Monday", "light Green Shirt and Navy blue Pant", "White & White"],
    ["Tuesday", "light Green Shirt and Navy blue Pant", "Black & Black"],
    ["Wednesday", "light Green Shirt and Navy blue Pant", "Black & Black"],
    ["Thursday", "light Green Shirt and Navy blue Pant", "Black & Black"],
    ["Friday", "Sandal Shirt and Brown Pant", "White & White"],
    ["Saturday", "Colour Dress", "White & White"],
];

$girls_uniform_lkg_ukg = [
    ["Monday", "Green Shirt and Skirt", "White & White"],
    ["Tuesday", "Green Shirt and Skirt", "Black & Black"],
    ["Wednesday", "Green Shirt and Skirt", "Black & Black"],
    ["Thursday", "Green Shirt and Skirt", "Black & Black"],
    ["Friday", "Pink Shirt and Skirt ", "White & White"],
    ["Saturday", "Colour Dress", "White & White"],
];

$girl_uniform_1_2 = [
    ["Monday", "Violet Shirt and Skirt", "White & White"],
    ["Tuesday", "Violet Shirt and Skirt", "Black & Black"],
    ["Wednesday", "Violet Shirt and Skirt", "Black & Black"],
    ["Thursday", "Violet Shirt and Skirt", "Black & Black"],
    ["Friday", "YYellow Shirt and Green Pant", "White & White"],
    ["Saturday", "Colour Dress", "White & White"],
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

        <h4 class="section-title">Boys</h4>

        <p class="top-label">LKG and UKG</p>
        <table>
            <tr>
                <th>Days</th>
                <th>Uniform</th>
                <!-- <th>Shoes & Socks</th> -->
            </tr>
            <?php foreach ($boys_uniform_lkg_ukg as $row): ?>
            <tr>
                <td><?= $row[0] ?></td>
                <td><?= $row[1] ?></td>
                <!-- <td><?= $row[2] ?></td> -->
            </tr>
            <?php endforeach; ?>
        </table>

        <p class="top-label">I and II STD</p>
        <table>
            <tr>
                <th>Days</th>
                <th>Uniform</th>
                <!-- <th>Shoes & Socks</th> -->
            </tr>
            <?php foreach ($boys_uniform_1_2 as $row): ?>
            <tr>
                <td><?= $row[0] ?></td>
                <td><?= $row[1] ?></td>
                <!-- <td><?= $row[2] ?></td> -->
            </tr>
            <?php endforeach; ?>
        </table>

         <p class="top-label">III,IV and V STD</p>
        <table>
            <tr>
                <th>Days</th>
                <th>Uniform</th>
                <!-- <th>Shoes & Socks</th> -->
            </tr>
            <?php foreach ($uniform_3_4_5 as $row): ?>
            <tr>
                <td><?= $row[0] ?></td>
                <td><?= $row[1] ?></td>
                <!-- <td><?= $row[2] ?></td> -->
            </tr>
            <?php endforeach; ?>
        </table>

                <h4 class="section-title">Girls</h4>
<p class="top-label">LKG and UKG</p>
<table>
    <tr>
        <th>Days</th>
        <th>Uniform</th>
        <!-- <th>Shoes & Socks</th>
        <th>Ribbon</th> -->
    </tr>
    <?php foreach ($girls_uniform_lkg_ukg as $row): ?>
    <tr>
        <td><?= $row[0] ?></td>
        <td><?= $row[1] ?></td>
        <!-- <td><?= $row[2] ?></td>
        <td><?= $row[3] ?></td> -->
    </tr>
    <?php endforeach; ?>
</table>

        <p class="top-label">I and II STD</p>
        <table>
            <tr>
                <th>Days</th>
                <th>Uniform</th>
                <!-- <th>Shoes & Socks</th> -->
            </tr>
            <?php foreach ($boys_uniform_1_2 as $row): ?>
            <tr>
                <td><?= $row[0] ?></td>
                <td><?= $row[1] ?></td>
                <!-- <td><?= $row[2] ?></td> -->
            </tr>
            <?php endforeach; ?>
        </table>

                <p class="top-label">III,IV and V STD</p>
        <table>
            <tr>
                <th>Days</th>
                <th>Uniform</th>
                <!-- <th>Shoes & Socks</th> -->
            </tr>
            <?php foreach ($uniform_3_4_5 as $row): ?>
            <tr>
                <td><?= $row[0] ?></td>
                <td><?= $row[1] ?></td>
                <!-- <td><?= $row[2] ?></td> -->
            </tr>
            <?php endforeach; ?>
        </table>

    </div>
</div>


<?php include "includes/footer.php"; ?>