@extends('layouts.dashboard_master')

@section('page_title', 'Add New Hostel')

@section('dashboard_content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card glass-card p-6" style="background-color: #ffffff !important;">
            <div class="border-0 pb-3">
                <h2 class="text-dark fw-bold">Add New Hostel</h2>
            </div>
            <div class="py-4">
                <div class="alert alert-warning bg-transparent border-warning border-dashed d-flex align-items-center mb-6 p-4">
                    <i class="bi bi-exclamation-triangle-fill text-warning fs-3 me-3"></i>
                    <div class="text-dark fs-7">
                        Input a student-friendly price to get contacts and bookings faster!
                    </div>
                </div>

                <form id="create_hostel_form" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-5 mb-5">
                        <div class="col-md-6">
                            <label class="required text-dark fw-bold mb-2">Hostel Name</label>
                            <input type="text" id="name" name="name" required class="form-control form-control-solid-custom" placeholder="e.g. Divine Grace Villa" />
                        </div>
                        <div class="col-md-6">
                            <label class="required text-dark fw-bold mb-2">Price (per year)</label>
                            <input type="number" id="price" name="price" required class="form-control form-control-solid-custom" placeholder="e.g. 150000" />
                        </div>
                    </div>

                    <div class="row g-5 mb-5">
                        <div class="col-md-6">
                            <label class="required text-dark fw-bold mb-2">Hostel Type</label>
                            <select name="hostel_type" id="hostel_type" required class="form-select form-control-solid-custom">
                                <option value="Single Room">Single Room</option>
                                <option value="Self-Contain">Self-Contain</option>
                                <option value="1 Bedroom Flat">1 Bedroom Flat</option>
                                <option value="2 Bedroom Flat">2 Bedroom Flat</option>
                                <option value="3 Bedroom Flat">3 Bedroom Flat</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="required text-dark fw-bold mb-2">Institution</label>
                            <select name="school_id" id="sch_id" required class="form-select form-control-solid-custom">
                                <option value="">Select Institution</option>
                                @foreach ($schools as $sch)
                                <option value="{{ $sch->id }}" @if($sch->id == $school_id) selected @endif>{{ $sch->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-5">
                        <label class="required text-dark fw-bold mb-3">Resources Available</label>
                        <div class="row g-3">
                            <div class="col-md-4 col-sm-6">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input resource-checkbox" type="checkbox" value="Water Supply" id="res_water" />
                                    <label class="form-check-label text-dark" for="res_water">Water Supply</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input resource-checkbox" type="checkbox" value="Wardrobe" id="res_wardrobe" />
                                    <label class="form-check-label text-dark" for="res_wardrobe">Wardrobe</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input resource-checkbox" type="checkbox" value="Kitchen Cabinet" id="res_kitchen" />
                                    <label class="form-check-label text-dark" for="res_kitchen">Kitchen Cabinet</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input resource-checkbox" type="checkbox" value="Generator" id="res_generator" />
                                    <label class="form-check-label text-dark" for="res_generator">Generator</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input resource-checkbox" type="checkbox" value="Hostel Fence" id="res_fence" />
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
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-5">
                        <label class="required text-dark fw-bold mb-2">Cover & Additional Images</label>
                        <input type="file" id="image" name="image[]" accept="image/*" multiple required class="form-control form-control-solid-custom" />
                        <span class="fs-9 text-muted d-block mt-1">Select multiple images at once. The first image will be used as the main cover.</span>
                    </div>

                    <div class="mb-6">
                        <label class="text-dark fw-bold mb-2">Hostel Video (Optional)</label>
                        <input type="file" id="video" name="video" accept="video/mp4" class="form-control form-control-solid-custom" />
                    </div>

                    <div class="text-center mt-8">
                        <a href="/my-hostels" class="btn btn-brand-secondary text-dark me-3">Cancel</a>
                        <button type="submit" id="create_hostel" class="btn btn-brand-primary">Submit Hostel</button>
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
        // =============================================
        // SUBMIT: CREATE HOSTEL
        // =============================================
        $("#create_hostel_form").submit(async function(e) {
            e.preventDefault();
            if ($('#image').val() === '' && $("#video").val() === '') {
                Swal.fire({
                    icon: 'info',
                    title: 'Image Required',
                    text: 'You must select a main cover image.',
                    confirmButtonColor: '#089A49'
                });
                return;
            }

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
                title: 'Uploading Hostel... 0%',
                text: 'Please do not close this tab.',
                showCloseButton: false,
                timerProgressBar: true,
                timer: false
            });

            var fd = new FormData();
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

            var files = $('#image')[0].files;
            for (var i = 0; i < files.length; i++) {
                fd.append('image[]', files[i]);
            }

            var videoFiles = $("#video")[0].files;
            if (videoFiles.length > 0) {
                fd.append('video', videoFiles[0]);
            }

            $.ajax({
                type: 'POST',
                url: "{{ route('album.store') }}",
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
                                title: "Uploading Hostel... " + percentComplete + "%",
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
                        text: 'Hostel created successfully.',
                        confirmButtonColor: '#089A49'
                    }).then(() => {
                        window.location.href = '/my-hostels';
                    });
                },
                error: function(data) {
                    window.isUploading = false;
                    window.onbeforeunload = null;
                    Swal.close();
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Failed to create hostel. Check fields and sizes.',
                        confirmButtonColor: '#089A49'
                    });
                }
            });
        });
    });
</script>
@endsection