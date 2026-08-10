<!doctype html>
<html lang="zxx">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="description" content="Premium academic study guides, cognitive concentration methods, and vintage library archives from the LearningVista Hub.">
	<!-- Page Title -->
    <title>LearningVista Hub | Premium Study Guides & Academic Growth</title>
	<!-- Bootstrap Css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome Icon Css-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
	<!-- Main Custom Css -->
	<link href="assets/style.css" rel="stylesheet">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-0LY0HY7L01');
    </script>
    <style>
        /* Extra custom styles for pure image hero showcase & new sections */
        .hero-images-only {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            padding: 15px;
            background: var(--white-color);
            border-bottom: 1px solid var(--border-color);
        }
        .hero-img-item {
            height: 580px;
            overflow: hidden;
            border-radius: 4px;
            border: 1px solid var(--border-color);
            position: relative;
        }
        .hero-img-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }
        .hero-img-item:hover img {
            transform: scale(1.05);
        }

        /* Methodology Section */
        .cognitive-methodology {
            padding: 100px 0;
            background: var(--white-color);
            border-bottom: 1px solid var(--border-color);
        }
        .methodology-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }
        .methodology-card {
            background: var(--bg-color);
            border: 1px solid var(--border-color);
            padding: 30px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        .methodology-card:hover {
            border-color: var(--accent-ochre);
            transform: translateY(-3px);
        }
        .methodology-card h4 {
            font-family: var(--font-serif);
            font-size: 20px;
            color: var(--accent-color);
            margin-bottom: 10px;
        }
        .methodology-card p {
            font-size: 14px;
            margin: 0;
            opacity: 0.8;
        }
        
        /* Testimonials Section */
        .testimonials-section {
            padding: 100px 0;
            background: var(--bg-color);
            border-bottom: 1px solid var(--border-color);
        }
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }
        .testimonial-card {
            background: var(--white-color);
            border: 1px solid var(--border-color);
            padding: 40px;
            border-radius: 4px;
            position: relative;
        }
        .testimonial-card p {
            font-size: 15px;
            font-style: italic;
            margin-bottom: 25px;
            line-height: 1.7;
        }
        .testimonial-author {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid var(--border-color);
            padding-top: 15px;
        }
        .testimonial-author h5 {
            font-family: var(--font-serif);
            font-size: 16px;
            color: var(--accent-color);
            margin: 0;
        }
        .testimonial-author span {
            font-size: 12px;
            color: var(--accent-ochre);
            font-weight: 700;
        }
        
        @media (max-width: 992px) {
            .hero-images-only {
                grid-template-columns: 1fr;
                gap: 10px;
            }
            .hero-img-item {
                height: 350px;
            }
            .methodology-grid {
                grid-template-columns: 1fr;
            }
            .testimonials-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <!-- Topbar Section Start -->
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <div class="topbar-content-info">
                        <p><i class="fa-solid fa-graduation-cap"></i> Independent Cognitive Calibration Research and Study Station Blueprints</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Section End -->

    <!-- Header Start -->
	<header class="main-header">
        <div class="container">
            <div class="header-row">
                <!-- Logo Left -->
                <a class="navbar-brand" href="index.php">
                    LearningVista <span>Hub</span>
                </a>
                
                <!-- Nav Links Center -->
                <nav class="d-none d-lg-block">
                    <ul class="header-nav">
                        <li><a class="active" href="index.php">Home</a></li>                                
                        <li><a href="about.html">Atelier Craft</a></li>
                        <li><a href="blog.html">Wear Logs</a></li>
                        <li><a href="contact.html">Curator Desk</a></li>
                    </ul>
                </nav>
                
                <!-- Actions Right -->
                <div class="header-actions">
                    <a href="contact.html"><i class="fa-regular fa-user"></i> Account</a>
                    <a href="blog.html"><i class="fa-solid fa-basket-shopping"></i> Cart</a>
                </div>
            </div>
        </div>
	</header>
	<!-- Header End -->
   
    <!-- Fullscreen Pure Image Hero Showcase Start (Image Section 1 - Text Removed) -->
    <section class="hero-images-only">
        <!-- Image 1 -->
        <div class="hero-img-item" data-reveal="left">
            <img src="assets/img/hero.jpg" alt="Student reading book at study desk">
        </div>
        <!-- Image 2 -->
        <div class="hero-img-item" data-reveal="zoom">
            <img src="assets/img/coll_1.jpg" alt="Vintage book library archives room">
        </div>
        <!-- Image 3 -->
        <div class="hero-img-item" data-reveal="right">
            <img src="assets/img/coll_2.jpg" alt="Stack of vintage books study setup">
        </div>
    </section>
    <!-- Fullscreen Pure Image Hero Showcase End -->

    <!-- Academic Pillars Section Start (Slanted Borders & Image Section 2) -->
    <section class="pillars-section">
        <div class="container py-5">
            <div class="section-title" data-reveal>
                <span>Academic Standards</span>
                <h2>Cognitive Study Pillars</h2>
            </div>
            
            <div class="pillars-grid">
                <!-- Card 1 -->
                <div class="pillar-card" data-reveal="zoom">
                    <h3>Cognitive Maps</h3>
                    <p>We map focus timelines to set visual coordinates, helping student minds block outside phone triggers.</p>
                </div>
                
                <!-- Card 2 -->
                <div class="pillar-card" data-reveal="zoom">
                    <h3>Focus Intervals</h3>
                    <p>Our study plans structure breaks at exactly forty-five minute marks to prevent mental wear and eye strain.</p>
                </div>
                
                <!-- Card 3 -->
                <div class="pillar-card" data-reveal="zoom">
                    <h3>Library Archives</h3>
                    <p>We log book weights, shelf access paths, and desk clearances to maintain silent study corridors.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Academic Pillars End -->

    <!-- New Section A: The Cognitive Methodology Start -->
    <section class="cognitive-methodology">
        <div class="container">
            <div class="section-title" data-reveal>
                <span>Methodology Lab</span>
                <h2>Study Methods & Calibration</h2>
            </div>
            
            <div class="methodology-grid">
                <!-- Method 1 -->
                <div class="methodology-card" data-reveal="zoom">
                    <h4>Pomodoro Spacing</h4>
                    <p>Standardizing study cycles to forty-five minutes followed by ten minutes of screen-free eye rest.</p>
                </div>
                <!-- Method 2 -->
                <div class="methodology-card" data-reveal="zoom">
                    <h4>Active Recall Slots</h4>
                    <p>Integrating blank review panels into desks to write quick memory summaries before closed books.</p>
                </div>
                <!-- Method 3 -->
                <div class="methodology-card" data-reveal="zoom">
                    <h4>Cornell Grid Layouts</h4>
                    <p>Sizing study pad margins to segment main notes, cue keywords, and bottom summaries cleanly.</p>
                </div>
                <!-- Method 4 -->
                <div class="methodology-card" data-reveal="zoom">
                    <h4>Dual Coding Zones</h4>
                    <p>Designing double board tracks to place visual diagrams side-by-side with written text arguments.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- New Section A End -->

    <!-- Study Stations Section Start (Circular Highlight Cards & Image Section 3) -->
    <section class="stations-section">
        <div class="container">
            <div class="section-title" data-reveal>
                <span>Featured Stations</span>
                <h2>Academic Workstations</h2>
            </div>
            
            <div class="stations-grid">
                <!-- Card 1 -->
                <div class="station-card" data-reveal="zoom">
                    <div class="station-circle">
                        <img src="assets/img/about_him.jpg" alt="Group study room session">
                    </div>
                    <h3>Group Study Labs</h3>
                    <p>Wide white oak tables with integrated wire guides to connect group laptops without messy lines.</p>
                </div>
                
                <!-- Card 2 -->
                <div class="station-card" data-reveal="zoom">
                    <div class="station-circle">
                        <img src="assets/img/about_her.jpg" alt="Individual private study cubicle">
                    </div>
                    <h3>Private Cubicles</h3>
                    <p>Stiff soundproof panels surrounding single desks to block hallway footsteps and talking noise.</p>
                </div>
                
                <!-- Card 3 -->
                <div class="station-card" data-reveal="zoom">
                    <div class="station-circle">
                        <img src="assets/img/coll_3.jpg" alt="Desk study lamp workstation">
                    </div>
                    <h3>Book Archive Rooms</h3>
                    <p>Tall shelf racks set with LED underlights to illuminate spine labels without creating screen glares.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Study Stations Section End -->

    <!-- New Section B: Student & Researcher Reviews Start -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-title" data-reveal>
                <span>User Evaluation</span>
                <h2>Atelier Space Reviews</h2>
            </div>
            
            <div class="testimonials-grid">
                <!-- Card 1 -->
                <div class="testimonial-card" data-reveal="zoom">
                    <p>"The private study cubicles completely block visual hallway noises. I managed a six-hour research shift without checking my phone once."</p>
                    <div class="testimonial-author">
                        <h5>Iris Sterling</h5>
                        <span>Thesis Researcher</span>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="testimonial-card" data-reveal="zoom">
                    <p>"Felt noise panels and angled writing boards have saved my wrist fatigue during long essay drafts. The CRI90 lighting distribution is flawless."</p>
                    <div class="testimonial-author">
                        <h5>Marcus Kinsley</h5>
                        <span>Academic Fellow</span>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="testimonial-card" data-reveal="zoom">
                    <p>"Under-desk clearances are calculated perfectly. My legs have ample room, and the soft-close drawers store all my research indexes cleanly."</p>
                    <div class="testimonial-author">
                        <h5>Elena Rostova</h5>
                        <span>History Student</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- New Section B End -->

    <!-- Learning Metrics Section Start -->
    <section class="metrics-section">
        <div class="container">
            <div class="section-title" data-reveal>
                <span>Cognitive Metrics</span>
                <h2>Study Performance Audits</h2>
            </div>
            
            <div class="metrics-wrap" data-reveal>
                <!-- Meter 1 -->
                <div class="progress-item">
                    <div class="progress-header">
                        <span>Research Study Hours</span>
                        <span>3200h+</span>
                    </div>
                    <div class="progress-bar-bg">
                        <div class="progress-bar-fill" data-width="92"></div>
                    </div>
                </div>
                
                <!-- Meter 2 -->
                <div class="progress-item">
                    <div class="progress-header">
                        <span>Book Catalog Indexing</span>
                        <span>1800+ Logs</span>
                    </div>
                    <div class="progress-bar-bg">
                        <div class="progress-bar-fill" data-width="85"></div>
                    </div>
                </div>
                
                <!-- Meter 3 -->
                <div class="progress-item">
                    <div class="progress-header">
                        <span>Workspace Audits Completed</span>
                        <span>40+ Layouts</span>
                    </div>
                    <div class="progress-bar-bg">
                        <div class="progress-bar-fill" data-width="74"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Learning Metrics End -->

    <!-- Flat Centered Footer Start -->
    <footer class="flat-footer">
        <div class="container">
            <div class="footer-brand">
                <h3>LearningVista <span>Hub</span></h3>
                <p>Independent research and logs for academic study guides, library catalog layouts, under-desk clearance plans, and focus timeline calibrations.</p>
                <p style="font-size: 14px; opacity: 0.8; margin-bottom: 30px;"><i class="fa-solid fa-location-dot"></i> 181 Mercer Street, New York, NY 10012, United States<br><i class="fa-solid fa-phone"></i> +1-888-777-5845</p>
            </div>
            
            <ul class="footer-links">
                <li><a href="about.html">Atelier Craft</a></li>
                <li><a href="blog.html">Wear Logs</a></li>
                <li><a href="contact.html">Curator Desk</a></li>
                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                <li><a href="cookies.html">Cookies Policy</a></li>
                <li><a href="disclaimer.html">Disclaimer</a></li>
                <li><a href="terms.html">Terms of Service</a></li>
            </ul>
            
            <div class="footer-bottom">
                <span>SYSTEM STATUS: COMPLIANT // GTAG: G-0LY0HY7L01</span>
                <span>&copy; 2026 LearningVista Hub. Independent academic archives. Not a commercial retail shop.</span>
            </div>
        </div>
    </footer>
    <!-- Flat Centered Footer End -->

    <script src="assets/app.js"></script>
</body>
</html>
