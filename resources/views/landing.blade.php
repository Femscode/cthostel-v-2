<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTHOSTEL PRODUCTS AND SERVICES | Digital Innovation & Engineering</title>
    <meta name="description" content="CTHOSTEL PRODUCTS AND SERVICES - Crafting premium digital solutions and high-performance software for the modern world.">
    <link rel="shortcut icon" href="{{ asset('myimages/fav_01.png')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #28a745;
            /* Cthostel Green */
            --primary-light: #dcfce7;
            --primary-dark: #166534;
            --secondary: #facc15;
            /* Cthostel Yellow/Gold */
            --accent: #ef4444;
            /* Cthostel Red */
            --text-main: #0f172a;
            --text-muted: #64748b;
            --bg-white: #ffffff;
            --bg-soft: #f8fafc;
            --border: #e2e8f0;
            --shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.04), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
            --radius: 16px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-white);
            color: var(--text-main);
            line-height: 1.6;
            scroll-behavior: smooth;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        /* Navbar */
        nav {
            height: 90px;
            display: flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid var(--border);
        }

        .nav-content {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 40px;
            width: auto;
        }

        .btn {
            padding: 0.8rem 2rem;
            border-radius: 100px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            font-family: 'Outfit', sans-serif;
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
            box-shadow: 0 4px 20px rgba(40, 167, 69, 0.2);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
        }

        /* Hero */
        .hero {
            padding: 120px 0;
            background: radial-gradient(circle at 0% 0%, #f0fdf4 0%, #ffffff 50%);
            display: flex;
            align-items: center;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            align-items: center;
            gap: 4rem;
        }

        .hero-content h1 {
            font-size: 4rem;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            letter-spacing: -0.04em;
        }

        .hero-content h1 span {
            color: var(--primary);
        }

        .hero-content p {
            font-size: 1.25rem;
            color: var(--text-muted);
            margin-bottom: 2.5rem;
        }

        .hero-img img {
            width: 100%;
            border-radius: 2rem;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
        }

        /* Sections General */
        section {
            padding: 100px 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 5rem;
        }

        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            letter-spacing: -0.02em;
        }

        .section-header p {
            color: var(--text-muted);
            font-size: 1.1rem;
        }

        .line {
            width: 50px;
            height: 5px;
            background: var(--primary);
            margin: 0 auto;
            border-radius: 10px;
        }

        /* Why Choose Us */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            padding: 2.5rem;
            background: var(--bg-soft);
            border-radius: var(--radius);
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            background: white;
            box-shadow: var(--shadow);
            transform: translateY(-5px);
        }

        .feature-card i {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 1.5rem;
        }

        .feature-card h3 {
            margin-bottom: 1rem;
        }

        .feature-card p {
            color: var(--text-muted);
        }

        /* Products Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background: white;
            border: 1px solid var(--border);
            padding: 3rem;
            border-radius: var(--radius);
            transition: all 0.3s ease;
        }

        .product-card:hover {
            border-color: var(--primary);
            box-shadow: var(--shadow);
        }

        .p-icon {
            width: 60px;
            height: 60px;
            background: var(--primary-light);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            margin-bottom: 2rem;
            font-size: 1.5rem;
        }

        .product-card h3 {
            margin-bottom: 1rem;
        }

        .product-card p {
            color: var(--text-muted);
            margin-bottom: 2rem;
            min-height: 80px;
        }

        /* Development Process Redesign */
        .process-grid {
            display: flex;
            justify-content: space-between;
            gap: 2rem;
            position: relative;
            padding: 2rem 0;
        }

        @media (max-width: 968px) {
            .process-grid {
                flex-direction: column;
                gap: 4rem;
            }
        }

        .process-item {
            flex: 1;
            text-align: center;
            position: relative;
            z-index: 1;
            padding: 2.5rem 1.5rem;
            background: white;
            border-radius: var(--radius);
            transition: all 0.4s ease;
            border: 1px solid transparent;
        }

        .process-item:hover {
            border-color: var(--primary-light);
            box-shadow: var(--shadow);
            transform: translateY(-8px);
        }

        /* Dotted line and Arrow */
        .process-item:not(:last-child)::after {
            content: '';
            position: absolute;
            top: 65px;
            /* Centers with the step-num */
            left: 80%;
            /* Start from the item */
            width: 40%;
            /* Span to the next item */
            height: 2px;
            background-image: linear-gradient(to right, var(--primary) 33%, rgba(255, 255, 255, 0) 0%);
            background-position: bottom;
            background-size: 12px 2px;
            background-repeat: repeat-x;
            z-index: -1;
        }

        /* Arrow Head */
        .process-item:not(:last-child)::before {
            content: "\f0da";
            /* FontAwesome Right Arrow */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            top: 56px;
            left: calc(80% + 40% - 5px);
            color: var(--primary);
            font-size: 1.2rem;
            z-index: -1;
        }

        @media (max-width: 1024px) {

            .process-item:not(:last-child)::after,
            .process-item:not(:last-child)::before {
                display: none;
            }
        }

        .step-num {
            width: 80px;
            height: 80px;
            background: var(--bg-white);
            border: 3px solid var(--primary-light);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 24px;
            /* More modern squircle */
            margin: 0 auto 2rem;
            font-weight: 800;
            font-size: 1.75rem;
            font-family: 'Outfit', sans-serif;
            position: relative;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px -5px rgba(40, 167, 69, 0.1);
        }

        .process-item:hover .step-num {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
            transform: rotate(10deg);
        }

        .process-item h4 {
            font-size: 1.35rem;
            margin-bottom: 1rem;
            color: var(--text-main);
            font-weight: 700;
        }

        .process-item p {
            font-size: 0.95rem;
            color: var(--text-muted);
            line-height: 1.6;
        }

        /* Contact Section */
        .contact-section {
            background: var(--bg-soft);
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 4rem;
            align-items: center;
        }

        .contact-info h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .contact-details {
            margin-top: 2rem;
        }

        .contact-details div {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
            color: var(--text-muted);
        }

        .contact-details i {
            color: var(--primary);
        }

        .contact-form {
            background: white;
            padding: 3rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-family: inherit;
            outline: none;
            transition: border 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: var(--primary);
        }

        /* Client Section */
        .client-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1rem;
        }

        .client-pill {
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 1rem;
            text-decoration: none;
            color: inherit;
            transition: all 0.2s;
        }

        .client-pill:hover {
            border-color: var(--primary);
            background: var(--primary-light);
        }

        .client-pill i {
            color: var(--primary);
            font-size: 1.2rem;
        }

        /* Footer */
        footer {
            padding: 80px 0;
            border-top: 1px solid var(--border);
            background: #fafafa;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .copy {
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        @media (max-width: 968px) {
            .hero-grid {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-content h1 {
                font-size: 3rem;
            }

            .contact-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <nav>
        <div class="container nav-content">
            <a href="/" class="logo">
                <img src="{{ asset('myimages/logo_header.png')}}" alt="CTHostel Products">
            </a>
            <div class="nav-links">
                <a href="#contact" class="btn btn-primary">Work With Us</a>
            </div>
        </div>
    </nav>

    <header class="hero">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content">
                    <h1>Engineering <span>Excellence</span> for the Digital Age</h1>
                    <p>CTHOSTEL PRODUCTS AND SERVICES specializes in building scalable, secure, and user-centric digital products that drive growth and innovation.</p>
                    <a href="#products" class="btn btn-primary">Discover Our Ecosystem <i class="fas fa-arrow-down"></i></a>
                </div>
                <div class="hero-img">
                    <img src="{{ asset('welcomehome/img/hero.png') }}" alt="Innovation">
                </div>
            </div>
        </div>
    </header>

    <!-- NEW SECTION: WHY CHOOSE US -->
    <section id="why-us">
        <div class="container">
            <div class="section-header">
                <h2>Why Work With Us?</h2>
                <p>We combine technical expertise with a deep understanding of business logic.</p>
                <div class="line"></div>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <i class="fas fa-microchip"></i>
                    <h3>Cutting Edge Tech</h3>
                    <p>We utilize the latest frameworks and technologies to ensure your product is future-proof and performant.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-shield-halved"></i>
                    <h3>Security First</h3>
                    <p>Security is baked into every line of code we write, ensuring your data and users are always protected.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-bolt"></i>
                    <h3>Agile Delivery</h3>
                    <p>Our rapid development cycles mean you get to market faster without compromising on quality.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-headset"></i>
                    <h3>24/7 Support</h3>
                    <p>Our dedicated support team is always available to ensure your digital assets run smoothly.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PROPRIETARY PRODUCTS -->
    <section id="products" style="background: #fdfdfd;">
        <div class="container">
            <div class="section-header">
                <h2>Our Ecosystem</h2>
                <p>Leading platforms developed and managed by our engineering team.</p>
                <div class="line"></div>
            </div>
            <div class="products-grid">
                <div class="product-card">
                    <div class="p-icon"><i class="fas fa-hotel"></i></div>
                    <h3>Cthostel</h3>
                    <p>Nigeria's premier student hostel accommodation platform, prioritizing security and comfort through technology.</p>
                    <a href="/cthostel" class="btn btn-primary">Launch App</a>
                </div>
                <div class="product-card">
                    <div class="p-icon"><i class="fas fa-utensils"></i></div>
                    <h3>Cttaste.com</h3>
                    <p>A sophisticated food ordering ecosystem designed for university communities and local vendors.</p>
                    <a href="https://cttaste.com" target="_blank" class="btn btn-primary" style="background-color: var(--secondary); color: black;">Visit Cttaste</a>
                </div>
                <div class="product-card">
                    <div class="p-icon"><i class="fas fa-wallet"></i></div>
                    <h3>Vtubiz.com</h3>
                    <p>A secure finance and utility payment application serving thousands of users daily.</p>
                    <a href="https://vtubiz.com" target="_blank" class="btn btn-primary" style="background-color: var(--text-main); color: white;">Visit Vtubiz</a>
                </div>
            </div>
        </div>
    </section>

    <!-- NEW SECTION: OUR PROCESS -->
    <section id="process">
        <div class="container">
            <div class="section-header">
                <h2>How We Build</h2>
                <p>A systematic approach to turning ideas into world-class software.</p>
                <div class="line"></div>
            </div>
            <div class="process-grid">
                <div class="process-item">
                    <div class="step-num">01</div>
                    <h4>Discovery & Strategy</h4>
                    <p>We analyze your business goals, target audience, and market requirements to build a solid foundation.</p>
                </div>
                <div class="process-item">
                    <div class="step-num">02</div>
                    <h4>Design & Prototype</h4>
                    <p>Crafting high-fidelity user experiences and intuitive interfaces that reflect your brand's unique identity.</p>
                </div>
                <div class="process-item">
                    <div class="step-num">03</div>
                    <h4>Development & QA</h4>
                    <p>Our engineers write clean, optimized code while performing rigorous testing to ensure a bug-free product.</p>
                </div>
                <div class="process-item">
                    <div class="step-num">04</div>
                    <h4>Launch & Scale</h4>
                    <p>Seamless deployment followed by continuous monitoring and optimization to ensure long-term growth.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CLIENT PORTFOLIO -->
    <section id="portfolio" style="background: var(--bg-soft);">
        <div class="container">
            <div class="section-header">
                <h2>Client Projects</h2>
                <p>Digital solutions crafted for our esteemed global partners.</p>
                <div class="line"></div>
            </div>
            <div class="client-list">
                <a href="https://thrivecitystudio.ca/" target="_blank" class="client-pill">
                    <i class="fas fa-tshirt"></i>
                    <div>
                        <h4>Thrive City Studio</h4>
                        <p>Apparel Website</p>
                    </div>
                </a>
                <a href="https://www.headtraxsolutions.com/" target="_blank" class="client-pill">
                    <i class="fas fa-robot"></i>
                    <div>
                        <h4>Headtrax Solutions</h4>
                        <p>Conversation AI</p>
                    </div>
                </a>
                <a href="https://www.oplugenergies.com/" target="_blank" class="client-pill">
                    <i class="fas fa-bolt"></i>
                    <div>
                        <h4>Oplug Energies</h4>
                        <p>Power & Electronics</p>
                    </div>
                </a>
                <a href="https://kensirius.com" target="_blank" class="client-pill">
                    <i class="fas fa-building"></i>
                    <div>
                        <h4>Kensirius</h4>
                        <p>Official Website</p>
                    </div>
                </a>
                <a href="https://gizmorechargehub.com/" target="_blank" class="client-pill">
                    <i class="fas fa-signal"></i>
                    <div>
                        <h4>Gizmo Recharge Hub</h4>
                        <p>Utility Website</p>
                    </div>
                </a>
                <a href="https://best4uarena.com" target="_blank" class="client-pill">
                    <i class="fas fa-shopping-bag"></i>
                    <div>
                        <h4>Best4uarena</h4>
                        <p>Ecommerce Website</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- NEW SECTION: GET IN TOUCH -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>Ready to start your <span>next project</span>?</h2>
                    <p>Tell us about your idea and our experts will help you bring it to life with the best technology and design practices.</p>
                    <div class="contact-details">
                        <div><i class="fas fa-envelope"></i> support@cthostel.com</div>
                        <div><i class="fas fa-phone"></i> +234 905 874 4473</div>
                        <div><i class="fas fa-location-dot"></i> Nigeria / Remote</div>
                    </div>
                </div>
                <div class="contact-form">
                    @if(session('alert'))
                    <div style="background: var(--primary-light); color: var(--primary-dark); padding: 1rem; border-radius: 8px; margin-bottom: 1.5rem; font-weight: 600;">
                        {{ session('alert') }}
                    </div>
                    @endif

                    <form action="{{ route('contact') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" required placeholder="John Doe">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" required placeholder="john@example.com">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone" required placeholder="+234...">
                        </div>
                        <div class="form-group">
                            <label>Project Details</label>
                            <textarea name="message" required rows="4" placeholder="Tell us about your project..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container footer-content">
            <div class="f-logo">
                <img src="{{ asset('myimages/logo_header.png')}}" alt="CTHostel Products" style="height: 30px">
            </div>
            <div class="copy">&copy; {{ date('Y') }} CTHOSTEL PRODUCTS AND SERVICES. All rights reserved.</div>
            <div class="social">
                <a href="#" style="color: var(--text-muted); margin-left: 1rem;"><i class="fab fa-twitter"></i></a>
                <a href="#" style="color: var(--text-muted); margin-left: 1rem;"><i class="fab fa-linkedin"></i></a>
                <a href="#" style="color: var(--text-muted); margin-left: 1rem;"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

</body>

</html>