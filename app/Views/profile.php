<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #000000, #ffffff);
      font-family: 'Arial', sans-serif;
    }
    .profile-card {
      background: #fff;
      border-radius: 15px;
      overflow: hidden;
      transition: transform 0.3s ease;
    }
    .profile-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }
    .header {
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      color: white;
      padding: 20px 0;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }
    .header h1 {
      margin: 0;
      font-size: 2.5rem;
      font-weight: bold;
    }
    .header p {
      font-size: 1rem;
      margin-top: 10px;
    }
    .profile-header {
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      color: white;
      padding: 30px;
    }
    .profile-header h3 {
      margin: 0;
    }
    .profile-body {
      padding: 20px;
    }
    .profile-body ul {
      padding-left: 0;
      list-style: none;
    }
    .profile-body ul li {
      padding: 10px 0;
      border-bottom: 1px solid #f1f1f1;
    }
    .profile-body ul li:last-child {
      border-bottom: none;
    }
    .btn-custom {
      background: #2575fc;
      border: none;
      color: white;
      transition: background 0.3s ease;
    }
    .btn-custom:hover {
      background: #6a11cb;
    }
    .footer {
      background-color: #2d2d2d;
      color: #fff;
      padding: 10px 0;
      text-align: center;
      position: relative;
      bottom: 0;
      width: 100%;
    }
    .footer a {
      color: #fff;
      text-decoration: none;
      transition: color 0.3s;
    }
    .footer a:hover {
      color: #2575fc;
    }
  </style>
</head>
<body>
  <!-- Header Section -->
  <div class="header">
    <h1>Selamat Datang Di Profil Saya</h1>
    <p>Halaman Ini Berisi Informasi Pribadi Saya, Pendidikan, Dan Minat Saya.</p>
  </div>

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="profile-card shadow-lg">
          <div class="profile-header text-center">
          </div>
          <div class="profile-body text-center">
            <h4>Haykal Aditya Saputra</h4>
            <p class="text-muted">Indonesia</p>
            <hr>
            <h5>Informasi Mahasiswa</h5>
            <ul>
              <li><strong>Nim:</strong> 23.240.0023</li>
              <li><strong>Kelas:</strong> 3P41</li>
              <li><strong>Jurusan:</strong> Teknik Informatika</li>
            </ul>
            <hr>
            <h5>Tentang Saya</h5>
            <p>
              Hai! Saya Adalah Mahasiswa Semester 3 Di Institut Widya Pratama Pekalongan. 
              Hobi Saya Suka Explore Hal-Hal Baru Yang Belum Pernah Saya Ketahui.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Section -->
  <div class="footer">
    <p>&copy; 2024 Haykal Aditya Saputra. <br> All Rights Reserved. <br> <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
