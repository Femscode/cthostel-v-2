<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') - CTHostel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

        <style>
            :root {
                --brand-primary: #089A49;
                --brand-secondary: #0B2C3D;
                --brand-accent: #f0fdf4;
                --font-outfit: 'Outfit', sans-serif;
                --font-jakarta: 'Plus Jakarta Sans', sans-serif;
            }

            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            body {
                font-family: var(--font-jakarta);
                background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
                color: var(--brand-secondary);
                height: 100vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                overflow: hidden;
                position: relative;
            }

            /* Animated Background Grid */
            .bg-grid {
                position: absolute;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                background-size: 40px 40px;
                background-image: linear-gradient(to right, rgba(8, 154, 73, 0.05) 1px, transparent 1px),
                                  linear-gradient(to bottom, rgba(8, 154, 73, 0.05) 1px, transparent 1px);
                z-index: 0;
                opacity: 0.6;
                transform: perspective(500px) rotateX(60deg) translateY(-100px) translateZ(-200px);
                animation: gridMove 20s linear infinite;
            }

            @keyframes gridMove {
                0% { transform: perspective(500px) rotateX(60deg) translateY(0) translateZ(-200px); }
                100% { transform: perspective(500px) rotateX(60deg) translateY(40px) translateZ(-200px); }
            }

            /* Glow Orbs */
            .orb {
                position: absolute;
                border-radius: 50%;
                filter: blur(80px);
                z-index: 1;
                animation: float 10s ease-in-out infinite;
            }
            .orb-1 {
                top: 10%;
                left: 15%;
                width: 400px;
                height: 400px;
                background: rgba(8, 154, 73, 0.15);
                animation-delay: 0s;
            }
            .orb-2 {
                bottom: 10%;
                right: 15%;
                width: 500px;
                height: 500px;
                background: rgba(11, 44, 61, 0.1);
                animation-delay: -5s;
            }

            @keyframes float {
                0%, 100% { transform: translate(0, 0); }
                50% { transform: translate(30px, -30px); }
            }

            /* Header Logo */
            .cthostel-logo {
                position: absolute;
                top: 40px;
                left: 50px;
                z-index: 10;
                display: flex;
                align-items: center;
                text-decoration: none;
            }

            .cthostel-logo img {
                height: 45px;
                width: auto;
                transition: transform 0.3s ease;
            }

            .cthostel-logo:hover img {
                transform: scale(1.05);
            }

            /* Content Container */
            .error-container {
                position: relative;
                z-index: 5;
                text-align: center;
                max-width: 650px;
                padding: 3rem;
                background: rgba(255, 255, 255, 0.8);
                backdrop-filter: blur(20px);
                border: 1px solid rgba(255, 255, 255, 0.5);
                border-radius: 30px;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08),
                            inset 0 0 0 1px rgba(255, 255, 255, 0.5);
                animation: popIn 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
                opacity: 0;
                transform: translateY(30px) scale(0.95);
            }

            @keyframes popIn {
                to {
                    opacity: 1;
                    transform: translateY(0) scale(1);
                }
            }

            /* Error Code Glitch/3D effect */
            .error-code {
                font-family: var(--font-outfit);
                font-size: 10rem;
                font-weight: 800;
                line-height: 1;
                margin-bottom: 0px;
                color: var(--brand-primary);
                position: relative;
                display: inline-block;
                text-shadow: 
                    3px 3px 0px rgba(8, 154, 73, 0.2),
                    6px 6px 0px rgba(8, 154, 73, 0.1),
                    9px 9px 0px rgba(8, 154, 73, 0.05);
            }

            .error-message {
                font-family: var(--font-outfit);
                font-size: 2.5rem;
                font-weight: 700;
                color: var(--brand-secondary);
                margin-bottom: 1.5rem;
                letter-spacing: -0.5px;
            }

            .error-desc {
                font-size: 1.15rem;
                color: #556068;
                margin-bottom: 2.5rem;
                line-height: 1.7;
                padding: 0 20px;
            }

            /* Fancy Button */
            .btn-home {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 12px;
                background: linear-gradient(135deg, var(--brand-primary) 0%, #067c3b 100%);
                color: white;
                text-decoration: none;
                font-family: var(--font-jakarta);
                font-weight: 600;
                font-size: 1.1rem;
                padding: 1rem 2.5rem;
                border-radius: 50px;
                border: none;
                box-shadow: 0 10px 20px rgba(8, 154, 73, 0.2);
                transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
                position: relative;
                overflow: hidden;
            }

            .btn-home::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
                transition: left 0.6s ease;
            }

            .btn-home:hover {
                transform: translateY(-5px);
                box-shadow: 0 15px 25px rgba(8, 154, 73, 0.3);
                color: white;
            }

            .btn-home:hover::before {
                left: 100%;
            }

            .btn-home i {
                font-size: 1.3rem;
                transition: transform 0.3s ease;
            }

            .btn-home:hover i {
                transform: translateX(-4px);
            }

            @media (max-width: 768px) {
                .error-code { font-size: 7rem; }
                .error-message { font-size: 2rem; }
                .error-container { padding: 2rem 1.5rem; margin: 0 20px; }
                .cthostel-logo { top: 20px; left: 20px; }
                .cthostel-logo img { height: 35px; }
            }
        </style>
    </head>
    <body>
        
        <!-- Animated Background Elements -->
        <div class="bg-grid"></div>
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>
        
        <!-- Brand Logo -->
        <a href="/" class="cthostel-logo">
            <img src="{{ asset('myimages/logo_header.png') }}" alt="CTHostel Logo">
        </a>
        
        <!-- Error Box -->
        <div class="error-container">
            <div class="error-code">@yield('code')</div>
            <div class="error-message">@yield('message')</div>
            
            <p class="error-desc">
                @if(trim($__env->yieldContent('code')) == '404')
                    The page you are looking for has been moved, deleted, or possibly never existed. Let's get you back to finding great hostels.
                @elseif(trim($__env->yieldContent('code')) == '419')
                    Your session has expired due to inactivity. For your security, please refresh the page and log in again.
                @elseif(trim($__env->yieldContent('code')) == '500')
                    Our servers encountered an unexpected glitch. Our engineering team has been notified and is fixing it right now.
                @elseif(trim($__env->yieldContent('code')) == '403')
                    You don't have the required permissions to access this specific page. Let's get you back to safe territory.
                @else
                    We encountered an unexpected error while processing your request. Please try again later.
                @endif
            </p>
            
            <a href="/" class="btn-home">
                <i class="bi bi-arrow-left"></i> 
                <span>Return to Homepage</span>
            </a>
        </div>
    </body>
</html>
