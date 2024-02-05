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
                                        <span class="text-bold text-lg">Quote Request</span>
                                    </div>
                                    <div class="col-6 text-right"></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Interest</th>
                                                    <th>Message</th>
                                                    <th>Requested On</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @forelse ($quotes as $key => $quote)
                                                    <tr>
                                                        <td>{{ ++$key }}</td>
                                                        <td>{{ $quote?->first_name }}</td>
                                                        <td>{{ $quote?->last_name }}</td>
                                                        <td>{{ $quote?->phone }}</td>
                                                        <td>{{ $quote?->email }}</td>
                                                        <td>{{ $quote?->interest }}</td>
                                                        <td>{{ $quote?->interest }}</td>
                                                        <td>{{ date('d M Y', strtotime($quote?->created_at)) }}</td>
                                                        <td><a class="btn btn-primary" href="#">View</a></td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <th class="text-center small bg-light" colspan="9">No one can contact!</th>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                        <div class="contact-pagination">
                                            {{ $quotes->links() }}
                                        </div>
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
