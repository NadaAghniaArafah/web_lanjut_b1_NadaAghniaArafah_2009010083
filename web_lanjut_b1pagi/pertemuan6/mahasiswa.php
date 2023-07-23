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
                        <option value="si">Sistem Informasi</option>
                        <option value="ti">Teknik Informasi</option>
                        <option value="ds">Data Sains</option>
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
                //alert("Data berhasil ditambahkan!")

                $("#alert_notif").html(`
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Add Successfully!</strong> Data berhasil ditambahkan!.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                `)

                $("#nama_mahasiswa").val("")
                $("#npm").val("")
                $("#alamat").val("")

                var tabel = document.getElementById("tabel")
                var baris = tabel.insertRow(1)
                var kolom_mahasiswa = baris.insertCell(0)
                var kolom_npm = baris.insertCell(1)
                var kolom_jurusan = baris.insertCell(2)
                var kolom_alamat = baris.insertCell(3)

                kolom_mahasiswa.innerHTML = nama_mahasiswa
                kolom_npm.innerHTML = npm
                kolom_jurusan.innerHTML = jurusan
                kolom_alamat.innerHTML = alamat                

            }
    })
</script>