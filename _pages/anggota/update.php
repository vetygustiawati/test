<?php
if ($_POST) {
    include "./_lib/entities/anggota.php";
    $param = [
        'id' => $_GET['id'],
        'nama' => $_POST['nama'],
        'password' => $_POST['password'],
        'email' => $_POST['email'],
        'no_handphone' => $_POST['no_handphone'],
        'nim' => $_POST['nim'],
        'jenis_kelamin' => $_POST['jenis_kelamin'],
        'alamat' => $_POST['alamat']
    ];
    update($param);

    echo "
        <script>
            console.log('Data Berhasil Diubah');
            window.location.href = '?page=anggota'
        </script>
    ";
}
