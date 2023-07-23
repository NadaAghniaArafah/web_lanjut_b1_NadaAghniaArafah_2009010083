$(document).ready(function(){

    $("#halaman_body").load("beranda.php")

    $(".halaman").click(function(){
        // console.log("OK")
        var halaman = $(this).attr("halaman")
        if (halaman == "mahasiswa") {
            $("#halaman_body").load("mahasiswa.php")
        }else if (halaman == "beranda") {
            $("#halaman_body").load("beranda.php")
        }else if (halaman == "prodi") {
            $("#halaman_body").load("prodi.php")
        }
    })

    
})