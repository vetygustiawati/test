<?php
if ($_POST) {
    include "./_lib/entities/buku.php";
    $param = [
        'id' => $_GET['id'],
        'isbn' => $_POST['isbn'],
        'barcode' => $_POST['barcode'],
        'judul' => $_POST['judul'],
        'penulis' => $_POST['penulis'],
        'penerbit' => $_POST['penerbit'],
        'tahun_terbit' => $_POST['tahun_terbit'],
        'stok' => $_POST['stok'],
        'tersedia' => $_POST['tersedia'],
        'dipinjam' => $_POST['dipinjam'],
        'cover' => $_POST['cover']
    ];
    update($param);

    echo "
        <script>
            console.log('Data Berhasil Diubah');
            window.location.href = '?page=buku'
        </script>
    ";
}
