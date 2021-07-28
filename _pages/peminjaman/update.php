<?php
if ($_POST) {
    include "./_lib/entities/peminjaman.php";
    $param = [
        'nama' => $_GET['nama'],
        'judul' => $_POST['judul'],
        'tgl_pinjam' => $_POST['tgl_pinjam'],
        'tgl_kembali' => $_POST['tgl_kembali'],
        'denda' => $_POST['denda']
    ];
    update($param);

    echo "
        <script>
            console.log('Data Berhasil Diubah');
            window.location.href = '?page=peminjaman'
        </script>
    ";
}
