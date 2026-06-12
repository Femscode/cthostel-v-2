@extends('layouts.dashboard_master')

@section('page_title', 'Profile Settings')

@section('dashboard_content')
<div class="row g-6">

    <!-- LEFT COLUMN: Profile Details -->
    <div class="col-xl-8">
        <div class="card glass-card p-6 h-100">
            <h3 class="text-dark fw-bold mb-4">Account Information</h3>
            <p class="text-muted mb-6">Update your partner profile details, phone number, and avatar.</p>

            <form method="post" action="{{ route('updateprofile') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}" />

                <!-- Avatar Upload Row -->
                <div class="d-flex align-items-center mb-8">
                    <div class="symbol symbol-70px symbol-circle me-5">
                        <img src="{{ $user->profilePic ? $user->profilePic : 'https://cthostel.com/myimages/cbanner.jpg' }}" alt="avatar" style="object-fit: cover; border: 2px solid #089A49; width: 70px; height: 70px;" />
                    </div>
                    <div>
                        <label class="text-dark fw-bold d-block mb-1">Avatar / Profile Picture</label>
                        <input type="file" name="profilePic" accept="image/*" class="form-control form-control-sm form-control-solid-custom" style="max-width: 250px;" />
                        <span class="fs-9 text-muted mt-1 d-block">Allowed formats: PNG, JPG, JPEG.</span>
                    </div>
                </div>

                <div class="row g-5 mb-5">
                    <!-- Full Name -->
                    <div class="col-md-6">
                        <label class="required text-dark fw-bold mb-2">Full Name</label>
                        <input type="text" required class="form-control form-control-solid-custom" name="name" value="{{ $user->name }}" />
                    </div>
                    <!-- Phone Number -->
                    <div class="col-md-6">
                        <label class="required text-dark fw-bold mb-2">Phone Number</label>
                        <input type="text" required class="form-control form-control-solid-custom" name="phone" value="{{ $user->phone }}" />
                    </div>
                </div>

                <div class="row g-5 mb-8">
                    <!-- Username (Readonly) -->
                    <div class="col-md-6">
                        <label class="text-muted fw-bold mb-2">Username</label>
                        <input type="text" readonly class="form-control form-control-solid-custom bg-light text-muted" value="{{ $user->username }}" style="cursor: not-allowed;" />
                    </div>
                    <!-- Email Address (Readonly) -->
                    <div class="col-md-6">
                        <label class="text-muted fw-bold mb-2">Email Address</label>
                        <input type="email" readonly class="form-control form-control-solid-custom bg-light text-muted" name="email" value="{{ $user->email }}" style="cursor: not-allowed;" />
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-3 pt-4">
                    <button type="submit" class="btn btn-brand-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    <!-- RIGHT COLUMN: Verification Details -->
    <div class="col-xl-4">
        <div class="card glass-card p-6 h-100 d-flex flex-column justify-content-between">
            <div>
                <h3 class="text-dark fw-bold mb-4">Identity Verification</h3>
                <p class="text-muted fs-6 mb-6">Means of identification is required before we verify listings and mark your account status active.</p>

                <!-- Current Upload Status -->
                <div class="mb-6">
                    @if($user->identification == null)
                    <div class="alert alert-danger bg-transparent border-danger border-dashed p-4 text-dark rounded mb-0" role="alert">
                        <h5 class="text-danger fw-bold mb-1"><i class="bi bi-x-circle-fill me-2"></i>Not Verified</h5>
                        <p class="fs-7 text-muted mb-0">Please upload a valid government issued ID document (e.g. National ID, Driver's License, Voter's Card) to verify your account.</p>
                    </div>
                    @else
                    <div class="alert alert-success bg-transparent border-success border-dashed p-4 text-dark rounded mb-0" role="alert">
                        <h5 class="text-success fw-bold mb-1"><i class="bi bi-shield-check-fill me-2"></i>Documents Submitted</h5>
                        <p class="fs-7 text-muted mb-3">Your documents are under review. Our team will verify them shortly.</p>
                        <a href="/view_identification/{{ $user->identification }}" target="_blank" class="btn btn-sm btn-brand-primary py-1 px-3 fs-8">
                            <i class="bi bi-file-earmark-image me-1"></i> View Submitted ID
                        </a>
                    </div>
                    @endif
                </div>

                <!-- Update ID Form -->
                <form method="post" action="{{ route('updateprofile') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}" />
                    <!-- Preserve existing fields -->
                    <input type="hidden" name="name" value="{{ $user->name }}" />
                    <input type="hidden" name="phone" value="{{ $user->phone }}" />
                    <input type="hidden" name="email" value="{{ $user->email }}" />

                    <div class="mb-5">
                        <label class="required text-dark fw-bold mb-2">Upload ID Card / Document</label>
                        <input type="file" required name="identification" accept="image/*" class="form-control form-control-solid-custom" />
                        <span class="fs-9 text-muted mt-1 d-block">Make sure your name and picture are clearly visible on the ID.</span>
                    </div>

                    <button type="submit" class="btn btn-brand-primary w-100">Upload ID Card</button>
                </form>
            </div>

            <div class="separator my-6" style="background-color: rgba(0, 0, 0, 0.05);"></div>

            <!-- Promotion Box -->
            <div class="p-4 rounded" style="background: rgba(8, 154, 73, 0.06); border: 1px solid rgba(8, 154, 73, 0.15);">
                <h5 class="text-dark fw-bold mb-2">Verified Hostels Perks:</h5>
                <ul class="fs-7 text-muted ps-4 mb-0">
                    <li class="mb-1">Verified hosteler badge</li>
                    <li class="mb-1">Listed higher in student search filters</li>
                    <li class="mb-1">Eligible for homepage listings feature</li>
                    <li>24/7 Priority support channel</li>
                </ul>
            </div>
        </div>
    </div>

</div>
@endsection