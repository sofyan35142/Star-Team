<script src="https://code.jquery.com/jquery-3.6.1.slim.min.js"
    integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
<script>
    //sc navtab
    $(document).ready(function() {
        // $('#tblsemua').css('display','block')
        $('#tblbelumbayar').css('display','none')
        $('#tbldikemas').css('display','none')
        $('#tbldikirim').css('display','none')
        $('#tblselesai').css('display','none')
        $('#tbldibatalkan').css('display','none')
        $('#tblpengembalian').css('display','none')
        $('#tblpengirimangagal').css('display','none')
        $('#btn-semua').click(function() {
            var active = document.querySelector(".aktip")
            active.classList.remove("active");
            active.classList.remove("aktip");
            $(this).addClass('active');
            $(this).addClass('aktip');
            $('#tblsemua').css('display', 'block')
            $('#tblbelumbayar').css('display', 'none')
            $('#tbldikemas').css('display', 'none')
            $('#tbldikirim').css('display', 'none')
            $('#tblselesai').css('display', 'none')
            $('#tbldibatalkan').css('display', 'none')
            $('#tblpengembalian').css('display', 'none')
            $('#tblpengirimangagal').css('display', 'none')
        });
        $('#btn-belumbayar').click(function() {
            var active = document.querySelector(".aktip")
            active.classList.remove("active");
            active.classList.remove("aktip");
            $(this).addClass('active');
            $(this).addClass('aktip');
            $('#tblsemua').css('display', 'none')
            $('#tblbelumbayar').css('display', 'block')
            $('#tbldikemas').css('display', 'none')
            $('#tbldikirim').css('display', 'none')
            $('#tblselesai').css('display', 'none')
            $('#tbldibatalkan').css('display', 'none')
            $('#tblpengembalian').css('display', 'none')
            $('#tblpengirimangagal').css('display', 'none')
        });
        $('#btn-dikemas').click(function() {
            var active = document.querySelector(".aktip")
            active.classList.remove("active");
            active.classList.remove("aktip");
            $(this).addClass('active');
            $(this).addClass('aktip');
            $('#tblsemua').css('display', 'none')
            $('#tblbelumbayar').css('display', 'none')
            $('#tbldikemas').css('display', 'block')
            $('#tbldikirim').css('display', 'none')
            $('#tblselesai').css('display', 'none')
            $('#tbldibatalkan').css('display', 'none')
            $('#tblpengembalian').css('display', 'none')
            $('#tblpengirimangagal').css('display', 'none')
        });
        $('#btn-dikirim').click(function() {
            var active = document.querySelector(".aktip")
            active.classList.remove("active");
            active.classList.remove("aktip");
            $(this).addClass('active');
            $(this).addClass('aktip');
            $('#tblsemua').css('display', 'none')
            $('#tblbelumbayar').css('display', 'none')
            $('#tbldikemas').css('display', 'none')
            $('#tbldikirim').css('display', 'block')
            $('#tblselesai').css('display', 'none')
            $('#tbldibatalkan').css('display', 'none')
            $('#tblpengembalian').css('display', 'none')
            $('#tblpengirimangagal').css('display', 'none')
        });
        $('#btn-selesai').click(function() {
            var active = document.querySelector(".aktip")
            active.classList.remove("active");
            active.classList.remove("aktip");
            $(this).addClass('active');
            $(this).addClass('aktip');
            $('#tblsemua').css('display', 'none')
            $('#tblbelumbayar').css('display', 'none')
            $('#tbldikemas').css('display', 'none')
            $('#tbldikirim').css('display', 'none')
            $('#tblselesai').css('display', 'block')
            $('#tbldibatalkan').css('display', 'none')
            $('#tblpengembalian').css('display', 'none')
            $('#tblpengirimangagal').css('display', 'none')
        });
        $('#btn-dibatalkan').click(function() {
            var active = document.querySelector(".aktip")
            active.classList.remove("active");
            active.classList.remove("aktip");
            $(this).addClass('active');
            $(this).addClass('aktip');
            $('#tblsemua').css('display', 'none')
            $('#tblbelumbayar').css('display', 'none')
            $('#tbldikemas').css('display', 'none')
            $('#tbldikirim').css('display', 'none')
            $('#tblselesai').css('display', 'none')
            $('#tbldibatalkan').css('display', 'block')
            $('#tblpengembalian').css('display', 'none')
            $('#tblpengirimangagal').css('display', 'none')
        });
        $('#btn-pengembalian').click(function() {
            var active = document.querySelector(".aktip")
            active.classList.remove("active");
            active.classList.remove("aktip");
            $(this).addClass('active');
            $(this).addClass('aktip');
            $('#tblsemua').css('display', 'none')
            $('#tblbelumbayar').css('display', 'none')
            $('#tbldikemas').css('display', 'none')
            $('#tbldikirim').css('display', 'none')
            $('#tblselesai').css('display', 'none')
            $('#tbldibatalkan').css('display', 'none')
            $('#tblpengembalian').css('display', 'block')
            $('#tblpengirimangagal').css('display', 'none')
        });
        $('#btn-pengirimangagal').click(function() {
            var active = document.querySelector(".aktip")
            active.classList.remove("active");
            active.classList.remove("aktip");
            $(this).addClass('active');
            $(this).addClass('aktip');
            $('#tblsemua').css('display', 'none')
            $('#tblbelumbayar').css('display', 'none')
            $('#tbldikemas').css('display', 'none')
            $('#tbldikirim').css('display', 'none')
            $('#tblselesai').css('display', 'none')
            $('#tbldibatalkan').css('display', 'none')
            $('#tblpengembalian').css('display', 'none')
            $('#tblpengirimangagal').css('display', 'block')
        });
    });

    $(document).ready(function() {
        $('#modal-footer1').css('display', 'flex');
        $('#modal-footer2').css('display', 'none');
        $('#modal-footer3').css('display', 'none');
        $('#modalkontenaturpickup').css('display', 'none');
        $('#modalkontenantarcounter').css('display', 'none');
        $("#antarcounter").click(function(){
            $('#modal-footer1').css('display', 'none');
            $('#modal-footer2').css('display', 'flex');
            $('#modal-footer3').css('display', 'none');
        })
        $("#jemputpickup").click(function(){
            $('#modal-footer1').css('display', 'none');
            $('#modal-footer2').css('display', 'none');
            $('#modal-footer3').css('display', 'flex');
        })
        $('.nextjemputpickup').click(function() {
            $('#modalkonten1').css('display', 'none');
            $('#modalkontenaturpickup').css('display', 'block');
            $('#modalkontenantarcounter').css('display', 'none');
        });
        $('.nextantarcounter').click(function() {
            $('#modalkonten1').css('display', 'none');
            $('#modalkontenaturpickup').css('display', 'none');
            $('#modalkontenantarcounter').css('display', 'block');
        });
        $('#btn-kembali,#btn-kembali2').click(function() {
            $('#modalkonten1').css('display', 'block');
            $('#modalkontenaturpickup').css('display', 'none');
            $('#modalkontenantarcounter').css('display', 'none');
        });
    });
</script>
