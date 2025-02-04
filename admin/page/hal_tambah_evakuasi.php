<?php
include 'backend/insert_evakuasi.php';
?>
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Data Titik Kumpul Evakuasi</h1>
    <a href="?halaman=evakuasi" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i
        class="fas fa-back fa-sm text-white-50"></i> Kembali</a>
  </div>
  <div class="row">
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-12">
        <div class="card-header py-12">
          <h6 class="m-0 font-weight-bold text-primary">Data Titik Kumpul Evakuasi</h6>
        </div>
        <div class="card-body">
          <div class="col-md-9">
            <form class="form-horizontal" id="form" action="" method="post" enctype="multipart/form-data">
              <div class="form-group has-feedback">
                <div class="col-md-12">
                  <label>Nama evakuasi:</label>
                </div>
                <div class="col-sm-6">
                  <i class="form-control-feedback"></i>
                  <input type="text" class="form-control" name="nama" required>
                </div>
              </div>

              <div class="form-group has-feedback">
                <div class="col-md-12">
                  <label> Alamat</label>
                </div>
                <div class="col-sm-6">
                  <i class="form-control-feedback"></i>
                  <input type="text" class="form-control" name="alamat" required>
                </div>
              </div>

              <div class="form-group has-feedback">
                <div class="col-md-12">
                  <label>No Hp</label>
                </div>
                <div class="col-sm-6">
                  <i class="form-control-feedback"></i>
                  <input type="number" class="form-control" name="no_hp" required>
                </div>
              </div>

              <div class="form-group has-feedback">
                <div class="col-md-12">
                  <label> Lokasi evakuasi :</label>
                </div>
                <div class="col-sm-12">
                  <div id="mapid" style="height: 300px"></div>
                  <br>
                  <input type="hidden" name="lat" id="lat" value="">
                  <input type="hidden" name="lng" id="lng" value="">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-4 col-sm-6">
                  <input type="submit" class="btn btn-primary" name="kirim" value="Simpan">
                  <input type="reset" class="btn btn-default" nama="reset" value="Reset">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  var mymap = L.map('mapid').setView([-3.797357, 102.265947], 18);

  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiYXJtYWRoYW5zeWFyaWZoaWRheWF0IiwiYSI6ImNtNjJta3ozcjB4aGIyaW91em9qenVlYnQifQ.BynkTFmkswh5rdNroyjUqA', {
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
  }).addTo(mymap);

  var marker = L.marker([-7.747074, 110.355320]).addTo(mymap);
  var inputLat = document.getElementById('lat');
  var inputLng = document.getElementById('lng');
  inputLat.value = marker.getLatLng().lat;
  inputLng.value = marker.getLatLng().lng;

  function klik(e) {
    marker.setLatLng(e.latlng);
    inputLat.value = marker.getLatLng().lat;
    inputLng.value = marker.getLatLng().lng;
  }
  mymap.on('click', klik);
</script>
