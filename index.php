<!doctype html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome to my portfolio!</title>
  <script src="https://jquery.com" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/style.css?v=0.2">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
  <div id="main_content">
    <div class="introduction bg-sage-light rounded-3 p-4 p-md-5 mb-5 shadow-sm text-center">
      <div class="row justify-content-center">
          <div class="col-lg-8">
              <h1 class="display-5 fw-bold text-dark mb-3">
                  Hello, I'm Joseph.
              </h1>
              
              <h4 class="text-sage fw-semibold mb-4">
                  Web & Software Developer
              </h4>
              
              <p class="lead text-muted mb-0">
                  Welcome to my portfolio! I am a developer specializing in core backend systems, legacy platform migrations, and custom database-driven applications. Explore my professional work history and personal creative projects below.
              </p>
          </div>
      </div>
    </div>

    <div class="container my-5">
      <h2 class="fw-bold text-dark mb-4">Professional Work</h2>
      <div class="row g-4  mb-5">
<?php
$jsonString = file_get_contents('projects.json');

$projects = json_decode($jsonString, true);

if (!empty($projects)) {
  foreach ($projects as $project) {
?>
        <div class="col-12 col-md-6 col-lg-4 border-0">
          <div class="card h-100 shadow-sm border rounded bg-sage-light">
<?php
if (!empty($project['image'])) {
  $image_pos = "top";
  if (!empty($project['image_pos'])) {
    $image_pos = "0 " . $project['image_pos'] . "px";
  }
?>
            <img src="img/<?php echo htmlspecialchars($project['image']); ?>" class="card-img-top border-bottom" alt="<?php echo htmlspecialchars($project['title']); ?> Screen Capture" style="object-fit: cover; object-position: <?php echo $image_pos; ?>; height: 100px;">
<?php } ?>
            <div class="card-body d-flex flex-column">
              <h5 class="card-title fw-bold text-dark"><?php echo htmlspecialchars($project['title']); ?></h5>
              <div class="mb-3">
<?php foreach ($project['tech_stack'] as $tech) { ?>
                <span class="badge bg-secondary me-1"><?php echo htmlspecialchars($tech); ?></span>
<?php } ?>
              </div>
              <p class="card-text text-muted flex-grow-1"><?php echo htmlspecialchars($project['description']); ?></p>
              <a href="<?php echo htmlspecialchars($project['link']); ?>" target="_blank" class="btn btn-sage mt-3 w-100">Link <i class="bi bi-box-arrow-up-right ms-2"></i></a>
            </div>
          </div>
        </div>
<?php
  }
}
?>
      </div>

      <h2 class="fw-bold text-dark mb-4">Indie Projects & Creative Hobbies</h2>
      <div class="row g-4">
<?php
$jsonString = file_get_contents('hobbies.json');

$hobbies = json_decode($jsonString, true);

if (!empty($hobbies)) {
  foreach ($hobbies as $hobby) {
?>
        <div class="col-12 col-md-6 col-lg-4 border-0">
          <div class="card h-100 shadow-sm border rounded bg-sage-light">
<?php
if (!empty($hobby['image'])) {
  $image_pos = "top";
  if (!empty($hobby['image_pos'])) {
    $image_pos = "0 " . $hobby['image_pos'] . "px";
  }
?>
            <img src="img/<?php echo htmlspecialchars($hobby['image']); ?>" class="card-img-top border-bottom" alt="<?php echo htmlspecialchars($hobby['title']); ?> Screen Capture" style="object-fit: cover; object-position: <?php echo $image_pos; ?>; height: 100px;">
<?php } ?>
            <div class="card-body d-flex flex-column">
              <h5 class="card-title fw-bold text-dark"><?php echo htmlspecialchars($hobby['title']); ?></h5>
              <div class="mb-3">
<?php foreach ($hobby['tech_stack'] as $tech) { ?>
                <span class="badge bg-secondary me-1"><?php echo htmlspecialchars($tech); ?></span>
<?php } ?>
              </div>
              <p class="card-text text-muted flex-grow-1"><?php echo htmlspecialchars($hobby['description']); ?></p>
              <a href="<?php echo htmlspecialchars($hobby['link']); ?>" target="_blank" class="btn btn-sage mt-3 w-100">Link <i class="bi bi-box-arrow-up-right ms-2"></i></a>
            </div>
          </div>
        </div>
<?php
  }
}
?>
      </div>
    </div>
  </div>

  <footer class="bg-sage-dark text-light py-4 mt-5 border-top border-secondary">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-12 col-md-6 text-center text-md-start mb-3 mb-md-0">
                  <small class="text-white-50">Built with PHP & Bootstrap.<br/>Assisted by Gemini AI.</small>
              </div>

              <div class="col-12 col-md-6 text-center text-md-end">
                  <!--<a href="#" class="text-light text-decoration-none me-3 hover-link">Home</a>-->
                  <a href="https://www.linkedin.com/in/joseph-bacero-ii-526574264" target="_blank" class="text-light text-decoration-none me-3 hover-link">LinkedIn</a>
                  <a href="https://ph.jobstreet.com/profiles/joseph-baceroii-FvyFWFy6wQ" target="_blank" class="text-light text-decoration-none me-3 hover-link">Jobstreet</a>
              </div>
          </div>
      </div>
  </footer>
</body>
</html>