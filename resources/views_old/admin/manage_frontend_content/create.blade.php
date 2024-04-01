<form class="manage-content-form" action="{{ route('admin.manage.front.end.content.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="main_heading">Enter Main Heading</label>
                <input type="text" id="main_heading" name="main_heading" class="form-control" placeholder="Enter main heading" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="sub_heading">Enter Sub Heading</label>
                <input type="text" id="sub_heading" name="sub_heading" class="form-control" placeholder="Enter sub heading" required>
            </div>
        </div>
    </div>

    {{-- <div class="form-group">
        <label for="photo">Select Multiple Images</label>
        <input type="file" id="photo" name="photo[]" class="form-control" accept="images" multiple required>
    </div> --}}

    <div class="accordion accordion-flush mb-3" id="multipleImages">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-multipleImages" aria-expanded="false" aria-controls="flush-multipleImages">
              Add Frontend Image
            </button>
          </h2>
          <div id="flush-multipleImages" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#multipleImages">
            <div class="accordion-body">
                <div class="text-end">
                    <span class="btn btn-primary" id="add-afi-button">Add Image</span>
                </div>

                <div class="main-afi-container">

                </div>
            </div>
          </div>
        </div>
    </div>


    <div class="accordion accordion-flush mb-3" id="accordionFlushExample">
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

                <div class="main-faq-container"></div>
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

    $('span#add-afi-button').click(function(){
        var index_afi = $('div.main-afi-container').find('.afi-container').length;
        var count_afi =index_afi;
        count_afi++;
        var afi_container = `
            <div class="afi-container afi_container`+ index_afi +`">
                <hr>
                <h6>Enter FAQ `+ count_afi +`</h6>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="img_title[]" placeholder="Enter Title" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="img_description[]" placeholder="Enter description" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="file" class="form-control" name="img_images[]" placeholder="Enter description" required>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="button" data-id="`+ index_afi +`" class="delete-afi btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        `;
        $('div.main-afi-container').append(afi_container);
        $('.delete-afi').click(function () {
            var delete_id = $(this).data('id');
            $('.afi_container' + delete_id).remove();
        });
    });

    </script>

</form>
