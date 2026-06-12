@extends('layouts.dashboard_master')

@section('page_title', 'My Hostels')

@section('dashboard_content')
<div class="card glass-card p-6">
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-4 mb-6">
        <div>
            <h3 class="text-dark fw-bold mb-1">Manage Hostels</h3>
            <p class="text-muted mb-0">Create, edit, view, and manage your student hostel listings.</p>
        </div>
        <a href="/add-hostel" class="btn btn-brand-primary">
            <i class="bi bi-plus-lg me-2"></i> Create New Hostel
        </a>
    </div>

    <!-- Hostels DataTable (Desktop View) -->
    <div class="table-responsive d-none d-md-block">
        <table id="datatable" class="table table-custom align-middle table-row-dashed fs-6 gy-5 w-100">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Thumbnail</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Location</th>
                    <th scope="col">Images</th>
                    <th scope="col">Video</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Active</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($album as $index => $hostel)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        <a href="/cthostel/{{ $hostel->slug }}/{{ $hostel->id }}" target="_blank">
                            <img src="{{ $hostel->image }}"
                                alt="{{ $hostel->name }}"
                                style="height: 60px; width: 60px; object-fit: cover; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.1);" />
                        </a>
                    </td>
                    <td class="fw-bold">
                        <a href="/cthostel/{{ $hostel->slug }}/{{ $hostel->id }}" target="_blank" class="text-dark text-decoration-none text-hover-primary">
                            {{ $hostel->name }}
                        </a>
                    </td>
                    <td class="text-muted text-truncate" style="max-width: 150px;">{{ $hostel->description }}</td>
                    <td class="text-success fw-bold">₦{{ number_format($hostel->price) }}</td>
                    <td class="text-muted">
                        {{ $hostel->school->name ?? 'N/A' }} <br />
                        <span class="fs-8 text-muted">{{ $hostel->category->name ?? 'N/A' }}</span>
                    </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-brand-secondary text-white py-1 px-2 text-nowrap upload-images-btn"
                            data-bs-toggle="modal" data-bs-target="#kt_modal_create_api_key" data-id="{{ $hostel->id }}">
                            <i class="bi bi-images me-1"></i> Images
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-brand-secondary text-white py-1 px-2 text-nowrap update-video-btn"
                            data-bs-toggle="modal" data-bs-target="#video_modal" data-id="{{ $hostel->id }}">
                            <i class="bi bi-play-btn-fill me-1"></i> Video
                        </button>
                    </td>
                    <td>
                        <a href="/edit-hostel/{{ $hostel->id }}" class="btn btn-sm btn-brand-secondary text-white py-1 px-2">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </td>
                    <td>
                        <div class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input status_id h-20px w-30px" type="checkbox" data-id="{{ $hostel->id }}"
                                @if($hostel->status == 1) checked="checked" @endif />
                        </div>
                    </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-danger py-1 px-2 delete-hostel-btn" data-id="{{ $hostel->id }}">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Hostels Cards (Mobile View) -->
    <div class="d-block d-md-none">
        @if(count($album) > 0)
        @foreach ($album as $hostel)
        <div class="card mb-4 shadow-sm border-0 rounded-3 position-relative overflow-hidden" style="background-color: #f8f9fa;">
            <div class="row g-0">
                <div class="col-4 position-relative">
                    <a href="/cthostel/{{ $hostel->slug }}/{{ $hostel->id }}" target="_blank" class="d-block h-100">
                        <img src="{{ $hostel->image }}"
                            class="img-fluid h-100 w-100" style="object-fit: cover;" alt="{{ $hostel->name }}">
                    </a>
                    @if($hostel->status == 1)
                    <span class="badge bg-success text-white position-absolute top-0 start-0 m-1 fs-9 px-1" style="pointer-events: none;">Live</span>
                    @else
                    <span class="badge bg-secondary text-white position-absolute top-0 start-0 m-1 fs-9 px-1" style="pointer-events: none;">Offline</span>
                    @endif
                </div>
                <div class="col-8">
                    <div class="card-body p-3">
                        <div class="d-flex justify-content-between align-items-start mb-1">
                            <h5 class="card-title fw-bold mb-0 text-truncate" style="max-width: 140px; font-size: 0.95rem;">
                                <a href="/cthostel/{{ $hostel->slug }}/{{ $hostel->id }}" target="_blank" class="text-dark text-decoration-none">
                                    {{ $hostel->name }}
                                </a>
                            </h5>
                            <div class="form-check form-switch form-check-custom form-check-solid m-0 p-0">
                                <input class="form-check-input status_id h-20px w-30px m-0" type="checkbox" data-id="{{ $hostel->id }}"
                                    @if($hostel->status == 1) checked="checked" @endif />
                            </div>
                        </div>
                        <p class="text-success fw-bold mb-1 fs-7">₦{{ number_format($hostel->price) }}</p>
                        <p class="text-muted fs-8 mb-2 lh-sm text-truncate">
                            <i class="bi bi-geo-alt-fill text-brand-primary"></i>
                            {{ $hostel->school->name ?? 'N/A' }} - {{ $hostel->category->name ?? 'N/A' }}
                        </p>

                        <div class="d-flex flex-wrap gap-2 mt-2">
                            <button type="button" class="btn btn-sm btn-brand-secondary text-white py-1 px-2 upload-images-btn" style="font-size: 0.7rem;"
                                data-bs-toggle="modal" data-bs-target="#kt_modal_create_api_key" data-id="{{ $hostel->id }}">
                                <i class="bi bi-images"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-brand-secondary text-white py-1 px-2 update-video-btn" style="font-size: 0.7rem;"
                                data-bs-toggle="modal" data-bs-target="#video_modal" data-id="{{ $hostel->id }}">
                                <i class="bi bi-play-btn-fill"></i>
                            </button>
                            <a href="/edit-hostel/{{ $hostel->id }}" class="btn btn-sm btn-brand-secondary text-white py-1 px-2" style="font-size: 0.7rem;">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-danger py-1 px-2 delete-hostel-btn" style="font-size: 0.7rem;" data-id="{{ $hostel->id }}">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="text-center py-5">
            <p class="text-muted">You have not created any hostels yet.</p>
        </div>
        @endif
    </div>
</div>


<!-- ============================================= -->
<!-- MODAL: ADD/MANAGE GALLERY IMAGES -->
<!-- ============================================= -->
<div class="modal fade" id="kt_modal_create_api_key" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content glass-card p-6" style="background-color: #ffffff !important;">
            <div class="modal-header border-0 pb-3">
                <h2 class="text-dark fw-bold">Manage Gallery Images</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-4">
                <form id="kt_modal_create_api_key_form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="hostelimage" name="id" value="" />

                    <div class="mb-6">
                        <label class="required text-dark fw-bold mb-2">Upload Additional Images</label>
                        <input type="file" id="upload_file" name="file[]" accept="image/*" multiple required class="form-control form-control-solid-custom" />
                        <span class="fs-9 text-muted">You can select multiple photos at once.</span>
                    </div>

                    <div class="mb-6">
                        <label class="text-dark fw-bold mb-3">Already Uploaded Images</label>
                        <div id="uploadedimagediv" class="d-flex flex-wrap gap-3 p-3 rounded" style="background-color: rgba(0, 0, 0, 0.05); min-height: 100px;">
                            <!-- Dynamically loaded gallery items -->
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="button" class="btn btn-brand-secondary text-dark me-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" id="kt_modal_create_api_key_submit" class="btn btn-brand-primary">Upload Images</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ============================================= -->
<!-- MODAL: MANAGE VIDEO -->
<!-- ============================================= -->
<div class="modal fade" id="video_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-600px">
        <div class="modal-content glass-card p-6" style="background-color: #ffffff !important;">
            <div class="modal-header border-0 pb-3">
                <h2 class="text-dark fw-bold">Hostel Video</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-4">
                <form id="create_video" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="hostel_video_id" name="id" value="" />

                    <!-- Live Video View -->
                    <div class="mb-6 video_div text-center" style="display:none;">
                        <video class="video_src rounded w-100" style="max-height: 300px;" controls>
                            <source src="" type="video/mp4" />
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <div class="mb-6 no_video_div text-center">
                        <div class="p-6 rounded border border-dashed border-secondary" style="background-color: rgba(0, 0, 0, 0.05);">
                            <i class="bi bi-film fs-1 text-muted"></i>
                            <p class="text-muted mt-2 mb-0">No video uploaded for this hostel yet.</p>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="required text-dark fw-bold mb-2">Upload/Replace Video</label>
                        <input type="file" id="hostel_video_file" name="video" accept="video/mp4" required class="form-control form-control-solid-custom" />
                    </div>

                    <div class="text-center">
                        <button type="button" class="btn btn-brand-secondary text-dark me-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-brand-primary">Upload Video</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

@section('dashboard_scripts')
<script>
    $(document).ready(function() {
        // Initialize DataTables
        var oTable = $('#datatable').DataTable({
            responsive: true,
            autoWidth: false,
            language: {
                searchPlaceholder: "Search hostels...",
                search: ""
            }
        });


        // =============================================
        // MULTI-IMAGES GALLERY UPLOAD & VIEW
        // =============================================
        $('.upload-images-btn').on('click', function() {
            var id = $(this).data('id');
            $("#hostelimage").val(id);
            $("#uploadedimagediv").html('<div class="text-center w-100 p-4"><div class="spinner-border text-success" role="status"></div></div>');

            $.get("{{ route('loaduploadedimages') }}?id=" + id, function(data) {
                $("#uploadedimagediv").empty();
                if (data.length === 0) {
                    $("#uploadedimagediv").append('<div class="text-muted p-4 text-center w-100">No additional images uploaded.</div>');
                } else {
                    for (var i = 0; i < data.length; i++) {
                        var imgPath = data[i].image;
                        var itemHtml = `
                            <div class="position-relative gallery-preview-item" style="width: 100px; height: 100px;">
                                <button type="button" class="btn btn-danger btn-sm p-1 position-absolute top-0 end-0 deleteuploaded" data-id="${data[i].id}" style="z-index:10; border-radius: 50%; width: 22px; height: 22px; line-height: 12px;">
                                    &times;
                                </button>
                                <img src="${imgPath}" class="w-100 h-100 rounded" style="object-fit: cover; border: 1px solid rgba(255,255,255,0.15);" />
                            </div>
                        `;
                        $("#uploadedimagediv").append(itemHtml);
                    }
                }
            });
        });

        // Delete gallery image handler
        $(document).on("click", ".deleteuploaded", function() {
            var id = $(this).data('id');
            var el = this;

            Swal.fire({
                title: 'Confirm Delete',
                text: 'Are you sure you want to remove this image from the gallery?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Yes, Delete',
                cancelButtonColor: '#3085d6'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.get("{{ route('deleteuploadedimages') }}?id=" + id, function(data, status) {
                        if (status === "success") {
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted',
                                text: 'Image successfully deleted.',
                                confirmButtonColor: '#089A49',
                                timer: 1500,
                                showConfirmButton: false
                            });
                            $(el).closest(".gallery-preview-item").remove();
                        }
                    });
                }
            });
        });

        // Submit multi-images upload
        $("#upload_file").on('change', function(e) {
            var count = e.target.files.length;
            var files = Array.from(e.target.files);

            $("#kt_modal_create_api_key_form").off('submit').on('submit', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Uploading Images...',
                    html: 'Please wait.',
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                var id = $("#hostelimage").val();
                var fd = new FormData();
                fd.append('id', id);
                files.forEach(file => {
                    fd.append('file[]', file);
                });

                $.ajax({
                    type: 'POST',
                    url: "../uploadImage",
                    data: fd,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        Swal.fire({
                            icon: 'success',
                            title: 'Uploaded!',
                            text: 'Gallery images added successfully.',
                            confirmButtonColor: '#089A49'
                        }).then(() => {
                            window.location.reload();
                        });
                    },
                    error: function(data) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'Upload failed. Image sizes might be too large.',
                            confirmButtonColor: '#089A49'
                        });
                    }
                });
            });
        });

        // =============================================
        // PROMO VIDEO MANAGEMENT
        // =============================================
        $('.update-video-btn').on('click', function() {
            var id = $(this).data('id');
            $("#hostel_video_id").val(id);
            $('.video_div').hide();
            $('.no_video_div').show();

            $.get("{{ route('loadvideo') }}?id=" + id, function(data) {
                if (data && data !== 'null') {
                    $('.no_video_div').hide();
                    $('.video_div').show();
                    $('.video_src source').attr('src', data);
                    $('.video_src')[0].load();
                }
            });
        });

        // Submit Video Upload
        $("#create_video").submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Uploading Video...',
                html: 'Uploading, please wait.',
                allowOutsideClick: false,
                showConfirmButton: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            var fd = new FormData();
            fd.append('id', $("#hostel_video_id").val());
            fd.append('video', $("#hostel_video_file")[0].files[0]);

            $.ajax({
                type: 'POST',
                url: "{{ route('uploadvideo') }}",
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Video updated successfully.',
                        confirmButtonColor: '#089A49'
                    }).then(() => {
                        window.location.reload();
                    });
                },
                error: function(data) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Video upload failed. Check the file size and format.',
                        confirmButtonColor: '#089A49'
                    });
                }
            });
        });



        // =============================================
        // AJAX: ACTIVE STATUS TOGGLE
        // =============================================
        $(".status_id").click(function() {
            var id = $(this).data('id');
            var isChecked = $(this).is(':checked');

            if (isChecked) {
                $.get("{{ route('statusenable') }}?id=" + id, function(data) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Hostel Enabled',
                        text: 'This hostel is now available to students.',
                        confirmButtonColor: '#089A49',
                        timer: 1500,
                        showConfirmButton: false
                    });
                });
            } else {
                $.get("{{ route('statusdisable') }}?id=" + id, function(data) {
                    Swal.fire({
                        icon: 'info',
                        title: 'Hostel Disabled',
                        text: 'This hostel is no longer listed.',
                        confirmButtonColor: '#089A49',
                        timer: 1500,
                        showConfirmButton: false
                    });
                });
            }
        });

        // =============================================
        // AJAX: DELETE HOSTEL
        // =============================================
        $('.delete-hostel-btn').on('click', function() {
            var id = $(this).data('id');
            var el = this;

            Swal.fire({
                title: 'Confirm Delete',
                text: 'Are you sure you want to delete this hostel listing?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Yes, Delete',
                cancelButtonColor: '#3085d6'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.get("{{ route('destroy.album') }}?id=" + id, function(data, status) {
                        if (status === "success") {
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted',
                                text: 'Hostel listing removed.',
                                confirmButtonColor: '#089A49'
                            });
                            $(el).closest("tr").remove();
                        }
                    });
                }
            });
        });
    });
</script>
@endsection