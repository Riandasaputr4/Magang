<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Chat</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet"/>

  <!-- This is link bootstrap framework -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"/>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <!-- This my css -->
  <link rel="stylesheet" href="css/Chat.css"/> 
</head>
<body>

  <!-- This is nvabar -->
  <!-- <nav>
    <div class="logo-name">
      <a href="dashboard.html" class="logo_name">RAG WEB UI</a>
    </div>
    <div class="menu-items">
      <ul class="nav-links">
        <li><a href="knowladge.html">
          <i class="uil uil-desktop-alt"></i>
          <span class="link-name">Knowladge Base</span>
        </a></li>
        <li><a href="chat.html">
          <i class="uil uil-comment-alt"></i>
          <span class="link-name">Chat</span>
        </a></li>
        <li><a href="api.html">
          <i class="uil uil-user"></i>
          <span class="link-name">API Keys</span>
        </a></li>
      </ul>
    </div>
  </nav> -->
  <nav>
    <div class="logo-name">
      <a href="dashboard.php" class="logo_name">RAG WEB UI</a>
    </div>
    <div class="menu-items">
      <ul class="nav-links">
        <li><a href="knowladge.php">
          <i class="uil uil-desktop-alt"></i>
          <span class="link-name">Knowladge Base</span>
        </a></li>
        <li><a href="chat.php">
          <i class="uil uil-comment-alt"></i>
          <span class="link-name">Chat</span>
        </a></li>
        <li><a href="api.php">
          <i class="uil uil-user"></i>
          <span class="link-name">API Keys</span>
        </a></li>
      </ul>
    </div>
  </nav>
  <!-- The end of navbar -->

  <!-- This is the main content of the page -->
  <section class="chat">
    <div class="dash-content">
      <div class="breadcrumb">
        <i class="uil uil-estate"></i>
        <span class="separator">›</span>
        <a href="dashboard.html" class="breadcrumb-item">dashboard</a>
        <span class="separator">›</span>
        <a href="chat.html" class="breadcrumb-item">Chat</a>
      </div>
    </div>
      <div class="chat-container">
          <div class="chat-messages">
            <!-- Chat messages will be displayed here -->
            <!-- <div class="message"> -->
              <!-- <div class="message-sender">User</div> -->
              <!-- <div class="message-text">Hello, how can I help you?</div>
            </div>
            <div class="message2"> -->
              <!-- <div class="message-sender">Assistant</div> -->
              <!-- <div class="message-text">Hi! I have a question about the API.</div>
            </div>
            <div class="message">
              <div class="message-text">Sure! What do you want to know?</div>
            </div> -->
          </div>
          <!-- This chat input -->
          <div class="chat-input">
            <textarea id="composer" placeholder="Type your message..." oninput="growUp(this)"></textarea>
            <div class="icon-group">
              <div class="icon search ">
                <ion-icon name="globe-outline"></ion-icon>
                <p>search</p>
              </div>
            </div>
            <div class="icon-group">
              <div class="icon reason">
                <ion-icon name="bulb-outline"></ion-icon>
                <p>reason</p>
              </div>
              </div>
            <button type="button" class="btn btn-secondary"><ion-icon name="send-outline"></ion-icon></button>
          </div>
        </div>
  </section>

<script src="JS/Chat.js">
</script>>
<script>
  function growUp(textarea) {
    textarea.style.height = 'auto';
    textarea.style.height = textarea.scrollHeight + 'px';
  }
</script>
</body>