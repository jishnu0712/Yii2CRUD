<?php

/** @var yii\web\View $this */

$this->title = 'Create Post';
?>
<div class="site-index">
    <h1>VIEW POST</h1>
    <div class="body-content">
    <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?php echo $post->title?>
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?php echo $post->description?>
    <span class="badge bg-primary rounded-pill">2</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?php echo $post->category?>
    <span class="badge bg-primary rounded-pill">1</span>
  </li>
</ul>
<a href=<?php echo yii::$app->homeUrl ?> class="btn btn-primary">Go Back</a>

    </div>
</div>