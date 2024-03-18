<?php include('includes/header.php'); ?>
<div class="container mt-5">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="service1-tab" data-toggle="tab" href="#service1" role="tab" aria-controls="service1" aria-selected="true">Service 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="service2-tab" data-toggle="tab" href="#service2" role="tab" aria-controls="service2" aria-selected="false">Service 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="service3-tab" data-toggle="tab" href="#service3" role="tab" aria-controls="service3" aria-selected="false">Service 3</a>
    </li>
  </ul>
  <div class="tab-content mt-3" id="myTabContent">
    <div class="tab-pane fade show active" id="service1" role="tabpanel" aria-labelledby="service1-tab">
      <h3>Service 1</h3>
      <p>This is the content for Service 1.</p>
    </div>
    <div class="tab-pane fade" id="service2" role="tabpanel" aria-labelledby="service2-tab">
      <h3>Service 2</h3>
      <p>This is the content for Service 2.</p>
    </div>
    <div class="tab-pane fade" id="service3" role="tabpanel" aria-labelledby="service3-tab">
      <h3>Service 3</h3>
      <p>This is the content for Service 3.</p>
    </div>
  </div>
</div>
<?php include('includes/footer.php');