<h1>Halaman Tambah Data</h1>

<div class="card card-default">
    <div class="card-header">
        <div class="card-title">
            Tambah Data Peminjaman
        </div>
    </div>
    <div class="card-body">
        <form action="?page=peminjaman/store" method="post">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Judul</label>
                        <input type="text" class="form-control" name="judul">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Tanggal Pinjam</label>
                        <input type="date" class="form-control" name="tgl_pinjam">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Tanggal Kembali</label>
                        <input type="date" class="form-control" name="tgl_kembali">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Denda</label>
                        <input type="text" class="form-control" name="denda">
                    </div>
                </div>
</div>
            <div class="form-group">
                <button class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </form>
    </div>
</div>