@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Blog</div>

                <div class="card-body">
                    @foreach($listing_blog as $blog)
                    judul ; {{$blog->title}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
