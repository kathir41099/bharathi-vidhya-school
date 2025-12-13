
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
</head>
<body>
<?php include "includes/header.php"; ?>
<?php
$gallery = [
    ["img" => "assets/img/gallery/01_Appreciating_children_ then_ and_there.JPG", "title" => "Appreciating children then and there"],
    ["img" => "assets/img/gallery/02_Pongal_ Celebration.JPG", "title" => "Pongal Celebration"],
    ["img" => "assets/img/gallery/07_Silambam.JPG", "title" => "Silambam"],
    ["img" => "assets/img/gallery/08_Karate.JPG", "title" => "Karate"],
    ["img" => "assets/img/gallery/09_ Archery.JPG", "title" => "Archery"],
    ["img" => "assets/img/gallery/10_Bharatham.JPG", "title" => "Bharatham"],
    ["img" => "assets/img/gallery/11_Yoga.JPG", "title" => "Yoga"],
    ["img" => "assets/img/gallery/12_Dance_class.JPG", "title" => "Dance class"],
    ["img" => "assets/img/gallery/13_Musical.JPG", "title" => "Musical"],
    ["img" => "assets/img/gallery/14_Chess.JPG", "title" => "Chess"],
    ["img" => "assets/img/gallery/15_Carrom_practice.JPG", "title" => "Carrom practice"],
    ["img" => "assets/img/gallery/16_Abacus.JPG", "title" => "Abacus"],
    ["img" => "assets/img/gallery/17_Art_Craft_Practise.JPG", "title" => "Art & Craft Practise"],
    ["img" => "assets/img/gallery/18_Food_day_celebration.JPG", "title" => "Food day celebration"],
    ["img" => "assets/img/gallery/19_Healthy_Snacks.JPG", "title" => "Healthy Snacks"],
    ["img" => "assets/img/gallery/20_Teaching_through_Smart_Class.JPG", "title" => "Teaching through Smart Class"],
    // ["img" => "assets/img/gallery/22_Computer_Lab_Activity.JPG", "title" => "Computer Lab Activity"],
    // ["img" => "assets/img/gallery/23_Maths_Lab_Activity.JPG", "title" => "Maths Lab Activity"],
    ["img" => "assets/img/gallery/22_Special_Care_on_Children.JPG", "title" => "Special Care on Children"],
    ["img" => "assets/img/gallery/28_Handwriting_Practice.JPG", "title" => "Handwriting Practice"],
    ["img" => "assets/img/gallery/29_Spoken_Class.JPG", "title" => "Spoken english"],
    ["img" => "assets/img/gallery/31_Computer_class.JPG", "title" => "Computer class"],
    ["img" => "assets/img/gallery/34_News_Paper_Reading.JPG", "title" => "News paper reading"],
    ["img" => "assets/img/gallery/35_Speech_Practise.JPG", "title" => "Speech practice"],
    ["img" => "assets/img/gallery/36_Thirukkural_Reciting.JPG", "title" => "Thitukural reciting"],
    ["img" => "assets/img/gallery/42_Krishna_Jayanthi_Celebration.jpg", "title" => "Krishna Jayanthi Celebration"],
    ["img" => "assets/img/gallery/44_Tree_Planting.JPG", "title" => "Tree planting"]
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
                    <img src="<?= assets/img/gallery/$item['img']; ?>" width="250" height="200" style="object-fit:cover;" />
                    <div style="background:#001a66; color:white; padding:10px; margin-top:5px; font-size:14px;">
                        <?= $item['title']; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>


<?php include "includes/footer.php"; ?>