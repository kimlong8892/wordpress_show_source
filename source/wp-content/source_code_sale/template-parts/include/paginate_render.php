<?php
    $total = $args['total'] ?? null;
    $itemPerPage = $args['itemPerPage'] ?? null;
    $paginate = $args['paginate'] ?? null;
?>

<?php if ($total > $itemPerPage && !empty($paginate)): ?>
    <div class="flex-l-m flex-w w-full p-t-10 m-lr--7">
        <?php foreach ($paginate as $item): ?>
            <?php if (str_contains($item, 'aria-current="page"')): ?>
                <span class="flex-c-m how-pagination1 trans-04 m-all-7 active-pagination1">
                        <?php echo $item; ?>
                    </span>
            <?php else: ?>
                <span class="flex-c-m how-pagination1 trans-04 m-all-7">
                        <?php echo $item; ?>
                    </span>
            <?php endif; ?>
        <?php endforeach; ?>

    </div>
<?php endif; ?>