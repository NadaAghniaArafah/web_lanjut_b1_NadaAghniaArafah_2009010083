$(document).ready(function(){
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
                alert("Data berhasil ditambahkan!")
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
})

// $(document).ready(function(){

//         $("#simpan").click(function(){
//             var nama_mahasiswa = $("#nama_mahasiswa").val()
//             if (nama_mahasiswa == "") {
//                 $("#lihat_nama_mahasiswa").text("Nama mahasiswa masih kosong!")
//             }else {
//                 $("#lihat_nama_mahasiswa").text("")
//             }

//             var npm = $("#npm").val()
//             if (npm == "") {
//                 $("#lihat_npm").text("NPM Masing kosong!")
//             }else{
//                 $("#lihat_npm").text("")
//             }

//             var jurusan = $("#jurusan").val()
//             if (jurusan == "") {
//                 $("#lihat_jurusan").text("Jurusan belum dipilih!")
//             }else{
//                 $("#lihat_jurusan").text("")
//             }

//             var alamat = $("#alamat").val()
//             if (alamat == "") {
//                 $("#lihat_alamat").text("Alamat belum diisi!")
//             }else{
//                 $("#lihat_alamat").text("")
//             }

//             if (nama_mahasiswa != "" && npm != "" && jurusan != "" && alamat != "") {
//                 alert("Data berhasil ditambahkan!")
//                 $("#nama_mahasiswa").val("")
//                 $("#npm").val("")
//                 $("#alamat").val("")

//                 var tabel = document.getElementById("tabel")
//                 var baris = tabel.insertRow(1)
//                 var kolom_mahasiswa = baris.insertCell(0)
//                 var kolom_npm = baris.insertCell(1)
//                 var kolom_jurusan = baris.insertCell(2)
//                 var kolom_alamat = baris.insertCell(3)

//                 kolom_mahasiswa.innerHTML = nama_mahasiswa
//                 kolom_npm.innerHTML = npm
//                 kolom_jurusan.innerHTML = jurusan
//                 kolom_alamat.innerHTML = alamat                

//             }

//         })

// })