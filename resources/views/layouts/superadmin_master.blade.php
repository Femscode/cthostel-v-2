<!DOCTYPE html>
<html lang="en">

<head>
    <title>CTHostel | Superadmin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('myimages/fav.png') }}" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Metronic Bundles -->
    <link href="{{ asset('backend/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireStyles

    <style>
        /* Modern Premium Light Theme for Content */
        body {
            font-family: 'Plus Jakarta Sans', 'Outfit', sans-serif !important;
            background-color: #f3f4f6 !important;
            color: #1e293b !important;
            padding: 0 !important;
        }

        .wrapper,
        .wrapper-custom {
            padding-left: 0 !important;
            padding-top: 0 !important;
        }

        /* Clean Cards */
        .glass-card {
            background: #ffffff !important;
            border: 1px solid rgba(0, 0, 0, 0.05) !important;
            border-radius: 16px !important;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.03);
        }

        /* Superadmin Sidebar Styling */
        .aside-custom {
            background-color: #1e1b4b !important; /* Deep Indigo Theme */
            border-right: none;
            width: 260px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            min-height: 100vh;
        }

        /* Custom Sidebar Menu Items */
        .menu-link-custom {
            display: flex;
            align-items: center;
            padding: 14px 20px;
            color: #818cf8 !important; /* Muted indigo */
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
            background: linear-gradient(135deg, #4f46e5, #4338ca) !important;
            color: #ffffff !important;
            box-shadow: 0 0 15px rgba(79, 70, 229, 0.3);
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

        /* Primary action button styling */
        .btn-brand-primary {
            background: linear-gradient(135deg, #4f46e5, #4338ca) !important;
            border: none !important;
            color: white !important;
            font-weight: 600 !important;
            padding: 10px 24px !important;
            border-radius: 10px !important;
            transition: all 0.3s ease !important;
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.2);
        }

        .btn-brand-primary:hover {
            box-shadow: 0 6px 20px rgba(79, 70, 229, 0.35) !important;
            transform: translateY(-2px);
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
            border-color: #4f46e5 !important;
        }

        .stat-card-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: #4f46e5;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .stat-card-custom:hover::before {
            opacity: 1;
        }

        /* Badge overrides */
        .badge-superadmin {
            background-color: rgba(255, 255, 255, 0.2) !important;
            color: #ffffff !important;
            border: 1px solid rgba(255, 255, 255, 0.3);
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
                    <a href="/superadmin" class="menu-link-custom {{ Request::is('superadmin') ? 'active' : '' }}">
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Overview</span>
                    </a>
                    <a href="/agents" class="menu-link-custom {{ Request::is('agents') ? 'active' : '' }}">
                        <i class="bi bi-person-badge-fill"></i>
                        <span>Agents</span>
                    </a>
                    <a href="/students" class="menu-link-custom {{ Request::is('students') ? 'active' : '' }}">
                        <i class="bi bi-people-fill"></i>
                        <span>Students</span>
                    </a>
                    <a href="/hostels" class="menu-link-custom {{ Request::is('hostels') ? 'active' : '' }}">
                        <i class="bi bi-building-fill"></i>
                        <span>Hostels Database</span>
                    </a>

                    <div class="separator my-5 mx-8" style="background-color: rgba(255, 255, 255, 0.1);"></div>

                    <a href="/logout" onclick="event.preventDefault(); Swal.fire({ title: 'Sign Out?', text: 'Are you sure you want to sign out?', icon: 'warning', showCancelButton: true, confirmButtonColor: '#4f46e5', cancelButtonColor: '#d33', confirmButtonText: 'Yes, sign out' }).then((result) => { if (result.isConfirmed) { window.location.href = '/logout'; } })" class="menu-link-custom text-danger" style="color: #fca5a5 !important;">
                        <i class="bi bi-box-arrow-right" style="color: #fca5a5 !important;"></i>
                        <span>Logout</span>
                    </a>
                </div>

                <!-- Sidebar footer -->
                <div class="p-5" style="border-top: 1px solid rgba(255, 255, 255, 0.05); background-color: rgba(0, 0, 0, 0.15);">
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-40px me-3">
                            <img src="https://cthostel.com/myimages/cbanner.jpg" alt="avatar" style="border-radius: 8px; object-fit: cover;" />
                        </div>
                        <div class="d-flex flex-column">
                            <span class="fw-bold text-white fs-6">Super Admin</span>
                            <span class="fs-8 text-muted">
                                <span class="badge badge-superadmin py-1 px-2">Administrator</span>
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
                            @yield('page_title', 'Superadmin Dashboard')
                        </h1>
                    </div>

                    <div class="d-flex align-items-center">
                        <a href="/" class="btn btn-brand-primary btn-sm">Visit Site <i class="bi bi-box-arrow-up-right ms-2 text-white"></i></a>
                    </div>
                </div>

                <!-- Main Content Yield Container -->
                <div class="content d-flex flex-column flex-column-fluid p-6">
                    <div class="container-fluid">
                        @if(session('message'))
                        <div class="alert alert-success d-flex align-items-center glass-card border-success p-4 mb-5" role="alert">
                            <i class="bi bi-check-circle-fill text-success fs-3 me-3"></i>
                            <div class="text-dark">{{ session('message') }}</div>
                        </div>
                        @endif
                        @yield('dashboard_content')
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('backend/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('backend/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('backend/cdn/jquery.dataTables.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('backend/cdn/jquery.dataTables.min.css') }}" />
    @livewireScripts

    <script>
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
            
            // Custom Date Filtering Logic
            $.fn.dataTable.ext.search.push(function(settings, data, dataIndex, rowData, counter) {
                var min = $('#dt_min_date').val();
                var max = $('#dt_max_date').val();
                if (!min && !max) return true;
                
                var rowNode = settings.aoData[dataIndex].nTr;
                var dateString = $(rowNode).find('td[data-date]').attr('data-date');
                if (!dateString) return true;
                
                var rowDate = new Date(dateString);
                var minDate = min ? new Date(min) : null;
                var maxDate = max ? new Date(max) : null;
                
                if (minDate && rowDate < minDate) return false;
                if (maxDate && rowDate > maxDate) return false;
                return true;
            });
            
            if ($('#datatable').length) {
                // Prepend Date filter HTML to the card header
                var dateFilterHtml = `
                <div class="d-flex align-items-center me-3 mb-2 mb-md-0" style="background: rgba(79, 70, 229, 0.05); padding: 8px; border-radius: 8px;">
                    <span class="fs-7 fw-bold text-muted me-2"><i class="bi bi-calendar-range me-1"></i> Date:</span>
                    <input type="date" id="dt_min_date" class="form-control form-control-sm form-control-solid me-2" style="width: 140px; font-size: 0.8rem;" placeholder="Start">
                    <span class="text-muted mx-1">-</span>
                    <input type="date" id="dt_max_date" class="form-control form-control-sm form-control-solid ms-2 me-2" style="width: 140px; font-size: 0.8rem;" placeholder="End">
                    <button id="dt_clear_date" class="btn btn-sm btn-icon btn-light-danger"><i class="bi bi-x-lg"></i></button>
                </div>`;
                
                if($('.card-toolbar').length) {
                    $('.card-toolbar').prepend(dateFilterHtml);
                } else {
                    $('.card-header').append(dateFilterHtml);
                }

                var table = $('#datatable').DataTable({
                    responsive: true,
                    pageLength: 25
                });

                $('#dt_min_date, #dt_max_date').on('change', function() {
                    table.draw();
                });
                
                $('#dt_clear_date').on('click', function() {
                    $('#dt_min_date').val('');
                    $('#dt_max_date').val('');
                    table.draw();
                });
            }

            @if(session('message'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('message') }}",
                confirmButtonColor: '#4f46e5'
            });
            @endif
        });
    </script>
    @yield('dashboard_scripts')
</body>
</html>
