<script>
    function uploadSyarat(id) {
        $('#file_input').val('');

        if (id == "" || id== null) {
            swal({
                title: "Error",
                text: "Data yang anda cari tidak ada, mungkin sudah terhapus, oleh admin.",
                icon: 'error',
            }).then((value) => {
                location.reload(true);
            });
        } else {
            $('#loading').show();
            // console.log(obj);
            $.ajax({
                url: `<?= base_url('pengajuan-upload/show/');?>${id}`,
                method: 'GET',
                async: true,
                dataType: 'json',
                success: function (res) {
                    $('#modalUploadFile').modal('show');
                    $('#loading').hide();
                    const response = JSON.parse(JSON.stringify(res))
                    if (response.data != null) {
                        $('#id_pengajuan').val(response.data.id_pengajuan);
                        $('#source').val(response.data.source);
                        $('#id').val(response.data.id);
                        $('#nama_syarat').text(response.data.nama);
                    } else {
                        $('#loading').hide();
                        $('#modalUploadFile').modal('hide');
                        swal({
                            title: "Error",
                            text: response.msg,
                            icon: 'info'
                        })
                    }


                    /**
                     * Code success here
                     */
                },
                error: function (err) {
                    $('#loading').hide();
                    swal({
                        title: "Error",
                        text: "Terjadi kesalahan",
                        icon: 'info'
                    })
                }
            })
        }

    }

    function showFile(path){

        console.log(`<?= base_url();?>assets/files/permohonan/${path}`);
        if(path != null || path != ""){
            $('#modalShowFile').modal('show');
            $('#file_url').attr('src', `<?= base_url();?>assets/files/permohonan/${path}`)
        }
    }

    function closeModal() {
        $('#modalUploadFile').modal('hide');
        // location.reload();
    }
</script>