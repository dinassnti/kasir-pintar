@extends('layouts.app')

@section('title', 'Tambah Diskon')

@section('content')
<div class="container mt-4">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">Tambah Diskon</h1>
    </div>

    <!-- Form Section -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Form Tambah Diskon</h4>
        </div>
        <div class="card-body">
            <!-- Form to Add Discount -->
            <form action="{{ route('diskon.store') }}" method="POST">
                @csrf

                <!-- Nama Diskon -->
                <div class="mb-3">
                    <label for="nama_diskon" class="form-label">Nama Diskon</label>
                    <input type="text" class="form-control @error('nama_diskon') is-invalid @enderror" id="nama_diskon" name="nama_diskon" value="{{ old('nama_diskon') }}" required>
                    @error('nama_diskon')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Persentase -->
                <div class="mb-3">
                    <label for="persentase" class="form-label">Persentase</label>
                    <input type="number" class="form-control @error('persentase') is-invalid @enderror" id="persentase" name="persentase" value="{{ old('persentase') }}" step="0.01">
                    @error('persentase')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Nominal -->
                <div class="mb-3">
                    <label for="nominal" class="form-label">Nominal</label>
                    <input type="number" class="form-control @error('nominal') is-invalid @enderror" id="nominal" name="nominal" value="{{ old('nominal') }}" step="0.01">
                    @error('nominal')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tanggal Mulai -->
                <div class="mb-3">
                    <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                    <input type="date" class="form-control @error('tanggal_mulai') is-invalid @enderror" id="tanggal_mulai" name="tanggal_mulai" value="{{ old('tanggal_mulai') }}" required>
                    @error('tanggal_mulai')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tanggal Berakhir -->
                <div class="mb-3">
                    <label for="tanggal_berakhir" class="form-label">Tanggal Berakhir</label>
                    <input type="date" class="form-control @error('tanggal_berakhir') is-invalid @enderror" id="tanggal_berakhir" name="tanggal_berakhir" value="{{ old('tanggal_berakhir') }}" required>
                    @error('tanggal_berakhir')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Simpan Diskon
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection