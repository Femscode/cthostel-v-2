<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <title>CTHostel | FAQ</title>
    <meta name="description" content="Frequently Asked Questions about CTHostel off-campus student accommodation" />
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

        /* FAQ Hero Style */
        .ct-faq-hero {
            background-color: var(--brand-dark) !important;
            padding: 96px 0 !important;
            position: relative !important;
            overflow: hidden !important;
            text-align: center !important;
            z-index: 10;
        }

        .ct-faq-hero-overlay {
            position: absolute !important;
            inset: 0 !important;
            background-color: rgba(4, 17, 19, 0.65) !important;
            backdrop-filter: blur(1px) !important;
            z-index: 1;
        }

        .ct-faq-hero-container {
            position: relative !important;
            z-index: 5 !important;
        }

        .ct-faq-glow-blob-1 {
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

        .ct-faq-glow-blob-2 {
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

        .ct-faq-hero h1 {
            font-size: 36px !important;
            color: #ffffff !important;
            font-weight: 900 !important;
            font-family: var(--font-outfit) !important;
            margin-bottom: 16px !important;
            letter-spacing: -1px !important;
        }

        @media (min-width: 768px) {
            .ct-faq-hero h1 {
                font-size: 56px !important;
            }
        }

        .ct-faq-hero p {
            color: #94a3b8 !important;
            font-size: 15px !important;
            font-weight: 500 !important;
            max-width: 600px !important;
            margin: 0 auto 36px !important;
            line-height: 1.65 !important;
        }

        /* FAQ Search Widget */
        .ct-faq-search-wrap {
            position: relative !important;
            max-width: 540px !important;
            margin: 0 auto !important;
            width: 100% !important;
        }

        .ct-faq-search-input {
            width: 100% !important;
            height: 60px !important;
            background-color: rgba(255, 255, 255, 0.05) !important;
            border: 1px solid rgba(255, 255, 255, 0.15) !important;
            border-radius: 99px !important;
            padding-left: 28px !important;
            padding-right: 60px !important;
            color: #ffffff !important;
            font-size: 16px !important;
            font-weight: 600 !important;
            outline: none !important;
            transition: var(--transition-smooth) !important;
            font-family: var(--font-sans) !important;
            backdrop-filter: blur(8px) !important;
        }

        .ct-faq-search-input:focus {
            border-color: var(--brand-green) !important;
            background-color: rgba(255, 255, 255, 0.08) !important;
            box-shadow: 0 0 0 5px rgba(8, 154, 73, 0.15) !important;
        }

        .ct-faq-search-icon {
            position: absolute !important;
            right: 24px !important;
            top: 50% !important;
            transform: translateY(-50%) !important;
            color: var(--brand-green) !important;
            font-size: 18px !important;
            pointer-events: none !important;
        }

        /* Layout Grids for FAQ Main Area */
        .ct-faq-section {
            padding: 96px 0 !important;
            background-color: #ffffff !important;
            position: relative !important;
        }

        .ct-faq-layout {
            display: grid !important;
            grid-template-columns: 1fr !important;
            gap: 48px !important;
        }

        @media (min-width: 992px) {
            .ct-faq-layout {
                grid-template-columns: 320px 1fr !important;
            }
        }

        /* FAQ Sidebar Categories */
        .ct-faq-sidebar {
            position: relative !important;
        }

        @media (min-width: 992px) {
            .ct-faq-sidebar-sticky {
                position: sticky !important;
                top: 100px !important;
            }
        }

        .ct-faq-categories-card {
            background-color: #ffffff !important;
            border: 1px solid #f1f5f9 !important;
            border-radius: 28px !important;
            padding: 24px !important;
            box-shadow: 0 10px 30px -10px rgba(15, 23, 42, 0.03), 0 1px 3px rgba(15, 23, 42, 0.02) !important;
        }

        .ct-faq-sidebar h3 {
            font-size: 18px !important;
            font-weight: 800 !important;
            color: #0f172a !important;
            margin-bottom: 20px !important;
            border-left: 4px solid var(--brand-green) !important;
            padding-left: 12px !important;
            font-family: var(--font-outfit) !important;
        }

        .ct-faq-categories-list {
            display: flex !important;
            flex-direction: column !important;
            gap: 8px !important;
            list-style: none !important;
            padding: 0 !important;
            margin: 0 !important;
        }

        .ct-faq-cat-btn {
            display: flex !important;
            justify-content: space-between !important;
            align-items: center !important;
            width: 100% !important;
            border: none !important;
            background: transparent !important;
            padding: 14px 18px !important;
            border-radius: 16px !important;
            font-weight: 700 !important;
            font-family: var(--font-outfit) !important;
            color: #64748b !important;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
            text-align: left !important;
            cursor: pointer !important;
            outline: none !important;
        }

        .ct-faq-cat-btn:hover {
            color: var(--brand-green) !important;
            background-color: rgba(8, 154, 73, 0.03) !important;
        }

        .ct-faq-cat-btn.active {
            background-color: rgba(8, 154, 73, 0.08) !important;
            color: var(--brand-green) !important;
        }

        .ct-faq-cat-badge {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 24px !important;
            height: 24px !important;
            border-radius: 50% !important;
            background-color: #f1f5f9 !important;
            font-size: 11px !important;
            font-weight: 700 !important;
            color: #64748b !important;
            transition: all 0.3s ease !important;
        }

        .ct-faq-cat-btn.active .ct-faq-cat-badge {
            background-color: var(--brand-green) !important;
            color: #ffffff !important;
        }

        /* Accordion Styles */
        .ct-faq-accordion {
            display: flex !important;
            flex-direction: column !important;
            gap: 16px !important;
        }

        .ct-faq-item {
            background-color: #ffffff !important;
            border: 1px solid #f1f5f9 !important;
            border-radius: 20px !important;
            padding: 24px !important;
            box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.01) !important;
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
        }

        .ct-faq-item:hover {
            border-color: rgba(8, 154, 73, 0.2) !important;
            box-shadow: 0 12px 30px -10px rgba(8, 154, 73, 0.04) !important;
            transform: translateY(-2px) !important;
        }

        .ct-faq-item.active {
            border-color: var(--brand-green) !important;
            box-shadow: 0 15px 35px -10px rgba(8, 154, 73, 0.08) !important;
            background-color: rgba(8, 154, 73, 0.005) !important;
        }

        .ct-faq-question-wrap {
            display: flex !important;
            justify-content: space-between !important;
            align-items: center !important;
            cursor: pointer !important;
            gap: 16px !important;
        }

        .ct-faq-question {
            font-size: 17px !important;
            font-weight: 800 !important;
            color: #0f172a !important;
            font-family: var(--font-outfit) !important;
            margin: 0 !important;
            line-height: 1.4 !important;
            letter-spacing: -0.2px !important;
            transition: color 0.3s ease !important;
        }

        .ct-faq-item:hover .ct-faq-question {
            color: var(--brand-green) !important;
        }

        .ct-faq-item.active .ct-faq-question {
            color: var(--brand-green) !important;
        }

        .ct-faq-toggle-icon {
            width: 36px !important;
            height: 36px !important;
            border-radius: 50% !important;
            background-color: #f8fafc !important;
            color: #64748b !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 12px !important;
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
            flex-shrink: 0 !important;
        }

        .ct-faq-item:hover .ct-faq-toggle-icon {
            background-color: rgba(8, 154, 73, 0.05) !important;
            color: var(--brand-green) !important;
        }

        .ct-faq-item.active .ct-faq-toggle-icon {
            background-color: var(--brand-green) !important;
            color: #ffffff !important;
            transform: rotate(45deg) !important;
        }

        /* CSS Grid auto-height transition */
        .ct-faq-answer-container {
            display: grid !important;
            grid-template-rows: 0fr !important;
            transition: grid-template-rows 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
            overflow: hidden !important;
        }

        .ct-faq-item.active .ct-faq-answer-container {
            grid-template-rows: 1fr !important;
        }

        .ct-faq-answer-inner {
            min-height: 0 !important;
        }

        .ct-faq-answer {
            font-size: 14.5px !important;
            color: #475569 !important;
            line-height: 1.75 !important;
            font-weight: 500 !important;
            padding-top: 16px !important;
            margin: 0 !important;
        }

        /* Search Not Found State */
        .ct-faq-no-results {
            text-align: center !important;
            padding: 48px 24px !important;
            background-color: #f8fafc !important;
            border-radius: 24px !important;
            border: 1px dashed #cbd5e1 !important;
            display: none !important;
        }

        .ct-faq-no-results i {
            font-size: 40px !important;
            color: #94a3b8 !important;
            margin-bottom: 16px !important;
        }

        .ct-faq-no-results h4 {
            font-size: 18px !important;
            font-weight: 800 !important;
            color: #334155 !important;
            margin-bottom: 8px !important;
        }

        .ct-faq-no-results p {
            font-size: 14px !important;
            color: #64748b !important;
            margin: 0 !important;
        }

        /* Call To Action Banner styling */
        .ct-cta-section {
            padding: 80px 0 0 !important;
            background-color: #ffffff !important;
        }

        .ct-cta-card {
            background: linear-gradient(to right, var(--brand-dark), var(--brand-slate)) !important;
            border-radius: 32px !important;
            padding: 48px 40px !important;
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            justify-content: space-between !important;
            gap: 32px !important;
            text-align: center !important;
            position: relative !important;
            overflow: hidden !important;
        }

        @media (min-width: 992px) {
            .ct-cta-card {
                flex-direction: row !important;
                text-align: left !important;
                padding: 56px 64px !important;
            }
        }

        .ct-cta-title {
            font-size: 28px !important;
            font-weight: 900 !important;
            color: #ffffff !important;
            margin-bottom: 12px !important;
            font-family: var(--font-outfit) !important;
        }

        @media (min-width: 768px) {
            .ct-cta-title {
                font-size: 36px !important;
            }
        }

        .ct-cta-desc {
            font-size: 15px !important;
            color: #94a3b8 !important;
            font-weight: 500 !important;
            margin: 0 !important;
            max-width: 560px !important;
            line-height: 1.65 !important;
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
                                                <a href="/#contactus" class="ct-nav-link">Contact Us</a>
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
                            <li><a href="/cthostel#contactus">Contact Us</a></li>
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

        <!-- FAQ HERO START -->
        <div class="ct-faq-hero">
            <div class="ct-faq-glow-blob-1"></div>
            <div class="ct-faq-glow-blob-2"></div>
            <div class="ct-faq-hero-overlay"></div>
            <div class="container ct-faq-hero-container">
                <h1>Frequently Asked <span style="color: var(--brand-green);">Questions</span></h1>
                <p>Find answers to common queries about off-campus student accommodation bookings, verified landlord listings, roommate pairing, and hiring technicians.</p>

                <div class="ct-faq-search-wrap">
                    <input type="text" id="faqSearchInput" class="ct-faq-search-input" placeholder="Have a question? Search here..." autocomplete="off">
                    <span class="ct-faq-search-icon"><i class="fas fa-search"></i></span>
                </div>
            </div>
        </div>
        <!-- FAQ HERO END -->

        <!-- FAQ MAIN SECTION START -->
        <section class="ct-faq-section">
            <div class="container">
                <div class="ct-faq-layout">

                    <!-- Sticky Sidebar Categories -->
                    <div class="ct-faq-sidebar">
                        <div class="ct-faq-sidebar-sticky">
                            <div class="ct-faq-categories-card">
                                <h3>FAQ Categories</h3>
                                <ul class="ct-faq-categories-list">
                                    <li>
                                        <button class="ct-faq-cat-btn active" data-filter="all">
                                            <span>All Questions</span>
                                            <span class="ct-faq-cat-badge">11</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="ct-faq-cat-btn" data-filter="general">
                                            <span>General Platform</span>
                                            <span class="ct-faq-cat-badge">3</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="ct-faq-cat-btn" data-filter="students">
                                            <span>For Students</span>
                                            <span class="ct-faq-cat-badge">3</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="ct-faq-cat-btn" data-filter="agents">
                                            <span>Agents & Landlords</span>
                                            <span class="ct-faq-cat-badge">3</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="ct-faq-cat-btn" data-filter="roommates">
                                            <span>Roommate Matching</span>
                                            <span class="ct-faq-cat-badge">2</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="ct-faq-cat-btn" data-filter="technicians">
                                            <span>Technician Pro</span>
                                            <span class="ct-faq-cat-badge">2</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Accordion List -->
                    <div>
                        <div class="ct-faq-accordion" id="faqAccordionList">

                            <!-- General Section -->
                            <div class="ct-faq-item" data-category="general">
                                <div class="ct-faq-question-wrap">
                                    <h4 class="ct-faq-question">What is CTHostel?</h4>
                                    <span class="ct-faq-toggle-icon"><i class="fas fa-plus"></i></span>
                                </div>
                                <div class="ct-faq-answer-container">
                                    <div class="ct-faq-answer-inner">
                                        <p class="ct-faq-answer">
                                            CTHostel is a specialized digital ecosystem built to eliminate off-campus student accommodation challenges in Nigeria, while providing roommates pairing and utility maintenance services in a unified dashboard.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="ct-faq-item" data-category="general">
                                <div class="ct-faq-question-wrap">
                                    <h4 class="ct-faq-question">Is CTHostel safe and verified?</h4>
                                    <span class="ct-faq-toggle-icon"><i class="fas fa-plus"></i></span>
                                </div>
                                <div class="ct-faq-answer-container">
                                    <div class="ct-faq-answer-inner">
                                        <p class="ct-faq-answer">
                                            Absolutely. CTHostel verifies every agent, landlord, and housing list to protect students from off-campus housing fraud and accommodation scams.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="ct-faq-item" data-category="general">
                                <div class="ct-faq-question-wrap">
                                    <h4 class="ct-faq-question">Are there any agency fees?</h4>
                                    <span class="ct-faq-toggle-icon"><i class="fas fa-plus"></i></span>
                                </div>
                                <div class="ct-faq-answer-container">
                                    <div class="ct-faq-answer-inner">
                                        <p class="ct-faq-answer">
                                            Registration and searching on CTHostel is entirely free. A minor service processing charge may apply for automated utility matching and booking confirmations.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Students Section -->
                            <div class="ct-faq-item" data-category="students">
                                <div class="ct-faq-question-wrap">
                                    <h4 class="ct-faq-question">How do I book a hostel on CTHostel?</h4>
                                    <span class="ct-faq-toggle-icon"><i class="fas fa-plus"></i></span>
                                </div>
                                <div class="ct-faq-answer-container">
                                    <div class="ct-faq-answer-inner">
                                        <p class="ct-faq-answer">
                                            Simply choose your school from our home search page, select from verified hostel listings matching your budget, review photos and specifications, and proceed to book securely through your student portal.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="ct-faq-item" data-category="students">
                                <div class="ct-faq-question-wrap">
                                    <h4 class="ct-faq-question">Can I inspect the hostel before making payments?</h4>
                                    <span class="ct-faq-toggle-icon"><i class="fas fa-plus"></i></span>
                                </div>
                                <div class="ct-faq-answer-container">
                                    <div class="ct-faq-answer-inner">
                                        <p class="ct-faq-answer">
                                            Yes! We encourage physical inspections. Through your CTHostel portal, you can request an inspection schedule with a verified agent before making any financial commitment.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="ct-faq-item" data-category="students">
                                <div class="ct-faq-question-wrap">
                                    <h4 class="ct-faq-question">What happens if I make payments and the hostel is not as advertised?</h4>
                                    <span class="ct-faq-toggle-icon"><i class="fas fa-plus"></i></span>
                                </div>
                                <div class="ct-faq-answer-container">
                                    <div class="ct-faq-answer-inner">
                                        <p class="ct-faq-answer">
                                            CTHostel provides payment protection. If you pay through the portal, funds are held securely and only disbursed to the landlord/agent after you inspect and confirm your satisfaction on arrival.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Agents Section -->
                            <div class="ct-faq-item" data-category="agents">
                                <div class="ct-faq-question-wrap">
                                    <h4 class="ct-faq-question">How do I advertise my hostels on CTHostel?</h4>
                                    <span class="ct-faq-toggle-icon"><i class="fas fa-plus"></i></span>
                                </div>
                                <div class="ct-faq-answer-container">
                                    <div class="ct-faq-answer-inner">
                                        <p class="ct-faq-answer">
                                            Click "Register" at the top navigation, select the "Agent" option, fill in your details, and log into your agent dashboard. From there, you can upload unlimited hostel listings with photos, features, and prices for free.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="ct-faq-item" data-category="agents">
                                <div class="ct-faq-question-wrap">
                                    <h4 class="ct-faq-question">How long does it take for listing verification?</h4>
                                    <span class="ct-faq-toggle-icon"><i class="fas fa-plus"></i></span>
                                </div>
                                <div class="ct-faq-answer-container">
                                    <div class="ct-faq-answer-inner">
                                        <p class="ct-faq-answer">
                                            Once you upload a listing, our verification team reviews the building details within 24 to 48 hours. After successful verification, your listings immediately become public to students.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="ct-faq-item" data-category="agents">
                                <div class="ct-faq-question-wrap">
                                    <h4 class="ct-faq-question">Are there commissions on bookings?</h4>
                                    <span class="ct-faq-toggle-icon"><i class="fas fa-plus"></i></span>
                                </div>
                                <div class="ct-faq-answer-container">
                                    <div class="ct-faq-answer-inner">
                                        <p class="ct-faq-answer">
                                            CTHostel operates on a transparent, low-commission structure. Basic listing uploads are free, while premium booking tools carry a minimal commission upon successful student check-in.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Roommates Section -->
                            <div class="ct-faq-item" data-category="roommates">
                                <div class="ct-faq-question-wrap">
                                    <h4 class="ct-faq-question">How does Roommate Matching work?</h4>
                                    <span class="ct-faq-toggle-icon"><i class="fas fa-plus"></i></span>
                                </div>
                                <div class="ct-faq-answer-container">
                                    <div class="ct-faq-answer-inner">
                                        <p class="ct-faq-answer">
                                            Click the "Match Roommates" tab, complete a short profile specifying your gender, level, school department, and living habits (e.g. studying preferences, cleanliness). Our algorithm will then display compatible students for you to connect with.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="ct-faq-item" data-category="roommates">
                                <div class="ct-faq-question-wrap">
                                    <h4 class="ct-faq-question">Is my personal contact information shared with potential roommates?</h4>
                                    <span class="ct-faq-toggle-icon"><i class="fas fa-plus"></i></span>
                                </div>
                                <div class="ct-faq-answer-container">
                                    <div class="ct-faq-answer-inner">
                                        <p class="ct-faq-answer">
                                            No. CTHostel values your privacy. Your phone number and email remain hidden until you review roommate profile suggestions and explicitly agree to share details.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Technicians Section -->
                            <div class="ct-faq-item" data-category="technicians">
                                <div class="ct-faq-question-wrap">
                                    <h4 class="ct-faq-question">What are On-Demand Technicians?</h4>
                                    <span class="ct-faq-toggle-icon"><i class="fas fa-plus"></i></span>
                                </div>
                                <div class="ct-faq-answer-container">
                                    <div class="ct-faq-answer-inner">
                                        <p class="ct-faq-answer">
                                            On-Demand Technicians are verified local plumbers, electricians, laptop engineers, and locksmiths adjacent to your campus who can be hired directly from CTHostel to fix off-campus utility issues.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="ct-faq-item" data-category="technicians">
                                <div class="ct-faq-question-wrap">
                                    <h4 class="ct-faq-question">How are technician fees calculated?</h4>
                                    <span class="ct-faq-toggle-icon"><i class="fas fa-plus"></i></span>
                                </div>
                                <div class="ct-faq-answer-container">
                                    <div class="ct-faq-answer-inner">
                                        <p class="ct-faq-answer">
                                            Service fees are transparently estimated on your screen based on the category of repair. Final work validation and payouts are done directly from your student dashboard after the job is completed.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- FAQ No Results State -->
                        <div id="faqNoResults" class="ct-faq-no-results">
                            <i class="fas fa-search"></i>
                            <h4>No matching questions found</h4>
                            <p>Try searching for keywords like "hostel", "roommate", "verification", or "payment".</p>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- FAQ MAIN SECTION END -->

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

    <!-- Interactive Accordion, Search & Category filtering script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // 1. Accordion Toggle Logic
            const faqItems = document.querySelectorAll('.ct-faq-item');

            faqItems.forEach(item => {
                const header = item.querySelector('.ct-faq-question-wrap');
                header.addEventListener('click', function() {
                    const isActive = item.classList.contains('active');

                    // Close other opened accordion items
                    faqItems.forEach(otherItem => {
                        otherItem.classList.remove('active');
                    });

                    // Toggle current
                    if (!isActive) {
                        item.classList.add('active');
                    }
                });
            });

            // 2. Category Tab Filter Logic
            const filterButtons = document.querySelectorAll('.ct-faq-cat-btn');
            const faqList = document.getElementById('faqAccordionList');
            const searchInput = document.getElementById('faqSearchInput');
            const noResultsDiv = document.getElementById('faqNoResults');

            filterButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Update active tab button style
                    filterButtons.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    const activeFilter = this.getAttribute('data-filter');

                    // Clear search bar when shifting categories to keep layout intuitive
                    searchInput.value = '';

                    // Filter FAQ Cards
                    let visibleCount = 0;

                    faqItems.forEach(item => {
                        const itemCat = item.getAttribute('data-category');
                        item.classList.remove('active'); // Close open accordion on filter shift

                        if (activeFilter === 'all' || itemCat === activeFilter) {
                            item.style.display = 'block';
                            visibleCount++;
                        } else {
                            item.style.display = 'none';
                        }
                    });

                    if (visibleCount === 0) {
                        noResultsDiv.style.display = 'block';
                    } else {
                        noResultsDiv.style.display = 'none';
                    }
                });
            });

            // 3. Instant Search Filtering Logic
            searchInput.addEventListener('input', function() {
                const queryText = this.value.toLowerCase().trim();
                const activeTab = document.querySelector('.ct-faq-cat-btn.active');
                const activeFilter = activeTab.getAttribute('data-filter');

                let visibleCount = 0;

                faqItems.forEach(item => {
                    const itemCat = item.getAttribute('data-category');
                    const questionText = item.querySelector('.ct-faq-question').textContent.toLowerCase();
                    const answerText = item.querySelector('.ct-faq-answer').textContent.toLowerCase();

                    const matchesCategory = (activeFilter === 'all' || itemCat === activeFilter);
                    const matchesQuery = (questionText.includes(queryText) || answerText.includes(queryText));

                    if (matchesCategory && matchesQuery) {
                        item.style.display = 'block';
                        visibleCount++;
                    } else {
                        item.style.display = 'none';
                        item.classList.remove('active'); // collapse if hidden
                    }
                });

                // Handle no results display
                if (visibleCount === 0) {
                    noResultsDiv.style.display = 'block';
                } else {
                    noResultsDiv.style.display = 'none';
                }
            });
        });
    </script>

</body>

</html>