<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Knowledge Page</title>

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

    .add-doc {
      background-color: #0984e3;
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 14px;
    }

    /* Modal Styles */
    .custom-modal {
      display: none;
      position: fixed;
      z-index: 9999;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.6);
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background-color: #fff;
      padding: 10px 30px 30px 30px;
      border-radius: 8px;
      width: 700px;
      height: 450px;
      max-width: 95%;
      box-shadow: 0 0 20px rgba(0,0,0,0.2);
      text-align: center;
    }

    .close-btn {
      float: right;
      font-size: 24px;
      cursor: pointer;
    }

    .subtext {
      font-size: 14px;
      color: #666;
      margin-bottom: 20px;
    }

    .steps {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .step {
      display: flex;
      flex-direction: column;
      align-items: center;
      font-size: 12px;
      color: #888;
      margin: 0 40px;
    }

    .step.active {
      color: #0984e3;
    }

    .upload-box {
      border: 2px dashed #ccc;
      border-radius: 2px;
      padding: 24px 16px;     
      width: 100%; 
      max-width: 500px;  
      height: 140px;         
      margin: 0 auto;
      margin-bottom: 15px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: #f9f9f9;
      transition: border-color 0.3s;
      cursor: pointer;
    }
      .modal-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
    }

    .modal-header h2 {
      margin: 0;
      font-size: 20px;
    }

    .modal-header .close-btn {
    font-size: 24px;
    cursor: pointer;
    }

    .upload-box:hover {
      border-color: #0984e3;
    }

    .upload-icon {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .upload-btn {
      background-color: #0984e3;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="file"] {
      display: none;
    }

    .upload-label {
      cursor: pointer;
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
    <div class="dash-content">
      <div class="breadcrumb">
        <i class="uil uil-estate"></i><span class="separator">›</span>
        <a href="dashboard.php" class="breadcrumb-item">Dashboard</a>
        <span class="separator">›</span>
        <a href="knowladge.php" class="breadcrumb-item">Knowledge</a>
      </div>

      <div class="header-bar">
        <div class="title"><span class="text">Knowledge Base</span></div>
        <button class="add-doc"><i class="uil uil-plus"></i> New Knowledge Base</button>
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
            <td>Document1.pdf</td>
            <td>2.4 MB</td>
            <td>2025-05-19</td>
            <td>Processed</td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>

  <!-- Upload Modal -->
  <div class="custom-modal" id="uploadModal">
    <div class="modal-content">
      <div class="modal-header">
        <h2>Add Document</h2>
        <span class="close-btn" onclick="closeModal()">&times;</span>
      </div>
      <p class="subtext">Upload a document to your knowledge base. Supported formats: PDF, DOCX, Markdown, and Text files.</p>

      <div class="steps">
        <div class="step active"><span>⬆️</span><p>1. Upload</p></div>
        <div class="step"><span>📄</span><p>2. Preview</p></div>
        <div class="step"><span>⚙️</span><p>3. Process</p></div>
      </div>

      <form id="uploadForm">
        <label for="fileUpload" class="upload-box upload-label">
          <p class="upload-icon">⬆️</p>
          <p class="upload-text">Click to browse files</p>
          <p class="upload-support">PDF, DOCX, TXT, MD</p>
        </label>
        <input type="file" id="fileUpload" name="file"/>
        
      </form>
      <button type="submit" class="upload-btn">Upload Files</button>
    </div>
  </div>

  <!-- JavaScript -->
  <script>
    const modal = document.getElementById("uploadModal");
    const uploadBtn = document.querySelector(".add-doc");

    uploadBtn.addEventListener("click", function () {
      modal.style.display = "flex";
    });

    function closeModal() {
      modal.style.display = "none";
    }

    window.addEventListener("click", function (e) {
      if (e.target === modal) {
        closeModal();
      }
    });

    // Simulasi upload file
    document.getElementById("uploadForm").addEventListener("submit", function(e) {
      e.preventDefault();
      const fileInput = document.getElementById("fileUpload");
      if (fileInput.files.length === 0) {
        alert("Silakan pilih file terlebih dahulu.");
      } else {
        alert("File " + fileInput.files[0].name + " siap diupload (fitur backend belum aktif).");
        closeModal();
        fileInput.value = "";
      }
    });
  </script>
</body>
</html>
