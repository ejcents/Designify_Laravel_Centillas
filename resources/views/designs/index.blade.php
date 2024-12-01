@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h1 class="mb-4">Designs</h1>
    <a href="{{ route('designs.create') }}" class="btn btn-primary mb-4">Create Design</a>
    <div class="row">
        @foreach($designs as $design)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ $design->image_url }}" class="card-img-top" alt="{{ $design->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $design->name }}</h5>
                        <p class="card-text">{{ Str::limit($design->description, 100) }}</p>
                        <td>
    <!-- Action buttons -->
    <a href="{{ route('designs.edit', $design->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('designs.destroy', $design->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</td>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
