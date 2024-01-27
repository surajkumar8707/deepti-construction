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

    <div class="form-group">
        <label for="photo">Select Multiple Images</label>
        <input type="file" id="photo" name="photo[]" class="form-control" accept="images" multiple required>
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
    </script>

</form>
