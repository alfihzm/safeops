<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; SafeOps Indonesia <?= date('Y') ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Yakin Ingin Keluar? </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body"> Klik "Keluar" Untuk Mengeluarkan Akun Anda </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal"> Batal </button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>"> Keluar </a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
<script>
$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});
</script>

<!-- Script untuk Ucapan selamat pagi, siang, malam  -->
<script type="text/javascript">
window.onload = function() {
    // Ambil waktu klien
    let waktuSekarang = new Date();
    let jam = waktuSekarang.getHours();

    // Update pesan selamat sesuai dengan waktu
    let pesanSelamat = '';

    if (jam >= 5 && jam < 12) {
        pesanSelamat = 'Selamat Pagi,';
    } else if (jam >= 12 && jam < 17) {
        pesanSelamat = 'Selamat Siang,';
    } else if (jam >= 17 && jam < 20) {
        pesanSelamat = 'Selamat Sore,';
    } else {
        pesanSelamat = 'Selamat Malam,';
    }

    // Tampilkan pesan selamat pada tampilan
    let pesanSelamatElement = document.getElementById("pesanSelamat");
    if (pesanSelamatElement) {
        pesanSelamatElement.textContent = pesanSelamat;
    }
};
</script>

</body>

</html>