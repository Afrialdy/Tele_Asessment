<?php
session_start(); // Start the session

// Check if fullname session variable is set and not null
$fullname = isset($_SESSION['fullname']) ? $_SESSION['fullname'] : '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tele Asessment</title>
    <link rel="icon" href="../img/logo/ta.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/review.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex mt-2">
                <button id="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Tele Asessment</a>
                </div>
            </div>
            <div class="logo d-flex mt-2">
                <a href="https://maxy.academy/" target="_blank">
                    <img src="../img/logo/maxy_putih.png" alt="" class="sidebar-logo-img">
                </a>
                <a href="https://www.ubaya.ac.id/" target="_black">
                    <img src="../img/logo/logo-ubaya.png" alt="" class="sidebar-logo-img2">
                </a>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="../index.php" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="lni lni-protection"></i>
                        <span>Data Kandidat</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Link 1</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Link 2</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="lni lni-layout"></i>
                        <span>Data Asessment</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                Two Link
                            </a> 
                            <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Laporan Asessment</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Form</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="blog.html" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Blog</span>
                    </a>
                </li>

                <div class="three-item">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="lni lni-user"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="lni lni-cog"></i>
                            <span>Pengaturan</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="auth/login.html" class="sidebar-link">
                            <i class="lni lni-exit"></i>
                            <span>Keluar</span>
                        </a>
                    </li>
                </div>
            </ul>
            <!-- <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-question-circle"></i>
                </a>
            </div> -->
        </aside>

        <!-- Navbar -->
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3">
                <div class="navbar-collapse collapse">
                <h2 class="fw-bold">Tele Asessment's Blog</h2>
                    <ul class="navbar-nav ms-auto align-items-center d-flex">
                        <form action="#" class="d-none d-sm-inline-block">
                            <div class="input-group input-group-navbar">
                                <input type="text" class="form-control rounded-2" placeholder="Search..">
                                <button class="btn rounded-2" type="button">
                                    Search
                                </button>
                            </div>
                        </form>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-icon pe-md-0" data-bs-toggle="dropdown">
                                <i class="lni lni-alarm alarm"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end rounded mt-4">
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-alarm"></i>
                                    <span>Notification 1</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-alarm"></i>
                                    <span>Notification 2</span>
                                </a>                                
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-icon pe-md-0" data-bs-toggle="dropdown">
                                <i class="lni lni-popup notif"></i>
                            </a>
                            <!-- Konten dropdown untuk notifikasi -->
                            <div class="dropdown-menu dropdown-menu-end rounded mt-4">
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-popup"></i>
                                    <span>Notification 1</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-popup"></i>
                                    <span>Notification 2</span>
                                </a>                                
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-icon pe-md-0" data-bs-toggle="dropdown">
                                <img src="../img/avatar.png" class="avatar img-fluid" alt="avatar">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end rounded mt-4">
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-timer"></i>
                                    <span>Analytics</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-cog"></i>
                                    <span>Setting</span>
                                </a>
                                <!-- <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-question-circle"></i>
                                    <span>Setting</span>
                                </a> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="content px-3 py-4">
                <div class="container">
                    <div class="row">
                        <!-- First Row -->
                        <div class="row">
                            <!-- First Blog Post -->
                            <div class="col-lg-6">
                                <div class="rev mt-4">
                                    <div class="revbox d-flex">
                                        <div class="blog-post">
                                            <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/Types_of_Artificial_Intelligence.jpg" class="img-fluid mb-3 rounded" alt="Image" id="blogphoto">
                                            <h3 class="fw-bold">Revolutionizing Sales with AI: Boosting Efficiency and Personalization</h3>
                                            <p>In today's competitive market, sales teams are constantly seeking ways to enhance their performance. Enter artificial intelligence (AI), the game-changer. AI-powered tools streamline sales processes, analyze customer data, and predict trends, enabling sales teams to identify leads more effectively and personalize interactions. With AI, businesses can revolutionize their sales strategies, driving higher conversions and revenue growth.</p>
                                            <a href="#" style="text-align: right;">Click to learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Second Blog Post -->
                            <div class="col-lg-6">
                                <div class="rev mt-4">
                                    <div class="revbox d-flex">
                                        <div class="blog-post">
                                            <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/Types_of_Artificial_Intelligence.jpg" class="img-fluid mb-3 rounded" alt="Image" id="blogphoto">
                                            <h3 class="fw-bold">Transforming Marketing Efforts with AI: Targeting, Personalization, and Optimization</h3>
                                            <p>In the digital age, marketing has evolved from a one-size-fits-all approach to highly targeted and personalized campaigns. This evolution is fueled by artificial intelligence (AI), which has revolutionized how businesses engage with their audiences. AI-powered marketing tools enable organizations to analyze vast amounts of data, identify trends, and predict customer behavior, leading to more effective targeting and personalized messaging.</p>
                                            <a href="#" style="text-align: right;">Click to learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Second Row -->
                        <div class="row">
                            <!-- First Blog Post -->
                            <div class="col-lg-6">
                                <div class="rev mt-4">
                                    <div class="revbox d-flex">
                                        <div class="blog-post">
                                            <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/Types_of_Artificial_Intelligence.jpg" class="img-fluid mb-3 rounded" alt="Image" id="blogphoto">
                                            <h3 class="fw-bold">Revolutionizing Recruiting with AI: Streamlining Processes and Enhancing Candidate Experience</h3>
                                            <p>The traditional recruiting process is time-consuming, resource-intensive, and often prone to biases. Enter artificial intelligence (AI), offering a revolutionary solution to transform recruiting operations. AI-powered tools streamline the recruitment process, from sourcing candidates to screening resumes and conducting interviews. By automating repetitive tasks and analyzing vast amounts of data, AI enables recruiters to identify top talent more efficiently.</p>                                            </p>
                                            <a href="#" style="text-align: right;">Click to learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Second Blog Post -->
                            <div class="col-lg-6">
                                <div class="rev mt-4">
                                    <div class="revbox d-flex">
                                        <div class="blog-post">
                                            <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/Types_of_Artificial_Intelligence.jpg" class="img-fluid mb-3 rounded" alt="Image" id="blogphoto">
                                            <h3 class="fw-bold">The Future of Sales: How AI is Reshaping the Sales Landscape</h3>
                                            <p>The traditional sales process is undergoing a significant transformation thanks to the power of artificial intelligence (AI). AI-driven sales tools are revolutionizing the way businesses engage with customers, driving efficiency, and effectiveness. By harnessing the capabilities of AI, sales teams can gain valuable insights into customer behavior, preferences, and buying patterns, enabling them to deliver personalized experiences at scale.</p>
                                            <a href="#" style="text-align: right;">Click to learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Third Row -->
                        <div class="row">
                            <!-- First Blog Post -->
                            <div class="col-lg-6">
                                <div class="rev mt-4">
                                    <div class="revbox d-flex">
                                        <div class="blog-post">
                                            <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/Types_of_Artificial_Intelligence.jpg" class="img-fluid mb-3 rounded" alt="Image" id="blogphoto">
                                            <h3 class="fw-bold"> Enhancing Recruitment Practices with AI: Improving Efficiency and Diversity</h3>
                                            <p>In today's competitive job market, finding and attracting top talent is more challenging than ever. Fortunately, artificial intelligence (AI) is revolutionizing the recruitment process, offering innovative solutions to enhance efficiency and diversity. AI-powered recruiting tools streamline various stages of the hiring process, from sourcing candidates to assessing qualifications and conducting interviews. By leveraging AI, recruiters can save time, reduce bias, and identify the best candidates for the job.</p>
                                            <a href="#" style="text-align: right;">Click to learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Second Blog Post -->
                            <div class="col-lg-6">
                                <div class="rev mt-4">
                                    <div class="revbox d-flex">
                                        <div class="blog-post">
                                            <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/Types_of_Artificial_Intelligence.jpg" class="img-fluid mb-3 rounded" alt="Image" id="blogphoto">
                                            <h3 class="fw-bold">Mengungkap Potensi Tersembunyi: Tele-Asesmen Psikologi Berbasis AI</h3>
                                            <p>Dalam era digital ini, teknologi semakin memainkan peran penting dalam mengungkap potensi individu. Melalui tele-asesmen psikologi berbasis kecerdasan buatan (AI), individu dapat menjelajahi bakat, minat, dan potensi mereka dengan lebih dalam dan akurat. Tele-asesmen ini memanfaatkan algoritma AI untuk menganalisis berbagai faktor psikologis dan memberikan wawasan yang berharga bagi individu untuk mengembangkan diri mereka secara lebih efektif.</p>
                                            <a href="#" style="text-align: right;">Click to learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Footer -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-body-secondary">
                        <div class="col-6 text-start">
                            <a href="#" class="text-body-secondary">
                                <strong>Tele Asessment</strong>
                            </a>
                        </div>
                        <div class="col-6 text-end text-body-secondary d-none d-md-block">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#" class="text-body-secondary">Contact</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-body-secondary">About Us</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-body-secondary">Term & Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../js/my_chart.js"></script>

    
</body>
</html>