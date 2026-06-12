@extends('layouts.dashboard_master')

@section('dashboard_content')
<div id="kt_content_container" class="container-fluid px-0">
    <div class="g-5 gx-xxl-8">
        <div class="card">
            <div class="card-header border-0 pt-5">
                <h4>My Handled Requests ({{ $requests->total() ?? count($requests) }})</h4>
            </div>

            <div class="table-responsive">
                <table id='datatable' class="table table-custom align-middle gs-0 gy-4">
                    <thead>
                        <tr class="fw-bold text-muted bg-light">
                            <th class="ps-4 min-w-150px rounded-start">Student Name</th>
                            <th class="min-w-125px">Phone</th>
                            <th class="min-w-150px">Hostel & School</th>
                            <th class="min-w-125px">Date Requested</th>
                            <th class="min-w-125px text-end pe-4 rounded-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($requests as $req)
                        <tr>
                            <td class="ps-4">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-40px me-3">
                                        <img src="{{ $req->profilePic ? $req->profilePic : 'https://cthostel.com/myimages/cbanner.jpg' }}" alt="" style="object-fit: cover; border-radius: 8px;" />
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $req->name }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>{{$req->phone}}</td>
                            <td>
                                <span class="d-block fw-bold text-dark">{{ $req->album->name ?? "N/A" }}</span>
                                <span class="text-muted fs-7">{{ $req->school->name ?? "N/A" }}</span>
                            </td>
                            <td data-date="{{ date('Y-m-d', strtotime($req->created_at)) }}">{{ date('jS \o\f F, Y', strtotime($req->created_at)) }}</td>
                            <td class="text-end pe-4">
                                <a class='btn btn-icon btn-light-info btn-sm me-1' href='tel:{{$req->phone}}'><i class="bi bi-telephone-fill"></i></a>
                                <a class='btn btn-icon btn-light-success btn-sm' href='https://wa.me/234{{substr($req->phone,1)}}'><i class="bi bi-whatsapp"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            @if($requests instanceof \Illuminate\Pagination\LengthAwarePaginator && $requests->hasPages())
            <div class="card-footer">
                {{ $requests->links() }}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
