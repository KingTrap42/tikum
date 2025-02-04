<?php
include_once "../koneksi/koneksi.php";
if (isset($_POST['kirim'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $no_hp = $_POST['no_hp'];
  $lat = $_POST['lat'];
  $lng = $_POST['lng'];


  $sql = "insert into tb_evakuasi (id_evakuasi,nama, alamat, no_hp, lat, lng) values('','$nama','$alamat','$no_hp','$lat','$lng')";
  mysqli_query($koneksi, $sql);
  if ($sql) {
    ?>
    <script src="../assets/js/sweetalert.min.js"></script>
    <script type="text/javascript">
      swal({
        title: "Sukses",
        text: "Data telah ditambahkan",
        icon: "success",
        confirmButtonText: "Ok",
        closeOnConfirm: false
      },
        function () {
          window.location = "?halaman=evakuasi";
        });
    </script>
    <?php
  }
}
?>