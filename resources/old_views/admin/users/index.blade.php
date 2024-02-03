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
                                <span class="text-bold text-lg">User</span>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered datatable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $k => $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        {{-- <a href="" data-id="{{ $user->id }}"
                                                            class="btn btn-primary btn-sm user_btn" data-toggle="modal"
                                                            data-target="#data-show">
                                                            <i class="fa fa-eye"></i>
                                                        </a> --}}

                                                        <a href="#" class="block-account btn btn-danger btn-sm ml-1">
                                                            {{-- <i class="fa fa-trash" aria-hidden="true"></i> --}}
                                                            {{__('Block')}}
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- card end --}}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
