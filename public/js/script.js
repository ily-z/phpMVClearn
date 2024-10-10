

$(function(){
    $('.tambahDataOrang').on('click' ,function(){
        $('#judulmodal').html('Tambah Data Orang')
        $('.labelsubmit button[type=submit]').html('Tambah data')
        //console.log('ok');
    })
    $('.tampilModalUbah').on('click',function(){
        $('#judulmodal').html('Ubah Data Orang');
        $('.labelsubmit button[type=submit]').html('Ubah data');
        $('.modal-body form').attr('action','http://localhost/mvcphp/public/orang/ubahData');
        const id= $(this).data('id');
        //console.log(id);

        $.ajax({
            url:'http://localhost/mvcphp/public/orang/getUbah',
            data:{id:id},
            method:'post',
            dataType:'json',
            success: function(data){
                //console.log(data);
                $('#inputnama').val(data.nama);
                $('#inputnomer').val(data.nomer);
                $('#inputalamat').val(data.alamat);
                $('#inputstatus').val(data.status);
                $('#id').val(data.id);
                //console.log(data.nama)
            }
        })
        


    }
)
});