@extends('layouts.app')

@section('content')

<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ခေါင်းစဉ်</th>
                <th>စာရေးသူ</th>
                <th>ထုတ်ဝေသည့်နှစ်</th>
                <th>လုပ်ဆောင်ချက်များ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->publication_year }}</td>
                    <td>
                        <a href="/books/{{ $book->id }}/edit" class="btn btn-sm btn-primary">ပြင်ဆင်ရန်</a>
                        <form action="/books/{{ $book->id }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">ဖျက်ရန်</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<a href="/books/create" class="btn btn-primary">စာအုပ်အသစ်ထည့်ပါ</a>

@endsection