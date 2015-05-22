<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

  <div class="row">
  
    <div class="large-12 columns">
      <?php
          $a = new GlobalArea('Navigation');
          $a->setAreaGridMaximumColumns(12);
          $a->display($c);
      ?>
    </div>

</div>

  <div class="row">

    <div class="large-8 columns">
      <?php
          $a = new Area('Main');
          $a->setAreaGridMaximumColumns(12);
          $a->display($c);
      ?>
    </div>

    <div class="large-4 columns">
      <?php
          $a = new Area('Sidebar');
          $a->setAreaGridMaximumColumns(12);
          $a->display($c);
      ?>
    </div>

</div>

<?php  $this->inc('elements/footer.php'); ?>
