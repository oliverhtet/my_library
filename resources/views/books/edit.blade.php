@extends('layouts.app')

@section('content')

<h1>စာအုပ် ပြင်ဆင်ရန်</h1>
<div class="row g-2">
    <div class="col-md-6">
        <form method="POST" action="/books/{{ $book->id }}" class="card p-4">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">ခေါင်းစဉ်:</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ $book->title }}" required>
            </div>

            <div class="mb-3">
                <label for="author" class="form-label">စာရေးသူ:</label>
                <input type="text" id="author" name="author" class="form-control" value="{{ $book->author }}" required>
            </div>

            <div class="mb-3">
                <label for="publication_year" class="form-label">ထုတ်ဝေသည့်နှစ်:</label>
                <input type="number" id="publication_year" name="publication_year" class="form-control" value="{{ $book->publication_year }}" required>
            </div>

            <button type="submit" class="btn btn-primary">သိမ်းဆည်းပါ</button>
        </form>
    </div>
</div>
@endsection