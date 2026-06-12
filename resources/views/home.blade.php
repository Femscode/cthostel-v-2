<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8" />
  <title>CTHostel</title>
  <meta name="description" content="Affordable and comfortable hostel for your next adventure" />
  <meta name="keywords" content="Affordable and comfortable hostel for your next adventure" />
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
    }

    .ct-btn-primary:hover {
      background-color: var(--brand-green-hover) !important;
      transform: translateY(-2px) !important;
      box-shadow: 0 10px 20px rgba(8, 154, 73, 0.2) !important;
    }

    .ct-btn-secondary {
      background-color: transparent !important;
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
      border: 1px solid rgba(255, 255, 255, 0.25) !important;
      cursor: pointer !important;
      text-decoration: none !important;
    }

    .ct-btn-secondary:hover {
      border-color: rgba(255, 255, 255, 0.6) !important;
      background-color: rgba(255, 255, 255, 0.05) !important;
      transform: translateY(-2px) !important;
    }

    /* Premium overrides for third-party jQuery Nice-Select plugin inside Search Card */
    .ct-search-card .nice-select {
      border: 1px solid rgba(255, 255, 255, 0.15) !important;
      background-color: rgba(255, 255, 255, 0.05) !important;
      color: #ffffff !important;
      border-radius: 16px !important;
      height: 56px !important;
      line-height: 54px !important;
      padding-left: 20px !important;
      font-weight: 600 !important;
      width: 100% !important;
      margin-bottom: 0 !important;
    }

    .ct-search-card .nice-select:after {
      border-bottom: 2px solid #089A49 !important;
      border-right: 2px solid #089A49 !important;
      right: 20px !important;
    }

    .ct-search-card .nice-select:hover,
    .ct-search-card .nice-select:focus {
      border-color: #089A49 !important;
    }

    .ct-search-card .nice-select .list {
      background-color: #0b2c3d !important;
      border: 1px solid rgba(255, 255, 255, 0.1) !important;
      border-radius: 16px !important;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4) !important;
      width: 100% !important;
      padding: 6px 0 !important;
    }

    .ct-search-card .nice-select .option {
      color: rgba(255, 255, 255, 0.8) !important;
      padding-left: 20px !important;
      padding-right: 20px !important;
      transition: all 0.2s ease !important;
    }

    .ct-search-card .nice-select .option:hover,
    .ct-search-card .nice-select .option.focus,
    .ct-search-card .nice-select .option.selected.focus {
      background-color: rgba(8, 154, 73, 0.15) !important;
      color: #00ff73 !important;
      padding-left: 24px !important;
    }

    .ct-search-card .nice-select .current {
      color: #ffffff !important;
    }

    /* Fix tab content background to be transparent and remove white padding boxes */
    .ct-search-card .tab-content,
    .ct-search-card .tab-pane {
      background: transparent !important;
      background-color: transparent !important;
      border: none !important;
      padding: 0 !important;
      margin: 0 !important;
      box-shadow: none !important;
    }

    /* Active search tab styling override */
    .ltn__car-dealer-form-tab a.active {
      background-color: #089A49 !important;
      color: #ffffff !important;
    }

    /* Header CSS Overrides */
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

    /* Navigation list menu */
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

    /* Mobile menu selectors */
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

    /* Hero elements */
    .ct-hero-section {
      position: relative !important;
      min-height: 90vh !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      background-size: cover !important;
      background-position: center !important;
      padding: 140px 0 100px !important;
      overflow: visible !important;
      font-family: var(--font-sans) !important;
      z-index: 30 !important;
    }

    @media (min-width: 992px) {
      .ct-hero-section {
        padding: 200px 0 160px !important;
      }
    }

    .ct-hero-overlay {
      position: absolute !important;
      inset: 0 !important;
      background-color: rgba(4, 17, 19, 0.8) !important;
      backdrop-filter: blur(2px) !important;
      z-index: 10 !important;
    }

    .ct-hero-container {
      position: relative !important;
      z-index: 20 !important;
    }

    .ct-hero-grid {
      display: grid !important;
      grid-template-columns: 1fr !important;
      gap: 40px !important;
      align-items: center !important;
    }

    @media (min-width: 992px) {
      .ct-hero-grid {
        grid-template-columns: 7fr 5fr !important;
        gap: 60px !important;
      }
    }

    .ct-hero-title {
      font-size: 38px !important;
      font-weight: 800 !important;
      color: #ffffff !important;
      line-height: 1.25 !important;
      font-family: var(--font-outfit) !important;
      letter-spacing: -0.5px !important;
      margin-bottom: 24px !important;
    }

    @media (min-width: 576px) {
      .ct-hero-title {
        font-size: 50px !important;
      }
    }

    @media (min-width: 992px) {
      .ct-hero-title {
        font-size: 58px !important;
        text-align: left !important;
      }
    }

    .ct-hero-text {
      font-size: 16px !important;
      color: rgba(255, 255, 255, 0.75) !important;
      max-width: 540px !important;
      line-height: 1.75 !important;
      font-weight: 400 !important;
      margin: 0 auto 32px !important;
    }

    @media (min-width: 992px) {
      .ct-hero-text {
        margin-left: 0 !important;
        text-align: left !important;
      }
    }

    .ct-hero-buttons {
      display: flex !important;
      flex-direction: column !important;
      align-items: center !important;
      justify-content: center !important;
      gap: 16px !important;
    }

    @media (min-width: 576px) {
      .ct-hero-buttons {
        flex-direction: row !important;
      }
    }

    @media (min-width: 992px) {
      .ct-hero-buttons {
        justify-content: flex-start !important;
      }
    }

    /* Responsive hero content left vs mobile search card button overrides */
    .ct-hero-content-left {
      display: none !important;
    }

    .ct-mobile-hero-reg-btn-wrap {
      display: block !important;
      text-align: center;
      margin-top: 24px;
    }

    @media (min-width: 992px) {
      .ct-hero-content-left {
        display: block !important;
      }

      .ct-mobile-hero-reg-btn-wrap {
        display: none !important;
      }
    }

    /* Mobile mini header styling */
    .ct-mobile-hero-header {
      display: block;
      text-align: center;
      margin-bottom: 24px;
      z-index: 20;
      position: relative;
    }

    .ct-mobile-title {
      font-size: 28px !important;
      font-weight: 800 !important;
      color: #ffffff !important;
      line-height: 1.25 !important;
      letter-spacing: -0.5px !important;
      margin-bottom: 8px !important;
      margin-top: 20px !important;
      font-family: var(--font-outfit) !important;
    }

    .ct-mobile-desc {
      font-size: 14px !important;
      color: rgba(255, 255, 255, 0.75) !important;
      max-width: 480px !important;
      margin: 0 auto !important;
      line-height: 1.55 !important;
      font-weight: 400 !important;
    }

    @media (min-width: 992px) {
      .ct-mobile-hero-header {
        display: none !important;
      }
    }

    /* Floating glassmorphic aura blobs */
    .ct-hero-glow-blob-1 {
      position: absolute !important;
      width: 180px !important;
      height: 180px !important;
      background: rgba(8, 154, 73, 0.22) !important;
      border-radius: 50% !important;
      filter: blur(60px) !important;
      top: 15% !important;
      left: 5% !important;
      z-index: 11 !important;
      pointer-events: none !important;
    }

    .ct-hero-glow-blob-2 {
      position: absolute !important;
      width: 200px !important;
      height: 200px !important;
      background: rgba(0, 255, 115, 0.12) !important;
      border-radius: 50% !important;
      filter: blur(70px) !important;
      bottom: 25% !important;
      right: 5% !important;
      z-index: 11 !important;
      pointer-events: none !important;
    }

    @media (min-width: 992px) {
      .ct-hero-glow-blob-1 {
        width: 350px !important;
        height: 350px !important;
        filter: blur(100px) !important;
        top: 10% !important;
        left: 15% !important;
      }

      .ct-hero-glow-blob-2 {
        width: 400px !important;
        height: 400px !important;
        filter: blur(120px) !important;
        bottom: 20% !important;
        right: 15% !important;
      }
    }

    /* Search Container Styling (frosted glass layout) */
    .ct-search-card {
      background-color: rgba(11, 44, 61, 0.9) !important;
      border: 1px solid rgba(255, 255, 255, 0.1) !important;
      border-radius: 32px !important;
      padding: 30px !important;
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5) !important;
      font-family: var(--font-sans) !important;
    }

    @media (min-width: 768px) {
      .ct-search-card {
        padding: 40px !important;
      }
    }

    .ct-search-card-title {
      font-size: 24px !important;
      font-weight: 900 !important;
      color: #ffffff !important;
      font-family: var(--font-outfit) !important;
      margin-bottom: 6px !important;
      text-align: center !important;
    }

    .ct-search-card-sub {
      font-size: 13px !important;
      color: #94a3b8 !important;
      font-weight: 500 !important;
      text-align: center !important;
      margin-bottom: 24px !important;
    }

    .ct-tab-nav {
      display: flex !important;
      padding: 4px !important;
      background-color: rgba(255, 255, 255, 0.05) !important;
      border: 1px solid rgba(255, 255, 255, 0.1) !important;
      border-radius: 16px !important;
      margin-bottom: 24px !important;
    }

    .ct-tab-nav a {
      flex: 1 !important;
      text-align: center !important;
      padding: 12px !important;
      font-size: 13px !important;
      font-weight: 900 !important;
      border-radius: 12px !important;
      color: #94a3b8 !important;
      transition: var(--transition-smooth) !important;
      cursor: pointer !important;
      font-family: var(--font-outfit) !important;
      text-decoration: none !important;
    }

    .ct-tab-nav a.active,
    .ct-tab-nav a:hover {
      color: #ffffff !important;
    }

    .ct-tab-nav a.active {
      background-color: var(--brand-green) !important;
      color: #ffffff !important;
    }

    .ct-search-label {
      display: block !important;
      font-size: 11px !important;
      font-weight: 900 !important;
      color: #cbd5e1 !important;
      text-transform: uppercase !important;
      letter-spacing: 1.5px !important;
      margin-bottom: 8px !important;
      font-family: var(--font-outfit) !important;
    }

    .ct-search-submit {
      width: 100% !important;
      height: 52px !important;
      background-color: var(--brand-green) !important;
      color: #ffffff !important;
      font-family: var(--font-outfit) !important;
      font-weight: 700 !important;
      border-radius: 12px !important;
      border: none !important;
      transition: var(--transition-smooth) !important;
      text-transform: uppercase !important;
      font-size: 12px !important;
      letter-spacing: 1px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      gap: 8px !important;
      cursor: pointer !important;
      margin-top: 24px !important;
    }

    .ct-search-submit:hover {
      background-color: var(--brand-green-hover) !important;
      box-shadow: 0 4px 12px rgba(8, 154, 73, 0.3) !important;
    }

    /* About Section styling */
    .ct-about-section {
      padding: 96px 0 !important;
      background: linear-gradient(to bottom, #ffffff, #f8fafc) !important;
      position: relative !important;
      overflow: hidden !important;
      font-family: var(--font-sans) !important;
      z-index: 10 !important;
    }

    .ct-section-badge {
      font-size: 11px !important;
      font-weight: 900 !important;
      text-transform: uppercase !important;
      letter-spacing: 1.5px !important;
      color: var(--brand-green) !important;
      background-color: rgba(8, 154, 73, 0.1) !important;
      padding: 8px 16px !important;
      border-radius: 9999px !important;
      display: inline-block !important;
      font-family: var(--font-outfit) !important;
      margin-bottom: 16px !important;
    }

    .ct-section-title {
      font-size: 32px !important;
      font-weight: 900 !important;
      color: #0f172a !important;
      line-height: 1.25 !important;
      font-family: var(--font-outfit) !important;
      margin-bottom: 24px !important;
    }

    @media (min-width: 768px) {
      .ct-section-title {
        font-size: 48px !important;
      }
    }

    .ct-about-text {
      font-size: 16px !important;
      color: #475569 !important;
      line-height: 1.75 !important;
      font-weight: 500 !important;
      margin-bottom: 30px !important;
    }

    .ct-about-text p {
      margin-bottom: 16px !important;
    }

    .ct-stats-card {
      background: linear-gradient(to bottom right, var(--brand-dark), var(--brand-slate)) !important;
      border: 1px solid rgba(255, 255, 255, 0.1) !important;
      border-radius: 32px !important;
      padding: 30px !important;
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25) !important;
      position: relative !important;
      overflow: hidden !important;
      font-family: var(--font-sans) !important;
    }

    @media (min-width: 768px) {
      .ct-stats-card {
        padding: 48px !important;
      }
    }

    .ct-stats-badge {
      display: inline-flex !important;
      align-items: center !important;
      gap: 8px !important;
      padding: 6px 16px !important;
      border-radius: 9999px !important;
      background-color: rgba(8, 154, 73, 0.2) !important;
      border: 1px solid rgba(8, 154, 73, 0.3) !important;
      color: #4ade80 !important;
      font-weight: 700 !important;
      font-size: 12px !important;
      letter-spacing: 0.5px !important;
      text-transform: uppercase !important;
      font-family: var(--font-outfit) !important;
      margin-bottom: 24px !important;
    }

    .ct-stats-card h3 {
      font-size: 24px !important;
      font-weight: 900 !important;
      color: #ffffff !important;
      font-family: var(--font-outfit) !important;
      margin-bottom: 16px !important;
    }

    .ct-stats-card p {
      color: #cbd5e1 !important;
      font-size: 14px !important;
      line-height: 1.65 !important;
      margin-bottom: 24px !important;
    }

    .ct-stats-grid {
      display: grid !important;
      grid-template-columns: repeat(2, 1fr) !important;
      gap: 24px !important;
      border-top: 1px solid rgba(255, 255, 255, 0.1) !important;
      padding-top: 24px !important;
    }

    .ct-stat-item {
      display: flex !important;
      flex-direction: column !important;
      gap: 4px !important;
    }

    .ct-stat-num {
      font-size: 32px !important;
      font-weight: 900 !important;
      color: transparent !important;
      background-clip: text !important;
      -webkit-background-clip: text !important;
      background-image: linear-gradient(to right, #4ade80, var(--brand-green)) !important;
      font-family: var(--font-outfit) !important;
    }

    @media (min-width: 768px) {
      .ct-stat-num {
        font-size: 40px !important;
      }
    }

    .ct-stat-label {
      font-size: 11px !important;
      font-weight: 700 !important;
      color: #94a3b8 !important;
      text-transform: uppercase !important;
      letter-spacing: 1px !important;
      font-family: var(--font-outfit) !important;
    }

    /* Layout Grids */
    .ct-grid-3 {
      display: grid !important;
      grid-template-columns: 1fr !important;
      gap: 30px !important;
    }

    @media (min-width: 768px) {
      .ct-grid-3 {
        grid-template-columns: repeat(2, 1fr) !important;
      }
    }

    @media (min-width: 992px) {
      .ct-grid-3 {
        grid-template-columns: repeat(3, 1fr) !important;
      }
    }

    .ct-grid-4 {
      display: grid !important;
      grid-template-columns: 1fr !important;
      gap: 30px !important;
    }

    @media (min-width: 576px) {
      .ct-grid-4 {
        grid-template-columns: repeat(2, 1fr) !important;
      }
    }

    @media (min-width: 992px) {
      .ct-grid-4 {
        grid-template-columns: repeat(4, 1fr) !important;
      }
    }

    /* Services Section Styling */
    .ct-services-section {
      padding: 96px 0 !important;
      background-color: #ffffff !important;
      position: relative !important;
      overflow: hidden !important;
      z-index: 2;
    }

    .ct-services-section::before {
      content: "";
      position: absolute;
      width: 800px;
      height: 800px;
      background: radial-gradient(circle, rgba(8, 154, 73, 0.035) 0%, rgba(255, 255, 255, 0) 70%);
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      pointer-events: none;
      z-index: -1;
    }

    /* Focus Component Cards */
    .ct-focus-card {
      background-color: #ffffff !important;
      border: 1px solid #f1f5f9 !important;
      border-radius: 28px !important;
      padding: 40px 30px !important;
      text-align: center !important;
      box-shadow: 0 10px 30px -10px rgba(15, 23, 42, 0.04), 0 1px 3px rgba(15, 23, 42, 0.02) !important;
      transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) !important;
      display: flex !important;
      flex-direction: column !important;
      align-items: center !important;
      justify-content: space-between !important;
      min-height: 380px !important;
      text-decoration: none !important;
      z-index: 3;
    }

    .ct-focus-card:hover {
      box-shadow: 0 30px 60px -15px rgba(8, 154, 73, 0.12), 0 10px 25px -5px rgba(8, 154, 73, 0.05) !important;
      border-color: rgba(8, 154, 73, 0.25) !important;
      transform: translateY(-8px) scale(1.01) !important;
    }

    .ct-card-icon-wrap {
      width: 88px !important;
      height: 88px !important;
      background-color: rgba(8, 154, 73, 0.05) !important;
      border-radius: 24px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) !important;
      margin-bottom: 28px !important;
      border: 1px solid rgba(8, 154, 73, 0.08) !important;
    }

    .ct-focus-card:hover .ct-card-icon-wrap {
      background-color: var(--brand-green) !important;
      border-color: var(--brand-green) !important;
      box-shadow: 0 12px 24px rgba(8, 154, 73, 0.25) !important;
      transform: translateY(-2px) rotate(3deg) !important;
    }

    .ct-card-icon-wrap img {
      width: 40px !important;
      height: 40px !important;
      transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }

    .ct-focus-card:hover .ct-card-icon-wrap img {
      transform: scale(1.15) !important;
      filter: brightness(0) invert(1) !important;
    }

    .ct-card-title {
      font-size: 21px !important;
      font-weight: 800 !important;
      color: #0f172a !important;
      font-family: var(--font-outfit) !important;
      margin-bottom: 12px !important;
      transition: var(--transition-smooth) !important;
      letter-spacing: -0.3px !important;
    }

    .ct-focus-card:hover .ct-card-title {
      color: var(--brand-green) !important;
    }

    .ct-card-desc {
      font-size: 14px !important;
      color: #64748b !important;
      line-height: 1.75 !important;
      font-weight: 500 !important;
      margin-bottom: 24px !important;
      padding: 0 10px !important;
    }

    .ct-card-link {
      font-size: 13px !important;
      font-weight: 700 !important;
      color: var(--brand-green) !important;
      display: inline-flex !important;
      align-items: center !important;
      gap: 8px !important;
      padding: 8px 18px !important;
      border-radius: 99px !important;
      background-color: rgba(8, 154, 73, 0.04) !important;
      border: 1px solid rgba(8, 154, 73, 0.06) !important;
      transition: all 0.3s ease !important;
      font-family: var(--font-outfit) !important;
    }

    .ct-focus-card:hover .ct-card-link {
      color: #ffffff !important;
      background-color: var(--brand-green) !important;
      border-color: var(--brand-green) !important;
      box-shadow: 0 8px 20px rgba(8, 154, 73, 0.2) !important;
    }

    .ct-card-link i {
      transition: transform 0.3s ease !important;
      font-size: 10px !important;
    }

    .ct-focus-card:hover .ct-card-link i {
      transform: translateX(4px) !important;
    }

    /* Premium Smart Living Grid */
    .ct-spec-card {
      background-color: #ffffff !important;
      border: 1px solid #f1f5f9 !important;
      border-radius: 32px !important;
      padding: 30px !important;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05) !important;
      transition: var(--transition-smooth) !important;
      display: flex !important;
      flex-direction: column !important;
      align-items: flex-start !important;
      justify-content: space-between !important;
      min-height: 320px !important;
      position: relative !important;
      overflow: hidden !important;
    }

    .ct-spec-card:hover {
      box-shadow: 0 20px 50px rgba(8, 154, 73, 0.08) !important;
      border-color: rgba(8, 154, 73, 0.3) !important;
      transform: translateY(-8px) !important;
    }

    .ct-spec-num {
      position: absolute !important;
      top: 24px !important;
      right: 32px !important;
      font-size: 48px !important;
      font-weight: 900 !important;
      color: rgba(8, 154, 73, 0.05) !important;
      font-family: var(--font-outfit) !important;
      transition: var(--transition-smooth) !important;
      user-select: none !important;
      pointer-events: none !important;
    }

    .ct-spec-card:hover .ct-spec-num {
      color: rgba(8, 154, 73, 0.1) !important;
    }

    .ct-spec-icon-wrap {
      width: 64px !important;
      height: 64px !important;
      background-color: rgba(8, 154, 73, 0.05) !important;
      border-radius: 20px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      color: var(--brand-green) !important;
      font-size: 24px !important;
      transition: var(--transition-smooth) !important;
      margin-bottom: 24px !important;
    }

    .ct-spec-card:hover .ct-spec-icon-wrap {
      background-color: var(--brand-green) !important;
      color: #ffffff !important;
      box-shadow: 0 8px 16px rgba(8, 154, 73, 0.25) !important;
    }

    /* Stepper Component */
    .ct-step-section {
      padding: 96px 0 !important;
      background-color: #f8fafc !important;
      border-top: 1px solid #f1f5f9 !important;
      position: relative !important;
      overflow: hidden !important;
      font-family: var(--font-sans) !important;
    }

    .ct-step-card {
      background-color: #ffffff !important;
      border: 1px solid #f1f5f9 !important;
      border-radius: 32px !important;
      padding: 30px !important;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05) !important;
      transition: var(--transition-smooth) !important;
      display: flex !important;
      flex-direction: column !important;
      align-items: flex-start !important;
      justify-content: space-between !important;
      min-height: 290px !important;
      position: relative !important;
      overflow: hidden !important;
    }

    .ct-step-card:hover {
      box-shadow: 0 20px 50px rgba(8, 154, 73, 0.08) !important;
      border-color: rgba(8, 154, 73, 0.35) !important;
      transform: translateY(-8px) !important;
    }

    .ct-step-num {
      position: absolute !important;
      top: 24px !important;
      right: 32px !important;
      font-size: 48px !important;
      font-weight: 900 !important;
      color: #f1f5f9 !important;
      font-family: var(--font-outfit) !important;
      transition: var(--transition-smooth) !important;
      user-select: none !important;
      pointer-events: none !important;
    }

    .ct-step-card:hover .ct-step-num {
      color: rgba(8, 154, 73, 0.05) !important;
    }

    .ct-step-icon {
      width: 56px !important;
      height: 56px !important;
      background-color: rgba(8, 154, 73, 0.05) !important;
      color: var(--brand-green) !important;
      border-radius: 18px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      font-size: 20px !important;
      transition: var(--transition-smooth) !important;
      margin-bottom: 24px !important;
    }

    .ct-step-card:hover .ct-step-icon {
      background-color: var(--brand-green) !important;
      color: #ffffff !important;
      box-shadow: 0 8px 16px rgba(8, 154, 73, 0.25) !important;
    }

    .ct-step-title {
      font-size: 18px !important;
      font-weight: 700 !important;
      color: #0f172a !important;
      font-family: var(--font-outfit) !important;
      margin-bottom: 10px !important;
      transition: var(--transition-smooth) !important;
    }

    .ct-step-card:hover .ct-step-title {
      color: var(--brand-green) !important;
    }

    .ct-step-desc {
      font-size: 12px !important;
      color: #64748b !important;
      line-height: 1.6 !important;
      font-weight: 500 !important;
      margin-bottom: 20px !important;
    }

    .ct-step-link {
      font-size: 11px !important;
      font-weight: 900 !important;
      text-transform: uppercase !important;
      letter-spacing: 1.5px !important;
      color: var(--brand-green) !important;
      display: inline-flex !important;
      align-items: center !important;
      gap: 6px !important;
      text-decoration: none !important;
      transition: var(--transition-smooth) !important;
    }

    .ct-step-link i {
      font-size: 9px !important;
    }

    /* Testimonials section */
    .ct-testimonial-section {
      padding: 96px 0 !important;
      background: linear-gradient(to bottom right, var(--brand-dark), var(--brand-slate)) !important;
      position: relative !important;
      overflow: hidden !important;
      font-family: var(--font-sans) !important;
    }

    .ct-testimonial-badge {
      font-size: 11px !important;
      font-weight: 900 !important;
      text-transform: uppercase !important;
      letter-spacing: 1.5px !important;
      color: #ffffff !important;
      background-color: rgba(8, 154, 73, 0.2) !important;
      border: 1px solid rgba(8, 154, 73, 0.3) !important;
      padding: 8px 16px !important;
      border-radius: 9999px !important;
      display: inline-block !important;
      font-family: var(--font-outfit) !important;
      margin-bottom: 16px !important;
    }

    .ct-testimonial-title {
      font-size: 32px !important;
      font-weight: 900 !important;
      color: #ffffff !important;
      line-height: 1.25 !important;
      font-family: var(--font-outfit) !important;
      margin-bottom: 16px !important;
    }

    @media (min-width: 768px) {
      .ct-testimonial-title {
        font-size: 48px !important;
      }
    }

    .ct-testimonial-sub {
      font-size: 14px !important;
      color: #94a3b8 !important;
      max-width: 576px !important;
      margin: 0 auto 56px !important;
      line-height: 1.65 !important;
    }

    .ct-testimonial-card {
      background-color: rgba(255, 255, 255, 0.05) !important;
      border: 1px solid rgba(255, 255, 255, 0.1) !important;
      border-radius: 32px !important;
      padding: 30px !important;
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5) !important;
      position: relative !important;
      overflow: hidden !important;
      backdrop-filter: blur(8px) !important;
      transition: var(--transition-smooth) !important;
      height: 100% !important;
    }

    .ct-testimonial-card:hover {
      border-color: rgba(8, 154, 73, 0.3) !important;
    }

    .ct-testimonial-author {
      display: flex !important;
      align-items: center !important;
      gap: 16px !important;
      margin-bottom: 24px !important;
    }

    .ct-testimonial-avatar {
      width: 56px !important;
      height: 56px !important;
      border-radius: 50% !important;
      overflow: hidden !important;
      border: 2px solid var(--brand-green) !important;
    }

    .ct-testimonial-avatar img {
      width: 100% !important;
      height: 100% !important;
      object-fit: cover !important;
    }

    .ct-testimonial-name {
      font-size: 16px !important;
      font-weight: 700 !important;
      color: #ffffff !important;
      font-family: var(--font-outfit) !important;
    }

    .ct-testimonial-role {
      font-size: 12px !important;
      color: #94a3b8 !important;
      font-weight: 500 !important;
      text-transform: uppercase !important;
      letter-spacing: 1.05px !important;
      margin-top: 2px !important;
      display: block !important;
    }

    .ct-stars {
      display: flex !important;
      gap: 4px !important;
      color: #fbbf24 !important;
      font-size: 12px !important;
      margin-bottom: 16px !important;
    }

    .ct-testimonial-quote {
      font-size: 14px !important;
      color: #cbd5e1 !important;
      line-height: 1.75 !important;
      font-style: italic !important;
      font-weight: 500 !important;
    }

    /* Partner Area */
    .ct-cta-section {
      padding: 64px 0 !important;
      background-color: rgba(8, 154, 73, 0.1) !important;
      position: relative !important;
      overflow: hidden !important;
      font-family: var(--font-sans) !important;
    }

    .ct-cta-card {
      background: linear-gradient(to right, var(--brand-slate), var(--brand-dark), var(--brand-slate)) !important;
      border: 1px solid rgba(255, 255, 255, 0.05) !important;
      border-radius: 32px !important;
      padding: 30px !important;
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.3) !important;
      display: flex !important;
      flex-direction: column !important;
      align-items: center !important;
      justify-content: space-between !important;
      gap: 32px !important;
      text-align: center !important;
    }

    @media (min-width: 768px) {
      .ct-cta-card {
        flex-direction: row !important;
        padding: 48px !important;
        text-align: left !important;
      }
    }

    .ct-cta-title {
      font-size: 30px !important;
      font-weight: 900 !important;
      color: #ffffff !important;
      font-family: var(--font-outfit) !important;
      margin-bottom: 12px !important;
    }

    .ct-cta-desc {
      color: #94a3b8 !important;
      font-size: 14px !important;
      max-width: 560px !important;
      line-height: 1.65 !important;
      font-weight: 500 !important;
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
      font-size: 12px !important;
      font-weight: 600 !important;
    }

    .ct-copyright-inner {
      display: flex !important;
      flex-direction: column !important;
      align-items: center !important;
      justify-content: space-between !important;
      gap: 16px !important;
    }

    @media (min-width: 768px) {
      .ct-copyright-inner {
        flex-direction: row !important;
        gap: 0 !important;
      }
    }

    .ct-copyright-links {
      display: flex !important;
      gap: 24px !important;
    }

    .ct-copyright-links a {
      color: #64748b !important;
      text-decoration: none !important;
      transition: var(--transition-smooth) !important;
    }

    .ct-copyright-links a:hover {
      color: var(--brand-green) !important;
    }

    /* Floating Keyframe animations */
    @keyframes float-slow {

      0%,
      100% {
        transform: translateY(0px) rotate(0deg);
      }

      50% {
        transform: translateY(-12px) rotate(1deg);
      }
    }

    @keyframes float-fast {

      0%,
      100% {
        transform: translateY(0px) rotate(0deg);
      }

      50% {
        transform: translateY(-8px) rotate(-1deg);
      }
    }

    .animate-float-slow {
      animation: float-slow 7s ease-in-out infinite;
    }

    .animate-float-fast {
      animation: float-fast 5s ease-in-out infinite;
    }
  </style>
</head>

<body>
  <div class="body-wrapper">

    <!-- HEADER AREA START (header-5) -->
    <header class="ltn__header-area ltn__header-logo-and-mobile-menu-in-mobile ltn__header-logo-and-mobile-menu ltn__header-transparent">
      <!-- ltn__header-top-area start -->
      <div class="ct-top-bar">
        <div class="container">
          <div class="ct-top-bar-inner">
            <div class="ltn__top-bar-menu">
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
                  <!-- <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li> -->
                  <li><a href="https://x.com/ct_hostel" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="https://www.instagram.com/ct_hostel/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                  <!-- <li><a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a></li> -->
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
                        <a href="#about" class="ct-nav-link">About</a>
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
              <li><a href="#about">About</a></li>
              <li><a href="/faq">FAQ</a></li>
              <li><a href="/contactus">Contact Us</a></li>
              <li><a href="/login">Login</a></li>
            </ul>
          </div>
        </div>

        <div style="display: flex; flex-direction: column; gap: 24px;">
          <div class="ltn__utilize-buttons" style="border-t: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px;">
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
            <!-- <a href="#" style="color: rgba(255, 255, 255, 0.6); font-size: 18px;"><i class="fab fa-facebook-f"></i></a> -->
            <a href="https://x.com/ct_hostel" style="color: rgba(255, 255, 255, 0.6); font-size: 18px;"><i class="fab fa-twitter"></i></a>
            <!-- <a href="#" style="color: rgba(255, 255, 255, 0.6); font-size: 18px;"><i class="fab fa-linkedin"></i></a> -->
            <a href="https://www.instagram.com/ct_hostel/" style="color: rgba(255, 255, 255, 0.6); font-size: 18px;"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- SLIDER AREA START (slider-1) -->
    <div class="ct-hero-section" style="background-image: url('{{ asset('myimages/cbanner.jpg') }}');">
      <div class="ct-hero-overlay"></div>

      <!-- Glowing glassmorphic blobs behind the content -->
      <div class="ct-hero-glow-blob-1"></div>
      <div class="ct-hero-glow-blob-2"></div>

      <div class="container ct-hero-container">
        <!-- Mini Hero Header for Mobile -->
        <div class="ct-mobile-hero-header">
          <h1 class="ct-mobile-title">
            Find Your Perfect Hostel <br>
            <span style="color: #4ade80;">Without the Stress.</span>
          </h1>
          <p class="ct-mobile-desc">
            CTHostel connects you with verified accommodations, compatible roommates, and local repair pros in one seamless search.
          </p>
        </div>

        <div class="ct-hero-grid">

          <!-- Left Column (Hidden on mobile) -->
          <div class="ct-hero-content-left">
            <h1 class="ct-hero-title">
              Find Your Perfect Hostel <br>
              <span style="color: var(--brand-green);">Without the Stress.</span>
            </h1>
            <p class="ct-hero-text">
              CTHostel connects you with verified student accommodations, compatible roommates, and reliable home utility professionals in one seamless search.
            </p>

            <div class="ct-hero-buttons">
              <a href="#about" class="ct-btn-primary">
                Explore Platform
              </a>
              <a href="/register" class="ct-btn-secondary">
                Register As Agent/Landlord
              </a>
            </div>
          </div>

          <!-- Right Column (frosted glass panel) -->
          <div>
            <div class="ct-search-card">
              <div class="ct-search-card-inner">
                <h3 class="ct-search-card-title">Accommodation Search</h3>
                <p class="ct-search-card-sub">Locate verified hostels or services near your school area</p>

                <div class="ltn__car-dealer-form-tab">
                  <div class="ct-tab-nav">
                    <a class="active" data-bs-toggle="tab" href="#ltn__form_tab_1_1">
                      Get Hostel
                    </a>
                    <a class="" data-bs-toggle="tab" href="#ltn__form_tab_1_2">
                      Hire Pro <span class="badge" style="background-color: #f59e0b; font-size: 0.6rem; padding: 3px 6px; margin-left: 4px; vertical-align: middle; border-radius: 4px;">Soon</span>
                    </a>
                  </div>

                  <div class="tab-content">
                    <!-- Tab 1: Get Hostel -->
                    <div class="tab-pane fade active show" id="ltn__form_tab_1_1">
                      <form action="{{ route('cthome') }}" style="display: flex; flex-direction: column; gap: 20px;">
                        <div>
                          <label class="ct-search-label">Select Institution</label>
                          <select required class="nice-select ct-custom-select" name="school_id" tabindex="0">
                            <option value="">Choose your school...</option>
                            @foreach($schools as $school)
                            <option value="{{$school->id}}">{{$school->name}}</option>
                            @endforeach
                          </select>
                        </div>

                        <button type="submit" class="ct-search-submit">
                          <i class="fas fa-search" style="margin-right: 6px;"></i> Search Hostels
                        </button>
                      </form>
                    </div>

                    <!-- Tab 2: Hire Pro -->
                    <div class="tab-pane fade" id="ltn__form_tab_1_2">
                      <div class="text-center py-4" style="background: rgba(255,255,255,0.5); border-radius: 12px; border: 1px dashed rgba(0,0,0,0.1);">
                        <i class="fas fa-hard-hat mb-3" style="font-size: 2.5rem; color: #10b981;"></i>
                        <h4 style="color: #1e293b; font-weight: 700; font-size: 1.2rem; margin-bottom: 8px;">Coming Soon</h4>
                        <p style="color: #64748b; font-size: 0.95rem; margin-bottom: 0;">We are preparing verified utility professionals for your convenience. Stay tuned!</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Mobile-Only Register CTA Prompt -->
            <div class="ct-mobile-hero-reg-btn-wrap">
              <span style="color: rgba(255, 255, 255, 0.6); font-size: 13px; font-weight: 500;">Are you a landlord or agent?</span>
              <a href="/register" style="color: #4ade80; text-decoration: underline; font-weight: 700; font-size: 13px; margin-left: 4px;">
                Register Here &rarr;
              </a>
            </div>
          </div>

        </div>
      </div>


    </div>
    <!-- SLIDER AREA END -->

    <!-- ABOUT US AREA START -->
    <div id="about" class="ct-about-section">
      <div class="container">
        <div class="row align-items-center">
          <!-- Left Column: Copy -->
          <div class="col-lg-6" style="margin-bottom: 40px; margin-top: 0;">
            <span class="ct-section-badge">About CTHostel</span>
            <h2 class="ct-section-title">
              A Housing Solution <br class="d-none d-md-block"> That Truly Matters
            </h2>
            <div class="ct-about-text">
              <p>
                CT Hostel is a real estate technology brand focused on simplifying the tertiary student hostel acquisition process in Nigeria, while prioritizing student comfort and safety.
              </p>
              <p>
                We connect students looking for accommodation with verified, affordable housing. We have a robust network of agents, established agencies, and students registered on our platform—each with a custom page showing verified listings with specifications.
              </p>
            </div>
            <div>
              <a href="/register" class="ct-btn-primary">
                Become An Agent <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
              </a>
            </div>
          </div>

          <!-- Right Column: Stats Card -->
          <div class="col-lg-6">
            <div class="ct-stats-card">
              <div class="ct-stats-badge">Live Platform Metrics</div>
              <h3>Nigeria's Leading Student Housing Network</h3>
              <p>We leverage technology to simplify off-campus housing, roommate matchmaking, and utility services.</p>

              <div class="ct-stats-grid">
                <div class="ct-stat-item">
                  <span class="ct-stat-num">10+</span>
                  <span class="ct-stat-label">Institutions Covered</span>
                </div>
                <div class="ct-stat-item">
                  <span class="ct-stat-num">10k+</span>
                  <span class="ct-stat-label">Students Served</span>
                </div>
                <div class="ct-stat-item">
                  <span class="ct-stat-num">200+</span>
                  <span class="ct-stat-label">Verified Agents</span>
                </div>
                <div class="ct-stat-item">
                  <span class="ct-stat-num">24/7</span>
                  <span class="ct-stat-label">Utility Support</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ABOUT US AREA END -->

    <!-- FEATURE AREA START ( Our Main Focus ) -->
    <div class="ct-services-section">
      <div class="container">
        <!-- Title Block -->
        <div style="text-align: center; max-width: 600px; margin: 0 auto 56px;">
          <span class="ct-section-badge">Our Main Focus</span>
          <h2 class="ct-section-title" style="text-align: center; margin-bottom: 16px;">Comprehensive <span style="color: var(--brand-green);">Services</span></h2>
          <p style="font-size: 15px; color: #64748b; font-weight: 500; line-height: 1.6;">
            We provide a unified ecosystem designed to solve off-campus housing challenges for both students and agents.
          </p>
        </div>

        <!-- Grid Block -->
        <div class="ct-grid-3">
          <!-- Card 1: Hostel Accommodation -->
          <a class="ct-focus-card" href="#home">
            <div class="ct-card-icon-wrap">
              <img src="{{ asset('welcomehome/img/bunk-bed.png')}}" alt="Hostel Icon">
            </div>
            <div>
              <h3 class="ct-card-title">Hostel Accommodation</h3>
              <p class="ct-card-desc">We provide the best hostel accommodation service at an affordable rate with zero physical stress.</p>
            </div>
            <span class="ct-card-link">Get a hostel <i class="fas fa-arrow-right"></i></span>
          </a>

          <!-- Card 2: Hostel Advertisement -->
          <a class="ct-focus-card" href="/register">
            <div class="ct-card-icon-wrap">
              <img src="{{ asset('welcomehome/img/marketing.png')}}" alt="Marketing Icon">
            </div>
            <div>
              <h3 class="ct-card-title">Hostel Advertisement</h3>
              <p class="ct-card-desc">We give agents a free platform to showcase their hostels and reach thousands of students annually.</p>
            </div>
            <span class="ct-card-link">Advertise your hostel <i class="fas fa-arrow-right"></i></span>
          </a>

          <!-- Card 3: Getting Roommates -->
          <a class="ct-focus-card" href="/myroomie">
            <div class="ct-card-icon-wrap">
              <img src="{{ asset('welcomehome/img/student.png')}}" alt="Student Icon">
            </div>
            <div>
              <h3 class="ct-card-title">Getting Roommates</h3>
              <p class="ct-card-desc">We match students with compatible roommates based on department, gender, level, and co-living conditions.</p>
            </div>
            <span class="ct-card-link">Get A Roommate <i class="fas fa-arrow-right"></i></span>
          </a>
        </div>
      </div>
    </div>
    <!-- FEATURE AREA END -->

    <!-- MODERN FEATURES AREA START -->
    <div style="padding: 96px 0; background: linear-gradient(to bottom, #f8fafc, #ffffff); position: relative; overflow: hidden;">
      <div class="container">
        <!-- Title Block -->
        <div style="text-align: center; max-width: 600px; margin: 0 auto 56px;">
          <span class="ct-section-badge">Premium Features</span>
          <h2 class="ct-section-title" style="text-align: center; margin-bottom: 16px;">The Smarter Way to Live Off-Campus</h2>
          <p style="font-size: 15px; color: #64748b; font-weight: 500; line-height: 1.6;">
            CTHostel streamlines every aspect of your off-campus college life. From finding a cozy hostel to choosing roommates and getting repair help.
          </p>
        </div>

        <!-- Grid Block -->
        <div class="ct-grid-3">
          <!-- Card 1: Verified Hostels -->
          <div class="ct-spec-card">
            <span class="ct-spec-num">01</span>
            <div class="ct-spec-icon-wrap">
              <i class="flaticon-house"></i>
            </div>
            <div>
              <h3 class="ct-card-title">Verified Hostels</h3>
              <p class="ct-card-desc">Explore high-quality, verified off-campus student accommodation. Skip the physical search stress and find a home that fits your budget.</p>
            </div>
            <a href="#home" class="ct-card-link">Start Searching <i class="fas fa-arrow-right"></i></a>
          </div>

          <!-- Card 2: Roommate Matching -->
          <div class="ct-spec-card">
            <span class="ct-spec-num">02</span>
            <div class="ct-spec-icon-wrap">
              <i class="flaticon-user"></i>
            </div>
            <div>
              <h3 class="ct-card-title">Roommate Matching</h3>
              <p class="ct-card-desc">Find compatible roommates from your same department or level. Match based on gender, academic goals, and clean-living habits.</p>
            </div>
            <a href="/myroomie" class="ct-card-link">Match Roommates <i class="fas fa-arrow-right"></i></a>
          </div>

          <!-- Card 3: On-Demand Technicians -->
          <div class="ct-spec-card">
            <span class="ct-spec-num">03</span>
            <div class="ct-spec-icon-wrap">
              <i class="fas fa-wrench"></i>
            </div>
            <div>
              <h3 class="ct-card-title">On-Demand Technicians</h3>
              <p class="ct-card-desc">Connect with verified campus-adjacent plumbers, electricians, mechanics, and laptop engineers to resolve utility issues instantly.</p>
            </div>
            <a href="/services" class="ct-card-link">Hire a Pro <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- MODERN FEATURES AREA END -->

    <!-- BE AN AGENT STEPPER START -->
    <div class="ct-step-section">
      <div class="container">
        <!-- Title Block -->
        <div style="text-align: center; max-width: 600px; margin: 0 auto 56px;">
          <span class="ct-section-badge">Be An Agent</span>
          <h2 class="ct-section-title" style="text-align: center; margin-bottom: 16px;">Become an Agent in 4 Simple Steps</h2>
          <p style="font-size: 15px; color: #64748b; font-weight: 500; line-height: 1.6;">
            It's simple, fully automated, and takes less than 5 minutes to start uploading hostels and reaching thousands of students.
          </p>
        </div>

        <!-- Step Cards Grid -->
        <div class="ct-grid-4">
          <!-- Step 1 -->
          <div class="ct-step-card">
            <span class="ct-step-num">01</span>
            <div class="ct-step-icon">
              <i class="fas fa-user-plus"></i>
            </div>
            <div>
              <h3 class="ct-step-title">Registration</h3>
              <p class="ct-step-desc">To become an agent, you can register by providing your name, email address, phone number and your institution.</p>
            </div>
            <a href="/register" class="ct-step-link">Sign Up Now <i class="fas fa-chevron-right"></i></a>
          </div>

          <!-- Step 2 -->
          <div class="ct-step-card">
            <span class="ct-step-num">02</span>
            <div class="ct-step-icon">
              <i class="fas fa-bell"></i>
            </div>
            <div>
              <h3 class="ct-step-title">Get Notified</h3>
              <p class="ct-step-desc">You will receive an email notification immediately, which contains your dashboard URL and your personal webpage link.</p>
            </div>
            <a href="/register" class="ct-step-link">Check Details <i class="fas fa-chevron-right"></i></a>
          </div>

          <!-- Step 3 -->
          <div class="ct-step-card">
            <span class="ct-step-num">03</span>
            <div class="ct-step-icon">
              <i class="fas fa-sign-in-alt"></i>
            </div>
            <div>
              <h3 class="ct-step-title">Login To Dashboard</h3>
              <p class="ct-step-desc">You can then proceed to login to your dashboard where you will be able to post unlimited hostels easily.</p>
            </div>
            <a href="/login" class="ct-step-link">Sign In <i class="fas fa-chevron-right"></i></a>
          </div>

          <!-- Step 4 -->
          <div class="ct-step-card">
            <span class="ct-step-num">04</span>
            <div class="ct-step-icon">
              <i class="fas fa-upload"></i>
            </div>
            <div>
              <h3 class="ct-step-title">Post Hostel</h3>
              <p class="ct-step-desc">Post hostels to the database and check your email inbox regularly for student requests and bookings.</p>
            </div>
            <a href="/register" class="ct-step-link">Upload Hostel <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- BE AN AGENT STEPPER END -->

    <!-- TESTIMONIAL AREA START -->
    <div class="ct-testimonial-section">
      <div class="container">
        <div style="text-align: center; margin-bottom: 56px;">
          <span class="ct-testimonial-badge">Testimonials</span>
          <h2 class="ct-testimonial-title" style="text-align: center;">What Our Community Says</h2>
          <p class="ct-testimonial-sub">
            Hear from students who found their ideal campus sanctuary and agents who scaled their housing business on CTHostel.
          </p>
        </div>

        <div class="row ltn__testimonial-slider-6-active slick-arrow-3">
          <!-- Card 1 -->
          <div class="col-lg-4">
            <div class="ct-testimonial-card">
              <div class="ct-testimonial-author">
                <div class="ct-testimonial-avatar">
                  <img src="{{ asset('welcomehome/img/testimonial.png')}}" alt="User Avatar">
                </div>
                <div>
                  <h5 class="ct-testimonial-name">Ibrowas Properties</h5>
                  <span class="ct-testimonial-role">Hostel Agent</span>
                </div>
              </div>
              <div class="ct-stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </div>
              <p class="ct-testimonial-quote">
                "CTHostel is a very good platform to advertise hostels, I was able to get my hostel filled up within a week after upload. I must commend the hostel advertisement strategy being used by CTHostel."
              </p>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="col-lg-4">
            <div class="ct-testimonial-card">
              <div class="ct-testimonial-author">
                <div class="ct-testimonial-avatar">
                  <img src="{{ asset('welcomehome/img/testimonial.png')}}" alt="User Avatar">
                </div>
                <div>
                  <h5 class="ct-testimonial-name">Boluwatife Sotonwa</h5>
                  <span class="ct-testimonial-role">Student, COLANIM</span>
                </div>
              </div>
              <div class="ct-stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </div>
              <p class="ct-testimonial-quote">
                "I love the fact that I can filter hostels in accordance to the amount I have, and I will get to see all hostels at that price, which gives me an opportunity to choose from a wide range of options."
              </p>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="col-lg-4">
            <div class="ct-testimonial-card">
              <div class="ct-testimonial-author">
                <div class="ct-testimonial-avatar">
                  <img src="{{ asset('welcomehome/img/testimonial.png')}}" alt="User Avatar">
                </div>
                <div>
                  <h5 class="ct-testimonial-name">Adam Joseph</h5>
                  <span class="ct-testimonial-role">Student</span>
                </div>
              </div>
              <div class="ct-stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </div>
              <p class="ct-testimonial-quote">
                "I was able to get a roommate within 24 hours after getting my hostel from CTHostel."
              </p>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="col-lg-4">
            <div class="ct-testimonial-card">
              <div class="ct-testimonial-author">
                <div class="ct-testimonial-avatar">
                  <img src="{{ asset('welcomehome/img/testimonial.png')}}" alt="User Avatar">
                </div>
                <div>
                  <h5 class="ct-testimonial-name">Adesanya Bisola</h5>
                  <span class="ct-testimonial-role">Student</span>
                </div>
              </div>
              <div class="ct-stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </div>
              <p class="ct-testimonial-quote">
                "I have been having insecurity issues before getting to know about CTHostel. Thank God for CTHostel! I was able to see better hostels for the same price."
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- TESTIMONIAL AREA END -->

    <!-- CALL TO ACTION START -->
    <div class="ct-cta-section">
      <div class="container">
        <div class="ct-cta-card">
          <div>
            <h2 class="ct-cta-title">Partner With Us!</h2>
            <p class="ct-cta-desc">
              Join the movement to simplify off-campus housing. Partner with us today and let's scale CTHostel together.
            </p>
          </div>
          <div>
            <a class="ct-btn-primary" href="https://wa.me/2349058744473?text=Hi%2C%20my%20name%20is%20%28(Input%20your%20name)%0aI%20will%20like%20to%20partner%20with%20CTHostel%20Management.%0a(Input%20other%20message%20here)%20">
              Partner Now <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- CALL TO ACTION END -->

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
              <!-- <a href="#" title="Linkedin" class="ct-footer-social-btn"><i class="fab fa-linkedin"></i></a> -->
              <!-- <a href="#" title="Youtube" class="ct-footer-social-btn"><i class="fab fa-youtube"></i></a> -->
            </div>
          </div>

          <!-- Widget 2: Services -->
          <div>
            <h4 class="ct-footer-title">Services</h4>
            <ul class="ct-footer-links">
              <li><a href="#"><i class="fas fa-chevron-right"></i> Hostel Accommodation</a></li>
              <li><a href="/register"><i class="fas fa-chevron-right"></i> Agent Portal</a></li>
              <!-- <li><a href="/myroomie"><i class="fas fa-chevron-right"></i> Roommate Pairing</a></li>
              <li><a href="/services"><i class="fas fa-chevron-right"></i> Technician Services</a></li> -->
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

      <!-- Copyright Area -->
      <div class="ct-copyright-bar">
        <div class="container">
          <div class="ct-copyright-inner">
            <p>All Rights Reserved &copy; CTHostel <span class="current-year"></span>. Powered by <a href="https://thecaretech.org" style="color: #cbd5e1; text-decoration: none;">CareTech</a></p>
            <div class="ct-copyright-links">
              <a href="#">Terms & Conditions</a>
              <a href="#">Privacy Policy</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- FOOTER AREA END -->

    <!-- MODAL AREA START (Quick View Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
      <div class="modal fade" id="quick_view_modal" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="ltn__quick-view-modal-inner">
                <div class="modal-product-item">
                  <div class="row">
                    <div class="col-lg-6 col-12">
                      <div class="modal-product-img">
                        <img src="img/product/4.png" alt="#">
                      </div>
                    </div>
                    <div class="col-lg-6 col-12">
                      <div class="modal-product-info">
                        <div class="product-ratting">
                          <ul style="display: flex; gap: 4px; list-style: none; padding: 0;">
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                            <li><a href="#"><i class="far fa-star"></i></a></li>
                            <li class="review-total" style="margin-left: 8px;"> <a href="#"> ( 95 Reviews )</a></li>
                          </ul>
                        </div>
                        <h3>3 Rooms Manhattan</h3>
                        <div class="product-price">
                          <span>$149.00</span>
                          <del>$165.00</del>
                        </div>
                        <div class="modal-product-meta ltn__product-details-menu-1">
                          <ul>
                            <li>
                              <strong>Categories:</strong>
                              <span>
                                <a href="#">Parts</a>
                                <a href="#">Car</a>
                                <a href="#">Seat</a>
                                <a href="#">Cover</a>
                              </span>
                            </li>
                          </ul>
                        </div>
                        <div class="ltn__product-details-menu-2">
                          <ul>
                            <li>
                              <div class="cart-plus-minus">
                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                              </div>
                            </li>
                            <li>
                              <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                <i class="fas fa-shopping-cart"></i>
                                <span>ADD TO CART</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="ltn__product-details-menu-3">
                          <ul>
                            <li>
                              <a href="#" class="" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                <i class="far fa-heart"></i>
                                <span>Add to Wishlist</span>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                <i class="fas fa-exchange-alt"></i>
                                <span>Compare</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <hr>
                        <div class="ltn__social-media">
                          <ul>
                            <li>Share:</li>
                            <!-- <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li> -->
                            <li><a href="https://x.com/ct_hostel" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <!-- <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li> -->
                            <li><a href="https://www.instagram.com/ct_hostel/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Add To Cart Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
      <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="ltn__quick-view-modal-inner">
                <div class="modal-product-item">
                  <div class="row">
                    <div class="col-12">
                      <div class="modal-product-img">
                        <img src="img/product/1.png" alt="#">
                      </div>
                      <div class="modal-product-info">
                        <h5><a href="product-details.html">3 Rooms Manhattan</a></h5>
                        <p class="added-cart"><i class="fa fa-check-circle"></i> Successfully added to your Cart</p>
                        <div class="btn-wrapper">
                          <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                          <a href="checkout.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                        </div>
                      </div>
                      <!-- additional-info -->
                      <div class="additional-info d-none">
                        <p>We want to give you <b>10% discount</b> for your first order, <br> Use discount code at checkout</p>
                        <div class="payment-method">
                          <img src="img/icons/payment.png" alt="#">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Wishlist Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
      <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="ltn__quick-view-modal-inner">
                <div class="modal-product-item">
                  <div class="row">
                    <div class="col-12">
                      <div class="modal-product-img">
                        <img src="img/product/7.png" alt="#">
                      </div>
                      <div class="modal-product-info">
                        <h5><a href="product-details.html">3 Rooms Manhattan</a></h5>
                        <p class="added-cart"><i class="fa fa-check-circle"></i> Successfully added to your Wishlist</p>
                        <div class="btn-wrapper">
                          <a href="wishlist.html" class="theme-btn-1 btn btn-effect-1">View Wishlist</a>
                        </div>
                      </div>
                      <!-- additional-info -->
                      <div class="additional-info d-none">
                        <p>We want to give you <b>10% discount</b> for your first order, <br> Use discount code at checkout</p>
                        <div class="payment-method">
                          <img src="img/icons/payment.png" alt="#">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL AREA END -->

  </div>
  <!-- Body main wrapper end -->

  <!-- preloader area start -->
  <div class="preloader d-none" id="preloader">
    <div class="preloader-inner">
      <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
      </div>
    </div>
  </div>
  <!-- preloader area end -->

  <!-- All JS Plugins -->
  <script src="{{ asset('welcomehome/js/plugins.js')}}"></script>
  <!-- Main JS -->
  <script src="{{ asset('welcomehome/js/main.js')}}"></script>

  <!-- Manual Tab Toggling Override -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const tabs = document.querySelectorAll('.ct-tab-nav a');

      tabs.forEach(tab => {
        tab.addEventListener('click', function(e) {
          e.preventDefault();

          // Remove active classes
          tabs.forEach(t => t.classList.remove('active'));
          this.classList.add('active');

          // Toggle active and show classes on tab panes
          const targetSelector = this.getAttribute('href');
          const panes = document.querySelectorAll('.tab-content .tab-pane');

          panes.forEach(pane => {
            pane.classList.remove('active', 'show');
          });

          const targetPane = document.querySelector(targetSelector);
          if (targetPane) {
            targetPane.classList.add('active', 'show');
          }
        });
      });
    });
  </script>

</body>

</html>