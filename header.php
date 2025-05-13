<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Suhada.com</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    /* Custom white navbar */
    .navbar-custom {
      background-color: rgb(255, 255, 255); /* Warna putih */
    }
    
    /* Styling untuk brand Syuhada */
    .navbar-custom .navbar-brand {
      color: rgb(24, 146, 0); /* Warna hijau untuk Syuhada */
    }
    
   
    .navbar-custom .nav-link {
      color: rgb(0, 0, 0); 
    }
    
    
    .navbar-custom .nav-link:hover {
      color: rgb(24, 146, 0); 
    }
    
    /* Style Login button */
    .login-btn {
      border: 1px solid rgb(24, 146, 0);
      background-color: rgba(255, 255, 255, 0.15);
      padding: 0.375rem 0.75rem;
      border-radius: 0.25rem;
      transition: background-color 0.3s, color 0.3s;
      color: rgb(24, 146, 0);
      text-decoration: none;
      display: inline-block;
    }
    
    .login-btn:hover, .login-btn:focus {
      background-color: #ffffff;
      color: #198754;
      text-decoration: none;
    }
    
    
    .navbar-container {
      display: grid;
      grid-template-columns: 1fr auto 1fr;
      align-items: center;
      width: 100%;
    }
    
    .navbar-center {
      justify-self: center;
    }
    
    .navbar-left {
      justify-self: start;
      display: flex;
      align-items: center;
    }
    
    .navbar-right {
      justify-self: end;
      display: flex;
      align-items: center;
    }
    
    /* Remove default nav margin for the center nav */
    .navbar-center > .nav {
      margin-bottom: 0;
    }
  </style>
</head>
<body>
  <!-- navbar -->
  <nav class="navbar navbar-custom">
    <div class="container-fluid navbar-container">
      <!-- Left: Brand -->
      <div class="navbar-left">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
          <img src="/agama/assest/Logo Masjid Suhada.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-top me-2" />
          Suhada.com
        </a>
      </div>

      <!-- Center: Menu -->
      <div class="navbar-center">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dakwah.php">Dakwah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="zakat.php">Zakat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tentang.php">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kontak.php">Kontak</a>
          </li>
        </ul>
      </div>

     
    </div>
  </nav>
</body>
</html>
