<!-- Pagination Output Controller -->
<div class="card-footer">
  <nav aria-label="Contacts Page Navigation">
    <ul class="pagination justify-content-center m-0">
      <?php
      for ($p = 0; $p < $page_count; $p++) {
        $p_count = $p + 1;
        echo '<li class="page-item">';
        echo '<a class="page-link" href="?page=' . $p . '">' . $p_count . '</a>';
        echo '</li>';
      }
      ?>
    </ul>
  </nav>
</div>