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
                                <div class="row px-5">
                                    <div class="col-6">
                                        <span class="text-bold text-lg">Social Media Links</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        @if($socialMediaLinks)
                                            <a href="{{ route('admin.social.media.create') }}" class="btn btn-primary">Edit</a>
                                        @else
                                            <a href="{{ route('admin.social.media.create') }}" class="btn btn-success">Add</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    {{-- <h2>Social Media Links</h2> --}}

                                    <ul class="list-group">
                                        @if($socialMediaLinks)
                                            <li class="list-group-item"><strong class="ml-5">YouTube:</strong> <a href="{{ $socialMediaLinks?->youTube }}">{{ $socialMediaLinks?->youTube }}</a></li>
                                            <li class="list-group-item"><strong class="ml-5">Instagram:</strong> <a href="{{ $socialMediaLinks?->instagram }}">{{ $socialMediaLinks?->instagram }}</a></li>
                                            <li class="list-group-item"><strong class="ml-5">Facebook:</strong> <a href="{{ $socialMediaLinks?->facebook }}">{{ $socialMediaLinks?->facebook }}</a></li>
                                            <li class="list-group-item"><strong class="ml-5">LinkedIn:</strong> <a href="{{ $socialMediaLinks?->linkedin }}">{{ $socialMediaLinks?->linkedin }}</a></li>
                                        @else
                                        <li class="list-group-item"><strong>YouTube:</strong> {{ $socialMediaLinks?->youTube }}</li>
                                        <li class="list-group-item"><strong>Instagram:</strong> {{ $socialMediaLinks?->instagram }}</li>
                                        <li class="list-group-item"><strong>Facebook:</strong> {{ $socialMediaLinks?->facebook }}</li>
                                        <li class="list-group-item"><strong>LinkedIn:</strong> {{ $socialMediaLinks?->linkedin }}</li>
                                        @endif
                                    </ul>
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
