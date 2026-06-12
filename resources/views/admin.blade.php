@extends('layouts.dashboard_master')

@section('page_title', 'Overview')

@section('dashboard_content')
<div class="card p-6 mb-8" style="background: linear-gradient(135deg, #0b2c3d 0%, #089A49 100%); border-radius: 20px; border: none; box-shadow: 0 10px 30px rgba(8, 154, 73, 0.2); position: relative; overflow: hidden;">
    <!-- Abstract background shape -->
    <div style="position: absolute; top: -50%; right: -10%; width: 300px; height: 300px; background: rgba(255,255,255,0.05); border-radius: 50%; filter: blur(20px);"></div>
    <div style="position: absolute; bottom: -20%; left: -5%; width: 200px; height: 200px; background: rgba(255,255,255,0.05); border-radius: 50%; filter: blur(15px);"></div>

    <div class="d-flex justify-content-between align-items-center flex-wrap gap-4 position-relative" style="z-index: 2;">
        <div>
            <h2 class="text-white fw-bolder mb-2" style="font-family: var(--font-outfit) !important; font-size: 28px;">
                <i class="bi bi-globe me-2"></i> My Personal Page
            </h2>
            <p class="text-white-50 fs-5 mb-0" style="max-width: 500px;">
                Share your personal page link with students to showcase all your listed hostels in one dedicated place.
            </p>
        </div>

        <div class="d-flex align-items-center p-2 rounded-3" style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); width: 100%; max-width: 450px;">
            <input type="text" id="myPageLinkInput" value="https://cthostel.com/{{ $user->username }}" readonly class="form-control bg-transparent border-0 text-white fw-bold fs-5 px-3" style="box-shadow: none;" />
            <button class="btn ms-2 fw-bold text-dark px-4 py-3" onclick="copyPageLink()" style="background-color: #ffffff; border-radius: 10px; transition: 0.3s; white-space: nowrap; box-shadow: 0 4px 10px rgba(0,0,0,0.1);" onmouseover="this.style.backgroundColor='#f1f5f9'; this.style.transform='translateY(-2px)';" onmouseout="this.style.backgroundColor='#ffffff'; this.style.transform='none';">
                <i class="bi bi-copy text-dark me-2"></i> Copy Link
            </button>
        </div>
    </div>
</div>

<div class="row g-6 mb-6">

    <!-- Stat Card: Total Hostels -->
    <div class="col-sm-6 col-xl-3">
        <div class="card glass-card stat-card-custom h-100">
            <div class="card-body p-6 d-flex align-items-center">
                <div class="symbol symbol-50px me-5">
                    <span class="symbol-label" style="background: rgba(8, 154, 73, 0.15);">
                        <i class="bi bi-house-fill fs-2x" style="color: #089A49;"></i>
                    </span>
                </div>
                <div>
                    <span class="text-muted fw-semibold d-block fs-6">Total Hostels</span>
                    <span class="text-dark fw-bold fs-2" data-kt-countup="true" data-kt-countup-value="{{ count($album) }}">
                        {{ count($album) }}
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Stat Card: Total Clicks -->
    <div class="col-sm-6 col-xl-3">
        <div class="card glass-card stat-card-custom h-100">
            <div class="card-body p-6 d-flex align-items-center">
                <div class="symbol symbol-50px me-5">
                    <span class="symbol-label" style="background: rgba(59, 130, 246, 0.15);">
                        <i class="bi bi-eye-fill fs-2x" style="color: #3b82f6;"></i>
                    </span>
                </div>
                <div>
                    <span class="text-muted fw-semibold d-block fs-6">Total Views/Clicks</span>
                    <span class="text-dark fw-bold fs-2">
                        {{ $user->new_clicks ?? 0 }}
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Stat Card: Plan -->
    <div class="col-sm-6 col-xl-3">
        <div class="card glass-card stat-card-custom h-100">
            <div class="card-body p-6 d-flex align-items-center">
                <div class="symbol symbol-50px me-5">
                    <span class="symbol-label" style="background: rgba(234, 179, 8, 0.15);">
                        <i class="bi bi-star-fill fs-2x" style="color: #eab308;"></i>
                    </span>
                </div>
                <div>
                    <span class="text-muted fw-semibold d-block fs-6">Account Tier</span>
                    <span class="text-dark fw-bold fs-3 uppercase">
                        {{ $user->plan ?? 'Standard' }}
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Stat Card: Institution -->
    <div class="col-sm-6 col-xl-3">
        <div class="card glass-card stat-card-custom h-100">
            <div class="card-body p-6 d-flex align-items-center">
                <div class="symbol symbol-50px me-5">
                    <span class="symbol-label" style="background: rgba(168, 85, 247, 0.15);">
                        <i class="bi bi-mortarboard-fill fs-2x" style="color: #a855f7;"></i>
                    </span>
                </div>
                <div>
                    <span class="text-muted fw-semibold d-block fs-6">Institution</span>
                    <span class="text-dark fw-bold fs-6">
                        {{ $user->school->name ?? 'None' }}
                    </span>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Welcome Header & Profile Summary -->
<div class="row g-6 mb-6">
    <div class="col-xl-8">
        <div class="card glass-card p-6 h-100">
            <div class="d-flex align-items-sm-center flex-column flex-sm-row mb-4">
                <div class="position-relative me-sm-6 mb-4 mb-sm-0 text-center text-sm-start">
                    <img src="{{ $user->profilePic ? $user->profilePic : 'https://cthostel.com/myimages/cbanner.jpg' }}" alt="avatar" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; border: 4px solid #ffffff; box-shadow: 0 8px 25px rgba(0,0,0,0.08);" />
                    <!-- Badge indicating active status -->
                    <span class="position-absolute bg-success border border-2 border-white rounded-circle" style="width: 22px; height: 22px; bottom: 10px; right: 10px;"></span>
                </div>
                <div class="text-center text-sm-start mt-2 mt-sm-0">
                    <h2 class="text-dark fw-bolder mb-2" style="font-size: 26px; font-family: var(--font-outfit) !important;">
                        Welcome Back, {{ explode(' ', trim($user->name))[0] }} <span style="font-size: 24px; display: inline-block; animation: wave 2.5s infinite; transform-origin: 70% 70%;">👋</span>
                    </h2>
                    <p class="text-muted fs-6 mb-3" style="max-width: 480px; line-height: 1.6;">
                        Manage your listed properties, track your student interactions, and keep your portfolio up to date.
                    </p>
                    <div class="d-flex align-items-center justify-content-center justify-content-sm-start flex-wrap gap-3">
                        <div class="d-flex align-items-center py-2 px-3 rounded-pill" style="background-color: #f8fafc; border: 1px solid #e2e8f0; transition: all 0.2s;" onmouseover="this.style.backgroundColor='#f1f5f9'" onmouseout="this.style.backgroundColor='#f8fafc'">
                            <i class="bi bi-envelope-fill text-primary me-2"></i>
                            <span class="fs-7 fw-bold" style="color: #334155;">{{ $user->email }}</span>
                        </div>
                        <div class="d-flex align-items-center py-2 px-3 rounded-pill" style="background-color: #f8fafc; border: 1px solid #e2e8f0; transition: all 0.2s;" onmouseover="this.style.backgroundColor='#f1f5f9'" onmouseout="this.style.backgroundColor='#f8fafc'">
                            <i class="bi bi-telephone-fill text-success me-2"></i>
                            <span class="fs-7 fw-bold" style="color: #334155;">{{ $user->phone }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                @keyframes wave {
                    0% {
                        transform: rotate(0.0deg)
                    }

                    10% {
                        transform: rotate(14.0deg)
                    }

                    20% {
                        transform: rotate(-8.0deg)
                    }

                    30% {
                        transform: rotate(14.0deg)
                    }

                    40% {
                        transform: rotate(-4.0deg)
                    }

                    50% {
                        transform: rotate(10.0deg)
                    }

                    60% {
                        transform: rotate(0.0deg)
                    }

                    100% {
                        transform: rotate(0.0deg)
                    }
                }
            </style>

            <div class="separator my-5" style="background-color: rgba(0, 0, 0, 0.05);"></div>

            <!-- Quick Actions Panel -->
            <h4 class="text-dark fw-bold mb-4 mt-5">Quick Actions</h4>
            <div class="row g-4">
                <div class="col-md-4">
                    <a href="/add-hostel" class="card h-100 action-card" style="border: 1px solid rgba(8, 154, 73, 0.1); background-color: #f8fafc; border-radius: 16px; text-decoration: none; transition: all 0.3s ease;">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3 d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px; border-radius: 12px; background-color: rgba(8, 154, 73, 0.1);">
                                <i class="bi bi-plus-lg fs-3" style="color: #089A49;"></i>
                            </div>
                            <h5 class="text-dark fw-bold mb-1">Add New Hostel</h5>
                            <p class="text-muted fs-7 mb-0">List a new property</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="/my-hostels" class="card h-100 action-card" style="border: 1px solid rgba(11, 44, 61, 0.05); background-color: #ffffff; border-radius: 16px; text-decoration: none; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.02);">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3 d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px; border-radius: 12px; background-color: rgba(59, 130, 246, 0.1);">
                                <i class="bi bi-house-door-fill fs-3 text-primary"></i>
                            </div>
                            <h5 class="text-dark fw-bold mb-1">Manage Hostels</h5>
                            <p class="text-muted fs-7 mb-0">Edit or view listings</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="/my-profile" class="card h-100 action-card" style="border: 1px solid rgba(11, 44, 61, 0.05); background-color: #ffffff; border-radius: 16px; text-decoration: none; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.02);">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3 d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px; border-radius: 12px; background-color: rgba(168, 85, 247, 0.1);">
                                <i class="bi bi-person-fill fs-3" style="color: #a855f7;"></i>
                            </div>
                            <h5 class="text-dark fw-bold mb-1">Profile Settings</h5>
                            <p class="text-muted fs-7 mb-0">Update your account</p>
                        </div>
                    </a>
                </div>
            </div>

            <style>
                .action-card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 10px 25px rgba(8, 154, 73, 0.15) !important;
                    border-color: #089A49 !important;
                    background-color: #ffffff !important;
                }
            </style>
        </div>
    </div>

    <!-- Verification / Promotion Banner -->
    <div class="col-xl-4">
        <div class="card glass-card p-6 h-100 d-flex flex-column justify-content-between" style="background: linear-gradient(135deg, rgba(8, 154, 73, 0.05), rgba(241, 245, 249, 1)) !important;">
            <div>
                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-shield-check fs-1 text-success me-2"></i>
                    <h3 class="text-dark fw-bold mb-0">Identity Verification</h3>
                </div>

                @if($user->identification == null)
                <p class="text-muted fs-6">
                    You have not submitted a means of identification. Submission is required to get verified and list first in student searches.
                </p>
                <div class="alert alert-danger bg-transparent text-dark border-danger border-dashed mb-0 p-3" role="alert">
                    Please upload your ID under profile settings to receive your verification badge.
                </div>
                @else
                <p class="text-muted fs-6">
                    Awesome! You have submitted your identity documents. Our support team is currently auditing them.
                </p>
                <div class="alert alert-success bg-transparent text-dark border-success border-dashed mb-0 p-3" role="alert">
                    ID document is uploaded. <a href="/view_identification/{{ $user->identification }}" target="_blank" class="text-success fw-bold text-decoration-underline">View Uploaded ID</a>
                </div>
                @endif
            </div>

            <div class="pt-4">
                <a href="/my-profile" class="btn btn-brand-primary w-100">
                    Update ID Documents
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

@section('dashboard_scripts')
<script>
    function copyPageLink() {
        var copyText = document.getElementById("myPageLinkInput");
        copyText.select();
        document.execCommand("copy");
        Swal.fire({
            icon: 'success',
            title: 'Link Copied!',
            text: 'Your personal page link has been copied to your clipboard.',
            confirmButtonColor: '#089A49'
        });
    }
</script>
@endsection