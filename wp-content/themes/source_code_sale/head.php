<script src="<?= getPublicFile('lib/jquery.min.js'); ?>"></script>
<script src="<?= getPublicFile('lib/popper.min.js'); ?>"></script>
<script src="<?= getPublicFile('lib/bootstrap5/js/bootstrap.bundle.min.js'); ?>"></script>
<link href="<?= getPublicFile('lib/bootstrap5/css/bootstrap.min.css'); ?>" rel="stylesheet">
<script src="<?= getPublicFile('lib/splide/dist/js/splide.js'); ?>"></script>
<link rel="stylesheet" href="<?= getPublicFile('lib/splide/dist/css/splide.min.css'); ?>">
<link rel="stylesheet" href="<?= getPublicFile('lib/fontawesome/css/all.css'); ?>">
<link rel="stylesheet" href="<?= getPublicFile('css/base.css'); ?>">

<?php
    $urlNodejsSocketIo = get_field('url_nodejs_socket_io', 'options');
?>

<?php if (!empty($urlNodejsSocketIo)): ?>
    <script src="<?= $urlNodejsSocketIo; ?>"></script>
    <script>
        var socket = io('<?= str_replace('socket.io/socket.io.js', '', $urlNodejsSocketIo) ?>');

        $(document).ready(function () {
            socket.on('server-send-list-user-online', (data) => {
                $('#user-online-count').text(data.count);
            });
        });
    </script>
<?php endif; ?>



<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php if (is_home()): ?>
    <title><?php bloginfo('name') ?></title>
<?php else: ?>
    <title><?php wp_title('', true, 'right'); ?> - <?php bloginfo('name') ?></title>
<?php endif; ?>

<meta name="zalo-platform-site-verification" content="EjtYAiZDCY0rvweRmz4u62YlepV4t7LhD3G" />