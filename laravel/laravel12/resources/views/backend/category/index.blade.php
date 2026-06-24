@extends('backend.master')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="mb-0">Categories</h4>
                    <a href="{{ route('category.create') }}" class="btn btn-primary">Add Category</a>
                </div>
                <p class="text-muted">Category list will appear here.</p>
            </div>
        </div>
    </div>
@endsection
