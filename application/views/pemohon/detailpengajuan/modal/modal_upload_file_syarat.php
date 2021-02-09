<div class="modal fade" tabindex="-1" role="dialog" id="modalUploadFile">
    <div class="modal-dialog" role="document">
        <form action="<?= base_url();?>pengajuan-upload/update" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Upload File</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center id="loading"><div class="loader"></div><small>Please wait</small></center><br>
                    <div class="form-group col-lg-12 col-md-12">
                        *<label  id="nama_syarat" class="text-dark" style="font-size: 14px;" ></label><br>
                        <input type="hidden" id="id" name="id">
                        <input type="hidden" id="id_pengajuan" name="id_pengajuan">
                        <input type="hidden" id="source" name="source">
                        <input type="file" name="nama_file" class="form-control" required>
                        <label for="keterangan" class="text-warning"><i>File yang dimasukan harus
                                pdf, ukuran maksimal 5 mb </i></label>

                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>