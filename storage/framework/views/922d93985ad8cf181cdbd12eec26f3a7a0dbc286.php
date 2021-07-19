<?php if(!$games->isEmpty()): ?>
<div class="biggestwins">
  <div class="biggestwins__upper">
    <span>Biggest win</span>
    <div class="clippath">8 BTC</div>
  </div>
  <div class="biggestwins__content">
    <span class="win">Win now</span>

    <div class="winn">
      <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      <div class="wins">
        <img src="assets/img/slot.png" alt="">
        <img class="winner" loading="lazy" src="assets/img/winner.png" alt="">
        <div>
          <span class="gamename"><?php echo e($game->title); ?></span>
          <span class="username"><?php echo e($game->account->user->name); ?></span>
          <span class="win">Win <?php echo e($game->gameable->result); ?></span>
        </div>
      </div>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

  </div>
</div>
<?php endif; ?>