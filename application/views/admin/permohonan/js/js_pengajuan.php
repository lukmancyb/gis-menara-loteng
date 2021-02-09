<script>
    function showDetail(obj) {
        console
        if (obj == "" || obj == null) {
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
                url: `<?= base_url('admin-pengajuan-alasan/show/');?>${obj}`,
                method: 'GET',
                async: true,
                dataType: 'json',
                success: function (res) {
                    $("#rowitem li").remove();
                    $('#modal_show_komentar').modal('show')
                    const data = JSON.parse(JSON.stringify(res.data))
                    for (var i in data) {
                        var status = ''
                        var nama = ''

                        if(data[i].created_by == '<?= $this->session->userdata('username');?>') {
                            nama += "Anda"
                        } else {
                             nama += data[i].created_by
                        }
                        switch(parseInt(data[i].status)){
                            case 1:
                                status += "<div class='text-success'>Diterima<div>"
                                break;
                            case 2: 
                                status += "<div class='text-danger'>Ditolak<div>"
                                break;
                            case 3:
                                status += "<div class='text-warning'>Revisi<div>"
                                break;  
                            default:
                                status += "<div class='text-info'>Belum Di Proses<div>"      
                        }


                        $("#rowitem").append(
                            `
                            <li class="media">
                            <img class="mr-3 rounded-circle" width="40" src="<?=base_url('assets/img/avatar');?>/avatar-1.png" alt="avatar">
                            <div class="media-body">
                                <div class="float-right text-primary">${data[i].created_at}</div>
                                <div class="media-title">${nama}</div>
                                <span class="text-small text-muted">
                                ${data[i].komentar}
                                </span>
                                <div class="text-info text-small mt-3">
                                    ${status}
                                </div>
                            </div>
                            </li>
                            `

                        );
                    }
                    $('#loading').hide();
                },
                error: function (err) {
                    $('#loading').hide();
                    swal({
                        title: "Not Found",
                        text: "Data Tidak ditemukan",
                        icon : 'info'
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
        $('#modal_show_komentar').modal('hide');
        // location.reload();

    }
    

    
</script>