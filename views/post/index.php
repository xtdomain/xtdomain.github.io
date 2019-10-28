<h1>Основные ошибки автомобилистов</h1>
<br>
<?php if(!empty($posts)): ?>
<?php foreach($posts as $post): ?>
<div class="panel panel-default">
  <div class="panel-heading">
      <h3 class ="panel-title"><a href="<?= yii\helpers\Url::to(['post/view', 'id' => $post->id])?>"><?=$post->title?></a></h3>
  <!--<h5><?=$post->published_at?></h5>-->
   </div>
  <div class="panel-body">
    <h5>Updated: <?=$post->published_at?></h5>
  </div>
</div>
<?php endforeach;?>
<?= \yii\widgets\LinkPager::widget(['pagination' => $pages])?>
<?php endif; ?>

