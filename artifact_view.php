<?php
  require 'init.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php require("assets/meta.php"); ?>
    <link rel="stylesheet" href="css/artifact_view.css">
  </head>
  <body>
    <?php require("assets/header.php"); ?>
    <main class="<?php echo $mainClass; ?>">
      <input type="hidden" name="artifactId" value="<?php echo $_POST['id']; ?>">
      <nav class="itemTool">
        <div class="container-fluid">
          <a href="#" class="btn btn-dark">edit artifact metadata</a>
          <a href="#" class="btn btn-dark">edit model metadata</a>
          <a href="#" class="btn btn-dark">delete item</a>
          <a href="#" class="btn btn-dark">download item</a>
          <a href="#" class="btn btn-dark">print data</a>
        </div>
      </nav>
      <div class="container-fluid mt-5">
        <div class="row">
          <div class="col">
            <h1 class="text-center" id="name"></h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <h2 class="titleSection d-block txt-adc-dark fw-bold border-bottom">Artifact</h2>
            <div class="divSection mb-5">
              <div class="alert" id="status"></div>
              <p class="fw-bold h5 my-3" id="description"></p>
              <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="main-section">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mainSection" aria-expanded="true" aria-controls="mainSection">Main data</button>
                  </h2>
                  <div id="mainSection" class="accordion-collapse collapse" aria-labelledby="main-section">
                    <div class="accordion-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"></li>
                        <li class="list-group-item"><span>Category class</span><span id="category_class"></span></li>
                        <li class="list-group-item"><span>Category specification</span><span id="category_specs"></span></li>
                        <li class="list-group-item"><span>Material / technique</span><span id="material"></span></li>
                        <li class="list-group-item"><span>Typology</span><span id="tipology"></span></li>
                        <li class="list-group-item"><span>Notes</span><span id="notes"></span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="chronology-data">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chronologySection">Chronological definition</button>
                  </h2>
                  <div id="chronologySection" class="accordion-collapse collapse" aria-labelledby="chronology-data">
                    <div class="accordion-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item txt-adc-dark fw-bold">Specific chronology</li>
                        <li class="list-group-item"><span>start / end</span><span id="chronoYears"></span></li>
                        <li class="list-group-item txt-adc-dark fw-bold">The specific chronology is related to following historical periods</li>
                        <li class="list-group-item"><span>from</span><span id="start_period"></span></li>
                        <li class="list-group-item"><span>to</span><span id="end_period"></span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="conservation-data">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#conservationSection">Conservation info</button>
                  </h2>
                  <div id="conservationSection" class="accordion-collapse collapse" aria-labelledby="conservation-data">
                    <div class="accordion-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span>Storage place</span><span id="storage_place"></span></li>
                        <li class="list-group-item"><span>Inventory</span><span id="inventory"></span></li>
                        <li class="list-group-item"><span>Conservation state</span><span id="conservation_state"></span></li>
                        <li class="list-group-item"><span>Object condition</span><span id="object_condition"></span></li>
                        <li class="list-group-item"><span>Is a museum copy</span><span id="is_a_copy"></span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="measure-data">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#measureSection">Measures</button>
                  </h2>
                  <div id="measureSection" class="accordion-collapse collapse" aria-labelledby="measure-data">
                    <div class="accordion-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span>Length</span><span id="length"></span></li>
                        <li class="list-group-item"><span>Width</span><span id="width"></span></li>
                        <li class="list-group-item"><span>Depth</span><span id="depth"></span></li>
                        <li class="list-group-item"><span>Diameter</span><span id="diameter"></span></li>
                        <li class="list-group-item"><span>Weight</span><span id="weight"></span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="artifactMetadata-data">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#artifactMetadataSection">Artifact metadata</button>
                  </h2>
                  <div id="artifactMetadataSection" class="accordion-collapse collapse" aria-labelledby="artifactMetadata-data">
                    <div class="accordion-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span>Author</span><span id="auth"></span></li>
                        <li class="list-group-item"><span>Owner</span><span id="owner"></span></li>
                        <li class="list-group-item"><span>license</span><span id="license"></span></li>
                        <li class="list-group-item"><span>Create at</span><span id="create_at"></span></li>
                        <li class="list-group-item"><span>Last update</span><span id="updated_at"></span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <h2 class="titleSection d-block txt-adc-dark fw-bold border-bottom">Model informations</h2>
            <div class="divSection mb-5"></div>
          </div>
          <div class="col-md-8">
            <h2 class="titleSection d-block txt-adc-dark fw-bold border-bottom">3d Object</h2>
            <div id="3dhop" class="tdhop"></div>
            <h2 class="titleSection d-block txt-adc-dark fw-bold border-bottom">Media gallery</h2>
            <div class="divSection mb-5"></div>
          </div>
        </div>
      </div>
    </main>
    <?php require("assets/menu.php"); ?>
    <?php require("assets/js.html"); ?>
    <script type="text/javascript" src="assets/3dhop/spidergl.js"></script>
    <script type="text/javascript" src="assets/3dhop/presenter.js"></script>
    <script type="text/javascript" src="assets/3dhop/nexus.js"></script>
    <script type="text/javascript" src="assets/3dhop/ply.js"></script>
    <script type="text/javascript" src="assets/3dhop/trackball_turntable.js"></script>
    <script type="text/javascript" src="assets/3dhop/trackball_turntable_pan.js"></script>
    <script type="text/javascript" src="assets/3dhop/trackball_pantilt.js"></script>
    <script type="text/javascript" src="assets/3dhop/trackball_sphere.js"></script>
    <script type="text/javascript" src="assets/3dhop/init.js"></script>
    <script src="js/artifact_view.js" charset="utf-8"></script>
  </body>
</html>
