
{{-- resources/views/admin/manage_content/edit.blade.php --}}
{{-- @dd($manage_content->toArray()) --}}
<div class="header">
    Edit Frontend Content
</div>
<form class="manage-content-form mt-1 mb-5" action="{{ route('admin.manage.front.end.content.update', $manage_content->id) }}" method="POST" enctype="multipart/form-data">
    @csrf {{-- Use the PUT method for updates --}}
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="main_heading">Enter Main Heading</label>
                <input type="text" id="main_heading" name="main_heading" value="{{ old('main_heading', $manage_content->main_heading) }}" class="form-control" placeholder="Enter main heading" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="sub_heading">Enter Sub Heading</label>
                <input type="text" id="sub_heading" name="sub_heading" value="{{ old('sub_heading', $manage_content->sub_heading) }}" class="form-control" placeholder="Enter sub heading" required>
            </div>
        </div>
    </div>

    <div class="form-group border p-2">
        <label for="photo">Select Multiple Images</label>
        <input type="file" id="photo" name="photo[]" class="form-control" accept="images" multiple>

        <div class="image-gallery-container">
            <div class="row">
                @forelse ($manage_content->frontendImages as $key => $image)
                    <div class="col-md-6 col-lg-4 my-3">
                        <img width="100%" src="{{ asset($image->photo) }}" alt="Gallery Image {{ ++$key }}">
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>

    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Add Frequently Asked Questions (FAQ)
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="text-end">
                        <span class="btn btn-primary" id="add-faq-button">Add FAQ</span>
                    </div>

                    <div class="main-faq-container">
                        @forelse ($manage_content->faqs as $key => $faq)
                            <div class="faq-container faq_container{{ ++$key }}">
                                <hr>
                                <h6>Enter FAQ {{ $key }}</h6>
                                <div class="row">
                                    <input type="hidden" name="faq_ids[]" value="{{ $faq->id }}">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{ old('question.'.$key, $faq->question) }}" name="question[]" placeholder="Enter question" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{ old('description.'.$key, $faq->description) }}" name="description[]" placeholder="Enter description" required>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <button type="button" data-faq_id="{{ $faq->id }}" data-id="{{ $key }}" class="delete-db-faq btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Save</button>

    <script>
        $('span#add-faq-button').click(function(){
            var index_faq = $('div.main-faq-container').find('.faq-container').length;
            var count_faq =index_faq;
            count_faq++;
            var faq_container = `
                <div class="faq-container faq_container`+ index_faq +`">
                    <hr>
                    <h6>Enter FAQ `+ count_faq +`</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="question[]" placeholder="Enter question" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="description[]" placeholder="Enter description" required>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="button" data-id="`+ index_faq +`" class="delete-faq btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            `;
            $('div.main-faq-container').append(faq_container);
            $('.delete-faq').click(function () {
                var delete_id = $(this).data('id');
                $('.faq_container' + delete_id).remove();
            });
        });

        // $('.delete-db-faq').click(function () {
        //     var delete_id = $(this).data('id');
        //     var faq_id = $(this).data('faq_id');
        //     $('.faq_container' + delete_id).remove();
        //     $.ajax({
        //         type: "GET",
        //         data: {
        //             'faq_id': faq_id,
        //         },
        //         url: base_url + '/admin/manage-front-end-content/delete-faq-detail/' + faq_id,
        //         beforeSend: function(){
        //             $('div.main-loader-please-wait').show();
        //         },
        //         success: function(response){
        //             alert(response.message);
        //         },
        //         complete: function(){
        //             $('div.main-loader-please-wait').hide();
        //         },
        //     })
        // });
        $('.delete-db-faq').click(function () {
            var delete_id = $(this).data('id');
            var faq_id = $(this).data('faq_id');

            // Show a confirmation dialog
            var confirmDelete = confirm("Are you sure you want to delete this FAQ?");

            if (confirmDelete) {
                $.ajax({
                    type: "GET",
                    data: {
                        'faq_id': faq_id,
                    },
                    url: "{{ url('') }}" + '/admin/manage-front-end-content/delete-faq-detail/' + faq_id,
                    beforeSend: function(){
                        $('div.main-loader-please-wait').show();
                    },
                    success: function(response){
                        if(response.status == 'success'){
                            // If the user clicks OK, proceed with deletion
                            $('.faq_container' + delete_id).remove();
                        }
                        alert(response.message);
                    },
                    complete: function(){
                        $('div.main-loader-please-wait').hide();
                    },
                });
            } else {
                // If the user clicks Cancel, do nothing
                // You can add additional logic here if needed
            }
        });
        </script>

</form>
