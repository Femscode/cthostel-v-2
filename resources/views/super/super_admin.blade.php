@extends('layouts.superadmin_master')

@section('page_title', 'System Overview')

@section('dashboard_content')

<!-- Statistics Widgets -->
<div class="row g-5 mb-5 mb-xl-10">
    <div class="col-sm-6 col-xl-3">
        <div class="card glass-card stat-card-custom h-100">
            <div class="card-body p-5">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="symbol symbol-50px">
                        <div class="symbol-label" style="background: rgba(79, 70, 229, 0.1); color: #4f46e5;">
                            <i class="bi bi-people-fill fs-1"></i>
                        </div>
                    </div>
                    <span class="badge" style="background: rgba(79, 70, 229, 0.1); color: #4f46e5;">Total Users</span>
                </div>
                <div class="d-flex flex-column">
                    <div class="text-dark fw-bold fs-1 mb-2">{{ count($users) }}</div>
                    <div class="text-muted fw-semibold fs-6">Registered Agents & Students</div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-sm-6 col-xl-3">
        <div class="card glass-card stat-card-custom h-100">
            <div class="card-body p-5">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="symbol symbol-50px">
                        <div class="symbol-label" style="background: rgba(16, 185, 129, 0.1); color: #10b981;">
                            <i class="bi bi-building-fill fs-1"></i>
                        </div>
                    </div>
                    <span class="badge" style="background: rgba(16, 185, 129, 0.1); color: #10b981;">Total Hostels</span>
                </div>
                <div class="d-flex flex-column">
                    <div class="text-dark fw-bold fs-1 mb-2">{{ count($albums) }}</div>
                    <div class="text-muted fw-semibold fs-6">Listed Hostels</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card glass-card stat-card-custom h-100">
            <div class="card-body p-5">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="symbol symbol-50px">
                        <div class="symbol-label" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b;">
                            <i class="bi bi-geo-alt-fill fs-1"></i>
                        </div>
                    </div>
                    <span class="badge" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b;">Locations</span>
                </div>
                <div class="d-flex flex-column">
                    <div class="text-dark fw-bold fs-1 mb-2">{{ count($locations) }}</div>
                    <div class="text-muted fw-semibold fs-6">Available Areas</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card glass-card stat-card-custom h-100">
            <div class="card-body p-5">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="symbol symbol-50px">
                        <div class="symbol-label" style="background: rgba(236, 72, 153, 0.1); color: #ec4899;">
                            <i class="bi bi-mortarboard-fill fs-1"></i>
                        </div>
                    </div>
                    <span class="badge" style="background: rgba(236, 72, 153, 0.1); color: #ec4899;">Schools</span>
                </div>
                <div class="d-flex flex-column">
                    <div class="text-dark fw-bold fs-1 mb-2">{{ count($schools) }}</div>
                    <div class="text-muted fw-semibold fs-6">Registered Institutions</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Users & Quick Actions -->
<div class="row g-5">
    <div class="col-xl-8">
        <div class="card glass-card">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Recent Users</span>
                    <span class="text-muted mt-1 fw-semibold fs-7">Latest registrations</span>
                </h3>
                <div class="card-toolbar">
                    <a href="/agents" class="btn btn-sm btn-light-primary">View All</a>
                </div>
            </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-custom align-middle gs-0 gy-4">
                        <thead>
                            <tr class="fw-bold text-muted bg-light">
                                <th class="ps-4 min-w-200px rounded-start">User</th>
                                <th class="min-w-125px">Email</th>
                                <th class="min-w-125px">Type</th>
                                <th class="min-w-125px">Joined</th>
                                <th class="min-w-150px rounded-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users->take(5) as $u)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3">
                                            <img src="{{ $u->profilePic ? $u->profilePic : 'https://cthostel.com/myimages/cbanner.jpg' }}" alt="" style="object-fit: cover; border-radius: 8px;" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                            <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $u->name }}</span>
                                            <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $u->username }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-dark fw-bold d-block fs-6">{{ $u->email }}</span>
                                    <span class="text-muted fw-semibold d-block fs-7">{{ $u->phone }}</span>
                                </td>
                                <td>
                                    @if($u->type == 'agent')
                                        <span class="badge badge-light-primary">Agent</span>
                                    @else
                                        <span class="badge badge-light-success">Student</span>
                                    @endif
                                    
                                    @if($u->plan == 'Premium Mode')
                                        <span class="badge badge-light-warning ms-1"><i class="bi bi-star-fill text-warning" style="font-size: 0.7rem;"></i> Pro</span>
                                    @endif
                                </td>
                                <td>
                                    <span class="text-dark fw-bold d-block fs-6">{{ $u->created_at->diffForHumans() }}</span>
                                </td>
                                <td>
                                    <div class="d-flex flex-shrink-0">
                                        <a href="/upgrade_user/{{ $u->id }}" class="btn btn-icon btn-bg-light btn-active-color-warning btn-sm me-1" title="Upgrade to Premium">
                                            <i class="bi bi-arrow-up-circle-fill fs-3"></i>
                                        </a>
                                        <a href="/degrade_user/{{ $u->id }}" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm me-1" title="Degrade to Free">
                                            <i class="bi bi-arrow-down-circle-fill fs-3"></i>
                                        </a>
                                        <a href="/admin_login/{{ $u->id }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm" title="Login as User">
                                            <i class="bi bi-box-arrow-in-right fs-3"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-4">
        <div class="card glass-card h-100">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">System Management</span>
                    <span class="text-muted mt-1 fw-semibold fs-7">Quick links</span>
                </h3>
            </div>
            <div class="card-body p-9">
                <div class="d-flex align-items-center mb-6">
                    <div class="symbol symbol-40px me-4">
                        <span class="symbol-label bg-light-primary">
                            <i class="bi bi-geo-fill text-primary fs-3"></i>
                        </span>
                    </div>
                    <div class="d-flex flex-column flex-grow-1">
                        <a href="/createlocation" class="text-dark text-hover-primary fw-bold fs-6">Manage Locations</a>
                        <span class="text-muted fw-semibold fs-7">Edit or delete locations</span>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-6">
                    <div class="symbol symbol-40px me-4">
                        <span class="symbol-label bg-light-success">
                            <i class="bi bi-mortarboard-fill text-success fs-3"></i>
                        </span>
                    </div>
                    <div class="d-flex flex-column flex-grow-1">
                        <a href="/createschool" class="text-dark text-hover-success fw-bold fs-6">Manage Schools</a>
                        <span class="text-muted fw-semibold fs-7">Edit or delete institutions</span>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-6">
                    <div class="symbol symbol-40px me-4">
                        <span class="symbol-label bg-light-warning">
                            <i class="bi bi-shield-lock-fill text-warning fs-3"></i>
                        </span>
                    </div>
                    <div class="d-flex flex-column flex-grow-1">
                        <a href="/agents" class="text-dark text-hover-warning fw-bold fs-6">Manage Roles</a>
                        <span class="text-muted fw-semibold fs-7">Assign managers or SUGs</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
