<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ./index.php');
    exit;
}


include ('./config/database.php');
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_SESSION['user_name'];
    $date = date('Y-m-d');
    // $banner assignment removed; banner is handled via $_FILES below


    // Handle banner image upload
$bannerPath = '';
if (isset($_FILES['banner']) && $_FILES['banner']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = './posts/';
    $fileTmpPath = $_FILES['banner']['tmp_name'];
    $fileName = basename($_FILES['banner']['name']);
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // Generate unique name
    $newFileName = uniqid('banner_', true) . '.' . $fileExt;
    $destPath = $uploadDir . $newFileName;

    // Ensure the upload directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    if (move_uploaded_file($fileTmpPath, $destPath)) {
        $bannerPath = $destPath;
    } else {
        $error = "Banner upload failed!";
    }
} else {
    $error = "No banner uploaded or upload error!";
}

    // Content sections
    $types = $_POST['type'] ?? [];
    $headings = $_POST['heading'] ?? [];
    $bodies = $_POST['body'] ?? [];
    $urls = $_POST['url'] ?? [];
    $captions = $_POST['caption']  ?? [];

    $content = [];

    for ($i = 0; $i < count($types); $i++) {
        $block = ["type" => $types[$i]];

        if ($types[$i] === "text") {
            $block["heading"] = $headings[$i];
            $block["body"] = $bodies[$i];
        } elseif ($types[$i] === "image") {
            $block["url"] = $urls[$i];
            $block["caption"] = $captions[$i];
        }

        $content[] = $block;
    }

    // Final JSON structure
    $blog_data = [
        "title" => $title,
        "author" => $author,
        "date" => $date,
        "banner" => $bannerPath,
        "content" => $content
    ];

    $json_string = json_encode($blog_data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);



    $stmt = $conn->prepare("INSERT INTO blog (blog_json) VALUES (?)");
    $stmt->bind_param("s", $json_string);

    if ($stmt->execute()) {
        $success = "Blog post inserted successfully!";
    } else {
        $error = "Insert failed: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>



<?php 
    $pageTitle  = "Astra Softwares | Create Blog";
    include ('./includes/header.php');
?>


<!-- Quill CSS -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<!-- Quill JS -->
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

<section class="section-header bg-primary text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h1 class="display-2 mb-3">Create Blog</h1>
                <a href="blogs.php" class="btn btn-white">← Back to Blogs</a>
            </div>    
        </div>
    </div>
</section>


<script>
    let sectionCount = 0;

    function addSection() {
        sectionCount++;
        const container = document.getElementById("content-sections");

        const section = document.createElement("div");
        section.classList.add("border", "p-3", "mb-3");

        const quillId = `quill-editor-${sectionCount}`;
        const inputId = `hidden-body-${sectionCount}`;

        section.innerHTML = `
            <div class="mb-2">
                <label class="form-label">Type</label>
                <select name="type[]" class="form-select type-select" onchange="toggleFields(this)">
                    <option value="text">Text</option>
                    <option value="image">Image</option>
                </select>
            </div>

            <div class="text-fields">
                <input type="text" name="heading[]" class="form-control mb-2" placeholder="Heading">
                <div id="${quillId}" class="form-control mb-2" style="height: 200px;"></div>
                <input type="hidden" name="body[]" id="${inputId}">
            </div>

            <div class="image-fields d-none">
                <input type="text" name="url[]" class="form-control mb-2" placeholder="Image URL">
                <input type="text" name="caption[]" class="form-control mb-2" placeholder="Caption">
            </div>
        `;

        container.appendChild(section);

        // Initialize Quill
        const quill = new Quill(`#${quillId}`, {
            theme: 'snow'
        });

        // Save data on form submit
        document.querySelector('form').addEventListener('submit', function () {
            document.getElementById(inputId).value = quill.root.innerHTML;
        });
    }

    function toggleFields(select) {
        const parent = select.closest('div').parentNode;
        const textFields = parent.querySelector('.text-fields');
        const imageFields = parent.querySelector('.image-fields');

        if (select.value === 'text') {
            textFields.classList.remove('d-none');
            imageFields.classList.add('d-none');
        } else {
            textFields.classList.add('d-none');
            imageFields.classList.remove('d-none');
        }
    }
</script>

<div class="container py-5">
    <div class="card p-4 shadow">
        <h2 class="mb-4">Create Blog Post</h2>

        <?php if (!empty($success)): ?>
            <div class="alert alert-success"><?= $success ?></div>
        <?php elseif (!empty($error)): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>

        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Author</label>
                <input type="text" name="author" class="form-control" value="<?=$_SESSION['user_name']?>" disabled>
            </div>

            <!-- <div class="mb-3">
                <label class="form-label">Date</label>
                <input type="date" name="date" class="form-control" required>
            </div> -->
            <div class="mb-3">
                <label class="form-label">Banner Image</label>
                <input type="file" name="banner" class="form-control" accept="image/*" required>
            </div>

            <hr>
            <h5>Content Sections</h5>
            <div id="content-sections"></div>
            <button type="button" onclick="addSection()" class="btn btn-secondary my-2">+ Add Section</button>
            <hr>

            <button type="submit" class="btn btn-primary">Save Blog Post</button>
        </form>
    </div>
</div>


<?php
  include ('./includes/footer.php');
?>

