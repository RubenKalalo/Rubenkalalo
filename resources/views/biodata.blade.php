<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Biodata Horizontal</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: #f0f4f8;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
      color: #333;
    }

    .card {
      background: #f0f4f8;
      border-radius: 25px;
      box-shadow: 6px 6px 12px #d1d9e6, -6px -6px 12px #ffffff;
      max-width: 500px;
      width: 100%;
      padding: 30px;
      text-align: center;
      transition: 0.3s ease;
    }

    .card:hover {
      transform: scale(1.02);
    }

    .profile-header {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 20px;
      margin-bottom: 20px;
    }

    .profile-img {
      width: 75px;
      height: 75px;
      border-radius: 50%;
      object-fit: cover;
      box-shadow: inset 5px 5px 10px #d6dce6, inset -5px -5px 10px #ffffff;
      border: 3px solid #4facfe;
    }

    .profile-text {
      text-align: left;
    }

    .profile-text h1 {
      font-size: 22px;
      color: #2c3e50;
      margin-bottom: 4px;
    }

    .profile-text h3 {
      font-size: 14px;
      color: #666;
      font-weight: normal;
    }

    .biodata {
      text-align: left;
      margin-top: 10px;
      padding: 15px;
      border-radius: 15px;
      background: #f0f4f8;
      box-shadow: inset 4px 4px 8px #d6dce6, inset -4px -4px 8px #ffffff;
    }

    .biodata p {
      margin: 8px 0;
      font-size: 15px;
      color: #444;
    }

    .label {
      font-weight: 600;
      color: #4facfe;
    }

    @media (max-width: 600px) {
      .profile-header {
        flex-direction: column;
        text-align: center;
      }

      .profile-text {
        text-align: center;
      }
    }
  </style>
</head>
<body>
  <div class="card">
    <div class="profile-header">
      <img src="https://i.imgur.com/0y0y0y0.jpg" alt="Foto Profil" class="profile-img" />
      <div class="profile-text">
        <h2>Ruben Kalalo</h2>
        <h3>Pelajar | Bos Muda</h3>
      </div>
    </div>

    <div class="biodata">
      <p><span class="label">Nama Lengkap:</span> Ruben Kalalo</p>
      <p><span class="label">Tempat, Tanggal Lahir:</span> Manado, 1 Januari 2007</p>
      <p><span class="label">Jenis Kelamin:</span> Laki-laki</p>
      <p><span class="label">Alamat:</span> Jl. Merdeka No. 123, Manado</p>
      <p><span class="label">Hobi:</span> Ngoding, Desain Web, Membaca</p>
      <p><span class="label">Cita-cita:</span> Software Engineer</p>
    </div>
  </div>
</body>
</html>
