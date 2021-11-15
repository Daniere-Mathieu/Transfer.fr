<footer class="footer">
  <h4>site made with love by Rihya</h4>
  <progress value="0" max="100"></progress>
  <?php
  $spacedisk = disk_free_space("/");
  $spacedisk /= 1000000000;
  $spacedisk = intval($spacedisk);
   ?>
  <div class="hidden">
    <?php echo $spacedisk; ?>
  </div>
</footer>
