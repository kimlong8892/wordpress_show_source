<?php
    $listBreadcrumb = $args['list_breadcrumb'] ?? null;
?>

<?php if (!empty($listBreadcrumb) && count($listBreadcrumb) > 0): ?>
    <div class="row">
        <div class="col-md-12">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= get_site_url(); ?>">Home</a>
                    </li>
                    <?php foreach ($listBreadcrumb as $item): ?>
                        <?php if (!empty($item['title'])): ?>
                            <?php if (!empty($item['is_current'])): ?>
                                <li class="breadcrumb-item active" aria-current="page"><?= $item['title']; ?></li>
                            <?php elseif (!empty($item['url'])): ?>
                                <li class="breadcrumb-item">
                                    <a href="<?= $item['url']; ?>">
                                        <?= $item['title']; ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ol>
            </nav>
        </div>
    </div>
<?php endif; ?>