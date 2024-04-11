
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration/Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-image: url('https://blog.brkcdn.com/2022/11/StaffRenderAll.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    .header, .content, .footer {
      background-color: rgba(0, 0, 0, 0.7); /* Black background with opacity */
      padding: 20px;
    }
    .header, .footer {
      text-align: center;
    }
    .footer {
      color: #fff;
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
    }
    .content {
      text-align: center;
      margin-top: 50px;
      color: #fff;
    }
    .logo-img {
      max-width: 200px;
      height: auto;
    }
    .btn-register, .btn-login {
      margin-top: 20px;
      font-size: 18px;
      width: 200px;
      border-radius: 30px;
      padding: 10px;
      transition: all 0.3s ease;
    }
    .btn-register:hover, .btn-login:hover {
      transform: scale(1.05);
    }
  </style>
</head>
<body>

  <div class="header">
    <img src="https://static.wikia.nocookie.net/brickhill/images/d/de/Brick_Hill_Logo_2022.png/revision/latest?cb=20220317192533" alt="Brick Hill Logo" class="logo-img">
  </div>

  <div class="content">
    <h2>Welcome to Brick Hill</h2>
    <p>Join the community now!</p>

    <a href="#" class="btn btn-primary btn-register"><i class="fas fa-user-plus"></i> Register</a>
    <a href="#" class="btn btn-secondary btn-login"><i class="fas fa-sign-in-alt"></i> Login</a>
  </div>

  <div class="footer">
    <p>&copy; 2024 Brick Hill</p>
  </div>

  <div style="background-color: rgba(0, 0, 0, 0.7); color: #fff; text-align: center; padding: 20px;">
    <p>Designed with <i class="fab fa-font-awesome"></i> Font Awesome. &copy; 2024</p>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
