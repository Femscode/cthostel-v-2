<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CTHostel | Partner Register</title>
    
    <!-- Favicon -->
    <link href="{{ asset('myimages/fav.png') }}" rel="icon" type="image/png" />
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
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

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: var(--font-sans);
            background-color: #f8fafc;
            color: #334155;
            min-height: 100vh;
            display: flex;
            overflow-x: hidden;
        }

        /* Split screen layout */
        .auth-container {
            display: flex;
            width: 100%;
            min-height: 100vh;
        }

        /* Left side showcase */
        .auth-showcase {
            flex: 1.2;
            background: linear-gradient(135deg, var(--brand-slate) 0%, var(--brand-dark) 100%);
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 60px;
            color: #ffffff;
        }

        /* Background glowing decorative orbs */
        .auth-showcase::before, .auth-showcase::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            filter: blur(120px);
            z-index: 1;
            opacity: 0.35;
        }

        .auth-showcase::before {
            width: 450px;
            height: 450px;
            background: var(--brand-green);
            top: -120px;
            left: -120px;
        }

        .auth-showcase::after {
            width: 350px;
            height: 350px;
            background: #00ff73;
            bottom: -80px;
            right: -80px;
        }

        .showcase-header {
            position: relative;
            z-index: 2;
        }

        .showcase-header img {
            height: 50px;
            border-radius: 6px;
        }

        .showcase-content {
            position: relative;
            z-index: 2;
            margin-top: auto;
            margin-bottom: auto;
            max-width: 500px;
        }

        .showcase-tag {
            display: inline-block;
            background: rgba(8, 154, 73, 0.2);
            border: 1px solid rgba(8, 154, 73, 0.3);
            color: #10b981;
            padding: 6px 16px;
            border-radius: 99px;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .showcase-title {
            font-family: var(--font-outfit);
            font-size: 44px;
            font-weight: 900;
            line-height: 1.25;
            margin-bottom: 20px;
            background: linear-gradient(to right, #ffffff, #a7f3d0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .showcase-text {
            font-size: 16px;
            line-height: 1.6;
            color: #94a3b8;
        }

        .showcase-footer {
            position: relative;
            z-index: 2;
            font-size: 13px;
            color: #64748b;
        }

        /* Right side form container */
        .auth-form-side {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 24px;
            position: relative;
            background-color: #f8fafc;
        }

        .auth-card {
            width: 100%;
            max-width: 460px;
            background: #ffffff;
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(4, 17, 19, 0.04);
            border: 1px solid rgba(15, 23, 42, 0.05);
            transition: var(--transition-smooth);
        }

        .auth-logo-mobile {
            display: none;
            text-align: center;
            margin-bottom: 30px;
        }

        .auth-logo-mobile img {
            height: 45px;
            border-radius: 6px;
        }

        /* Typography styles */
        .auth-header {
            margin-bottom: 28px;
            text-align: left;
        }

        .auth-header h1 {
            font-family: var(--font-outfit);
            font-size: 28px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 8px;
        }

        .auth-header p {
            color: #64748b;
            font-size: 15px;
            font-weight: 500;
        }

        /* Form inputs & controls */
        .form-group {
            margin-bottom: 18px;
        }

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #475569;
            margin-bottom: 8px;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon {
            position: absolute;
            left: 16px;
            color: #94a3b8;
            font-size: 16px;
            pointer-events: none;
        }

        .form-control {
            width: 100% !important;
            height: 48px !important;
            padding: 0 16px 0 44px !important;
            border: 1px solid rgba(15, 23, 42, 0.12) !important;
            border-radius: 12px !important;
            font-size: 15px !important;
            font-family: var(--font-sans) !important;
            color: #0f172a !important;
            background-color: #ffffff !important;
            transition: var(--transition-smooth) !important;
        }

        select.form-control {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%2394a3b8'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 16px center;
            background-size: 16px;
            padding-right: 40px !important;
            cursor: pointer;
        }

        .form-control:focus {
            border-color: var(--brand-green) !important;
            box-shadow: 0 0 0 4px var(--brand-glow) !important;
            outline: none !important;
        }

        /* Action button */
        .btn-primary {
            width: 100%;
            height: 48px;
            background-color: var(--brand-green);
            color: #ffffff;
            border: none;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 700;
            font-family: var(--font-outfit);
            cursor: pointer;
            transition: var(--transition-smooth);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            box-shadow: 0 4px 12px rgba(8, 154, 73, 0.15);
            margin-top: 8px;
        }

        .btn-primary:hover {
            background-color: var(--brand-green-hover);
            box-shadow: 0 6px 20px rgba(8, 154, 73, 0.25);
            transform: translateY(-1px);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        /* Footer / Switch link */
        .auth-footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #64748b;
            font-weight: 500;
        }

        .auth-footer a {
            color: var(--brand-green);
            text-decoration: none;
            font-weight: 700;
            transition: var(--transition-smooth);
        }

        .auth-footer a:hover {
            color: var(--brand-green-hover);
        }

        /* Error/Alert design */
        .alert {
            padding: 16px;
            border-radius: 12px;
            margin-bottom: 24px;
            font-size: 14px;
            font-weight: 500;
            line-height: 1.5;
        }

        .alert-danger {
            background-color: #fef2f2;
            border: 1px solid #fecaca;
            color: #ef4444;
        }

        .alert-danger ul {
            padding-left: 20px;
            margin-top: 8px;
        }

        /* Responsive / Mobile premium visual layout */
        @media (max-width: 991px) {
            body {
                background: var(--brand-dark);
            }
            .auth-showcase {
                display: none;
            }
            .auth-form-side {
                width: 100%;
                padding: 30px 16px;
                background: radial-gradient(circle at 15% 15%, rgba(8, 154, 73, 0.15) 0%, transparent 45%),
                            radial-gradient(circle at 85% 85%, rgba(0, 255, 115, 0.1) 0%, transparent 45%),
                            linear-gradient(135deg, var(--brand-slate) 0%, var(--brand-dark) 100%);
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .auth-card {
                background: rgba(255, 255, 255, 0.05) !important;
                backdrop-filter: blur(16px) !important;
                -webkit-backdrop-filter: blur(16px) !important;
                border: 1px solid rgba(255, 255, 255, 0.08) !important;
                color: #ffffff !important;
                box-shadow: 0 24px 50px rgba(0, 0, 0, 0.3) !important;
                padding: 32px 24px !important;
                border-radius: 24px !important;
            }
            .auth-logo-mobile {
                display: block;
            }
            .auth-header h1 {
                color: #ffffff !important;
            }
            .auth-header p {
                color: #94a3b8 !important;
            }
            .form-label {
                color: #cbd5e1 !important;
            }
            .form-control {
                background-color: rgba(255, 255, 255, 0.04) !important;
                border: 1px solid rgba(255, 255, 255, 0.1) !important;
                color: #ffffff !important;
            }
            .form-control::placeholder {
                color: rgba(255, 255, 255, 0.3) !important;
            }
            .form-control:focus {
                border-color: var(--brand-green) !important;
                background-color: rgba(255, 255, 255, 0.08) !important;
            }
            select.form-control option {
                background-color: var(--brand-dark) !important;
                color: #ffffff !important;
            }
            .auth-footer {
                color: #94a3b8 !important;
            }
            .auth-footer a {
                color: var(--brand-green-hover) !important;
            }
            .alert-danger {
                background-color: rgba(239, 68, 68, 0.1) !important;
                border: 1px solid rgba(239, 68, 68, 0.2) !important;
                color: #fca5a5 !important;
            }
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <!-- Left Side: Brand Showcase -->
        <div class="auth-showcase">
            <div class="showcase-header">
                <a href="/">
                    <img src="{{ asset('myimages/logo_header.png') }}" alt="CTHostel Logo">
                </a>
            </div>
            <div class="showcase-content">
                <span class="showcase-tag">Partner Portal</span>
                <h1 class="showcase-title">List your hostels. Reach students.</h1>
                <p class="showcase-text">
                    Create an account to join as a verified Agent or Landlord on CTHostel. Reach thousands of verified students, list your properties, and secure booking reservations transparently.
                </p>
            </div>
            <div class="showcase-footer">
                &copy; {{ date('Y') }} CTHostel. All rights reserved.
            </div>
        </div>

        <!-- Right Side: Form View -->
        <div class="auth-form-side">
            <div class="auth-card">
                <!-- Mobile Logo -->
                <div class="auth-logo-mobile">
                    <a href="/">
                        <img src="{{ asset('myimages/logo_header.png') }}" alt="CTHostel Logo">
                    </a>
                </div>

                <div class="auth-header">
                    <h1>Partner Sign Up</h1>
                    <p>Create a landlord or agent account to start listing.</p>
                </div>

                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some issues with your submission:
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    
                    <!-- Username field -->
                    <div class="form-group">
                        <label for="name" class="form-label">Username</label>
                        <div class="input-wrapper">
                            <i class="fa-regular fa-user input-icon"></i>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus class="form-control" placeholder="john_doe">
                        </div>
                    </div>

                    <!-- Email field -->
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <div class="input-wrapper">
                            <i class="fa-regular fa-envelope input-icon"></i>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="form-control" placeholder="name@domain.com">
                        </div>
                    </div>

                    <!-- Phone field -->
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone Number</label>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-phone input-icon"></i>
                            <input type="number" id="phone" name="phone" min="11" value="{{ old('phone') }}" required placeholder="e.g. 08012345678" class="form-control">
                        </div>
                    </div>

                    <!-- User Type Selection field -->
                    <div class="form-group">
                        <label for="user_type" class="form-label">Account Type</label>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-users-gear input-icon"></i>
                            <select id="user_type" name="user_type" required class="form-control">
                                <option value="">Select Account Type</option>
                                <option value="agent" {{ old('user_type') == 'agent' ? 'selected' : '' }}>Agent</option>
                                <option value="landlord" {{ old('user_type') == 'landlord' ? 'selected' : '' }}>Landlord</option>
                            </select>
                        </div>
                    </div>

                    <!-- School Selection field -->
                    <div class="form-group">
                        <label for="school_id" class="form-label">Your School Area</label>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-graduation-cap input-icon"></i>
                            <select id="school_id" name="school_id" required class="sch_id form-control">
                                <option value="">Select School Area</option>
                                @foreach (App\Models\schools::all() as $school)
                                <option value="{{ $school->id }}">{{ $school->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Location Selection field (Dynamically loaded) -->
                    <div class="form-group">
                        <label for="school_location" class="form-label">Your Location</label>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-location-dot input-icon"></i>
                            <select id="school_location" name="location_id" required class="form-control">
                                <option value="">Select Your Location</option>
                            </select>
                        </div>
                    </div>

                    <!-- Password field -->
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-lock input-icon"></i>
                            <input type="password" id="password" name="password" required autocomplete="new-password" class="form-control" placeholder="••••••••••••">
                        </div>
                    </div>

                    <!-- Confirm Password field -->
                    <div class="form-group">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-shield input-icon"></i>
                            <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" class="form-control" placeholder="••••••••••••">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn-primary">
                        <span>Sign Up</span>
                        <i class="fa-solid fa-user-plus"></i>
                    </button>

                    <!-- Sign in footer -->
                    <div class="auth-footer">
                        Already have an account? <a href="/login">Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#school_id").on('change', function() {
                var id = $(this).val();
                $("#school_location").empty().append('<option value="">Select Your Location</option>');
                if (id) {
                    $.get('{{ route("getlocation") }}?id=' + id, function(data) {
                        console.log(data, 'the locations');
                        for (var index = 0; index < data.length; index++) {
                            $('#school_location').append('<option value="' + data[index].id + '">' + data[index].name + '</option>');
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>