@extends('layouts.app')

@section('title', $book->title)

@section('content')
<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
        <h2 style="color: #8b4513; margin: 0;">📖 Detail Buku</h2>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">← Kembali</a>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 30px; align-items: start;">
        <div style="background: rgba(139, 69, 19, 0.05); padding: 20px; border-radius: 10px; border-left: 4px solid #8b4513;">
            <h3 style="color: #8b4513; margin-bottom: 15px;">📚 Informasi Buku</h3>
            <div style="margin-bottom: 10px;">
                <strong>Judul:</strong><br>
                <span style="color: #a0522d;">{{ $book->title }}</span>
            </div>
            <div style="margin-bottom: 10px;">
                <strong>Penulis:</strong><br>
                <span style="color: #a0522d;">{{ $book->author }}</span>
            </div>
            <div style="margin-bottom: 10px;">
                <strong>Tahun Terbit:</strong><br>
                <span style="color: #a0522d;">{{ $book->published_year }}</span>
            </div>
            <div>
                <strong>Harga:</strong><br>
                <span style="color: #8b4513; font-size: 1.2em; font-weight: 600;">Rp {{ number_format($book->price, 0, ',', '.') }}</span>
            </div>
        </div>

        <div>
            <h3 style="color: #8b4513; margin-bottom: 15px;">📄 Deskripsi</h3>
            @if($book->description)
                <p style="color: #5d4e37; line-height: 1.8; background: rgba(255, 255, 255, 0.7); padding: 20px; border-radius: 8px; border: 1px solid #e8dcc0;">
                    {{ $book->description }}
                </p>
            @else
                <p style="color: #a0522d; font-style: italic;">Tidak ada deskripsi untuk buku ini.</p>
            @endif

            <div style="display: flex; gap: 15px; margin-top: 25px;">
                <a href="{{ route('books.edit', $book) }}" class="btn btn-primary">✏️ Edit Buku</a>
                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display: inline;" onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">🗑️ Hapus Buku</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection