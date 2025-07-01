@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
        <h2 style="color: #8b4513; margin: 0;">📖 Daftar Buku</h2>
        <a href="{{ route('books.create') }}" class="btn btn-primary">+ Tambah Buku Baru</a>
    </div>

    @if($books->count() > 0)
        <div style="overflow-x: auto;">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Tahun Terbit</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $index => $book)
                    <tr>
                        <td>{{ $books->firstItem() + $index }}</td>
                        <td><strong>{{ $book->title }}</strong></td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->published_year }}</td>
                        <td>Rp {{ number_format($book->price, 0, ',', '.') }}</td>
                        <td>
                            <div class="actions">
                                <a href="{{ route('books.show', $book) }}" class="btn btn-secondary" style="font-size: 12px; padding: 8px 12px;">👁️ Lihat</a>
                                <a href="{{ route('books.edit', $book) }}" class="btn btn-primary" style="font-size: 12px; padding: 8px 12px;">✏️ Edit</a>
                                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display: inline;" onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="font-size: 12px; padding: 8px 12px;">🗑️ Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="pagination">
            {{ $books->links() }}
        </div>
    @else
        <div style="text-align: center; padding: 50px; color: #a0522d;">
            <h3>📚 Belum ada buku dalam koleksi</h3>
            <p>Mulai tambahkan buku pertama Anda!</p>
            <a href="{{ route('books.create') }}" class="btn btn-primary" style="margin-top: 15px;">+ Tambah Buku Pertama</a>
        </div>
    @endif
</div>
@endsection