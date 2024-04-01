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
                                <span class="text-bold text-lg">Social Media Links</span>
                            </div>
                            <div class="card-body">
                                {{-- <div class="container">

                                    <ul class="list-group">
                                        <li class="list-group-item"><strong>YouTube:</strong> {{ $socialMediaLinks?->youTube }}</li>
                                        <li class="list-group-item"><strong>Instagram:</strong> {{ $socialMediaLinks?->instagram }}</li>
                                        <li class="list-group-item"><strong>Facebook:</strong> {{ $socialMediaLinks?->facebook }}</li>
                                        <li class="list-group-item"><strong>LinkedIn:</strong> {{ $socialMediaLinks?->linkedin }}</li>
                                    </ul>
                                </div> --}}

                                <form action="{{ route('admin.social.media.storeOrUpdate') }}" method="post">
                                    @csrf

                                    <div class="form-group">
                                        @if($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="youTube">YouTube:</label>
                                        <input class="form-control" type="url" placeholder="Enter youTube link" name="youTube" value="{{ old('youTube', $socialMediaLinks->youTube ?? '') }}" />
                                        @error('youTube')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="instagram">Instagram:</label>
                                        <input class="form-control" type="url" placeholder="Enter instagram link" name="instagram" value="{{ old('instagram', $socialMediaLinks->instagram ?? '') }}" />
                                        @error('instagram')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="facebook">Facebook:</label>
                                        <input class="form-control" type="url" placeholder="Enter facebook link" name="facebook" value="{{ old('facebook', $socialMediaLinks->facebook ?? '') }}" />
                                        @error('facebook')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="linkedin">LinkedIn:</label>
                                        <input class="form-control" type="url" placeholder="Enter linkedin link" name="linkedin" value="{{ old('linkedin', $socialMediaLinks->linkedin ?? '') }}" />
                                        @error('linkedin')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a href="{{ route('admin.social.media.show') }}" class="btn btn-light">Cancel</a>
                                </form>
                            </div>
                        </div>
                        {{-- card end --}}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
