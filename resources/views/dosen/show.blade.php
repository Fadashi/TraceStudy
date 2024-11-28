@extends('layout.layout')
@section('title', 'Halaman Dosen | Detail Alumni')
@section('content')
<div class="page-content">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dosen.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('dosen.alumni') }}">Alumni</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Alumni</li>
        </ol>
    </nav>
    <section class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detail Alumni</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('dosen.alumni.update', $alumni->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $alumni->nama }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" value="{{ $alumni->nim }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="prodi" class="form-label">Program Studi</label>
                            <input type="text" class="form-control" id="prodi" name="prodi" value="{{ $alumni->prodi }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="angkatan" class="form-label">Angkatan</label>
                            <input type="number" class="form-control" id="angkatan" name="angkatan" value="{{ $alumni->angkatan }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status" required>
                                <option value="bekerja" {{ $alumni->status == 'bekerja' ? 'selected' : '' }}>Bekerja</option>
                                <option value="tidak bekerja" {{ $alumni->status == 'tidak bekerja' ? 'selected' : '' }}>Tidak Bekerja</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="institusi" class="form-label">Institusi</label>
                            <input type="text" class="form-control" id="institusi" name="institusi" value="{{ $alumni->institusi }}">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save"></i> Simpan
                        </button>
                        <a href="{{ route('dosen.alumni') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection