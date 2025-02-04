<?php
$halaman = @$_GET['halaman'];
$aksi = @$_GET['aksi'];

if ($halaman == "evakuasi") {
  if ($aksi == "") {
    include 'page/hal_evakuasi.php';
  } elseif ($aksi == "select_pengumuman") {
    include 'data/select_sampah.php';
  } elseif ($aksi == "tambah_evakuasi") {
    include 'page/hal_tambah_evakuasi.php';
  } elseif ($aksi == "hapus_evakuasi") {
    include 'backend/hapus_evakuasi.php';
  } elseif ($aksi == "edit_evakuasi") {
    include 'page/hal_ubah_evakuasi.php';
  }

} elseif ($halaman == "peta") {
  if ($aksi == "") {
    include 'page/hal_peta.php';
  }
} elseif ($halaman == "beranda") {
  if ($aksi == "") {
    include 'page/index.php';
  }
} elseif ($halaman == "logut") {
  if ($aksi == "") {
    include 'backend/logut.php';
  }
}

?>