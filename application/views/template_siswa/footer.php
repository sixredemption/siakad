    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
    -->

<html>
<body>

    <script src="<?= base_url('assets_siswa/') ?>vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets_siswa/') ?>vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url('assets_siswa/') ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets_siswa/') ?>assets/js/main.js"></script>


    <script src="<?= base_url('assets_siswa/') ?>vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="<?= base_url('assets_siswa/') ?>assets/js/dashboard.js"></script>
    <script src="<?= base_url('assets_siswa/') ?>assets/js/widgets.js"></script>
    <script src="<?= base_url('assets_siswa/') ?>vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="<?= base_url('assets_siswa/') ?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="<?= base_url('assets_siswa/') ?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
