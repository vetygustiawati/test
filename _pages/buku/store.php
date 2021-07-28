<?php
if ($_POST) {
    include "./_lib/entities/buku.php";

    $file = $_FILES['cover'];

    if ($file['size'] > 1000000) {
        header("Location: ?page=buku/tambah&msg=File Terlalu Besar");
    } else {
        $destination = 'assets/img/buku';
        $filename = "cover." . time() . "." . $_POST['isbn'] . "." . $extension;
        $extension = pathinfo($_FILES['cover']['name'], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['cover']['tmp_name'], $destination . "/" . $filename);
        $param = [
            'isbn' => $_POST['isbn'],
            'barcode' => $_POST['barcode'],
            'judul' => $_POST['judul'],
            'penulis' => $_POST['penulis'],
            'penerbit' => $_POST['penerbit'],
            'tahun_terbit' => $_POST['tahun_terbit'],
            'stok' => $_POST['stok'],
            'tersedia' => $_POST['tersedia'],
            'dipinjam' => $_POST['dipinjam'],
            'cover' => $destination . "/" . $filename
        ];
        store($param);

        header("Location: ?page=buku");
    }

    echo "
        <script>
            console.log('Data Berhasil Disimpan');
            window.location.href = '?page=buku'
        </script>
    ";
}
