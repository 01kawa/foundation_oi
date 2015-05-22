<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

  <div class="row">

    <div class="large-12 columns">
      <?php
          $a = new Area('Main');
          $a->setAreaGridMaximumColumns(12);
          $a->display($c);
      ?>
    </div>

  </div>

<?php  $this->inc('elements/footer.php'); ?>
