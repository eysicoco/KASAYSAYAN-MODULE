<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../GALLERY/gallery-css.css">
    <title>GALLERY</title>
</head>

<body>

<!-- Top Header -->
			<header id="header">
			<div class="container">
			<button id="sidebarToggle"><img src="../PICS/sidenav1.png" alt="Menu"></button>
			
            <div class="logo">
            <img src="../PICS/logo1.png" alt="Logo">
            </div>
			
            <h1>DISCOVERING PHILIPPINE HISTORY</h1>
			
<!-- Search -->
            <div class="search-bar">
			
			<button class="search-img"><img src="../PICS/search.png" alt="Search"></button>
			<input type="text" placeholder="Search...">
			<button class="info-btn"><img src="../PICS/info.png" alt="Info"></button>
			
			</div>
            </div>
            </header>
	
    
<!-- User Navigation Sidebar -->
			<aside id="sidebar">
			<nav>
			
			<div class="user-icon">
			<img src="../PICS/haerin.jpg" alt="User Icon" id="userIcon">>
			</div>
	
			<div class="username">
			<p>username</p>
			</div>
    
			 <div class="user-actions">
			<label for="editUserIconInput" id="editUserIconLabel">Edit Icon</label>
            <input type="file" id="editUserIconInput" accept="image/*"></input>
			</div>
			
			<ul>
			<li><a href="../HOME1/kasaysayan1.php">HOME</a></li>
			<li><a href="../GALLERY/gallery.php">GALLERY</a></li>
            <li><a href="../QUIZ1/quiz1.php">TAKE A QUIZ</a></li>
            <li><a href="../LOGIN1/Login1.php">LOGOUT</a></li>
			</ul>
			
			<button id="closeSidebar">Close</button>
			</nav>
			</aside>
	
<!-- CONTENTS -->	
			<main id="mainContent">
    <section class="content-section">
        <h2>GALLERY</h2><br><hr><br>
		
		<div class="header-buttons">
            <button id="imagesButton">IMAGES</button>
            <button id="videosButton">VIDEOS</button>
        </div><br>
		
        <div class="rectangle-container">
		
            <!-- 15 rectangle boxes -->
           <div class="rectangle">
			<img src="../PICS/unit 1 pics/01-rizal.jpg" alt="Image">
			<div class="text">JOSE PROTACIO RIZAL MERCADO Y ALONSO REALONDA</div>
			<div class="download-icon">
			<img src="../PICS/dl.jpg" alt="Download">
            </div>
			</div>
			
            <div class="rectangle">
			<img src="../PICS/unit 1 pics/eto ba.jfif" alt="Image">
			<div class="text">IMAGE DESCRIPTION</div>
			</div>
			
			<div class="rectangle">
			<img src="../PICS/unit 1 pics/hero.jfif" alt="Image">
			<div class="text">IMAGE DESCRIPTION</div>
			</div>
			
			<div class="rectangle">
			<img src="../PICS/unit 1 pics/hero.png" alt="Image">
			<div class="text">IMAGE DESCRIPTION</div>
			</div>
			
			<div class="rectangle">
			<img src="../PICS/unit 1 pics/idk.jfif" alt="Image">
			<div class="text">IMAGE DESCRIPTION</div>
			</div>
			
			<div class="rectangle">
			<img src="../PICS/unit 1 pics/idk.jpg" alt="Image">
			<div class="text">IMAGE DESCRIPTION</div>
			</div>
			
			<div class="rectangle">
			<img src="../PICS/unit 1 pics/law.jfif" alt="Image">
			<div class="text">IMAGE DESCRIPTION</div>
			</div>
			
			<div class="rectangle">
			<img src="../PICS/unit 1 pics/law1.jfif" alt="Image">
			<div class="text">DANIELLE</div>
			</div>
			
			<div class="rectangle">
			<img src="../PICS/unit 1 pics/law2.png" alt="Image">
			<div class="text">MINJI</div>
			</div>
			
			<div class="rectangle">
			<img src="../PICS/haerin.jpg" alt="Image">
			<div class="text">KANG HAERIN</div>
			</div>
			
			<div class="rectangle">
			<img src="../PICS/hanni.jpg" alt="Image">
			<div class="text">HANNI PHAM</div>
			</div>
			
			<div class="rectangle">
			<img src="../PICS/hyein.jpg" alt="Image">
			<div class="text">HYEIN</div>
			</div>
			
			<div class="rectangle">
			<img src="../PICS/danni.jpg" alt="Image">
			<div class="text">DANIELLE MARSH</div>
			</div>
			
			<div class="rectangle">
			<img src="../PICS/minji.jpg" alt="Image">
			<div class="text">KIM MINJI</div>
			</div>
			
			<div class="rectangle">
			<img src="../PICS/haerin.jpg" alt="Image">
			<div class="text">VANESSA KHANG</div>
			</div>
			
        </div>
    </section>
</main>

    <script src="../HOME1/homejs.js"></script>
</body>
</html>