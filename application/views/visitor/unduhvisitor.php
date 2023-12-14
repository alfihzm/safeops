<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            </table>
            <div class="container text-center" style="margin-top: -10px;">
                <h3 style="color: #2B1C2F;">Log Pengunjung</h3>
                <a href="#" id="printButton" class="btn btn-success"><i class="fa-solid fa-file-arrow-down fa-lg"></i> Unduh Laporan Ini</a>
            </div>
            <table class="table table-hover table-striped" style="border: 3px solid #2B1C2F;"><br>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="width: 16.666%;">Nama Pengunjung</th>
                        <th scope="col" style="width: 16.666%;">Tanggal Berkunjung</th>
                        <th scope="col" style="width: 16.666%;">Jam Kunjungan</th>
                        <th scope="col" style="width: 16.666%;">Jam Keluar</th>
                        <th scope="col" style="width: 16.666%;">Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($keluar as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td style="width: 16.666%;"><?= $k['pengunjung']; ?></td>
                            <td style="width: 16.666%;"><?= $k['tanggal']; ?></td>
                            <td style="width: 16.666%;"><?= $k['jam_masuk']; ?></td>
                            <td style="width: 16.666%;"> <?= $k['jam_keluar'] ?></td>
                            <td style="width: 16.666%;"><?= $k['kategori']; ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="form-group row">
                <div class="col-sm-4">
                    <a href="<?= base_url('visitor/index') ?>" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
        <!-- End of Main Content -->

        <script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
        <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
        <script type="text/javascript">
            window.setTimeout(function() {
                $(".flash_message").fadeTo(500, 0).slideUp(500, function() {
                    $(this).remove();
                });
            }, 2000);
        </script>
        <script>
            $(document).ready(function() {
                // Handle the modal open event
                $('.open-modal').click(function() {
                    var visitor_id = $(this).data('visitor-id');
                    $('#visitor_id').val(visitor_id);
                });

                // Handle the form submission
                $('#updateStatusForm').submit(function(e) {
                    e.preventDefault();

                    // Submit the form
                    $(this).unbind('submit').submit();
                });
            });
        </script>
        <script>
            var printButton = document.getElementById('printButton');

            // Function to hide the print button
            function hidePrintButton() {
                printButton.style.display = 'none';
            }

            // Function to show the print button
            function showPrintButton() {
                printButton.style.display = 'block';
            }

            // Event listener for the print button click
            printButton.addEventListener('click', function() {
                // Hide the print button before printing
                hidePrintButton();

                // Munculkan jendela pencetakan
                window.print();
            });

            // Event listener for beforeprint event
            window.addEventListener('beforeprint', hidePrintButton);

            // Event listener for afterprint event
            window.addEventListener('afterprint', showPrintButton);
        </script>
        <!-- End of Main Content -->