<?php
$listChild = $args['listChild'] ?? [];
$mobileClass = $args['mobileClass'] ?? '';

if (!empty($mobileClass)) {
    $mobileClass = '-' . $mobileClass;
}
?>
<ul class="sub-menu<?php echo $mobileClass; ?>">
    <?php foreach ($listChild as $child): ?>
        <?php if (empty($child->child_items)): ?>
            <li><a href="<?php echo $child->url; ?>"><?php echo $child->title ?></a></li>
        <?php else: ?>
            <li>
                <a href="<?php echo $child->url; ?>"><?php echo $child->title ?></a>
                <?php get_template_part('template-parts/menu/list_child', null, [
                    'listChild' => $child->child_items,
                    'mobileClass' => $args['mobileClass'] ?? ''
                ]); ?>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>

<?php if (!empty($mobileClass)): ?>
    <span class="arrow-main-menu-m">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
    </span>
<?php endif; ?>
