@extends(auth()->user()->email == 'fasanyafemi@gmail.com' ? 'layouts.superadmin_master' : 'layouts.dashboard_master')

@section('dashboard_content')
<div id="kt_content_container" class="container-fluid px-0">
    <!--begin::Row-->
    <div class="g-5 gx-xxl-8">
        <!--begin::Tables Widget 10-->
        <div class="card">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h4>All Locations ({{ count($locations) }})</h4>
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createLocationModal">
                        <i class="bi bi-plus-lg"></i> Add New Location
                    </button>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="table-responsive">
                <table id='datatable' class="table table-custom align-middle gs-0 gy-4">
                    <thead>
                        <tr class="fw-bold text-muted bg-light">
                            <th class="ps-4 min-w-150px rounded-start">Location Name</th>
                            <th class="min-w-150px">School</th>
                            <th class="min-w-150px">Date Added</th>
                            <th class="min-w-125px text-end pe-4 rounded-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($locations as $location)
                        <tr>
                            <td class="ps-4">
                                <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $location->name }}</span>
                            </td>
                            <td>
                                <span class="badge badge-light-primary fw-bold">{{ $location->school->name ?? 'N/A' }}</span>
                            </td>
                            <td data-date="{{ date('Y-m-d', strtotime($location->created_at)) }}">{{ date('jS \o\f F, Y', strtotime($location->created_at)) }}</td>
                            <td class="text-end pe-4">
                                <button type="button" class="btn btn-icon btn-light-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editLocationModal{{$location->id}}"><i class="bi bi-pencil"></i></button>
                                <a href="/deletelocation?id={{$location->id}}" class="btn btn-icon btn-light-danger btn-sm" onclick="return confirm('Are you sure you want to delete this location?')"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>

                        <!-- Edit Location Modal -->
                        <div class="modal fade" id="editLocationModal{{$location->id}}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Location</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="post" action="/editlocation">
                                        @csrf
                                        <div class="modal-body">
                                            <input type="hidden" name="id" value="{{$location->id}}">
                                            <div class="mb-3">
                                                <label class="form-label">Location Name</label>
                                                <input type="text" name="name" class="form-control" value="{{$location->name}}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">School</label>
                                                <select name="school_id" class="form-select" required>
                                                    @foreach(\App\Models\schools::all() as $school)
                                                    <option value="{{$school->id}}" {{$location->school_id == $school->id ? 'selected' : ''}}>{{$school->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Update Location</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Tables Widget 10-->
    </div>
    <!--end::Row-->
</div>

<!-- Create Location Modal -->
<div class="modal fade" id="createLocationModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Location</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="{{route('storeLocation')}}">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Location Name</label>
                        <input type="text" name="name" class="form-control" required placeholder="Name of location">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">School</label>
                        <select name="school_id" class="form-select" required>
                            <option value="" disabled selected>Select a school</option>
                            @foreach(\App\Models\schools::all() as $school)
                            <option value="{{$school->id}}">{{$school->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create Location</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
