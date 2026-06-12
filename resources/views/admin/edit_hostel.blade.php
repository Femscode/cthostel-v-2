@extends('layouts.dashboard_master')

@section('page_title', 'Edit Hostel')

@section('dashboard_content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card glass-card p-6" style="background-color: #ffffff !important;">
            <div class="border-0 pb-3">
                <h2 class="text-dark fw-bold">Edit Hostel: {{ $album->name }}</h2>
            </div>
            <div class="py-4">
                <form id="edit_hostel_form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="album_id" name="id" value="{{ $album->id }}">
                    <div class="row g-5 mb-5">
                        <div class="col-md-6">
                            <label class="required text-dark fw-bold mb-2">Hostel Name</label>
                            <input type="text" id="name" name="name" value="{{ $album->name }}" required class="form-control form-control-solid-custom" />
                        </div>
                        <div class="col-md-6">
                            <label class="required text-dark fw-bold mb-2">Price (per year)</label>
                            <input type="number" id="price" name="price" value="{{ $album->price }}" required class="form-control form-control-solid-custom" />
                        </div>
                    </div>

                    <div class="row g-5 mb-5">
                        <div class="col-md-6">
                            <label class="required text-dark fw-bold mb-2">Hostel Type</label>
                            <select name="hostel_type" id="hostel_type" required class="form-select form-control-solid-custom">
                                <option value="Single Room" {{ $album->hostel_type == 'Single Room' ? 'selected' : '' }}>Single Room</option>
                                <option value="Self-Contain" {{ $album->hostel_type == 'Self-Contain' ? 'selected' : '' }}>Self-Contain</option>
                                <option value="1 Bedroom Flat" {{ $album->hostel_type == '1 Bedroom Flat' ? 'selected' : '' }}>1 Bedroom Flat</option>
                                <option value="2 Bedroom Flat" {{ $album->hostel_type == '2 Bedroom Flat' ? 'selected' : '' }}>2 Bedroom Flat</option>
                                <option value="3 Bedroom Flat" {{ $album->hostel_type == '3 Bedroom Flat' ? 'selected' : '' }}>3 Bedroom Flat</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="required text-dark fw-bold mb-2">Institution</label>
                            <select name="school_id" id="sch_id" required class="form-select form-control-solid-custom">
                                <option value="">Select Institution</option>
                                @foreach ($schools as $sch)
                                <option value="{{ $sch->id }}" {{ $sch->id == $album->school_id ? 'selected' : '' }}>{{ $sch->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-5">
                        @php
                        $descArray = explode(', ', $album->description ?? '');
                        @endphp
                        <label class="required text-dark fw-bold mb-3">Resources Available</label>
                        <div class="row g-3">
                            <div class="col-md-4 col-sm-6">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input resource-checkbox" type="checkbox" value="Water Supply" id="res_water" {{ in_array('Water Supply', $descArray) ? 'checked' : '' }} />
                                    <label class="form-check-label text-dark" for="res_water">Water Supply</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input resource-checkbox" type="checkbox" value="Wardrobe" id="res_wardrobe" {{ in_array('Wardrobe', $descArray) ? 'checked' : '' }} />
                                    <label class="form-check-label text-dark" for="res_wardrobe">Wardrobe</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input resource-checkbox" type="checkbox" value="Kitchen Cabinet" id="res_kitchen" {{ in_array('Kitchen Cabinet', $descArray) ? 'checked' : '' }} />
                                    <label class="form-check-label text-dark" for="res_kitchen">Kitchen Cabinet</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input resource-checkbox" type="checkbox" value="Generator" id="res_generator" {{ in_array('Generator', $descArray) ? 'checked' : '' }} />
                                    <label class="form-check-label text-dark" for="res_generator">Generator</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input resource-checkbox" type="checkbox" value="Hostel Fence" id="res_fence" {{ in_array('Hostel Fence', $descArray) ? 'checked' : '' }} />
                                    <label class="form-check-label text-dark" for="res_fence">Hostel Fence</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <label class="required text-dark fw-bold mb-2">Specific Area/Location</label>
                        <select name="category_id" id="category_id" required class="form-select form-control-solid-custom">
                            <option value="">Select Location</option>
                            @foreach ($category as $cat)
                            <option value="{{ $cat->id }}" {{ $cat->id == $album->category_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-5 p-4 rounded" style="background-color: #f8f9fa; border: 1px dashed #ccc;">
                        <h4 class="text-dark fw-bold mb-3">Main Cover Image</h4>
                        @if($album->image)
                        <div class="mb-3">
                            <img src="{{ asset('hostelimage/'.$album->image) }}" alt="Cover Image" class="img-fluid rounded shadow-sm" style="max-height: 150px; object-fit: cover;">
                        </div>
                        @endif
                        <label class="text-dark fw-bold mb-2">Replace Cover Image (Optional)</label>
                        <input type="file" id="cover_image" name="cover_image" accept="image/*" class="form-control form-control-solid-custom" />
                        <span class="fs-9 text-muted d-block mt-1">If you select a new file, the current cover image will be replaced.</span>
                    </div>

                    <div class="mb-5 p-4 rounded" style="background-color: #f8f9fa; border: 1px dashed #ccc;">
                        <h4 class="text-dark fw-bold mb-3">Gallery Images</h4>
                        @if(count($gallery) > 0)
                        <div class="row g-3 mb-4">
                            @foreach($gallery as $img)
                            <div class="col-md-3 col-sm-4 text-center" id="gallery-img-{{ $img->id }}">
                                <div class="position-relative">
                                    <img src="{{ asset('images/'.$img->image) }}" class="img-fluid rounded shadow-sm mb-2" style="height: 100px; width: 100%; object-fit: cover;">
                                    <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-1 delete-gallery-btn" data-id="{{ $img->id }}" style="padding: 2px 6px;">
                                        <i class="bi bi-trash fs-7"></i>
                                    </button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @else
                        <p class="text-muted fs-7">No additional gallery images.</p>
                        @endif

                        <label class="text-dark fw-bold mb-2">Add More Gallery Images</label>
                        <input type="file" id="gallery_images" name="gallery_images[]" accept="image/*" multiple class="form-control form-control-solid-custom" />
                        <span class="fs-9 text-muted d-block mt-1">Select multiple images to add them to your existing gallery.</span>
                    </div>

                    <div class="mb-6 p-4 rounded" style="background-color: #f8f9fa; border: 1px dashed #ccc;">
                        <h4 class="text-dark fw-bold mb-3">Hostel Video</h4>
                        @if($album->video)
                        <div class="mb-3">
                            <span class="badge badge-light-success">Video uploaded</span>
                        </div>
                        @endif
                        <label class="text-dark fw-bold mb-2">Replace Hostel Video (Optional)</label>
                        <input type="file" id="video" name="video" accept="video/mp4" class="form-control form-control-solid-custom" />
                        <span class="fs-9 text-muted d-block mt-1">Uploading a new video will replace the current one.</span>
                    </div>

                    <div class="text-center mt-8">
                        <a href="/my-hostels" class="btn btn-brand-secondary text-dark me-3">Cancel</a>
                        <button type="submit" id="update_hostel" class="btn btn-brand-primary">Update Hostel</button>
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
        // Delete Gallery Image logic
        $('.delete-gallery-btn').on('click', function() {
            var btn = $(this);
            var imageId = btn.data('id');

            Swal.fire({
                title: 'Are you sure?',
                text: "This image will be deleted permanently.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('delete.gallery.image') }}",
                        type: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            id: imageId
                        },
                        success: function(response) {
                            if (response.status === 'success') {
                                $('#gallery-img-' + imageId).fadeOut();
                                Swal.fire('Deleted!', 'The image has been removed.', 'success');
                            }
                        },
                        error: function() {
                            Swal.fire('Error!', 'Could not delete image.', 'error');
                        }
                    });
                }
            });
        });

        // =============================================
        // SUBMIT: UPDATE HOSTEL
        // =============================================
        $("#edit_hostel_form").submit(async function(e) {
            e.preventDefault();

            // Set flag to warn on tab close
            window.isUploading = true;
            window.onbeforeunload = function() {
                if (window.isUploading) {
                    return "Upload in progress. Are you sure you want to leave?";
                }
            };

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            let progressToast = Toast.fire({
                icon: 'info',
                title: 'Updating Hostel... 0%',
                text: 'Please do not close this tab.',
                showCloseButton: false,
                timerProgressBar: true,
                timer: false
            });

            var fd = new FormData();
            fd.append('id', $("#album_id").val());
            fd.append('name', $("#name").val());
            fd.append('hostel_type', $("#hostel_type").val());

            // Collect selected multi description items
            var descVals = [];
            $('.resource-checkbox:checked').each(function() {
                descVals.push($(this).val());
            });
            if (descVals.length === 0) {
                window.isUploading = false;
                window.onbeforeunload = null;
                Swal.fire({
                    icon: 'warning',
                    title: 'Required Field',
                    text: 'Please select at least one available resource.',
                    confirmButtonColor: '#089A49'
                });
                return;
            }
            for (var i = 0; i < descVals.length; i++) {
                fd.append('description[]', descVals[i]);
            }

            fd.append('price', $("#price").val());
            fd.append('category_id', $("#category_id").val());
            fd.append('school_id', $("#sch_id").val());

            var coverFile = $('#cover_image')[0].files;
            if (coverFile.length > 0) {
                fd.append('cover_image', coverFile[0]);
            }

            var galleryFiles = $('#gallery_images')[0].files;
            for (var i = 0; i < galleryFiles.length; i++) {
                fd.append('gallery_images[]', galleryFiles[i]);
            }

            var videoFiles = $("#video")[0].files;
            if (videoFiles.length > 0) {
                fd.append('video', videoFiles[0]);
            }

            $.ajax({
                type: 'POST',
                url: "{{ route('update.album') }}",
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function(evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = Math.round(evt.loaded / evt.total * 100);
                            Swal.update({
                                title: "Updating Hostel... " + percentComplete + "%",
                                text: 'Please do not close this tab.'
                            });
                        }
                    }, false);
                    return xhr;
                },
                success: (data) => {
                    window.isUploading = false;
                    window.onbeforeunload = null;
                    Swal.close();
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Hostel updated successfully.',
                        confirmButtonColor: '#089A49'
                    }).then(() => {
                        window.location.reload();
                    });
                },
                error: function(data) {
                    window.isUploading = false;
                    window.onbeforeunload = null;
                    Swal.close();
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Failed to update hostel.',
                        confirmButtonColor: '#089A49'
                    });
                }
            });
        });
    });
</script>
@endsection