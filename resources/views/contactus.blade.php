<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8" />
  <title>CTHostel | Contact Us</title>
  <meta name="description" content="Get in touch with CTHostel support for any queries regarding off-campus student hostels." />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="shortcut icon" href="{{ asset('myimages/fav_01.png')}}" />
  <link rel="stylesheet" href="{{ asset('welcomehome/css/font-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('welcomehome/css/plugins.css')}}">
  <link rel="stylesheet" href="{{ asset('welcomehome/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('welcomehome/css/responsive.css')}}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

  <style>
    /* Custom CSS variables matching CTHostel brand system */
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

    body {
      font-family: var(--font-sans) !important;
      color: #4a5568;
      background-color: #fbfcff;
      overflow-x: hidden !important;
    }

    /* Typographic updates */
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: var(--font-outfit) !important;
      color: #0f172a;
    }

    /* Premium Button Overrides */
    .ct-btn-primary {
      background-color: var(--brand-green) !important;
      color: #ffffff !important;
      font-family: var(--font-outfit) !important;
      font-weight: 600 !important;
      padding: 14px 28px !important;
      border-radius: 12px !important;
      transition: var(--transition-smooth) !important;
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      gap: 8px !important;
      text-transform: uppercase !important;
      font-size: 13px !important;
      letter-spacing: 0.5px !important;
      border: none !important;
      cursor: pointer !important;
      text-decoration: none !important;
      width: 100% !important;
    }

    .ct-btn-primary:hover {
      background-color: var(--brand-green-hover) !important;
      transform: translateY(-2px) !important;
      box-shadow: 0 10px 20px rgba(8, 154, 73, 0.2) !important;
    }

    /* Header & Navigation */
    .ct-top-bar {
      background-color: var(--brand-dark) !important;
      color: rgba(255, 255, 255, 0.8) !important;
      padding: 10px 0 !important;
      font-size: 12px !important;
      border-bottom: 1px solid rgba(255, 255, 255, 0.05) !important;
      font-weight: 500 !important;
      font-family: var(--font-sans) !important;
    }

    .ct-top-bar-inner {
      display: flex !important;
      flex-direction: column !important;
      align-items: center !important;
      justify-content: space-between !important;
      gap: 8px !important;
    }

    @media (min-width: 576px) {
      .ct-top-bar-inner {
        flex-direction: row !important;
        gap: 0 !important;
      }
    }

    .ct-top-bar a {
      color: rgba(255, 255, 255, 0.8) !important;
      text-decoration: none !important;
      transition: var(--transition-smooth) !important;
    }

    .ct-top-bar a:hover {
      color: var(--brand-green) !important;
    }

    .ct-nav-list {
      display: flex !important;
      align-items: center !important;
      gap: 36px !important;
      list-style: none !important;
      margin: 0 !important;
      padding: 0 !important;
      font-size: 15px !important;
      font-weight: 700 !important;
      color: var(--brand-slate) !important;
      font-family: var(--font-outfit) !important;
    }

    .ct-nav-link {
      color: #334155 !important;
      text-decoration: none !important;
      position: relative !important;
      padding: 8px 0 !important;
      transition: var(--transition-smooth) !important;
      display: block !important;
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
      border-radius: 9999px !important;
      transition: var(--transition-smooth) !important;
    }

    .ct-nav-link:hover::after {
      width: 24px !important;
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
    }

    .ltn__header-middle-area.ltn__header-sticky {
      background-color: rgba(255, 255, 255, 0.95) !important;
      backdrop-filter: blur(8px) !important;
      border-bottom: 1px solid rgba(0, 0, 0, 0.05) !important;
      padding: 16px 0 !important;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.02) !important;
    }

    #ltn__utilize-mobile-menu {
      background-color: var(--brand-dark) !important;
      color: #ffffff !important;
    }

    #ltn__utilize-mobile-menu .ltn__utilize-menu-inner {
      background-color: rgba(4, 17, 19, 0.95) !important;
      backdrop-filter: blur(10px) !important;
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

    .ct-mobile-action-btn {
      display: flex !important;
      align-items: center !important;
      gap: 12px !important;
      padding: 14px 20px !important;
      background: rgba(255, 255, 255, 0.05) !important;
      border: 1px solid rgba(255, 255, 255, 0.1) !important;
      border-radius: 16px !important;
      color: #ffffff !important;
      font-size: 14px !important;
      font-weight: 600 !important;
      transition: var(--transition-smooth) !important;
      text-decoration: none !important;
      width: 100% !important;
    }

    .ct-mobile-action-btn:hover {
      background: rgba(8, 154, 73, 0.15) !important;
      border-color: var(--brand-green) !important;
    }

    /* Contact Hero Style */
    .ct-contact-hero {
      background-color: var(--brand-dark) !important;
      padding: 96px 0 !important;
      position: relative !important;
      overflow: hidden !important;
      text-align: center !important;
      z-index: 10;
    }

    .ct-contact-hero-overlay {
      position: absolute !important;
      inset: 0 !important;
      background-color: rgba(4, 17, 19, 0.65) !important;
      backdrop-filter: blur(1px) !important;
      z-index: 1;
    }

    .ct-contact-hero-container {
      position: relative !important;
      z-index: 5 !important;
    }

    .ct-contact-glow-blob-1 {
      position: absolute !important;
      width: 350px !important;
      height: 350px !important;
      background: rgba(8, 154, 73, 0.22) !important;
      border-radius: 50% !important;
      filter: blur(100px) !important;
      top: -10% !important;
      left: 10% !important;
      z-index: 2 !important;
      pointer-events: none !important;
    }

    .ct-contact-glow-blob-2 {
      position: absolute !important;
      width: 380px !important;
      height: 380px !important;
      background: rgba(0, 255, 115, 0.12) !important;
      border-radius: 50% !important;
      filter: blur(120px) !important;
      bottom: -15% !important;
      right: 15% !important;
      z-index: 2 !important;
      pointer-events: none !important;
    }

    .ct-contact-hero h1 {
      font-size: 36px !important;
      color: #ffffff !important;
      font-weight: 900 !important;
      font-family: var(--font-outfit) !important;
      margin-bottom: 16px !important;
      letter-spacing: -1px !important;
    }

    @media (min-width: 768px) {
      .ct-contact-hero h1 {
        font-size: 56px !important;
      }
    }

    .ct-contact-hero p {
      color: #94a3b8 !important;
      font-size: 15px !important;
      font-weight: 500 !important;
      max-width: 600px !important;
      margin: 0 auto !important;
      line-height: 1.65 !important;
    }

    /* Contact Grid Content */
    .ct-contact-section {
      padding: 96px 0 !important;
      background-color: #ffffff !important;
    }

    .ct-contact-grid {
      display: grid !important;
      grid-template-columns: 1fr !important;
      gap: 48px !important;
    }

    @media (min-width: 992px) {
      .ct-contact-grid {
        grid-template-columns: 5fr 7fr !important;
        align-items: start !important;
      }
    }

    /* Contact Info Details */
    .ct-contact-info-list {
      display: flex !important;
      flex-direction: column !important;
      gap: 24px !important;
    }

    .ct-contact-card {
      background-color: #ffffff !important;
      border: 1px solid #f1f5f9 !important;
      border-radius: 24px !important;
      padding: 28px !important;
      box-shadow: 0 10px 30px -10px rgba(15, 23, 42, 0.02), 0 1px 3px rgba(15, 23, 42, 0.01) !important;
      display: flex !important;
      align-items: flex-start !important;
      gap: 20px !important;
      transition: var(--transition-smooth) !important;
    }

    .ct-contact-card:hover {
      border-color: rgba(8, 154, 73, 0.15) !important;
      box-shadow: 0 15px 35px -10px rgba(8, 154, 73, 0.04) !important;
      transform: translateY(-3px) !important;
    }

    .ct-contact-icon-box {
      width: 56px !important;
      height: 56px !important;
      background-color: rgba(8, 154, 73, 0.06) !important;
      border-radius: 16px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      color: var(--brand-green) !important;
      font-size: 20px !important;
      flex-shrink: 0 !important;
      transition: var(--transition-smooth) !important;
    }

    .ct-contact-card:hover .ct-contact-icon-box {
      background-color: var(--brand-green) !important;
      color: #ffffff !important;
    }

    .ct-contact-card-title {
      font-size: 16px !important;
      font-weight: 800 !important;
      color: #0f172a !important;
      margin-bottom: 6px !important;
      font-family: var(--font-outfit) !important;
    }

    .ct-contact-card-desc {
      font-size: 14.5px !important;
      color: #64748b !important;
      margin: 0 !important;
      font-weight: 500 !important;
      line-height: 1.6 !important;
    }

    .ct-contact-card-desc a {
      color: #334155 !important;
      text-decoration: none !important;
      font-weight: 600 !important;
      transition: var(--transition-smooth) !important;
    }

    .ct-contact-card-desc a:hover {
      color: var(--brand-green) !important;
    }

    /* Social Box details */
    .ct-contact-socials-wrap {
      background-color: #f8fafc !important;
      border-radius: 24px !important;
      padding: 28px !important;
      text-align: center !important;
    }

    .ct-contact-socials-wrap h4 {
      font-size: 16px !important;
      font-weight: 800 !important;
      color: #334155 !important;
      margin-bottom: 16px !important;
      font-family: var(--font-outfit) !important;
    }

    .ct-contact-social-pills {
      display: flex !important;
      justify-content: center !important;
      gap: 16px !important;
    }

    .ct-contact-social-btn {
      width: 46px !important;
      height: 46px !important;
      border-radius: 14px !important;
      background-color: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      color: #475569 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      font-size: 18px !important;
      transition: var(--transition-smooth) !important;
      text-decoration: none !important;
    }

    .ct-contact-social-btn:hover {
      border-color: rgba(8, 154, 73, 0.25) !important;
      background-color: rgba(8, 154, 73, 0.05) !important;
      color: var(--brand-green) !important;
      transform: translateY(-2px) !important;
    }

    /* Glassmorphic Contact Form Card */
    .ct-contact-form-card {
      background-color: #ffffff !important;
      border: 1px solid #f1f5f9 !important;
      border-radius: 32px !important;
      padding: 36px 28px !important;
      box-shadow: 0 10px 30px -10px rgba(15, 23, 42, 0.03), 0 1px 3px rgba(15, 23, 42, 0.02) !important;
    }

    @media (min-width: 576px) {
      .ct-contact-form-card {
        padding: 48px 40px !important;
      }
    }

    .ct-contact-form-card h3 {
      font-size: 24px !important;
      font-weight: 900 !important;
      color: #0f172a !important;
      margin-bottom: 12px !important;
      font-family: var(--font-outfit) !important;
    }

    .ct-contact-form-card p {
      font-size: 14px !important;
      color: #64748b !important;
      margin-bottom: 32px !important;
      font-weight: 500 !important;
      line-height: 1.6 !important;
    }

    /* Form Fields */
    .ct-contact-label {
      font-size: 14px !important;
      font-weight: 700 !important;
      color: #334155 !important;
      margin-bottom: 8px !important;
      display: block !important;
      font-family: var(--font-outfit) !important;
    }

    .ct-contact-input,
    .ct-contact-textarea {
      width: 100% !important;
      background-color: #f8fafc !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 12px !important;
      padding: 14px 18px !important;
      color: #0f172a !important;
      font-size: 15px !important;
      font-weight: 500 !important;
      outline: none !important;
      transition: var(--transition-smooth) !important;
      margin-bottom: 20px !important;
      font-family: var(--font-sans) !important;
    }

    .ct-contact-input:focus,
    .ct-contact-textarea:focus {
      border-color: var(--brand-green) !important;
      background-color: #ffffff !important;
      box-shadow: 0 0 0 4px rgba(8, 154, 73, 0.1) !important;
    }

    .ct-contact-textarea {
      resize: vertical !important;
    }

    /* Alert banner inside form */
    .ct-contact-alert {
      padding: 16px 20px !important;
      border-radius: 12px !important;
      background-color: rgba(8, 154, 73, 0.08) !important;
      border: 1px solid rgba(8, 154, 73, 0.15) !important;
      color: var(--brand-green-dark) !important;
      font-size: 14.5px !important;
      font-weight: 600 !important;
      margin-bottom: 24px !important;
      display: flex !important;
      align-items: center !important;
    }

    /* Footer styling */
    .ct-footer {
      background-color: var(--brand-dark) !important;
      color: #ffffff !important;
      padding-top: 80px !important;
      font-family: var(--font-sans) !important;
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

    .ct-newsletter-form {
      position: relative !important;
    }

    .ct-newsletter-input {
      width: 100% !important;
      background-color: rgba(255, 255, 255, 0.05) !important;
      border: 1px solid rgba(255, 255, 255, 0.1) !important;
      border-radius: 16px !important;
      padding: 14px 56px 14px 16px !important;
      color: #ffffff !important;
      font-size: 14px !important;
      transition: var(--transition-smooth) !important;
      outline: none !important;
    }

    .ct-newsletter-input:focus {
      border-color: var(--brand-green) !important;
    }

    .ct-newsletter-submit {
      position: absolute !important;
      right: 6px !important;
      top: 6px !important;
      bottom: 6px !important;
      padding: 0 16px !important;
      background-color: var(--brand-green) !important;
      color: #ffffff !important;
      border-radius: 12px !important;
      border: none !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      cursor: pointer !important;
      transition: var(--transition-smooth) !important;
    }

    .ct-newsletter-submit:hover {
      background-color: var(--brand-green-hover) !important;
    }

    .ct-copyright-bar {
      background-color: rgba(4, 17, 19, 0.85) !important;
      border-top: 1px solid rgba(255, 255, 255, 0.05) !important;
      padding: 24px 0 !important;
      color: #64748b !important;
      font-size: 14px !important;
      font-weight: 500 !important;
    }

    .ct-copyright-bar-inner {
      display: flex !important;
      flex-direction: column !important;
      align-items: center !important;
      justify-content: space-between !important;
      gap: 12px !important;
    }

    @media (min-width: 768px) {
      .ct-copyright-bar-inner {
        flex-direction: row !important;
        gap: 0 !important;
      }
    }

    .ct-copyright-links {
      display: flex !important;
      gap: 24px !important;
      list-style: none !important;
      padding: 0 !important;
      margin: 0 !important;
    }

    .ct-copyright-links a {
      color: #64748b !important;
      text-decoration: none !important;
      transition: var(--transition-smooth) !important;
    }

    .ct-copyright-links a:hover {
      color: var(--brand-green) !important;
    }
  </style>
</head>

<body>

  <!-- Body main wrapper start -->
  <div class="body-wrapper">

    <!-- HEADER AREA START (header-5) -->
    <header class="ltn__header-area ltn__header-5 ltn__header-transparent--- gradient-color-4---">
      <!-- ltn__header-top-area start -->
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
      <!-- ltn__header-top-area end -->

      <!-- ltn__header-middle-area start -->
      <div class="ltn__header-middle-area ltn__header-sticky sticky-active">
        <div class="container">
          <div style="display: flex; align-items: center; justify-content: space-between;">
            <div class="site-logo-wrap-custom">
              <div class="site-logo-custom" style="display: flex; align-items: center;">
                <a href="/cthostel">
                  <img src="{{ asset('myimages/logo_header.png')}}" style="width: 150px; height: auto;" alt="CTHostel">
                </a>
              </div>
            </div>

            <div class="header-menu-column">
              <div class="header-menu" style="display: block;">
                <nav>
                  <div class="ltn__main-menu">
                    <ul class="ct-nav-list">
                      <li>
                        <a href="/" class="ct-nav-link">Home</a>
                      </li>
                      <li>
                        <a href="/#about" class="ct-nav-link">About</a>
                      </li>
                      <li>
                        <a href="/faq" class="ct-nav-link">FAQ</a>
                      </li>
                      <li>
                        <a href="/contactus" class="ct-nav-link">Contact Us</a>
                      </li>
                      <li class="special-link">
                        <a href="/register" class="ct-register-btn">Register</a>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>

            <div class="ltn__header-options">
              <!-- Mobile Menu Button -->
              <div class="mobile-menu-toggle">
                <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle" style="color: var(--brand-slate); font-size: 24px; padding: 4px; display: block; text-decoration: none;">
                  <i class="fas fa-bars"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
      <div class="ltn__utilize-menu-inner ltn__scrollbar" style="display: flex; flex-direction: column; height: 100%; justify-content: space-between; padding: 30px 24px;">
        <div>
          <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid rgba(255, 255, 255, 0.1); padding-bottom: 20px; margin-bottom: 30px;">
            <div class="site-logo">
              <a href="/cthostel"><img src="{{ asset('myimages/logo_header.png')}}" style="width: 130px; height: auto; filter: brightness(0) invert(1);" alt="CTHostel"></a>
            </div>
            <button class="ltn__utilize-close" style="background: none; border: none; color: rgba(255, 255, 255, 0.8); font-size: 30px; cursor: pointer;">&times;</button>
          </div>
          <div class="ltn__utilize-menu" style="margin-bottom: 30px;">
            <ul class="ct-mobile-nav-list">
              <li><a href="/cthostel">Home</a></li>
              <li><a href="/cthostel#about">About</a></li>
              <li><a href="/faq">FAQ</a></li>
              <li><a href="/contactus">Contact Us</a></li>
              <li><a href="/login">Login</a></li>
            </ul>
          </div>
        </div>

        <div style="display: flex; flex-direction: column; gap: 24px;">
          <div class="ltn__utilize-buttons" style="border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px;">
            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 12px;">
              <li>
                <a href="/register" class="ct-mobile-action-btn">
                  <span style="color: var(--brand-green);"><i class="far fa-user"></i></span>
                  Register As Agent
                </a>
              </li>
              <li>
                <a href="/serviceregistration" class="ct-mobile-action-btn">
                  <span style="color: var(--brand-green);"><i class="far fa-user"></i></span>
                  Register As Technician
                </a>
              </li>
              <li>
                <a href="/myroomie" class="ct-mobile-action-btn">
                  <span style="color: var(--brand-green);"><i class="fas fa-home"></i></span>
                  Get Roommate
                </a>
              </li>
              <li>
                <a href="/services" class="ct-mobile-action-btn">
                  <span style="color: var(--brand-green);"><i class="fas fa-plus"></i></span>
                  Hire Technician
                </a>
              </li>
            </ul>
          </div>
          <div style="display: flex; justify-content: center; gap: 24px; padding-top: 16px; border-top: 1px solid rgba(255, 255, 255, 0.05);">
            <a href="https://x.com/ct_hostel" style="color: rgba(255, 255, 255, 0.6); font-size: 18px;"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/ct_hostel/" style="color: rgba(255, 255, 255, 0.6); font-size: 18px;"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <!-- CONTACT HERO START -->
    <div class="ct-contact-hero">
      <div class="ct-contact-glow-blob-1"></div>
      <div class="ct-contact-glow-blob-2"></div>
      <div class="ct-contact-hero-overlay"></div>
      <div class="container ct-contact-hero-container">
        <h1>Get In <span style="color: var(--brand-green);">Touch</span></h1>
        <p>Have questions, partnerships, complaints or feedback? Drop us a line below or contact us via our phone and support channels.</p>
      </div>
    </div>
    <!-- CONTACT HERO END -->

    <!-- CONTACT GRID SECTION START -->
    <section class="ct-contact-section">
      <div class="container">
        <div class="ct-contact-grid">

          <!-- Left Column: Contact info & socials -->
          <div class="ct-contact-info-list">

            <!-- Phone Support -->
            <div class="ct-contact-card">
              <div class="ct-contact-icon-box">
                <i class="fas fa-phone"></i>
              </div>
              <div>
                <h4 class="ct-contact-card-title">Call / WhatsApp Support</h4>
                <p class="ct-contact-card-desc">
                  <a href="tel:09058744473">+234 905 8744 473</a><br>
                  <a href="tel:08184798413">+234 818 479 8413</a>
                </p>
              </div>
            </div>

            <!-- Email Support -->
            <div class="ct-contact-card">
              <div class="ct-contact-icon-box">
                <i class="fas fa-envelope"></i>
              </div>
              <div>
                <h4 class="ct-contact-card-title">Email Inquiries</h4>
                <p class="ct-contact-card-desc">
                  <a href="mailto:support@cthostel.com">support@cthostel.com</a>
                </p>
              </div>
            </div>

            <!-- Office Location -->
            <div class="ct-contact-card">
              <div class="ct-contact-icon-box">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div>
                <h4 class="ct-contact-card-title">Office Location</h4>
                <p class="ct-contact-card-desc">
                  Abeokuta, Ogun State, Nigeria.
                </p>
              </div>
            </div>

            <!-- Social channels -->
            <div class="ct-contact-socials-wrap">
              <h4>Follow Our Updates</h4>
              <div class="ct-contact-social-pills">
                <a href="https://www.instagram.com/ct_hostel/" title="Instagram" class="ct-contact-social-btn"><i class="fab fa-instagram"></i></a>
                <a href="https://x.com/ct_hostel" title="Twitter" class="ct-contact-social-btn"><i class="fab fa-twitter"></i></a>
              </div>
            </div>

          </div>

          <!-- Right Column: Glassmorphic Contact Form -->
          <div class="ct-contact-form-card">
            <h3>Send a Message</h3>
            <p>Fill out the form below and our customer response team will get back to you within 24 hours.</p>

            @if(session('alert'))
            <div class="ct-contact-alert">
              <i class="fas fa-info-circle" style="margin-right: 10px; color: var(--brand-green); font-size: 16px;"></i>
              <span>{{ session('alert') }}</span>
            </div>
            @endif

            <form action="{{ route('contact') }}" method="POST" autocomplete="off">
              @csrf
              <div>
                <label class="ct-contact-label">Full Name</label>
                <input type="text" name="name" required placeholder="Enter your full name" class="ct-contact-input">
              </div>

              <div>
                <label class="ct-contact-label">Email Address</label>
                <input type="email" name="email" required placeholder="Enter your email address" class="ct-contact-input">
              </div>

              <div>
                <label class="ct-contact-label">Phone Number</label>
                <input type="tel" name="phone" required placeholder="Enter your phone number" class="ct-contact-input">
              </div>

              <div>
                <label class="ct-contact-label">Your Message</label>
                <textarea name="message" required placeholder="Write details of your questions or complains here..." rows="5" class="ct-contact-textarea"></textarea>
              </div>

              <div style="margin-top: 10px;">
                <button type="submit" class="ct-btn-primary">
                  Submit Message <i class="fas fa-arrow-right" style="margin-left: 8px;"></i>
                </button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </section>
    <!-- CONTACT GRID SECTION END -->

    <!-- FOOTER AREA START -->
    <footer class="ct-footer" id="contactus">
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
                <a href="tel:09058744473">+234 905 8744 473</a>,
                <a href="tel:08184798413">+234 818 479 8413</a>
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

          <!-- Widget 4: Newsletter -->
          <div>
            <h4 class="ct-footer-title">Newsletter</h4>
            <p class="ct-footer-newsletter-text">
              Subscribe to our weekly newsletter and receive instant updates in your inbox.
            </p>
            <div class="footer-newsletter">
              <form action="#" class="ct-newsletter-form">
                <input type="email" name="email" placeholder="Your email address" class="ct-newsletter-input" required>
                <button type="submit" class="ct-newsletter-submit">
                  <i class="fas fa-location-arrow"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Copyright Bar -->
      <div class="ct-copyright-bar">
        <div class="container">
          <div class="ct-copyright-bar-inner">
            <div>
              <p style="margin: 0;">&copy; 2026 CTHostel. All rights reserved.</p>
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
    <!-- FOOTER AREA END -->

  </div>
  <!-- Body main wrapper end -->

  <!-- All JS Plugins -->
  <script src="{{ asset('welcomehome/js/plugins.js')}}"></script>
  <!-- Main JS -->
  <script src="{{ asset('welcomehome/js/main.js')}}"></script>

</body>

</html>