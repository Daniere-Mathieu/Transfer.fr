<footer class="footer">
  <h4 class="footerTitle">site made with love by Rihya</h4>
  <div class="progressFullDisk">
    <div class="progressFreeDisk">
      500GO
    </div>
  </div>
  <?php
  $spacedisk = disk_free_space("/");
  $spacedisk /= 1000000000;
  $spacedisk = intval($spacedisk);
   ?>
  <div class="hidden">
    <?php echo $spacedisk; ?>
  </div>
</footer>
