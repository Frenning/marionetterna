<?php
/**
 * The sidebar containing the main widget area
 *
 */

if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>

<div id="sidebar">
  <?php dynamic_sidebar('sidebar-1');?>
</div>
<div id="sidebar2" class="widgets-area">
  <?php dynamic_sidebar('sidebar-2');?>
</div>