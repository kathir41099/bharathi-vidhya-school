
<?php
include "db.php";

// FORM SUBMIT HANDLER (RUN BEFORE OUTPUT)
if(isset($_POST['upload'])){

    $target_dir = "assets/img/gallery/";
    $image_name = time() . "-" . basename($_FILES["image"]["name"]);
    $target_file = $target_dir . $image_name;
    $description = $_POST['description'];

    $allowed_types = ['image/jpeg', 'image/png', 'image/webp'];

    if (!in_array($_FILES['image']['type'], $allowed_types)) {
        die("❌ Only JPG, PNG or WEBP allowed.");
    }

    if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){

        $stmt = $conn->prepare("INSERT INTO gallery (image, description) VALUES (?, ?)");
        $stmt->bind_param("ss", $image_name, $description);
        $stmt->execute();

        // REDIRECT TO PREVENT DUPLICATE SUBMISSION
        header("Location: admin.php?success=1");
        exit;
    } else {
        header("Location: admin.php?error=upload_failed");
        exit;
    }
}

// DELETE IMAGE
if(isset($_POST['delete_id'])) {

    $id = $_POST['delete_id'];
    $image_name = $_POST['delete_image'];
    $file_path = "assets/img/gallery/" . $image_name;

    // Delete file if exists
    if(file_exists($file_path)) {
        unlink($file_path);
    }

    // Delete record from database
    $delete = $conn->prepare("DELETE FROM gallery WHERE id = ?");
    $delete->bind_param("i", $id);
    $delete->execute();

    header("Location: admin.php?deleted=1");
    exit;
}

$result = $conn->query("SELECT * FROM gallery ORDER BY id DESC");
?>
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



<!-- Banner Section -->
<section class="about-banner">
    <h1>Video</h1>
    <div class="breadcrumb-area">
        <a href="index.php">Home</a> &nbsp; ➜ &nbsp; <span>Video</span>
    </div>
</section>

<div class="container-fluid" style="padding:50px 0;">
    <div class="container">

       <form action="" method="POST" enctype="multipart/form-data">
            <label>Select Image: </label>
            <input type="file" name="image" required><br><br>

            <label>Description: </label><br>
            <input type="text" name="description" placeholder="Enter image description..." required><br><br>

            <button type="submit" name="upload">Upload</button>
        </form>
    </div>
</div>

<div style="display:flex; flex-wrap:wrap; gap:30px;">
<?php foreach ($result as $item): ?>
    <div style="width:273px; text-align:center; border:1px solid #eee; padding:10px; background:#fff; position:relative;">

        <!-- DELETE BUTTON -->
        <form action="admin.php" method="POST" style="position:absolute; top:5px; right:5px;">
            <input type="hidden" name="delete_id" value="<?= $item['id']; ?>">
            <input type="hidden" name="delete_image" value="<?= $item['image']; ?>">
            <button type="submit" style="background:red; color:white; border:none; padding:5px 8px; cursor:pointer;">X</button>
        </form>

        <img src="assets/img/gallery/<?= $item['image']; ?>" width="250" height="200" style="object-fit:cover;">
        <div style="background:#001a66; color:white; padding:10px; margin-top:5px; font-size:14px;">
            <?= $item['description']; ?>
        </div>
    </div>
<?php endforeach; ?>
</div>


<?php include "includes/footer.php"; ?>