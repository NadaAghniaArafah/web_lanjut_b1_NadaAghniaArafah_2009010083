<?php
require "controllers/functions.php";
?>

<div class="row">
            <div class="col-sm-8">

                <p id="alert_notif"></p>

                <h4>Data Mahasiswa</h4>
                <table class="table table-striped table-dark" id="tabel">
                    <tr>
                        <th>Nama Mahasiswa</th>
                        <th>NPM</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                    </tr>
                    <tr>
                        <td>Nobita</td>
                        <td>98123</td>
                        <td>Sistem Informasi</td>
                        <td>Medan Barat</td>
                    </tr>
                    <tr>
                        <td>Luffy</td>
                        <td>98124</td>
                        <td>Teknik Informasi</td>
                        <td>Medan Timur</td>
                    </tr>
                </table>                
            </div>
            <div class="col-sm-4">
                <h4>Form Input Mahasiswa</h4>
                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="text" class="form-control" placeholder="Input Nama Mahasiswa" id="nama_mahasiswa">
                    <p id="lihat_nama_mahasiswa" class="peringatan"></p>
                </div>
                <div class="form-group">
                    <label>NPM</label>
                    <input type="number" id="npm" class="form-control" placeholder="Input NPM">
                    <p id="lihat_npm" class="peringatan"></p>
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <select id="jurusan" class="form-control">
                        <option value="" selected>Pilih Jurusan</option>
                       <?php
                       foreach(prodi() as $p) : ?>
                       <option value="<?= $p["id"] ?>"><?= $p["nama_prodi"] ?></option>
                       <?php endforeach; ?>
                    </select>
                    <p id="lihat_jurusan" class="peringatan"></p>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea id="alamat" class="form-control"></textarea>
                    <p id="lihat_alamat" class="peringatan"></p>
                </div>
                <div class="form-group">
                    <button class="btn btn-danger">Batal</button>
                    <button class="btn btn-success" id="simpan">Simpan</button>
                </div>
            </div>
        </div>

<script>
    $("#simpan").click(function(){
            var nama_mahasiswa = $("#nama_mahasiswa").val()
            if (nama_mahasiswa == "") {
                $("#lihat_nama_mahasiswa").text("Nama mahasiswa masih kosong!")
            }else {
                $("#lihat_nama_mahasiswa").text("")
            }

            var npm = $("#npm").val()
            if (npm == "") {
                $("#lihat_npm").text("NPM Masing kosong!")
            }else{
                $("#lihat_npm").text("")
            }

            var jurusan = $("#jurusan").val()
            if (jurusan == "") {
                $("#lihat_jurusan").text("Jurusan belum dipilih!")
            }else{
                $("#lihat_jurusan").text("")
            }

            var alamat = $("#alamat").val()
            if (alamat == "") {
                $("#lihat_alamat").text("Alamat belum diisi!")
            }else{
                $("#lihat_alamat").text("")
            }

            if (nama_mahasiswa != "" && npm != "" && jurusan != "" && alamat != "") {
               
            $.ajax({
                type: "POST",
                url: "controllers/simpan_mahasiswa.php",
                data: "nama_mahasiswa="+nama_mahasiswa+"&npm="+npm+"&id_prodi="+jurusan+"&alamat="+alamat,
                success: function(data){
                    if (data == "gagal") {
                        $("#alert_notif").html(`
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Warning!</strong> NPM sudah ada sebelumnya!.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            `)
                    }else if (data == "berhasil") {
                        alert("Data Berhasil ditambahkan!")
                    }
                }
            })
            }
    })
</script>