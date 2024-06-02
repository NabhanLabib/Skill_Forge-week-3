<!DOCTYPE html>
<html lang="en">
    <!-- insert/ panggil file database.php -->
    <?php include_once('config/database.php') ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Re-Open Task Management</title>
    <!-- CSS Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="mt-5">
        <div class="container-fluid">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        Daftar Tugas Selesai
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama tugas</th>
                                    <th>Due date</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //ini untuk mengambil data dari table task
                                $query= mysqli_query($koneksi,"SELECT * FROM task WHERE status_tugas=1"); 
                                //mengolah data dari variable query dan menampilkannya di web
                                //looping data
                                $no = 1;
                                while ($row=mysqli_fetch_object($query)):
                                ?>
                                    <!-- menampilkan di html -->
                                    <tr>
                                        <td> <?php echo $no++ ?> </td>
                                        <td> <?php echo $row->nama_tugas ?></td>
                                        <td> <?php echo $row->due_date ?></php></td>
                                        <td><a class="btn btn-success" href="Reopen.php?id=<?php echo $row->id ?>">Re-Open</a> </td>
                                    </tr>

                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>