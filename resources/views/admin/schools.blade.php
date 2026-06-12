@extends(auth()->user()->email == 'fasanyafemi@gmail.com' ? 'layouts.superadmin_master' : 'layouts.dashboard_master')

@section('dashboard_content')
<div id="kt_content_container" class="container-fluid px-0">
    <!--begin::Row-->
    <div class="g-5 gx-xxl-8">
        <!--begin::Tables Widget 10-->
        <div class="card">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h4>All Schools ({{ count($schools) }})</h4>
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createSchoolModal">
                        <i class="bi bi-plus-lg"></i> Add New School
                    </button>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="table-responsive">
                <table id='datatable' class="table table-custom align-middle gs-0 gy-4">
                    <thead>
                        <tr class="fw-bold text-muted bg-light">
                            <th class="ps-4 min-w-150px rounded-start">School Name</th>
                            <th class="min-w-150px">Image</th>
                            <th class="min-w-150px">Date Added</th>
                            <th class="min-w-125px text-end pe-4 rounded-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($schools as $school)
                        <tr>
                            <td class="ps-4">
                                <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $school->name }}</span>
                            </td>
                            <td>
                                @if($school->image)
                                <img src="/schoolimage/{{$school->image}}" alt="{{$school->name}}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 8px;">
                                @else
                                <span class="badge badge-light-secondary">No Image</span>
                                @endif
                            </td>
                            <td data-date="{{ date('Y-m-d', strtotime($school->created_at)) }}">{{ date('jS \o\f F, Y', strtotime($school->created_at)) }}</td>
                            <td class="text-end pe-4">
                                <button type="button" class="btn btn-icon btn-light-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editSchoolModal{{$school->id}}"><i class="bi bi-pencil"></i></button>
                                <a href="/deleteschool?id={{$school->id}}" class="btn btn-icon btn-light-danger btn-sm" onclick="return confirm('Are you sure you want to delete this school?')"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>

                        <!-- Edit School Modal -->
                        <div class="modal fade" id="editSchoolModal{{$school->id}}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit School</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="post" action="/editschool" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <input type="hidden" name="id" value="{{$school->id}}">
                                            <div class="mb-3">
                                                <label class="form-label">School Name</label>
                                                <input type="text" name="name" class="form-control" value="{{$school->name}}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">School Image (Optional)</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Update School</button>
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

<!-- Create School Modal -->
<div class="modal fade" id="createSchoolModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New School</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="{{route('storeSchool')}}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">School Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">School Image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create School</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
