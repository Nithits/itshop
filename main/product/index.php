<!doctype html>
<html lang="en" data-bs-theme="auto"><head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

	<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
	  
	<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;700&display=swap" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@400;700&display=swap" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
		        /* สไตล์สำหรับคอลัมน์ */
        .marketing .col-auto {
            margin-top: 30px; /* เพิ่มระยะห่างด้านบนของแต่ละคอลัมน์ */
        }

        /* สไตล์สำหรับรูปภาพในคอลัมน์ */
        .marketing svg {
            margin-bottom: 0px; /* ระยะห่างระหว่างภาพกับข้อความ */
        }

        /* เพิ่มระยะห่างให้กับข้อความ */
        .marketing p {
            margin-top: 10px; /* ระยะห่างระหว่างข้อความกับรูปภาพ */
        }
		.col-auto {
			margin: 0 25px; /* กำหนดระยะห่างซ้ายและขวา */
		}
		.shadow-effect {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    	}
    	.shadow-effect:hover {
        transform: scale(1.05); /* ขยายการ์ดเล็กน้อยเมื่อเอาเมาส์ชี้ */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* เพิ่มเงาเมื่อเอาเมาส์ชี้ */
    }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
	@font-face {
		  font-family: 'FAMILY_NAME';
		  font-style: NORMAL_OR_ITALIC;
		  font-weight: NUMERIC_WEIGHT_VALUE;
		  src: url(FONT_FILE_NAME.woff2) format('woff2');
		}
		body {
            font-family: 'Kanit', sans-serif;
        }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>
 
<header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">IT Shop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
  			<a class="nav-link active" href="indexproduct.php">Product</a>
		</li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-bag"></i>
  </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="cart.php">ตะกร้าสินค้า</a></li>
            <li><a class="dropdown-item" href="order_status.php">คำสั่งซื้อ</a></li>
			<li><a class="dropdown-item" href="order_history.php">ประวัติคำสั่งซื้อ</a></li>
        </li>
		</li>
        </ul>
        </li>
        </ul>
<div class="dropdown text-end">
  <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="bi bi-person-circle" style="font-size: 32px;"></i>
  </a>
  <ul class="dropdown-menu dropdown-menu-end"> 
  <li><a class="dropdown-item" href="indexloginadmin.php"><i class="bi bi-person-lock"></i></i> Administrator</a></li>
	<li><a class="dropdown-item" href="indexporfile.php"><i class="bi bi-person-vcard"></i> Profile</a></li>
    <li><a class="dropdown-item" href="logout.php"><i class="bi bi-box-arrow-right"></i> Sign out</a></li>
</ul>

	</div>
    </div>
  </nav>
</header>

<main>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="margin-bottom: 60px;"> <!-- ปรับ margin-bottom -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="../product/indexproduct.php?search=Apple iPhone 16">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <image href="images/iphone.jpg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />
                </svg>
            </a>
        </div>
        <div class="carousel-item">
            <a href="../product/indexproduct.php?search=Apple iPad">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <image href="images/ipad.jpg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />
                </svg>
            </a>
        </div>
        <div class="carousel-item">
            <a href="../product/indexproduct.php?search= Microsoft Surface Pro11 ">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <image href="images/lab.jpg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />
                </svg>
            </a>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container-fluid marketing position-relative" style="padding-left: 15px; padding-right: 15px; margin-top: 60px;"> <!-- ปรับ margin-top -->
    <!-- Header title -->
        <h2 class="text-start" style="margin-bottom: 20px; margin-left: 100px; font-family: 'Kanit', sans-serif;">
    ผลิตภัณฑ์ของเรา <span class="text-secondary">มาดูว่ามีอะไรบ้าง</span></h2>
    <!-- Cards layout in a single row with horizontal scroll -->
	<div class="d-flex flex-row overflow-auto justify-content-center align-items-center" id="card-container" style="scroll-behavior: smooth; gap: 60px; padding: 20px 0;">
    <div class="card shadow-effect" style="width: 300px; height: 500px; transition: transform 0.3s, box-shadow 0.3s;">
        <a href="../product/indexproduct.php?pt_id=1">
            <img src="images/mobileh.png" class="card-img-top" alt="Mobile" style="width: 100%; height: 100%; object-fit: cover;">
        </a>
    </div>

    <div class="card shadow-effect" style="width: 300px; height: 500px; transition: transform 0.3s, box-shadow 0.3s;">
        <a href="../product/indexproduct.php?pt_id=2">
            <img src="images/laptoph.png" class="card-img-top" alt="Laptop" style="width: 100%; height: 100%; object-fit: cover;">
        </a>
    </div>

    <div class="card shadow-effect" style="width: 300px; height: 500px; transition: transform 0.3s, box-shadow 0.3s;">
        <a href="../product/indexproduct.php?pt_id=4">
            <img src="images/tableth.png" class="card-img-top" alt="Tablet" style="width: 100%; height: 100%; object-fit: cover;">
        </a>
    </div>

    <div class="card shadow-effect" style="width: 300px; height: 500px; transition: transform 0.3s, box-shadow 0.3s;">
        <a href="../product/indexproduct.php?pt_id=3">
            <img src="images/smarth.png" class="card-img-top" alt="Smart Watch" style="width: 100%; height: 100%; object-fit: cover;">
        </a>
    </div>

    <div class="card shadow-effect" style="width: 300px; height: 500px; transition: transform 0.3s, box-shadow 0.3s;">
        <a href="../product/indexproduct.php?pt_id=5">
            <img src="images/accesh.png" class="card-img-top" alt="Wireless Headphone" style="width: 100%; height: 100%; object-fit: cover;">
        </a>
    </div>
	</div><!-- /.d-flex -->
</div><!-- /.container-fluid -->
	  
	  
    <!-- START THE FEATURETTES -->

<!-- START THE FEATURETTES -->
<div class="featurette-divider" style="margin-bottom: 10px;"> <!-- ปรับ margin-bottom ตามต้องการ -->
	<h2 class="text-start" style="margin-bottom: 20px; margin-left: 115px; font-family: 'Kanit', sans-serif;">มาดูวันนี้เรามี <span class="text-secondary">อะไรเเนะนำบ้าง</span></h2>
	<div class="row featurette">
		<div class="col-md-12">
        	<a href="../product/indexproduct.php?search=
Samsung Galaxy Z">
			<img src="images/sumzs.png" alt="Samsung Galaxy Z" class="featurette-image img-fluid" style="width: 100%; height: 550px; object-fit: cover; margin-bottom: 10px;">
      		</a>		
     	</div>
		</div>
	<div class="row featurette">
		<div class="col-md-12">
        	<a href="../product/indexproduct.php?search=
Apple iPhone 16 128GB Teal">
			<img src="images/phones.png" alt="Samsung Galaxy Z" class="featurette-image img-fluid" style="width: 100%; height: 550px; object-fit: cover;">
            </a>
		</div>
	</div>

<div class="featurette-divider m-0 p-0" style="margin-top: 10px;"></div> <!-- ปรับ margin-top ตามต้องการ -->

<div class="container-fluid m-0 p-0">
    <div class="row m-0 p-0">
        <div class="col-6 p-2">
        	<a href="../product/indexproduct.php?search=
apple watch ultra 2">
            	<img src="images/ultra.png" class="img-fluid w-100" alt="Image 1">
            </a>
        </div>
        <div class="col-6 p-2">
        	<a href="../product/indexproduct.php?search=Apple AirPods Max">
            	<img src="images/pod.png" class="img-fluid w-100" alt="Image 2">
            </a>
        </div>
    </div>
</div>

<div class="featurette-divider m-0 p-0" style="margin-top: 5px;"></div>

<div class="container-fluid m-0 p-0">
    <div class="row m-0 p-0">
        <div class="col-6 p-2">
        	<a href="../product/indexproduct.php?search= Microsoft Surface Laptop Studio">
            <img src="images/micro.png" class="img-fluid w-100" alt="Image 3">
            </a>
        </div>
	<div class="col-6 p-2">
    	<a href="../product/indexproduct.php?search=Apple iPad Air">
       	 <img src="images/pad.png" class="img-fluid w-100" alt="Image 4">
    	</a>
	</div>
    </div>
</div>

<div class="featurette-divider m-0 p-0" style="margin-top: 5px;"></div>

    <div class="featurette-divider m-0 p-0" style="margin-top: 5px;"></div>
    
    <div class="container-fluid m-0 p-0">
        <div class="row m-0 p-0">
            <div class="col-6 p-2">
            	<a href="../product/indexproduct.php?search=Samsung Galaxy S24">
                	<img src="images/sums.png" class="img-fluid w-100" alt="Image 5">
                </a>
            </div>
            <div class="col-6 p-2">
            	<a href="../product/indexproduct.php?search=Marshall">
                	<img src="images/mar.png" class="img-fluid w-100" alt="Image 6">
                </a>
            </div>
        </div>
    </div>
    
    <div class="featurette-divider m-0 p-0" style="margin-top: 5px;"></div>

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

  <!-- FOOTER -->
	  <footer class="container">
		<p class="float-end"><a href="#">Back to top</a></p>
		<p class="mb-1">&copy; IT Shop 2024</p>
	  </footer>
	</main>
	
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>