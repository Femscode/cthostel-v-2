@extends('admin.master')
@section('content')

<div id="kt_content_container" class="container">
    <!--begin::Row-->
    <div class="g-5 gx-xxl-8">
        <!--begin::Tables Widget 10-->
        <div class="card">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h4>All Students</h4>
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
                <table id='datatable'
                    class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="border-0">

                            <th><b>Name</b></th>
                            <th><b>Phone</b></th>
                            <th><b>Hostel Name</b></th>
                            <th><b>Agent</b></th>
                            <th><b>Date</b></th>
                            <th><b>Action</b></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        @foreach($students as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->phone}}</td>
                            <td> {{ $user->school->name ?? "" }} |{{$user->hostel->name ?? ""}}</td>
                            <td><a href='https://wa.me/234{{ substr($user->agent->phone ?? "000000", 1) }}'>{{ $user->agent->name ?? "not-provided" }}</a></td>
                            <td>{{ date('jS \o\f F, Y', strtotime($user->created_at)) }}</td>

                            <td>
                                <a class='btn btn-info btn-sm' href='tel:{{$user->phone}}'>Call</a>
                                <a class='btn btn-success btn-sm' href='https://wa.me/234{{substr($user->phone,1)}}'>Message</a>
                            
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                    <!--end::Table body-->
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