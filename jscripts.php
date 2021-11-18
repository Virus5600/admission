<!-- All Jquery -->

<!-- ============================================================== -->

<script src="assets2/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap tether Core JavaScript -->

<script src="assets2/plugins/bootstrap/js/popper.min.js"></script>

<script src="assets2/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- slimscrollbar scrollbar JavaScript -->

<script src="js/jquery.slimscroll.js"></script>

<!--Wave Effects -->

<script src="js/waves.js"></script>

<!--Menu sidebar -->

<script src="js/sidebarmenu.js"></script>

<!--stickey kit -->

<script src="assets2/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>

<!--Custom JavaScript -->

<script src="js/custom.min.js"></script>

<!-- ============================================================== -->

<!-- This page plugins -->

<!-- ============================================================== -->

<!-- chartist chart -->

<script src="assets2/plugins/chartist-js/dist/chartist.min.js"></script>

<script src="assets2/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>

<!-- Chart JS -->

<script src="assets2/plugins/echarts/echarts-all.js"></script>

<script src="assets2/plugins/toast-master/js/jquery.toast.js"></script>

<!-- Chart JS -->

<script src="js/toastr.js"></script>

<script src="assets2/plugins/sweetalert2/dist/sweetalert2.all.min.js"></script>

<script src="assets2/plugins/tableHeadFixer.js"></script>

<!-- ============================================================== -->

<!-- Style switcher -->

<!-- ============================================================== -->

<script src="assets2/plugins/styleswitcher/jQuery.style.switcher.js"></script>

<script src="assets2/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>

<script src="assets2/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

<!-- Dropzone Plugin JavaScript -->
<link rel="stylesheet" href="assets2/plugins/dropify/dist/css/dropify.min.css">

<script src='assets2/plugins/calendar/dist/fullcalendar.min.js'></script>
<script src="assets2/plugins/calendar/dist/cal-init.js"></script>

<!-- Maps -->

<!-- ============================================================== -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9N071f-dwiyVB3WtyD3KH1LySx4bf6HA"></script>

<script src="assets2/gmaps/gmaps.js"></script>

<script src="assets2/plugins/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

<script src="js/mask.init.js"></script>

<script type="text/javascript">
    $(document).on('show.bs.modal', '.modal', function () {
            var zIndex = 1040 + (10 * $('.modal:visible').length);
        $(this).css('z-index', zIndex);
        setTimeout(function() {
            $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
        }, 0);
    });

    var zIndex = Math.max.apply(null, Array.prototype.map.call(document.querySelectorAll('*'), function(el) {
      return +el.style.zIndex;
    })) + 10;
    $(document).on('hidden.bs.modal', '.modal', function () {
        $('.modal:visible').length && $(document.body).addClass('modal-open');
    });
</script>

<script src="assets2/plugins/dropify/dist/js/dropify.min.js"></script>

<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>