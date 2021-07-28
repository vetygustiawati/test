<?php

include "./_lib/conn.php";

function getAll()
{
    global $conn;
    $query = "select * from peminjaman";
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function getById($id)
{
    global $conn;
    $param = [
        'id' => $id
    ];
    $query = "select * from peminjaman where id=:id";
    $statement = $conn->prepare($query);
    $statement->execute($param);
    return $statement->fetch();
}

function store($param)
{
    global $conn;
    $query = "insert into peminjaman (nama, judul, tgl_pinjam, tgl_kembali, denda) 
                values (:nama, :judul, :tgl_pinjam, :tgl_kembali, :denda)";
    $statement = $conn->prepare($query);
    $statement->execute($param);
}

function update($param)
{
    global $conn;
    $query = "update peminjaman set nama=:nama, judul=:judul, 
                tgl_pinjam=:tgl_pinjam, tgl_kembali=:tgl_kembali, denda=:denda
                where id=:id ";
    $statement = $conn->prepare($query);
    $statement->execute($param);
}

function delete($param)
{
    global $conn;
    $query = "delete from peminjaman where id=:id ";
    $statement = $conn->prepare($query);
    $statement->execute($param);
}
