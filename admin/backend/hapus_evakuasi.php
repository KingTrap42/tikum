<?php
include '../koneksi/koneksi.php';
$id = @$_GET['id'];

$sql = $koneksi->query("delete from tb_evakuasi where id_evakuasi='$id'");

if ($sql) {
  ?>
  <script src="../assets/js/sweetalert.min.js"></script>
  <script type="text/javascript">
    swal({
      title: "Hapus",
      text: "Data telah dihapus",
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
?>