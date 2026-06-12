<!DOCTYPE html>
<html lang="en">

<head>
    <title>CTHostel | Dashboard</title>
    <meta name="CTHostel" content="Safest place to get it cheaper without getting scammed." />
    <meta name="description" content="Safest place to get it cheaper without getting scammed." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('myimages/fav.png') }}" />

    <!-- Google Fonts: Outfit & Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- Font Awesome & Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Metronic Bundles -->
    <link href="{{ asset('backend/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireStyles

    <style>
        /* Modern Premium Light Theme */
        body {
            font-family: 'Plus Jakarta Sans', 'Outfit', sans-serif !important;
            background-color: #f8fafc !important;
            /* light slate background */
            color: #334155 !important;
            /* slate-700 text */
            padding: 0 !important;
            /* Remove metronic fixed padding */
        }

        .wrapper,
        .wrapper-custom {
            padding-left: 0 !important;
            /* Remove metronic fixed sidebar padding */
            padding-top: 0 !important;
        }

        /* Clean Cards */
        .glass-card {
            background: #ffffff !important;
            border: 1px solid rgba(0, 0, 0, 0.05) !important;
            border-radius: 16px !important;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.03);
        }

        /* Sidebar Styling */
        .aside-custom {
            background-color: #0b2c3d !important;
            /* Dark theme sidebar */
            border-right: none;
            width: 260px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            min-height: 100vh;
            /* Ensure full height */
        }

        /* Custom Sidebar Menu Items */
        .menu-link-custom {
            display: flex;
            align-items: center;
            padding: 14px 20px;
            color: #94a3b8 !important;
            /* Muted light color */
            border-radius: 12px;
            margin: 4px 15px;
            font-weight: 600;
            transition: all 0.25s ease;
            text-decoration: none;
        }

        .menu-link-custom:hover {
            background: rgba(255, 255, 255, 0.05);
            color: #ffffff !important;
            transform: translateX(4px);
        }

        .menu-link-custom.active {
            background: linear-gradient(135deg, #089A49, #067035) !important;
            color: #ffffff !important;
            box-shadow: 0 0 15px rgba(8, 154, 73, 0.3);
        }

        .menu-link-custom i {
            font-size: 1.3rem;
            margin-right: 12px;
        }

        /* Header bar customization */
        .header-custom {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        /* Styled inputs */
        .form-control-solid-custom {
            background-color: #f1f5f9 !important;
            border: 1px solid #e2e8f0 !important;
            color: #334155 !important;
            border-radius: 10px !important;
            transition: all 0.3s ease;
        }

        .form-control-solid-custom:focus {
            background-color: #ffffff !important;
            border-color: #089A49 !important;
            box-shadow: 0 0 0 3px rgba(8, 154, 73, 0.15) !important;
        }

        /* Primary action button styling */
        .btn-brand-primary {
            background: linear-gradient(135deg, #089A49, #067035) !important;
            border: none !important;
            color: white !important;
            font-weight: 600 !important;
            padding: 10px 24px !important;
            border-radius: 10px !important;
            transition: all 0.3s ease !important;
            box-shadow: 0 4px 12px rgba(8, 154, 73, 0.2);
        }

        .btn-brand-primary:hover {
            box-shadow: 0 6px 20px rgba(8, 154, 73, 0.35) !important;
            transform: translateY(-2px);
        }

        /* Secondary action button styling */
        .btn-brand-secondary {
            background: #ffffff !important;
            border: 1px solid #cbd5e1 !important;
            color: #475569 !important;
            font-weight: 600 !important;
            padding: 10px 24px !important;
            border-radius: 10px !important;
            transition: all 0.3s ease !important;
        }

        .btn-brand-secondary:hover {
            background: #f8fafc !important;
            border-color: #94a3b8 !important;
            color: #334155 !important;
        }

        /* Stat cards layout */
        .stat-card-custom {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            background: #ffffff;
        }

        .stat-card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
            border-color: #089A49 !important;
        }

        .stat-card-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: #089A49;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .stat-card-custom:hover::before {
            opacity: 1;
        }

        /* DataTables Custom styles */
        .dataTables_wrapper {
            color: #475569 !important;
        }

        table.dataTable tbody tr {
            background-color: transparent !important;
            color: #475569 !important;
        }

        .table.table-custom th {
            color: #64748b !important;
            font-weight: 700;
            border-bottom: 2px solid #e2e8f0 !important;
        }

        .table.table-custom td {
            border-bottom: 1px solid #f1f5f9 !important;
            vertical-align: middle;
            color: #334155 !important;
        }

        /* Custom copy button styling */
        .copy-input-group {
            display: flex;
            align-items: center;
            background: #f1f5f9;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 6px 12px;
        }

        .copy-input-group input {
            background: transparent;
            border: none;
            color: #334155;
            outline: none;
            width: 100%;
        }

        /* Badge coloring overrides */
        .badge-landlord {
            background-color: rgba(8, 154, 73, 0.1) !important;
            color: #089A49 !important;
            border: 1px solid rgba(8, 154, 73, 0.2);
        }

        .badge-agent {
            background-color: rgba(59, 130, 246, 0.1) !important;
            color: #3b82f6 !important;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }

        .sidebar-logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        @media (max-width: 991.98px) {
            .aside-custom {
                position: fixed;
                top: 0;
                bottom: 0;
                left: -280px;
                z-index: 1001;
            }

            .aside-custom.show {
                left: 0;
                box-shadow: 4px 0 24px rgba(0, 0, 0, 0.1);
            }

            .wrapper-custom {
                padding-left: 0 !important;
            }

            .content {
                padding-top: 10px !important;
            }
        }

        .content {
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">

            <!-- Custom Sidebar Navigation -->
            <div id="kt_aside" class="aside-custom d-flex flex-column flex-shrink-0">
                <div class="sidebar-logo-container">
                    <a href="/" class="d-flex align-items-center bg-white px-4 py-2" style="border-radius: 12px;">
                        <img alt="CTHostel Logo" src="{{ asset('myimages/fav.png') }}" class="h-40px" />
                    </a>
                </div>

                <div class="flex-column-fluid pt-5">
                    <a href="/dashboard" class="menu-link-custom {{ Request::is('dashboard') || Request::is('admin') ? 'active' : '' }}">
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Overview</span>
                    </a>
                    <a href="/my-hostels" class="menu-link-custom {{ Request::is('my-hostels') ? 'active' : '' }}">
                        <i class="bi bi-house-door-fill"></i>
                        <span>My Hostels</span>
                    </a>
                    <a href="/my-profile" class="menu-link-custom {{ Request::is('my-profile') ? 'active' : '' }}">
                        <i class="bi bi-person-fill"></i>
                        <span>Profile Settings</span>
                    </a>
                    <a href="/add-hostel" class="menu-link-custom {{ Request::is('add-hostel') ? 'active' : '' }}">
                        <i class="bi bi-plus-square-fill"></i>
                        <span>Add New Hostel</span>
                    </a>
                    <a href="/hostel-requests" class="menu-link-custom {{ Request::is('hostel-requests') ? 'active' : '' }}">
                        <i class="bi bi-chat-square-dots-fill"></i>
                        <span>Hostel Requests</span>
                    </a>

                    <div class="separator my-5 mx-8" style="background-color: rgba(0, 0, 0, 0.05);"></div>

                    <a href="/logout" onclick="event.preventDefault(); Swal.fire({ title: 'Sign Out?', text: 'Are you sure you want to sign out of your account?', icon: 'warning', showCancelButton: true, confirmButtonColor: '#089A49', cancelButtonColor: '#d33', confirmButtonText: 'Yes, sign out', cancelButtonText: 'Cancel', background: '#fff', color: '#333' }).then((result) => { if (result.isConfirmed) { window.location.href = '/logout'; } })" class="menu-link-custom text-danger">
                        <i class="bi bi-box-arrow-right text-danger"></i>
                        <span>Logout</span>
                    </a>
                </div>

                <!-- Sidebar footer user profile panel -->
                <div class="p-5" style="border-top: 1px solid rgba(255, 255, 255, 0.05); background-color: rgba(0, 0, 0, 0.15);">
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-40px me-3">
                            <img src="{{ $user->profilePic ? $user->profilePic : 'https://cthostel.com/myimages/cbanner.jpg' }}" alt="avatar" style="border-radius: 8px; object-fit: cover;" />
                        </div>
                        <div class="d-flex flex-column">
                            <span class="fw-bold text-white fs-6">{{ $user->name }}</span>
                            <span class="fs-8 text-muted">
                                @if(isset($user->user_type) && $user->user_type == 'landlord')
                                <span class="badge badge-landlord py-1 px-2" style="background-color: rgba(255,255,255,0.1)!important; border:none; color:#e2e8f0!important;">Landlord</span>
                                @else
                                <span class="badge badge-agent py-1 px-2" style="background-color: rgba(255,255,255,0.1)!important; border:none; color:#e2e8f0!important;">Agent</span>
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page Wrapper -->
            <div class="wrapper d-flex flex-column flex-row-fluid wrapper-custom" style="transition: all 0.3s ease;">

                <!-- Main Header bar -->
                <div class="header-custom d-flex align-items-stretch justify-content-between p-4 px-6 w-100" style="margin-bottom: 0;">
                    <div class="d-flex align-items-center">
                        <button class="btn btn-icon btn-active-color-primary d-lg-none me-3" id="mobile_sidebar_toggle">
                            <i class="bi bi-list fs-1 text-dark"></i>
                        </button>
                        <h1 class="text-dark fw-bold fs-3 mb-0">
                            @yield('page_title', 'Agent Dashboard')
                        </h1>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="me-4 d-none d-md-block">
                            <div class="copy-input-group">
                                <input type="text" id="myInput" value="https://cthostel.com/{{ $user->username }}" readonly />
                                <button class="btn btn-sm p-1 ms-2" onclick="copyText()" title="Copy Personal Link" style="color: #089A49;">
                                    <i class="bi bi-file-earmark-clipboard-fill fs-5"></i>
                                </button>
                            </div>
                        </div>
                        <a href="upgrade_account" class="btn btn-brand-primary btn-sm">Upgrade Plan</a>
                    </div>
                </div>

                <!-- Main Content Yield Container -->
                <div class="content d-flex flex-column flex-column-fluid p-6">
                    <div class="container-fluid">
                        @if(session('message'))
                        <div class="alert alert-success d-flex align-items-center glass-card border-success p-4 mb-5" role="alert">
                            <i class="bi bi-check-circle-fill text-success fs-3 me-3"></i>
                            <div class="text-white">{{ session('message') }}</div>
                        </div>
                        @endif
                        @yield('dashboard_content')
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Metronic bundle and jquery scripts -->
    <script src="{{ asset('backend/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('backend/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('backend/cdn/jquery.dataTables.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('backend/cdn/jquery.dataTables.min.css') }}" />
    @livewireScripts

    <script>
        // Copy link functionality
        function copyText() {
            var copyText = document.getElementById("myInput");
            copyText.select();
            document.execCommand("copy");
            Swal.fire({
                icon: 'success',
                title: 'Link Copied!',
                text: 'Your referral page link has been copied to clipboard.',
                confirmButtonColor: '#089A49'
            });
        }

        // Sidebar Responsive Toggle
        $(document).ready(function() {
            $('#mobile_sidebar_toggle').on('click', function(e) {
                e.stopPropagation();
                $('#kt_aside').toggleClass('show');
            });

            $(document).on('click', function(e) {
                if (!$(e.target).closest('#kt_aside').length && $('#kt_aside').hasClass('show')) {
                    $('#kt_aside').removeClass('show');
                }
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            @if(session('message'))
            Swal.fire({
                icon: 'success',
                title: 'Awesome!',
                text: "{{ session('message') }}",
                confirmButtonColor: '#089A49'
            });
            @endif

            // Dynamic locations retrieval based on institution select
            $("#sch_id").change(function() {
                var id = $("#sch_id").val();
                $("#category_id").empty();
                $.get("{{ route('getlocation') }}?id=" + id, function(data) {
                    for (var index = 0; index < data.length; index++) {
                        $('#category_id').append('<option value="' + data[index].id + '">' + data[index].name + '</option>');
                    }
                });
            });

            $("#edit_sch_id").change(function() {
                var id = $("#edit_sch_id").val();
                $("#edit_category_id").empty();
                $.get("{{ route('getlocation') }}?id=" + id, function(data) {
                    for (var index = 0; index < data.length; index++) {
                        $('#edit_category_id').append('<option value="' + data[index].id + '">' + data[index].name + '</option>');
                    }
                });
            });
        });
    </script>
    @yield('dashboard_scripts')
</body>

</html>