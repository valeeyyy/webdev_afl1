<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="header text-center m-4">
        <h1>List Anggota</h1>
    </div>
</body>

<div class="card text-left w-75 mx-auto">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="true" href="#">Anggota</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Buku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Peminjaman</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>1076012510035</td>
                    <td>Marsha Valerie Wibowo</td>
                    <td>08123456789</td>
                    <td>marshavalerie@gmail.com</td>
                    <td>
                        <button class="btn btn-warning">Update</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>1076012510029</td>
                    <td>Christa Caitlyn Wonohadidjojo</td>
                    <td>08987654321</td>
                    <td>christacaitlyn@gmail.com</td>
                    <td>
                        <button class="btn btn-warning">Update</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="text-end mb-4">
            <button class="btn btn-primary">Tambahkan Anggota</button>
        </div>
    </div>
</div>




</html>