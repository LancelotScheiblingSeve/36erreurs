<?php include "./inc/header.php";?>
<h2>Les Gagnants</h2>
<div class="row">
  <?php foreach($winners as $winner):?>
    <div class="col-sm-3" style="margin-bottom:20px">
      <h4 class="cut"><?php echo $category[$winner['category_id']]['title']?></h4>
          <div style="position:relative">
              <img src="/nominee/image/<?php echo $winner['id']?>" class="img-responsive">
            </div>
            <div  class="cut nomine">
              <?php echo $winner['name']?>
              <small  class="cut">&nbsp;<?php echo $winner['info']?></small>
            </div>
    </div>
  <?php endforeach;?>

</div>

<h2>Les meilleurs joueurs</h2>

<ol>
<?php foreach($bestplayers as $player):?>
  <li><?php echo $player['screen_name']?> : <?php echo $player['w']?> pts</li>
<?php endforeach;?>
</ol>

<?php include "./inc/footer.php";?>