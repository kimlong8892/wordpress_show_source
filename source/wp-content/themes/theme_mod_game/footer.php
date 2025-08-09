<footer class="py-4 border-top bg-dark text-white">
    <div class="container small d-flex justify-content-between">
        <span>© <?php echo date('Y'); ?> <?php bloginfo('name'); ?></span>
        <span><?php bloginfo('description'); ?></span>
    </div>
</footer>

<script src="<?php echo esc_url(getPublicFile('lib/bootstrap5/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo esc_url(getPublicFile('asset/js/jquery-3.6.1.min.js')); ?>"></script>
<script src="<?php echo esc_url(getPublicFile('asset/js/main.js')); ?>"></script>