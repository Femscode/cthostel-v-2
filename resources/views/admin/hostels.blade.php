@extends(auth()->user()->email == 'fasanyafemi@gmail.com' ? 'layouts.superadmin_master' : 'layouts.dashboard_master')
@section('dashboard_content')
<div id="kt_content_container" class="container-fluid px-0">
    <!--begin::Row-->
    <div class="g-5 gx-xxl-8">
        <!--begin::Tables Widget 10-->
        <div class="card">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h4>All Hostels ({{ count($hostels) }})</h4>
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
                            <th class="{{ Auth::user()->email != 'fasanyafemi@gmail.com' ? 'ps-4 rounded-start' : '' }} min-w-150px">Hostel Name</th>
                            <th class="min-w-100px">Price</th>
                            <th class="min-w-125px">Location</th>
                            <th class="min-w-100px text-center">Requests</th>
                            @if(Auth::user()->email == 'fasanyafemi@gmail.com')<th class="min-w-150px">Caretaker's Number</th>@endif
                            <th class="min-w-100px">Contact</th>
                            <th class="min-w-100px">View</th>
                            <th class="min-w-125px">Date Added</th>
                            @if(Auth::user()->email == 'fasanyafemi@gmail.com')<th class="min-w-125px text-end pe-4 rounded-end">Generate QR</th>@endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($hostels as $hostel)
                        <tr>
                            @if(Auth::user()->email == 'fasanyafemi@gmail.com')
                            <td class="ps-4">{{ $hostel->school->name ?? "" }}</td>
                            @endif
                            <td class="{{ Auth::user()->email != 'fasanyafemi@gmail.com' ? 'ps-4' : '' }}">
                                <span class="d-block fw-bold text-dark">{{$hostel->name}}</span>
                                <span class="text-muted fs-7">{{ $hostel->user->name }}</span>
                            </td>
                            <td>₦{{number_format($hostel->price,2)}}</td>
                            <td>{{$hostel->category->name ?? ""}}</td>
                            <td class="text-center">
                                @php
                                    $requestCount = \App\Models\saveUser::where('hostel_id', $hostel->id)->count();
                                @endphp
                                <span class="badge badge-light-primary fs-7 fw-bold">{{ $requestCount }}</span>
                                @if(Auth::user()->email == 'fasanyafemi@gmail.com' && $requestCount > 0)
                                <a href="{{ route('hostel_requests_admin', $hostel->id) }}" class="btn btn-sm btn-light-info mt-1" style="font-size: 0.7rem; padding: 0.2rem 0.5rem;">View</a>
                                @endif
                            </td>
                            @if(Auth::user()->email == 'fasanyafemi@gmail.com')
                            <td>
                                <form method='post' action='/updateHostelPhone' class="d-flex align-items-center">@csrf
                                    <input type='hidden' name='id' value='{{$hostel->id}}'/>
                                    <input value='{{$hostel->phone}}' type='phone' name='phone' class='form-control form-control-sm form-control-solid-custom me-2' style="width:130px"/>
                                    <button class='btn btn-dark btn-sm' type='submit'>Update</button>
                                </form>
                            </td>
                            @endif
                            <td><a class='btn btn-icon btn-light-success btn-sm' href='tel:{{$hostel->user->phone}}'><i class="bi bi-telephone-fill"></i></a></td>
                            <td><a class='btn btn-icon btn-light-info btn-sm' href='/cthostel/{{ $hostel->slug }}/{{ $hostel->id }}'><i class="bi bi-eye-fill"></i></a></td>
                            <td data-date="{{ date('Y-m-d', strtotime($hostel->created_at)) }}">{{ date('jS \o\f F, Y', strtotime($hostel->created_at)) }}</td>
                            @if(Auth::user()->email == 'fasanyafemi@gmail.com')
                            <td class="text-end pe-4"><a class='btn btn-icon btn-light-primary btn-sm' href='/generateQRCode/{{ $hostel->id }}'><i class="bi bi-qr-code"></i></a></td>
                            @endif
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