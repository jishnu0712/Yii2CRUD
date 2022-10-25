<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Yii2 CRUD Application';
?>
<div class="site-index">
    <?php if (Yii::$app->session->hasFlash('message'))
        echo Yii::$app->session->getFlash('message');
    ?>
    <div class="jumbotron text-center bg-transparent">
        <h1 style="color:#337ab7" class="display-4">YII2 CRUD APP</h1>

    </div>
    <div class="row">
        <span style="margin-buttom:20px;"><?= Html::a('Create', ['/site/create'], ['class' => 'btn btn-primary']) ?></span>
    </div>
    <div class="body-content">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($posts) > 0) { ?>
                    <?php foreach ($posts as $post) { ?>
                        <tr class="table-active">
                            <th scope="row"><?php echo $post->id ?></th>
                            <td><?php echo $post->title ?></td>
                            <td><?php echo $post->description ?></td>
                            <td><?php echo $post->category ?></td>
                            <td>
                                <span>
                                    <?= Html::a('view', ['view', 'id' => $post->id], ['class' => 'label label-primary']) ?>
                                </span>
                                <span>
                                    <?= Html::a('Update', ['update', 'id' => $post->id], ['class' => 'label label-success']) ?>
                                </span>
                                <span>
                                    <?= Html::a('Delete', ['delete', 'id' => $post->id], ['class' => 'label label-danger']) ?>
                                </span>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td>No Records found</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>