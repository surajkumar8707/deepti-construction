@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid pt-3">
                <div class="row">
                    <div class="col-12">
                        {{-- card start --}}
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <span class="text-bold text-lg">Manage Front End Content</span>
                                    </div>
                                    <div class="col-6 text-right"></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <div class="form-group">
                                        <label for="page_type">Select Page</label>
                                        <select class="form-control" id="page_type" name="page_type">
                                            <option value="">-- Select Page --</option>
                                            @if(count(config('enums.page_type')) > 0)
                                                @forelse (config('enums.page_type') as $key => $page_type)
                                                    <option value="{{ $key }}">{{ $page_type }}</option>
                                                @empty
                                                @endforelse
                                            @endif
                                        </select>
                                    </div>

                                    <div class="show-content">

                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- card end --}}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $('#page_type').change(function(){
            var $this = $(this);
            const page_type = $(this).val();
            const base_url = '{{ url('') }}';
            $.ajax({
                type:'GET',
                url: base_url + '/admin/manage-front-end-content/get-page-detail/' + page_type,
                beforeSend: function(){
                    $('div.main-loader-please-wait').show();
                },
                success: function(response){
                    if(response.status == 'success'){
                        $("div.show-content").html(response.html);
                        $("form.manage-content-form").append(`<input type="hidden" name="page_type" value="`+ page_type +`">`);
                    }
                    else{
                        alert(response.message);
                    }
                },
                complete: function(){
                    $('div.main-loader-please-wait').hide();
                },
            });
        });
    });
</script>
@endpush
