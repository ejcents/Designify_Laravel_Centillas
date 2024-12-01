@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h1 class="text-center mb-4">Create Design</h1>

    <form action="{{ route('designs.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Design Name</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" required></textarea>
    </div>
    <div>
        <label for="image_url">Image URL</label>
        <input type="text" name="image_url" id="image_url" required>
    </div>
    <button type="submit">Create Design</button>
</form>
</div>

@endsection
