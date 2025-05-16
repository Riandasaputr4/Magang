<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"/>
  <link rel="stylesheet" href="css/knowladge.css"/> 
</head>
<body>
  <nav>
    <div class="logo-name">
      <a href="dashboard.php" class="logo_name">RAG WEB UI</a>
    </div>
    <div class="menu-items">
      <ul class="nav-links">
        <li>
          <a href="knowladge.php">
            <i class="uil uil-desktop-alt"></i>
            <span class="link-name">Knowladge Base</span>
          </a>
        </li>
        <li>
          <a href="chat.php">
            <i class="uil uil-comment-alt"></i>
            <span class="link-name">Chat</span>
          </a>
        </li>
        <li>
          <a href="api.php">
            <i class="uil uil-user"></i>
            <span class="link-name">API Keys</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <main class="dashboard">
    <div class="dash-content">
      <div class="breadcrumb">
        <i class="uil uil-estate"></i><span class="separator">›</span>
        <a href="dashboard.php" class="breadcrumb-item">Dashboard</a>
        <span class="separator">›</span>
        <a href="knowladge.php" class="breadcrumb-item">Knowledge</a>
      </div>

      <div class="header-bar">
  <div class="title">
    <span class="text">Knowledge Base</span>
  </div>
  <button class="btn btn-primary" onclick="location.href='halaman-baru.php'">
    <i class="uil uil-plus"></i> New Knowledge Base
  </button>
</div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Size</th>
            <th scope="col">Created</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Hadir</td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>
