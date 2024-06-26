<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Uts Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/mahasiswa">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/profile">Produk</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <a href="/tambah">
    <div class="container" style="margin-right: -1000px">
      <button class="btn btn-primary">Tambah Produk</button>
    </div>
  </a>
  
  <div class="container" style="margin-right: 20px">
    <h1>Halaman Produk</h1> 
  
        <table class="table table-primary table-hover table-striped">
          <thead>
            <tr>
              <th>Kode Produk</th>
              <th>Nama Produk</th>
              <th>Jenis Produk</th>
              <th>Harga</th>
            </tr>
          </thead>
          <tbody>
            <?php $nilai_awal = 1; ?>
            @while ($nilai_awal <= $jumlah)
            
            <tr>
              <td>BRG001</td>
              <td>Pena</td>
              <td>Alat tulis</td>
              <td>20000</td>
            </tr>
            <tr>
              <td>BRG002</td>
              <td>Buku</td>
              <td>Alat tulis</td>
              <td>15000</td>
            </tr>
            <?php $nilai_awal++ ?>
            @endwhile
          </tbody>
        </table>
    </div>

    

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>