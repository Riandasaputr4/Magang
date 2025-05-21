<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>API Keys Page</title>

  <!-- Fonts & Icons -->
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"/>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fff;
      margin: 0;
    }

    nav {
      width: 220px;
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      padding: 20px;
      color: white;
    }

    .logo-name a {
      font-size: 1.5rem;
      font-weight: bold;
      color: black;
      text-decoration: none;
    }

    .menu-items ul {
      list-style: none;
      padding: 0;
      margin-top: 30px;
    }

    .menu-items ul li {
      margin-bottom: 20px;
    }

    .menu-items ul li a {
      font-size: 18px;
      color: #707070;
      text-decoration: none;
      display: flex;
      align-items: center;
    }

    .menu-items ul li a i {
      margin-right: 10px;
    }

    main.dashboard {
      margin-left: 240px;
      padding: 30px;
    }

    .breadcrumb {
      margin-bottom: 20px;
      font-size: 14px;
      color: #555;
    }

    .breadcrumb .separator {
      margin: 0 5px;
    }

    .header-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 25px;
    }

    .header-bar .text {
      font-size: 1.5rem;
      font-weight: 600;
    }

    .btn-create {
      background-color: #2d3436;
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 14px;
    }

    .btn-create:hover {
      background-color: #636e72;
    }

    table {
      width: 100%;
      border-collapse: separate;
      border-spacing: 0 10px;
    }

    table th, table td {
      padding: 12px;
      text-align: left;
      vertical-align: middle;
    }

    table th {
      color: #black;
      font-size: 14px;

    }

    .api-row {
      background: #f9f9f9;
      border-radius: 8px;
    }

    .toggle-switch {
      width: 40px;
      height: 20px;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .toggle-switch input {
      display: none;
    }

    .slider {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    transition: .4s;
    border-radius: 34px;
  }

    .slider:before {
    position: absolute;
    content: "";
    height: 14px;
    width: 14px;
    left: 3px;
    top: 3px;
    background-color: white;
    transition: .4s;
    border-radius: 50%;
  }

    input:checked + .slider {
    background-color: #2d3436;
  }

  input:checked + .slider:before {
    transform: translateX(20px);
  }

    .btn-delete {
      background-color: #e74c3c;
      color: white;
      border: none;
      padding: 5px 12px;
      border-radius: 5px;
      font-size: 13px;
    }

    .btn-delete:hover {
      background-color: #c0392b;
    }

    .api-key {
      background-color: #f1f1f1;
      padding: 6px 10px;
      border-radius: 6px;
      font-family: monospace;
      max-width: 400px;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <nav>
    <div class="logo-name">
      <a href="dashboard.php" class="logo_name">RAG WEB UI</a>
    </div>
    <div class="menu-items">
      <ul class="nav-links">
        <li><a href="knowladge.php"><i class="uil uil-desktop-alt"></i><span class="link-name">Knowledge Base</span></a></li>
        <li><a href="chat.php"><i class="uil uil-comment-alt"></i><span class="link-name">Chat</span></a></li>
        <li><a href="api.php"><i class="uil uil-user"></i><span class="link-name">API Keys</span></a></li>
      </ul>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="dashboard">
    <div class="breadcrumb">
      <i class="uil uil-estate"></i><span class="separator">›</span>
      <a href="dashboard.php" class="breadcrumb-item">Dashboard</a>
      <span class="separator">›</span>
      <a href="api.php" class="breadcrumb-item">API Keys</a>
    </div>

    <div class="header-bar">
      <div class="text">API Keys</div>
      <button class="btn-create"><i class="uil uil-plus"></i> Create API Key</button>
    </div>

    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>API Key</th>
          <th>Status</th>
          <th>Created</th>
          <th>Last Used</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr class="api-row">
          <td>test</td>
          <td><span class="api-key">sk-6ee1f39c856c27081986bcb2cd24e5bc7691f9158c1b298a2efdc89cc0b7d</span></td>
          <td>
            <label class="toggle-switch">
              <input type="checkbox" checked>
              <span class="slider"></span>
            </label>
          </td>
          <td>2025/1/20</td>
          <td>2025/1/20</td>
          <td><button class="btn-delete">Delete</button></td>
        </tr>
      </tbody>
    </table>
  </main>

</body>
</html>
