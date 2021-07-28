<?php
if ($_POST) {
    include "./_lib/entities/peminjaman.php";
    $param = [
        'nama' => $_POST['nama'],
        'judul' => $_POST['judul'],
        'tgl_pinjam' => $_POST['tgl_pinjam'],
        'tgl_kembali' => $_POST['tgl_kembali'],
        'denda' => $_POST['denda']
    ];
    store($param);

    echo "
        <script>
            console.log('Data Berhasil Disimpan');
            window.location.href = '?page=peminjaman'
        </script>
    ";
}
