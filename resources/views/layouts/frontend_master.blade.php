<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title', 'CTHostel | ' . ($school->first()->name ?? 'Available Hostels'))</title>

  <link rel="shortcut icon" href="{{ asset('myimages/fav_01.png')}}" />
  <link rel="stylesheet" href="{{ asset('welcomehome/css/font-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('welcomehome/css/plugins.css')}}">
  <link rel="stylesheet" href="{{ asset('welcomehome/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('welcomehome/css/responsive.css')}}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
  <script src="//code.tidio.co/8lrah1alkcm39kbmrxazdvgxgvqzede9.js" async></script>

  <style>
    /* Premium CSS Variables matching CTHostel Brand System */
    :root {
      --brand-green: #089A49;
      --brand-green-hover: #0aa850;
      --brand-green-dark: #067e3b;
      --brand-dark: #041113;
      --brand-slate: #0b2c3d;
      --brand-glow: rgba(8, 154, 73, 0.15);
      --font-sans: 'Plus Jakarta Sans', sans-serif;
      --font-outfit: 'Outfit', sans-serif;
      --transition-smooth: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    html, body {
      width: 100% !important;
      max-width: 100% !important;
      overflow-x: hidden !important;
      margin: 0 !important;
      padding: 0 !important;
    }

    body {
      font-family: var(--font-sans) !important;
      color: #334155;
      background-color: #fbfcff;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: var(--font-outfit) !important;
      color: #0f172a;
      font-weight: 700;
    }

    /* Top Navigation bar styling */
    .ct-top-bar {
      background-color: var(--brand-dark) !important;
      color: rgba(255, 255, 255, 0.8) !important;
      padding: 10px 0 !important;
      font-size: 12px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.05) !important;
      font-weight: 500;
    }

    .ct-top-bar-inner {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    @media (max-width: 575px) {
      .ct-top-bar-inner {
        flex-direction: column !important;
        gap: 6px !important;
        text-align: center !important;
        justify-content: center !important;
      }
      .ct-top-bar-inner .top-bar-right {
        display: flex !important;
        justify-content: center !important;
      }
    }

    .ct-top-bar a {
      color: rgba(255, 255, 255, 0.8) !important;
      text-decoration: none;
      transition: var(--transition-smooth);
    }

    .ct-top-bar a:hover {
      color: var(--brand-green) !important;
    }

    /* Navigation Header elements */
    .ltn__header-middle-area.ltn__header-sticky {
      background-color: rgba(255, 255, 255, 0.95) !important;
      backdrop-filter: blur(8px) !important;
      border-bottom: 1px solid rgba(0, 0, 0, 0.05) !important;
      padding: 16px 0 !important;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02) !important;
    }

    .ct-nav-list {
      display: flex !important;
      align-items: center !important;
      gap: 32px !important;
      list-style: none !important;
      margin: 0 !important;
      padding: 0 !important;
      font-size: 15px !important;
      font-weight: 700 !important;
      font-family: var(--font-outfit) !important;
    }

    .ct-nav-link {
      color: #334155 !important;
      text-decoration: none !important;
      position: relative !important;
      padding: 8px 0 !important;
      transition: var(--transition-smooth) !important;
    }

    .ct-nav-link:hover {
      color: var(--brand-green) !important;
    }

    .ct-nav-link::after {
      content: '' !important;
      position: absolute !important;
      bottom: 0 !important;
      left: 50% !important;
      transform: translateX(-50%) !important;
      width: 0 !important;
      height: 3px !important;
      background-color: var(--brand-green) !important;
      border-radius: 99px !important;
      transition: var(--transition-smooth) !important;
    }

    .ct-nav-link:hover::after {
      width: 20px !important;
    }

    .ct-register-btn {
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      padding: 10px 24px !important;
      background-color: var(--brand-green) !important;
      color: #ffffff !important;
      border-radius: 12px !important;
      font-weight: 600 !important;
      font-family: var(--font-outfit) !important;
      text-decoration: none !important;
      transition: var(--transition-smooth) !important;
      font-size: 14px !important;
    }

    .ct-register-btn:hover {
      background-color: var(--brand-green-hover) !important;
      box-shadow: 0 4px 12px rgba(8, 154, 73, 0.2) !important;
      transform: translateY(-1px);
    }

    /* Mobile drawer structure */
    #ltn__utilize-mobile-menu {
      background-color: var(--brand-dark) !important;
    }

    #ltn__utilize-mobile-menu .ltn__utilize-menu-inner {
      background-color: rgba(4, 17, 19, 0.95) !important;
      backdrop-filter: blur(10px) !important;
      padding: 30px 24px !important;
    }

    .ct-mobile-nav-list {
      list-style: none !important;
      padding: 0 !important;
      margin: 0 !important;
    }

    .ct-mobile-nav-list li a {
      color: #ffffff !important;
      font-weight: 700 !important;
      padding: 12px 0 !important;
      display: block !important;
      border-bottom: 1px solid rgba(255, 255, 255, 0.05) !important;
      transition: var(--transition-smooth) !important;
    }

    .ct-mobile-nav-list li a:hover {
      color: var(--brand-green) !important;
    }

    /* Page Layout Columns */
    .ct-main-layout-grid {
      display: grid !important;
      grid-template-columns: 1fr !important;
      gap: 40px !important;
      padding: 40px 0 !important;
    }

    .ct-sidebar-column {
      order: 2 !important; /* Sidebar comes second on mobile */
    }

    .ct-main-column {
      order: 1 !important; /* Main content comes first on mobile */
      min-width: 0 !important;
      width: 100% !important;
      max-width: 100% !important;
    }

    @media (max-width: 991px) {
      .header-menu-column {
        display: none !important; /* Hide header menu on mobile to push hamburger to right */
      }
      .ltn__header-5 .ltn__header-options,
      .ltn__header-4 .ltn__header-options,
      .ltn__header-middle-area .ltn__header-options,
      .ltn__header-options {
        margin: 0 !important;
        display: flex !important;
        justify-content: flex-end !important;
        align-items: center !important;
        flex: 0 0 auto !important;
        width: auto !important;
        max-width: none !important;
      }
      .mobile-menu-toggle {
        margin: 0 !important;
        margin-left: auto !important;
        display: flex !important;
        align-items: center !important;
        justify-content: flex-end !important;
      }
      .mobile-menu-toggle > a {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        margin: 0 !important;
        width: auto !important;
        height: auto !important;
      }
      .ct-sidebar-column {
        position: fixed !important;
        top: 0 !important;
        left: -320px !important; /* Hidden off-screen left by default */
        width: 300px !important;
        height: 100vh !important;
        z-index: 99999 !important; /* Sit on top of topbars */
        background: #ffffff !important;
        box-shadow: 15px 0 45px rgba(0, 0, 0, 0.15) !important;
        overflow-y: auto !important;
        transition: var(--transition-smooth) !important;
        padding: 40px 24px 30px !important; /* Extra padding for mobile notch/safe areas */
        margin: 0 !important;
      }
      .ct-sidebar-column.active {
        left: 0 !important; /* Slide in drawer */
      }
    }

    .ct-filter-backdrop {
      position: fixed !important;
      inset: 0 !important;
      background-color: rgba(4, 17, 19, 0.6) !important;
      backdrop-filter: blur(2px) !important;
      z-index: 99998 !important; /* Sit just below the slide-in drawer */
      display: none;
      transition: var(--transition-smooth);
    }

    .ct-close-filter-wrap {
      display: none;
      justify-content: flex-end;
      margin-bottom: 20px;
      border-bottom: 1px solid rgba(15, 23, 42, 0.05);
      padding-bottom: 15px;
    }

    @media (max-width: 991px) {
      .ct-close-filter-wrap {
        display: flex !important;
      }
    }

    .ct-close-filter-btn {
      background: none !important;
      border: none !important;
      font-size: 28px !important;
      color: #64748b !important;
      cursor: pointer !important;
      line-height: 1 !important;
      transition: var(--transition-smooth) !important;
    }

    .ct-close-filter-btn:hover {
      color: #ef4444 !important;
    }

    .ct-search-filter-row {
      display: flex !important;
      flex-flow: row nowrap !important;
      align-items: center !important;
      gap: 10px !important;
      width: 100% !important;
      max-width: 440px !important;
      margin: 0 !important;
    }

    .ct-mobile-filter-trigger-btn {
      display: none;
      align-items: center;
      justify-content: center;
      gap: 8px;
      background-color: var(--brand-green);
      color: #ffffff !important;
      border: none;
      border-radius: 99px;
      height: 44px;
      padding: 0 20px;
      font-size: 14px;
      font-weight: 700;
      cursor: pointer;
      transition: var(--transition-smooth);
      box-shadow: 0 4px 12px rgba(8, 154, 73, 0.15);
      flex-shrink: 0;
    }

    .ct-mobile-filter-trigger-btn:hover {
      background-color: var(--brand-green-hover);
      box-shadow: 0 6px 16px rgba(8, 154, 73, 0.25);
    }

    @media (max-width: 991px) {
      .ct-mobile-filter-trigger-btn {
        display: inline-flex !important;
      }
    }

    @media (max-width: 575px) {
      .ct-mobile-filter-trigger-btn {
        padding: 0 14px !important;
        font-size: 13px !important;
        gap: 6px !important;
      }
    }

    @media (min-width: 992px) {
      .ct-main-layout-grid {
        grid-template-columns: 320px 1fr !important;
      }
      .ct-sidebar-column {
        order: 1 !important; /* Sidebar comes first on desktop */
      }
      .ct-main-column {
        order: 2 !important; /* Main content comes second on desktop */
      }
    }

    /* Sidebar widget cards */
    .ct-sidebar-widget {
      background: #ffffff !important;
      border: 1px solid rgba(15, 23, 42, 0.05) !important;
      border-radius: 20px !important;
      padding: 24px !important;
      margin-bottom: 24px !important;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02) !important;
    }

    .ct-widget-title {
      font-size: 18px !important;
      font-weight: 800 !important;
      margin-bottom: 18px !important;
      padding-bottom: 12px !important;
      border-bottom: 2px solid rgba(8, 154, 73, 0.1) !important;
      position: relative;
    }

    .ct-widget-title::after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      width: 40px;
      height: 2px;
      background-color: var(--brand-green);
    }

    /* Checkbox & Text Input Styling in Sidebar Filter Form */
    .ct-filter-form .ct-checkbox-group {
      display: flex;
      flex-direction: column;
      gap: 12px;
      margin-bottom: 20px;
      max-height: 220px;
      overflow-y: auto;
      padding-right: 8px;
    }

    /* Custom Scrollbar for scrolling elements */
    .ct-filter-form .ct-checkbox-group::-webkit-scrollbar {
      width: 5px;
    }
    .ct-filter-form .ct-checkbox-group::-webkit-scrollbar-thumb {
      background: rgba(8, 154, 73, 0.2);
      border-radius: 9px;
    }

    .ct-checkbox-item {
      display: flex;
      align-items: center;
      gap: 10px;
      cursor: pointer;
      font-size: 14px;
      font-weight: 500;
      color: #475569;
      transition: var(--transition-smooth);
    }

    .ct-checkbox-item:hover {
      color: var(--brand-green);
    }

    .ct-checkbox-item input[type="checkbox"] {
      width: 18px;
      height: 18px;
      accent-color: var(--brand-green);
      cursor: pointer;
    }

    .ct-input-label {
      font-size: 13px;
      font-weight: 600;
      color: #64748b;
      margin-bottom: 6px;
      display: block;
    }

    .ct-filter-input {
      width: 100% !important;
      height: 48px !important;
      border: 1px solid rgba(15, 23, 42, 0.1) !important;
      border-radius: 12px !important;
      padding: 0 16px !important;
      font-size: 14px !important;
      font-weight: 600 !important;
      color: #0f172a !important;
      background: #fbfcff !important;
      transition: var(--transition-smooth) !important;
      margin-bottom: 16px !important;
    }

    .ct-filter-input:focus {
      border-color: var(--brand-green) !important;
      box-shadow: 0 0 0 3px var(--brand-glow) !important;
      outline: none !important;
    }

    .ct-filter-btn {
      width: 100% !important;
      height: 48px !important;
      background-color: var(--brand-green) !important;
      color: #ffffff !important;
      border: none !important;
      border-radius: 12px !important;
      font-size: 14px !important;
      font-weight: 700 !important;
      cursor: pointer !important;
      transition: var(--transition-smooth) !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      gap: 8px !important;
      margin-top: 10px !important;
    }

    .ct-filter-btn:hover {
      background-color: var(--brand-green-hover) !important;
      box-shadow: 0 8px 20px rgba(8, 154, 73, 0.25) !important;
    }

    /* Newsletter widget styles */
    .ct-sidebar-newsletter {
      background: linear-gradient(135deg, var(--brand-dark) 0%, var(--brand-slate) 100%) !important;
      color: #ffffff !important;
    }

    .ct-sidebar-newsletter .ct-widget-title {
      color: #ffffff !important;
      border-bottom-color: rgba(255, 255, 255, 0.1) !important;
    }

    .ct-sidebar-newsletter .ct-widget-title::after {
      background-color: var(--brand-green);
    }

    .ct-sidebar-newsletter-text {
      color: #94a3b8;
      font-size: 13px;
      line-height: 1.6;
      margin-bottom: 18px;
    }

    .ct-newsletter-input-group {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .ct-newsletter-field {
      height: 48px !important;
      background: rgba(255, 255, 255, 0.05) !important;
      border: 1px solid rgba(255, 255, 255, 0.1) !important;
      border-radius: 12px !important;
      padding: 0 16px !important;
      color: #ffffff !important;
      font-size: 14px !important;
      transition: var(--transition-smooth) !important;
      width: 100% !important;
    }

    .ct-newsletter-field:focus {
      border-color: var(--brand-green) !important;
      background: rgba(255, 255, 255, 0.08) !important;
      outline: none !important;
    }

    .ct-newsletter-btn {
      height: 48px !important;
      background-color: var(--brand-green) !important;
      color: #ffffff !important;
      border: none !important;
      border-radius: 12px !important;
      font-weight: 700 !important;
      cursor: pointer !important;
      transition: var(--transition-smooth) !important;
    }

    .ct-newsletter-btn:hover {
      background-color: var(--brand-green-hover) !important;
      box-shadow: 0 4px 12px rgba(8, 154, 73, 0.3) !important;
    }

    /* Landlord agent promotion promo card */
    .ct-agent-promo-card {
      background: linear-gradient(135deg, rgba(8, 154, 73, 0.08) 0%, rgba(0, 255, 115, 0.02) 100%) !important;
      border: 1px dashed rgba(8, 154, 73, 0.3) !important;
      text-align: center;
    }

    .ct-agent-promo-icon {
      font-size: 36px;
      color: var(--brand-green);
      margin-bottom: 12px;
    }

    .ct-agent-promo-text {
      font-size: 13px;
      color: #475569;
      line-height: 1.5;
      margin-bottom: 18px;
    }

    .ct-agent-promo-btn {
      display: inline-flex !important;
      align-items: center;
      justify-content: center;
      width: 100%;
      height: 46px;
      background-color: var(--brand-slate) !important;
      color: #ffffff !important;
      border-radius: 12px !important;
      font-weight: 600;
      text-decoration: none !important;
      transition: var(--transition-smooth) !important;
    }

    .ct-agent-promo-btn:hover {
      background-color: var(--brand-dark) !important;
      transform: translateY(-2px);
    }

    /* Testimonials side box styles */
    .ct-testimonials-side .swiper-slide {
      padding: 4px;
    }

    .ct-testimonial-card-side {
      background: #f8fafc;
      border-radius: 16px;
      padding: 18px;
      border: 1px solid rgba(15, 23, 42, 0.03);
    }

    .ct-testimonial-quote {
      font-size: 13px;
      line-height: 1.6;
      color: #475569;
      font-style: italic;
      margin-bottom: 12px;
      position: relative;
    }

    .ct-testimonial-author {
      font-size: 12px;
      font-weight: 700;
      color: var(--brand-slate);
      display: block;
      text-align: right;
    }

    /* Slider Container */
    .ct-slider-wrapper {
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.04);
      margin-bottom: 30px;
      position: relative;
      background-color: var(--brand-dark);
    }

    .ct-carousel .carousel-item {
      height: 380px;
      background-size: cover;
      background-position: center;
      position: relative;
    }

    @media (min-width: 768px) {
      .ct-carousel .carousel-item {
        height: 440px;
      }
    }

    .ct-slider-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to right, rgba(4, 17, 19, 0.85) 0%, rgba(4, 17, 19, 0.3) 100%);
      display: flex;
      align-items: center;
      padding: 0 40px;
    }

    @media (min-width: 768px) {
      .ct-slider-overlay {
        padding: 0 80px;
      }
    }

    .ct-slider-content {
      max-width: 500px;
      color: #ffffff;
    }

    .ct-slider-title {
      font-size: 28px !important;
      font-weight: 900 !important;
      color: #ffffff !important;
      line-height: 1.25 !important;
      margin-bottom: 16px;
      font-family: var(--font-outfit) !important;
    }

    @media (min-width: 768px) {
      .ct-slider-title {
        font-size: 38px !important;
      }
    }

    .ct-slider-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 12px 28px;
      background-color: var(--brand-green);
      color: #ffffff !important;
      border-radius: 12px;
      font-weight: 700;
      text-decoration: none !important;
      transition: var(--transition-smooth);
    }

    .ct-slider-btn:hover {
      background-color: var(--brand-green-hover);
      box-shadow: 0 6px 18px rgba(8, 154, 73, 0.3);
      transform: translateY(-2px);
    }

    /* Emergency Alert Dropdown inside Main Column */
    .ct-emergency-box {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: linear-gradient(to right, #ef4444 0%, #f87171 100%);
      color: #ffffff;
      border-radius: 16px;
      padding: 16px 24px;
      margin-bottom: 30px;
      box-shadow: 0 10px 25px rgba(239, 68, 68, 0.15);
      animation: pulseAlert 2s infinite;
    }

    @keyframes pulseAlert {
      0% { box-shadow: 0 10px 25px rgba(239, 68, 68, 0.15); }
      50% { box-shadow: 0 10px 35px rgba(239, 68, 68, 0.35); }
      100% { box-shadow: 0 10px 25px rgba(239, 68, 68, 0.15); }
    }

    .ct-emergency-text {
      font-weight: 700;
      font-family: var(--font-outfit);
      font-size: 15px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .ct-emergency-dropdown {
      position: relative;
    }

    .ct-emergency-dropdown-btn {
      background: #ffffff;
      color: #ef4444;
      border: none;
      border-radius: 10px;
      padding: 8px 16px;
      font-weight: 700;
      font-size: 13px;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 6px;
      transition: var(--transition-smooth);
    }

    .ct-emergency-dropdown-btn:hover {
      background: rgba(255, 255, 255, 0.9);
      transform: scale(1.02);
    }

    .ct-emergency-menu {
      position: absolute;
      top: calc(100% + 8px);
      right: 0;
      background: #ffffff;
      border-radius: 14px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
      width: 200px;
      padding: 8px 0;
      z-index: 99;
      opacity: 0;
      visibility: hidden;
      transform: translateY(10px);
      transition: var(--transition-smooth);
      border: 1px solid rgba(15, 23, 42, 0.05);
    }

    .ct-emergency-dropdown:hover .ct-emergency-menu {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }

    .ct-emergency-item {
      padding: 10px 18px;
      color: #334155;
      text-decoration: none !important;
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 13px;
      font-weight: 600;
      transition: var(--transition-smooth);
    }

    .ct-emergency-item:hover {
      background-color: #fef2f2;
      color: #ef4444;
    }

    /* Main Section sorting tabs styling */
    .ct-tabs-container {
      margin-bottom: 24px;
      width: 100% !important;
      max-width: 100% !important;
      overflow: hidden !important;
    }

    @media (max-width: 767px) {
      .container {
        padding-left: 16px !important;
        padding-right: 16px !important;
        width: 100% !important;
        max-width: 100% !important;
        box-sizing: border-box !important;
      }
    }

    .ct-nav-tabs {
      display: flex !important;
      flex-wrap: nowrap !important;
      overflow-x: auto !important;
      overflow-y: hidden !important;
      -webkit-overflow-scrolling: touch !important;
      gap: 8px !important;
      border-bottom: 1px solid rgba(15, 23, 42, 0.05) !important;
      padding-bottom: 10px !important;
      list-style: none !important;
      margin: 0 !important;
      padding: 0 !important;
      scrollbar-width: none !important;
      width: 100% !important;
    }

    .ct-nav-tabs::-webkit-scrollbar {
      display: none !important;
    }

    .ct-nav-tab-item {
      display: inline-block !important;
      width: auto !important;
      flex: 0 0 auto !important;
      margin-bottom: -1px !important;
      flex-shrink: 0 !important;
    }

    .ct-nav-tab-link {
      display: inline-flex !important;
      align-items: center !important;
      padding: 8px 18px !important;
      border-radius: 99px !important; /* Capsule/Pill shape for filters */
      font-size: 13px !important;
      font-weight: 700 !important;
      color: #475569 !important;
      background-color: #f1f5f9 !important; /* Clear unselected button state background */
      border: 1px solid rgba(15, 23, 42, 0.08) !important; /* Soft border */
      text-decoration: none !important;
      transition: var(--transition-smooth) !important;
      white-space: nowrap !important; /* Prevent text wrapping inside buttons on small viewports */
    }

    @media (max-width: 767px) {
      .ct-nav-tab-link {
        padding: 6px 14px !important;
        font-size: 12px !important;
      }
      .ct-nav-tab-link i {
        display: none !important;
      }
    }

    .ct-nav-tab-link:hover {
      color: var(--brand-slate) !important;
      background-color: #e2e8f0 !important;
      border-color: rgba(15, 23, 42, 0.15) !important;
    }

    .ct-nav-tab-item.active .ct-nav-tab-link {
      color: #ffffff !important; /* High-contrast white text for active filters */
      background-color: var(--brand-green) !important;
      border-color: var(--brand-green) !important;
      box-shadow: 0 4px 12px rgba(8, 154, 73, 0.25) !important;
    }

    /* Products layout cards grid */
    .ct-products-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr) !important;
      gap: 12px !important;
      margin-bottom: 30px;
    }

    @media (max-width: 575px) {
      .ct-prod-body {
        padding: 12px !important;
      }
      .ct-prod-title {
        font-size: 13px !important;
        margin-bottom: 8px !important;
        height: 36px !important;
      }
      .ct-prod-actual-price {
        font-size: 14px !important;
      }
      .ct-prod-strike-price {
        font-size: 11px !important;
      }
      .ct-prod-btn {
        height: 36px !important;
        font-size: 11px !important;
        border-radius: 8px !important;
      }
      .ct-prod-img-wrap {
        height: 140px !important;
      }
      .ct-prod-labels {
        top: 8px !important;
        left: 8px !important;
      }
      .ct-prod-badge {
        font-size: 9px !important;
        padding: 4px 8px !important;
      }
      .ct-prod-video-overlay {
        bottom: 8px !important;
        right: 8px !important;
        width: 28px !important;
        height: 28px !important;
        font-size: 10px !important;
      }
    }

    @media (min-width: 576px) {
      .ct-products-grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 24px !important;
      }
    }

    @media (min-width: 1200px) {
      .ct-products-grid {
        grid-template-columns: repeat(3, 1fr) !important;
      }
    }

    /* Individual Product Card Redesign */
    .ct-product-card {
      background: #ffffff;
      border: 1px solid rgba(15, 23, 42, 0.05);
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
      transition: var(--transition-smooth);
      display: flex;
      flex-direction: column;
      height: 100%;
    }

    .ct-product-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 20px 45px rgba(8, 154, 73, 0.1);
      border-color: rgba(8, 154, 73, 0.15);
    }

    .ct-prod-img-wrap {
      position: relative;
      height: 220px;
      overflow: hidden;
      background-color: #f1f5f9;
    }

    .ct-prod-img-wrap img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: var(--transition-smooth);
    }

    .ct-product-card:hover .ct-prod-img-wrap img {
      transform: scale(1.05);
    }

    .ct-prod-labels {
      position: absolute;
      top: 14px;
      left: 14px;
      z-index: 5;
    }

    .ct-prod-badge {
      background-color: var(--brand-green);
      color: #ffffff;
      font-size: 11px;
      font-weight: 800;
      padding: 6px 12px;
      border-radius: 8px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      box-shadow: 0 4px 10px rgba(8, 154, 73, 0.2);
    }

    .ct-prod-video-overlay {
      position: absolute;
      bottom: 14px;
      right: 14px;
      width: 36px;
      height: 36px;
      background-color: rgba(15, 23, 42, 0.6);
      backdrop-filter: blur(4px);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #ffffff;
      font-size: 12px;
      z-index: 5;
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .ct-prod-body {
      padding: 20px;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }

    .ct-prod-price-box {
      display: flex;
      align-items: baseline;
      gap: 10px;
      margin-bottom: 12px;
    }

    .ct-prod-strike-price {
      color: #ef4444;
      font-size: 13px;
      font-weight: 600;
      text-decoration: line-through;
    }

    .ct-prod-actual-price {
      color: var(--brand-green);
      font-size: 18px;
      font-weight: 800;
      font-family: var(--font-outfit);
    }

    .ct-prod-title {
      font-size: 16px !important;
      font-weight: 700 !important;
      line-height: 1.4 !important;
      margin-bottom: 16px;
      font-family: var(--font-outfit) !important;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
      height: 44px;
    }

    .ct-prod-title a {
      color: #0f172a !important;
      text-decoration: none !important;
      transition: var(--transition-smooth);
    }

    .ct-prod-title a:hover {
      color: var(--brand-green) !important;
    }

    .ct-prod-btn {
      width: 100%;
      height: 44px;
      background-color: #f1f5f9;
      color: var(--brand-slate) !important;
      border: none;
      border-radius: 12px;
      font-weight: 700;
      font-size: 13px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      transition: var(--transition-smooth);
      text-decoration: none !important;
      margin-top: auto;
    }

    .ct-product-card:hover .ct-prod-btn {
      background-color: var(--brand-green);
      color: #ffffff !important;
      box-shadow: 0 6px 16px rgba(8, 154, 73, 0.2);
    }

    /* Custom Pagination Styling */
    .ct-pagination-wrap {
      display: flex;
      justify-content: center;
      margin-top: 40px;
    }

    .ct-pagination-wrap .pagination {
      display: inline-flex;
      list-style: none;
      padding: 6px;
      background: #ffffff;
      border-radius: 14px;
      border: 1px solid rgba(15, 23, 42, 0.05);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.01);
      gap: 4px;
    }

    .ct-pagination-wrap .page-item .page-link {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 38px;
      height: 38px;
      border-radius: 10px !important;
      color: #475569;
      font-weight: 700;
      font-size: 14px;
      border: none !important;
      background: transparent;
      transition: var(--transition-smooth);
    }

    .ct-pagination-wrap .page-item.active .page-link {
      background-color: var(--brand-green) !important;
      color: #ffffff !important;
    }

    .ct-pagination-wrap .page-item .page-link:hover {
      background-color: #f1f5f9;
      color: var(--brand-slate);
    }

    /* Form and Dialog elements inside Special Request Panel */
    .ct-request-box {
      background: #ffffff;
      border: 1px solid rgba(15, 23, 42, 0.05);
      border-radius: 24px;
      padding: 30px;
      box-shadow: 0 15px 45px rgba(0, 0, 0, 0.03);
    }

    .ct-request-title {
      font-size: 20px;
      font-weight: 800;
      margin-bottom: 20px;
      text-align: center;
      color: var(--brand-slate);
    }

    .ct-request-form-group {
      margin-bottom: 18px;
    }

    .ct-request-form-group label {
      font-size: 13px;
      font-weight: 600;
      color: #475569;
      margin-bottom: 6px;
      display: block;
    }

    .ct-request-textarea {
      width: 100% !important;
      border: 1px solid rgba(15, 23, 42, 0.1) !important;
      border-radius: 12px !important;
      padding: 12px 16px !important;
      font-size: 14px !important;
      background: #f8fafc !important;
      color: #0f172a !important;
      transition: var(--transition-smooth) !important;
      resize: vertical;
    }

    .ct-request-textarea:focus {
      border-color: var(--brand-green) !important;
      background: #ffffff !important;
      box-shadow: 0 0 0 3px var(--brand-glow) !important;
      outline: none !important;
    }

    .ct-request-submit-btn {
      width: 100% !important;
      height: 50px !important;
      background-color: var(--brand-green) !important;
      color: #ffffff !important;
      border: none !important;
      border-radius: 12px !important;
      font-size: 14px !important;
      font-weight: 700 !important;
      cursor: pointer !important;
      transition: var(--transition-smooth) !important;
    }

    .ct-request-submit-btn:hover {
      background-color: var(--brand-green-hover) !important;
      box-shadow: 0 8px 20px rgba(8, 154, 73, 0.2) !important;
    }

    /* Footer styling */
    .ct-footer {
      background-color: var(--brand-dark) !important;
      color: #ffffff !important;
      padding-top: 80px !important;
      font-family: var(--font-sans) !important;
      border-top: 4px solid var(--brand-green);
    }

    .ct-footer-grid {
      display: grid !important;
      grid-template-columns: 1fr !important;
      gap: 48px !important;
      padding-bottom: 64px !important;
    }

    @media (min-width: 768px) {
      .ct-footer-grid {
        grid-template-columns: repeat(2, 1fr) !important;
      }
    }

    @media (min-width: 992px) {
      .ct-footer-grid {
        grid-template-columns: 4fr 2fr 2fr 3fr !important;
      }
    }

    .ct-footer-logo {
      margin-bottom: 24px !important;
    }

    .ct-footer-logo img {
      width: 150px !important;
      height: auto !important;
      filter: brightness(0) invert(1) !important;
    }

    .ct-footer-desc {
      color: #94a3b8 !important;
      font-size: 14px !important;
      line-height: 1.75 !important;
      font-weight: 500 !important;
      margin-bottom: 24px !important;
    }

    .ct-footer-contact {
      display: flex !important;
      flex-direction: column !important;
      gap: 14px !important;
      font-size: 14px !important;
      font-weight: 500 !important;
    }

    .ct-footer-contact-item {
      display: flex !important;
      align-items: flex-start !important;
      gap: 12px !important;
    }

    .ct-footer-contact-item span {
      color: var(--brand-green) !important;
    }

    .ct-footer-contact-item a {
      color: #cbd5e1 !important;
      text-decoration: none !important;
      transition: var(--transition-smooth) !important;
    }

    .ct-footer-contact-item a:hover {
      color: var(--brand-green) !important;
    }

    .ct-footer-socials {
      display: flex !important;
      align-items: center !important;
      gap: 16px !important;
      margin-top: 24px !important;
    }

    .ct-footer-social-btn {
      width: 40px !important;
      height: 40px !important;
      border-radius: 12px !important;
      background-color: rgba(255, 255, 255, 0.05) !important;
      border: 1px solid rgba(255, 255, 255, 0.1) !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      color: rgba(255, 255, 255, 0.7) !important;
      transition: var(--transition-smooth) !important;
      text-decoration: none !important;
    }

    .ct-footer-social-btn:hover {
      border-color: rgba(8, 154, 73, 0.35) !important;
      background-color: rgba(8, 154, 73, 0.1) !important;
      color: var(--brand-green) !important;
      transform: translateY(-2px) !important;
    }

    .ct-footer-title {
      font-size: 18px !important;
      font-weight: 700 !important;
      font-family: var(--font-outfit) !important;
      color: #ffffff !important;
      border-left: 4px solid var(--brand-green) !important;
      padding-left: 12px !important;
      margin-bottom: 24px !important;
    }

    .ct-footer-links {
      list-style: none !important;
      padding: 0 !important;
      margin: 0 !important;
      display: flex !important;
      flex-direction: column !important;
      gap: 14px !important;
      font-size: 14px !important;
      font-weight: 500 !important;
    }

    .ct-footer-links li a {
      color: #94a3b8 !important;
      text-decoration: none !important;
      display: flex !important;
      align-items: center !important;
      gap: 8px !important;
      transition: var(--transition-smooth) !important;
    }

    .ct-footer-links li a:hover {
      color: var(--brand-green) !important;
      padding-left: 4px !important;
    }

    .ct-footer-links li a i {
      font-size: 9px !important;
      color: rgba(8, 154, 73, 0.6) !important;
      transition: var(--transition-smooth) !important;
    }

    .ct-footer-newsletter-text {
      color: #94a3b8 !important;
      font-size: 14px !important;
      line-height: 1.75 !important;
      font-weight: 500 !important;
      margin-bottom: 24px !important;
    }

    .ct-copyright-bar {
      border-top: 1px solid rgba(255, 255, 255, 0.05) !important;
      padding: 24px 0 !important;
      background-color: rgba(0, 0, 0, 0.2) !important;
      font-size: 13px !important;
      color: #cbd5e1 !important;
    }

    .ct-copyright-bar-inner {
      display: flex;
      flex-direction: column;
      gap: 12px;
      align-items: center;
      justify-content: space-between;
    }

    @media (min-width: 768px) {
      .ct-copyright-bar-inner {
        flex-direction: row;
        gap: 0;
      }
    }

    .ct-copyright-links {
      display: flex;
      gap: 20px;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .ct-copyright-links a {
      color: #94a3b8;
      text-decoration: none;
      transition: var(--transition-smooth);
    }

    .ct-copyright-links a:hover {
      color: var(--brand-green);
    }
  </style>
</head>

<body>

  <!-- Header Area Start -->
  <header class="ltn__header-area ltn__header-5 ltn__header-transparent--- gradient-color-4---">
    <!-- Top Bar -->
    <div class="ltn__header-top-area ct-top-bar">
      <div class="container">
        <div class="ct-top-bar-inner">
          <div class="top-bar-left">
            <ul>
              <li>
                <a href="mailto:support@cthostel.com?Subject=TO%20the%20admin%20CTHostel">
                  <i class="icon-mail" style="color: var(--brand-green); margin-right: 6px;"></i> support@cthostel.com
                </a>
              </li>
            </ul>
          </div>
          <div class="top-bar-right">
            <div class="ltn__top-bar-menu">
              <ul style="display: flex; gap: 16px; list-style: none; margin: 0; padding: 0;">
                <li><a href="https://x.com/ct_hostel" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/ct_hostel/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Navigation Bar -->
    <div class="ltn__header-middle-area ltn__header-sticky sticky-active">
      <div class="container">
        <div style="display: flex; align-items: center; justify-content: space-between;">
          <div class="site-logo-wrap-custom">
            <a href="/">
              <img src="/myimages/logo_header.png" style="width: 150px; height: auto;" alt="CTHostel">
            </a>
          </div>

          <div class="header-menu-column">
            <nav class="header-menu" style="display: block;">
              <ul class="ct-nav-list">
                <li><a href="/" class="ct-nav-link">Home</a></li>
                <li><a href="/#about" class="ct-nav-link">About Us</a></li>
                <li><a href="/faq" class="ct-nav-link">FAQ</a></li>
                <li><a href="/contactus" class="ct-nav-link">Contact Us</a></li>
                <li class="special-link">
                  <a href="/register" class="ct-register-btn">Register</a>
                </li>
              </ul>
            </nav>
          </div>

          <div class="ltn__header-options">
            <!-- Mobile Menu Toggle Button -->
            <div class="mobile-menu-toggle">
              <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle" style="color: var(--brand-slate); font-size: 24px; display: block; text-decoration: none;">
                <i class="fas fa-bars"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Header Area End -->

  <!-- Utilize Mobile Menu Start -->
  <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar" style="display: flex; flex-direction: column; height: 100%; justify-content: space-between;">
      <div>
        <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid rgba(255, 255, 255, 0.1); padding-bottom: 20px; margin-bottom: 30px;">
          <div class="site-logo">
            <a href="/"><img src="/myimages/logo_header.png" style="width: 130px; height: auto; filter: brightness(0) invert(1);" alt="CTHostel"></a>
          </div>
          <button class="ltn__utilize-close" style="background: none; border: none; color: rgba(255, 255, 255, 0.8); font-size: 30px; cursor: pointer;">&times;</button>
        </div>
        <div class="ltn__utilize-menu" style="margin-bottom: 30px;">
          <ul class="ct-mobile-nav-list">
            <li><a href="/">Home</a></li>
            <li><a href="/#about">About Us</a></li>
            <li><a href="/faq">FAQ</a></li>
            <li><a href="/contactus">Contact Us</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Utilize Mobile Menu End -->

  <!-- Main Content Layout Section -->
  <div class="container">
    <div class="ct-filter-backdrop"></div>
    <div class="ct-main-layout-grid">

      <!-- Left Sidebar -->
      <aside class="ct-sidebar-column">
        <!-- Close Button for Mobile Drawer -->
        <div class="ct-close-filter-wrap">
          <button type="button" class="ct-close-filter-btn">&times;</button>
        </div>

        <!-- Emergency Helpline dropdown -->
        <div class="ct-emergency-box">
          <div class="ct-emergency-text">
            <i class="fas fa-exclamation-triangle"></i> Emergency Help
          </div>
          <div class="ct-emergency-dropdown">
            <button class="ct-emergency-dropdown-btn">
              Get Help <i class="fas fa-chevron-down"></i>
            </button>
            <div class="ct-emergency-menu">
              <a href="/egbami" class="ct-emergency-item"><i class="fas fa-shield-alt"></i> Egbami Services</a>
              <a href="tel:08032979644" class="ct-emergency-item"><i class="fas fa-ambulance"></i> Ambulance</a>
              <a href="tel:08035692904" class="ct-emergency-item"><i class="fas fa-fire-extinguisher"></i> Fire Service</a>
            </div>
          </div>
        </div>

        <!-- Filters Form Widget -->
        <div class="ct-sidebar-widget">
          <h4 class="ct-widget-title">Filter Hostels</h4>
          <form method="post" action="{{route('filter')}}" class="ct-filter-form">@csrf
            <input name="school_id" type="hidden" value="{{$school_id}}">

            <label class="ct-input-label">Select Locations</label>
            <div class="ct-checkbox-group">
              @foreach($locations as $category)
              <label class="ct-checkbox-item">
                <input type="checkbox" value="{{$category->id}}" name="location[]" {{ is_array(session()->get('filter_location')) && in_array($category->id, session()->get('filter_location')) ? 'checked' : '' }}>
                <span>{{$category->name}}</span>
              </label>
              @endforeach
            </div>

            <label class="ct-input-label">Min Price (₦)</label>
            <input required type="number" name="min_price" class="ct-filter-input" value="{{ session()->get('filter_min_price') ?? 20000 }}" placeholder="e.g. 20000">

            <label class="ct-input-label">Max Price (₦)</label>
            <input required type="number" name="max_price" class="ct-filter-input" value="{{ session()->get('filter_max_price') ?? 150000 }}" placeholder="e.g. 150000">

            <button type="submit" class="ct-filter-btn">
              <i class="fas fa-sliders-h"></i> Apply Filters
            </button>
          </form>
        </div>

        <!-- Become Agent Widget -->
        <div class="ct-sidebar-widget ct-agent-promo-card">
          <div class="ct-agent-promo-icon">
            <i class="fas fa-home"></i>
          </div>
          <h4 style="font-size: 18px; font-weight: 800; margin-bottom: 8px;">Want to be an Agent?</h4>
          <p class="ct-agent-promo-text">List your hostels on our platform and reach thousands of student seekers instantly.</p>
          <a href="/register" class="ct-agent-promo-btn">Become an Agent</a>
        </div>

        <!-- Egbami Newsletter Widget -->
        <div class="ct-sidebar-widget ct-sidebar-newsletter">
          <h4 class="ct-widget-title">Newsletter</h4>
          <p class="ct-sidebar-newsletter-text">Enter your email below to receive notifications on cheap and verified hostels nearby.</p>
          <div class="ct-newsletter-input-group">
            <input type="email" id="newsletter_email" placeholder="Your email address" class="ct-newsletter-field" required>
            <button type="button" id="submit" class="ct-newsletter-btn">Subscribe</button>
          </div>
        </div>

        <!-- Testimonials sidebar widget -->
        <div class="ct-sidebar-widget">
          <h4 class="ct-widget-title">What people say</h4>
          <div class="ct-testimonials-side swiper">
            <div class="swiper-container" style="overflow: hidden; max-height: 200px;">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="ct-testimonial-card-side">
                    <p class="ct-testimonial-quote">"Caretech hostel is a very good platform to advertise hostels. I was able to get my hostel filled up within a week after upload."</p>
                    <span class="ct-testimonial-author">- Sotonwa Boluwatife</span>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="ct-testimonial-card-side">
                    <p class="ct-testimonial-quote">"I love that I can filter hostels in accordance to my budget and see all matching hostels, giving me a wide range of options."</p>
                    <span class="ct-testimonial-author">- Adebanjo Adedamola</span>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="ct-testimonial-card-side">
                    <p class="ct-testimonial-quote">"I was able to get a very good roommate within just three days with Caretech Hostels. Absolutely amazing!"</p>
                    <span class="ct-testimonial-author">- Soleye Alexander</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </aside>

      <!-- Right Main Column -->
      <main class="ct-main-column">
        @yield('main_content')
      </main>

    </div>
  </div>

  <!-- Footer Area Start -->
  <footer class="ct-footer">
    <div class="container">
      <div class="ct-footer-grid">
        <!-- Widget 1: Logo & Info -->
        <div>
          <div class="ct-footer-logo">
            <img src="{{ asset('myimages/logo_header.png')}}" alt="CTHostel">
          </div>
          <p class="ct-footer-desc">
            Your ultimate off-campus student accommodation and utilities finder app. Secure, convenient, and built for modern student living.
          </p>
          <div class="ct-footer-contact">
            <div class="ct-footer-contact-item">
              <span><i class="fas fa-map-marker-alt"></i></span>
              <span style="color: #cbd5e1;">Abeokuta, Ogun State</span>
            </div>
            <div class="ct-footer-contact-item">
              <span><i class="fas fa-phone"></i></span>
              <div>
                <a href="tel:09058744473">+234 905 8744 473</a>,<br>
                <a href="tel:08184798413">+234 818 479 8413</a>
              </div>
            </div>
            <div class="ct-footer-contact-item">
              <span><i class="fas fa-envelope"></i></span>
              <a href="mailto:support@cthostel.com">support@cthostel.com</a>
            </div>
          </div>
          <div class="ct-footer-socials">
            <a href="https://www.instagram.com/ct_hostel/" title="Instagram" class="ct-footer-social-btn"><i class="fab fa-instagram"></i></a>
            <a href="https://x.com/ct_hostel" title="Twitter" class="ct-footer-social-btn"><i class="fab fa-twitter"></i></a>
          </div>
        </div>

        <!-- Widget 2: Services -->
        <div>
          <h4 class="ct-footer-title">Services</h4>
          <ul class="ct-footer-links">
            <li><a href="#"><i class="fas fa-chevron-right"></i> Hostel Accommodation</a></li>
            <li><a href="/register"><i class="fas fa-chevron-right"></i> Agent Portal</a></li>
            <li><a href="/myroomie"><i class="fas fa-chevron-right"></i> Roommate Pairing</a></li>
            <li><a href="/services"><i class="fas fa-chevron-right"></i> Technician Services</a></li>
          </ul>
        </div>

        <!-- Widget 3: Links -->
        <div>
          <h4 class="ct-footer-title">Links</h4>
          <ul class="ct-footer-links">
            <li><a href="/register"><i class="fas fa-chevron-right"></i> Agent Signup</a></li>
            <li><a href="/serviceregistration"><i class="fas fa-chevron-right"></i> Technician Signup</a></li>
            <li><a href="/login"><i class="fas fa-chevron-right"></i> User Login</a></li>
            <li><a href="/faq"><i class="fas fa-chevron-right"></i> Support FAQ</a></li>
            <li><a href="tel:09058744473"><i class="fas fa-chevron-right"></i> Contact Support</a></li>
          </ul>
        </div>

        <!-- Widget 4: Newsletter info placeholder -->
        <div>
          <h4 class="ct-footer-title">Newsletter</h4>
          <p class="ct-footer-newsletter-text">
            Subscribe to our newsletter to receive the latest updates directly in your inbox.
          </p>
          <div class="footer-newsletter">
            <div style="display: flex; gap: 8px;">
              <input type="email" id="footer_email" placeholder="Your email address" class="ct-newsletter-field" style="flex-grow: 1;">
              <button type="button" id="footer_subscribe" class="ct-newsletter-btn" style="width: 48px; display: flex; align-items: center; justify-content: center;"><i class="fas fa-location-arrow"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Copyright Bar -->
    <div class="ct-copyright-bar">
      <div class="container">
        <div class="ct-copyright-bar-inner">
          <div>
            <p style="margin: 0;">&copy; {{ date('Y') }} CTHostel. All rights reserved.</p>
          </div>
          <div>
            <ul class="ct-copyright-links">
              <li><a href="#">Terms of Service</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Area End -->

  <!-- All JS Scripts & Plugins -->
  <script src="{{asset('userpage/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('userpage/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('userpage/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{asset('userpage/js/jquery-ui.min.js')}}"></script>
  <script src="{{asset('userpage/js/jquery.slicknav.js')}}"></script>
  <script src="{{asset('userpage/js/mixitup.min.js')}}"></script>
  <script src="{{asset('userpage/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('userpage/js/main.js')}}"></script>
  <script src="{{ asset('welcomehome/js/plugins.js')}}"></script>

  <!-- SweetAlert, Form and Request Controller dependencies -->
  <script src="{{ asset('js/sweetalert/dist/sweetalert.min.js') }}"></script>
  <script src="{{ asset('js/requestController.js') }}"></script>
  <script src="{{ asset('js/formController.js') }}"></script>

  <script>
    $(document).ready(function() {
      // Initialize sidebar testimonials swiper if swiper is available
      if (typeof Swiper !== 'undefined') {
        new Swiper('.ct-testimonials-side .swiper-container', {
          direction: 'vertical',
          autoplay: {
            delay: 4000,
            disableOnInteraction: false,
          },
          loop: true,
          autoHeight: true
        });
      }

      // Navigation menu utilize toggle drawer menu logic
      $('.ltn__utilize-toggle').on('click', function(e) {
        e.preventDefault();
        $('#ltn__utilize-mobile-menu').addClass('ltn__utilize-open');
        $('body').addClass('ltn__utilize-open');
      });

      $('.ltn__utilize-close').on('click', function() {
        $('#ltn__utilize-mobile-menu').removeClass('ltn__utilize-open');
        $('body').removeClass('ltn__utilize-open');
      });

      // Mobile filter drawer toggle script
      $('.ct-mobile-filter-trigger-btn').on('click', function(e) {
        e.preventDefault();
        $('.ct-sidebar-column').addClass('active');
        $('.ct-filter-backdrop').fadeIn(200);
      });

      $('.ct-filter-backdrop, .ct-close-filter-btn').on('click', function(e) {
        e.preventDefault();
        $('.ct-sidebar-column').removeClass('active');
        $('.ct-filter-backdrop').fadeOut(200);
      });

      // Special Request tab toggle logic
      $('#special-request-tab-btn').on('click', function(e) {
        e.preventDefault();
        // Toggle tab navigation visual classes
        $('.ct-nav-tab-item').removeClass('active');
        $(this).parent().addClass('active');

        // Toggle panel display
        $('#hostel-grid-panel').hide();
        $('#special-request-panel').fadeIn(300);
      });

      // Make other tabs click go back to grid
      $('.ct-nav-tab-link').not('#special-request-tab-btn').on('click', function() {
        $('#special-request-panel').hide();
        $('#hostel-grid-panel').show();
      });

      // Sidebar Egbami subscribe submit action
      $("#submit").click(function() {
        var email = $("#newsletter_email").val();
        if(!email) {
          swal("Info", "Please enter a valid email address.", "info");
          return;
        }

        var fd = new FormData();
        fd.append('email', email);
        fd.append('phone', '08000000000'); // Default fallback phone number

        $.ajax({
          type: 'POST',
          url: "{{route('saveegbami')}}",
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: (data) => {
            swal("Success", "Successfully subscribed to Egbami alerts!", "success");
            $("#newsletter_email").val('');
          },
          error: function(data) {
            console.log(data);
            swal("Oops", "Technical issue encountered, unable to subscribe at this moment.", "error");
          }
        });
      });

      // Footer subscribe submit action
      $("#footer_subscribe").click(function() {
        var email = $("#footer_email").val();
        if(!email) {
          swal("Info", "Please enter a valid email address.", "info");
          return;
        }

        var fd = new FormData();
        fd.append('email', email);
        fd.append('phone', '08000000000');

        $.ajax({
          type: 'POST',
          url: "{{route('saveegbami')}}",
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: (data) => {
            swal("Success", "Successfully subscribed to newsletter alerts!", "success");
            $("#footer_email").val('');
          },
          error: function(data) {
            console.log(data);
            swal("Oops", "Technical issue encountered, unable to subscribe at this moment.", "error");
          }
        });
      });

      // Special Request ajax post handler
      $("#special_request").submit(async function(e) {
        e.preventDefault();
        $("#request").attr('disabled', true);
        var fd = new FormData();

        fd.append('name', $("#name").val());
        fd.append('phone', $("#phone").val());
        fd.append('description', $("#description").val());

        $.ajax({
          type: 'POST',
          url: "{{route('special-request')}}",
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: (data) => {
            swal("Success", 'Request submitted successfully', 'success');
            $("#description").val('');
            $("#name").val('');
            $("#phone").val('');
            $("#request").attr('disabled', false);
          },
          error: function(data) {
            console.log(data);
            swal('Oops', 'Request not submitted, please try again.', 'error');
            $("#request").attr('disabled', false);
          }
        });
      });
    });
  </script>
</body>

</html>
