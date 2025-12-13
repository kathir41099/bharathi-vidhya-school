
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

    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/rules.css">
</head>
<body>
<?php include "includes/header.php"; ?>

<?php

$school_values = [
    [
        "title" => "Provide a Supportive Environment",
        "description" => "Create a safe, happy, and caring space where children feel secure enough to explore and learn."
    ],
    [
        "title" => "Facilitate Holistic Development",
        "description" => "Promote the emotional, social, physical, creative, and intellectual growth of each child."
    ],
    [
        "title" => "Encourage Exploration and Learning Through Play",
        "description" => "Allow children to explore their own interests and learn naturally through play and a stimulating curriculum."
    ],
    [
        "title" => "Develop Key Personal Skills",
        "description" => "Help children become confident, independent, responsible, and cooperative individuals."
    ],
    [
        "title" => "Partner with Families",
        "description" => "Foster strong relationships with parents and carers, recognizing them as the child's first educators and working in partnership with them."
    ],
];

$vision_items = [
    [
        "title" => "Shape Future-Ready Individuals",
        "description" => "To prepare children to be successful learners, confident individuals, and responsible citizens ready to contribute to society."
    ],
    [
        "title" => "Instill a Lifelong Love of Learning",
        "description" => "Inspire a positive attitude towards learning so children enjoy the process and continue to learn throughout their lives."
    ],
    [
        "title" => "Develop Well-Rounded Personalities",
        "description" => "Help each child develop a full range of capabilities, including curiosity, empathy, and resilience."
    ],
    [
        "title" => "Create a Strong Community",
        "description" => "Build a community of competent and caring educators and support students in facing life's challenges."
    ],
];

?>

<!-- Banner Section -->
<section class="about-banner">
    <h1>About Us</h1>
    <div class="breadcrumb-area">
        <a href="index.php">Home</a> &nbsp; ➜ &nbsp; <span>About Us</span>
    </div>
</section>

<!-- About Content Section -->
<div class="container py-5">
    <section class="mb-3">
        <h2 class="section-title">Mission</h2>

        <p style="max-width:1150px;font-size:18px;line-height:30px;margin-top:20px;">
            A nursery school's mission is to provide a safe, nurturing, and stimulating environment where young children can learn and grow through play, fostering their social, emotional, physical, and cognitive development. The vision is to create well-rounded, confident, and curious individuals who are prepared to face future challenges, with a long-term goal of shaping them into responsible and successful members of society.
        </p>

        <div class="container my-4">
            <div class="row">
                <?php foreach ($school_values as $value): ?>
                    <div class="col-md-6 mb-3">
                        <div class="p-3 border rounded shadow-sm bg-light">
                            <h5 class="fw-bold text-primary"><?= $value['title']; ?></h5>
                            <p><?= $value['description']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <h2 class="section-title mb-3">Vision</h2>
        <div class="row">
            <?php foreach ($vision_items as $vision): ?>
                <div class="col-md-6 mb-3">
                    <div class="p-3 border rounded shadow-sm bg-light">
                        <h5 class="fw-bold text-primary"><?= $vision['title']; ?></h5>
                        <p><?= $vision['description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <div class="row align-items-center">

        <!-- Left Image -->
        <div class="col-lg-6 mb-4">
            <img src="assets/img/gallery_img/DSC_4141.JPG" alt="School Image" class="img-fluid rounded shadow">
        </div>

        <!-- Right Content -->
        <div class="col-lg-6">
            <small class="text-primary">ABOUT US</small>
            <h2 class="mt-2 mb-3 fw-bold" style="color:#0077c0;">
                BHARATHI VIDHYALAYA NURSERY AND PRIMARY SCHOOL
            </h2>
            <p>
                There is PLENTY of things to learn after learning we should live on basis of what we have learnt and also we should teach others
                which calls for SACRIFICE on our part.
            </p>
        </div>

    </div>
</div>


<?php include "includes/footer.php"; ?>