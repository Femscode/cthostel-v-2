@extends(auth()->user()->email == 'fasanyafemi@gmail.com' ? 'layouts.superadmin_master' : 'layouts.dashboard_master')

@section('dashboard_content')
<div id="kt_content_container" class="container-fluid px-0">
    <!--begin::Row-->
    <div class="g-5 gx-xxl-8">
        <!--begin::Tables Widget 10-->
        <div class="card">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h4>All Agents ({{ count($agents) }})</h4>
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <button type="button"
                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                        data-kt-menu-trigger="click"
                        data-kt-menu-placement="bottom-end"
                        data-kt-menu-flip="top-end">
                        <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24"
                                version="1.1">
                                <g stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <rect x="5" y="5" width="5" height="5"
                                        rx="1" fill="#000000" />
                                    <rect x="14" y="5" width="5" height="5"
                                        rx="1" fill="#000000" opacity="0.3" />
                                    <rect x="5" y="14" width="5" height="5"
                                        rx="1" fill="#000000" opacity="0.3" />
                                    <rect x="14" y="14" width="5" height="5"
                                        rx="1" fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>

                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->

            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table id='datatable' class="table table-custom align-middle gs-0 gy-4">
                    <thead>
                        <tr class="fw-bold text-muted bg-light">
                            @if(Auth::user()->email == 'fasanyafemi@gmail.com')
                            <th class="ps-4 min-w-150px rounded-start">School</th>
                            @endif
                            <th class="min-w-150px">Agent Name</th>
                            <th class="min-w-125px">Phone</th>
                            <th class="min-w-150px">Email</th>
                            <th class="min-w-100px text-center">Requests</th>
                            <th class="min-w-125px">Date Registered</th>
                            <th class="min-w-125px text-end pe-4 rounded-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($agents as $user)
                        <tr>
                            @if(Auth::user()->email == 'fasanyafemi@gmail.com')
                            <td class="ps-4">{{ $user->school->name ?? "" }}</td>
                            @endif
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-40px me-3">
                                        <img src="{{ $user->profilePic ? $user->profilePic : 'https://cthostel.com/myimages/cbanner.jpg' }}" alt="" style="object-fit: cover; border-radius: 8px;" />
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $user->name }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->email}}</td>
                            <td class="text-center">
                                @php
                                    $requestCount = \App\Models\saveUser::where('user_id', $user->id)->count();
                                @endphp
                                <span class="badge badge-light-primary fs-7 fw-bold">{{ $requestCount }}</span>
                                @if(Auth::user()->email == 'fasanyafemi@gmail.com' && $requestCount > 0)
                                <a href="{{ route('agent_requests_admin', $user->id) }}" class="btn btn-sm btn-light-info mt-1" style="font-size: 0.7rem; padding: 0.2rem 0.5rem;">View</a>
                                @endif
                            </td>
                            <td data-date="{{ date('Y-m-d', strtotime($user->created_at)) }}">{{ date('jS \o\f F, Y', strtotime($user->created_at)) }}</td>
                            <td class="text-end pe-4">
                                <a class='btn btn-icon btn-light-info btn-sm me-1' href='tel:{{$user->phone}}'><i class="bi bi-telephone-fill"></i></a>
                                <a class='btn btn-icon btn-light-success btn-sm' href='https://wa.me/234{{ substr($user->phone,1) }}'><i class="bi bi-whatsapp"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->

            <!--begin::Body-->
        </div>
        <!--end::Tables Widget 10-->
    </div>

    <!--end::Row-->
</div>
@endsection