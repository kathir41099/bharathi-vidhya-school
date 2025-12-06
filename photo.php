
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
</head>
<body>
<?php include "includes/header.php"; ?>
<?php
$gallery = [
    ["img" => "assets/img/gallery_img/DSC_4126.JPG", "title" => "Annual Sports Meet - 2025-2026"],
    // ["img" => "assets/img/gallery_img/DSC_4129.JPG", "title" => "Annual-Day"],
    // ["img" => "assets/img/gallery_img/DSC_4130.JPG", "title" => "Annual-Day-2014"],
    ["img" => "assets/img/gallery_img/DSC_4131.JPG", "title" => "Annual-day-2015"],
    // ["img" => "assets/img/gallery_img/DSC_4135.JPG", "title" => "Annual-day-2016"],
    ["img" => "assets/img/gallery_img/DSC_4136.JPG", "title" => "Dr.ABDULKALAM"],
    // ["img" => "assets/img/gallery_img/DSC_4137.JPG", "title" => "Expo"],
    // ["img" => "assets/img/gallery_img/DSC_4138.JPG", "title" => "Facilities"],
    ["img" => "assets/img/gallery_img/DSC_4139.JPG", "title" => "Fancy-Dress-Competition"],
    ["img" => "assets/img/gallery_img/DSC_4141.JPG", "title" => "Graduation"],
    // ["img" => "assets/img/gallery_img/DSC_4142.JPG", "title" => "Infrastructure"],
    // ["img" => "assets/img/gallery_img/DSC_4148.JPG", "title" => "Kids-Park"],
    // ["img" => "assets/img/gallery_img/DSC_4150.JPG", "title" => "Expo"],
    ["img" => "assets/img/gallery_img/DSC_4151.JPG", "title" => "Facilities"],
    ["img" => "assets/img/gallery_img/DSC_4152.JPG", "title" => "Fancy-Dress-Competition"],
    ["img" => "assets/img/gallery_img/DSC_4153.JPG", "title" => "Graduation"],
    ["img" => "assets/img/gallery_img/DSC_4154.JPG", "title" => "Infrastructure"],
    ["img" => "assets/img/gallery_img/DSC_4156.JPG", "title" => "Annual-Day"],
    // ["img" => "assets/img/gallery_img/DSC_4157.JPG", "title" => "Annual-Day-2014"],
    ["img" => "assets/img/gallery_img/DSC_4158.JPG", "title" => "Annual-day-2015"],
    // ["img" => "assets/img/gallery_img/DSC_4163.JPG", "title" => "Annual-day-2016"],
    ["img" => "assets/img/gallery_img/DSC_4164.JPG", "title" => "Dr.ABDULKALAM"],
];
?>

<!-- Banner Section -->
<section class="about-banner">
    <h1>Photo</h1>
    <div class="breadcrumb-area">
        <a href="index.php">Home</a> &nbsp; ➜ &nbsp; <span>Photo</span>
    </div>
</section>

<div class="container-fluid" style="padding:50px 0;">
    <div class="container">

        <p class="top-label">Photo</p>
        <h2 class="section-title">Photo Gallery</h2>

        <div style="display:flex; flex-wrap:wrap; gap:30px;">
            <?php foreach ($gallery as $item): ?>
                <div style="width:273px; text-align:center; border:1px solid #eee; padding:10px; background:#fff;">
                    <img src="<?= $item['img']; ?>" width="250" height="200" style="object-fit:cover;">
                    <!-- <div style="background:#001a66; color:white; padding:10px; margin-top:5px; font-size:14px;">
                        <?= $item['title']; ?>
                    </div> -->
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>


<?php include "includes/footer.php"; ?>