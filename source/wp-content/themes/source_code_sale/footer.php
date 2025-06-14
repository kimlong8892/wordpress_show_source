<script src="<?php echo getPublicFile('theme/vendor/jquery/jquery-3.2.1.min.js'); ?>"></script>
<script src="<?php echo getPublicFile('theme/vendor/animsition/js/animsition.min.js'); ?>"></script>
<script src="<?php echo getPublicFile('theme/vendor/bootstrap/js/popper.js'); ?>"></script>
<script src="<?php echo getPublicFile('theme/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo getPublicFile('theme/vendor/select2/select2.min.js'); ?>"></script>
<script src="<?php echo getPublicFile('theme/vendor/daterangepicker/moment.min.js'); ?>"></script>
<script src="<?php echo getPublicFile('theme/vendor/daterangepicker/daterangepicker.js'); ?>"></script>
<script src="<?php echo getPublicFile('theme/vendor/slick/slick.min.js'); ?>"></script>
<script src="<?php echo getPublicFile('theme/js/slick-custom.js'); ?>"></script>
<script src="<?php echo getPublicFile('theme/vendor/parallax100/parallax100.js'); ?>"></script>
<script src="<?php echo getPublicFile('theme/vendor/MagnificPopup/jquery.magnific-popup.min.js'); ?>"></script>
<script src="<?php echo getPublicFile('theme/vendor/isotope/isotope.pkgd.min.js'); ?>"></script>
<script src="<?php echo getPublicFile('theme/vendor/sweetalert/sweetalert.min.js'); ?>"></script>
<script src="<?php echo getPublicFile('theme/vendor/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>
<script src="<?php echo getPublicFile('theme/js/main.js'); ?>"></script>


<script>
    $(document).ready(function () {
        $('.how-pagination1').click(function () {
            const href = $(this).find('a').attr('href');

            if (href !== undefined) {
                window.location.href = href;
            }
        });

        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    });
</script>

<div class="container">
    <footer class="py-5">
        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>© <?php echo date('Y'); ?> - <?php echo get_bloginfo('name'); ?></p>
        </div>
    </footer>
</div>