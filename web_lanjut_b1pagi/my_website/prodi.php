<?php require "controllers/functions.php" ?>
<h2>Ini adalah Halaman Program Studi</h2>

<div class="row">
    <div class="col-sm-10">
        <label for="">Nama Prodi</label>
        <input type="text" name="" id="nama_prodi" class="form-control">
        <!-- ini adalah peringatan jika input nama prodinya kosong -->
        <p class="peringatan"></p>
    </div>
    <div class="col-sm-2">
        <button class="btn btn-sm btn-info mt-4" id="simpan_prodi">Simpan</button>
    </div>
</div>

<div class="table responsive">
    <table class="table table-primary table-sm table-striped">
        <head>
            <tr>
                <th>no

                </th>
                <th>id prodi</th>
                <th>nama prodi</th>
                <th>created</th>
                <th>opsi</th>
</tr>
</head>
<body>
    <?php
    $no = 1; 
    foreach(prodi() as $p) :
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $p["id"] ?></td>
        <td><?= $p["nama_prodi"] ?></td>
        <td><?= $p["created"] ?></td>
        <td><?= $p["updated"] ?></td>
        <td>
            <button class="btn btn-success btn-sm">Edit</button>
            <button class="btn btn-danger btn-sm hapus-prodi" attr_id_prodi="<?= $p["id"] ?>">Hapus</button>
    </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
    </div>


<script>
    (".hapus_prodi").click(function(){
        var id_prodi = $(this).attr("attr_id_prodi")
        console.log(id_prodi)
        var konfirmasi = confirm("Apakah data berikut akan dihapus?")
        if (konfirmasi === true) {

            $.ajax({
                type: "POST"
                url: "controllers/hapus_prodi.php",
                data: "id_prodi"+id_prodi,
                success: function(data){
                    //console.log(data)
                    //ini adalah respons dari hapus_prodi.php
                    if (data == "berhasil") {
                        //ini adalah fungsi untuk reload halaman prodi
                        $("#halaman_body").load("prodi.php")
                    }else if (data == "gagal") {
                        alert ("Data gagal dihapus!")
                    }
                }
            })

        }else{
            return false
        }
    }

    )
    $("#simpan_prodi").click(function(){
        //ini adalah variabel yang value nya diambil dari id nama_prodi
        var nama_prodi = $("#nama_prodi").val()
        if (nama_prodi == "") {
            $(".peringatan").text("Nama prodi masih kosong!")
        }else{
            $(".peringatan").text("")
            $.ajax({
                type: "POST",
                url: "controllers/simpan_prodi.php",
                data: "nama_prodi="+nama_prodi,
                success: function(data){
                    if (data == "gagal") {
                        alert("Data gagal ditambahkan!")
                    }else if (data == "berhasil") {
                        alert("Data berhasil ditambahkan")
                        $("#halaman_body").load("prodi.php")
                    }
                }
            })
        }
    })
</script>