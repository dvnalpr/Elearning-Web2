@extends('layouts.app')

@section('title', 'Edit Buku: ' . $book->title)

@section('content')
<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
        <h2 style="color: #8b4513; margin: 0;">✏️ Edit Buku</h2>
        <a href="{{ route('books.show', $book) }}" class="btn btn-secondary">← Kembali</a>
    </div>

    @if($errors->any())
        <div class="alert" style="background: #f8d7da; color: #721c24; border-left-color: #dc3545;">
            <strong>Terdapat kesalahan:</strong>
            <ul style="margin: 10px 0 0 20px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="title">📖 Judul Buku</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $book->title) }}" required>
        </div>

        <div class="form-group">
            <label for="author">✍️ Penulis</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ old('author', $book->author) }}" required>
        </div>

        <div class="form-group">
            <label for="description">📄 Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $book->description) }}</textarea>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div class="form-group">
                <label for="published_year">📅 Tahun Terbit</label>
                <input type="number" class="form-control" id="published_year" name="published_year" value="{{ old('published_year', $book->published_year) }}" min="1900" max="{{ date('Y') }}" required>
            </div>

            <div class="form-group">
                <label for="price">💰 Harga (Rp)</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $book->price) }}" step="0.01" min="0" required>
            </div>
        </div>

        <div style="display: flex; gap: 15px; margin-top: 30px;">
            <button type="submit" class="btn btn-success">💾 Update Buku</button>
            <a href="{{ route('books.show', $book) }}" class="btn btn-secondary">❌ Batal</a>
        </div>
    </form>
</div>
@endsection