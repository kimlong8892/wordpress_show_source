<?php
    $menu = $args['menu'] ?? null;
    $listChild = $args['listChild'] ?? null;
?>

<?php if (!empty($listChild)): ?>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="menu-main-<?= $menu->ID; ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo get_the_title($menu->ID); ?>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
    </li>
<?php else: ?>
<?php endif; ?>
