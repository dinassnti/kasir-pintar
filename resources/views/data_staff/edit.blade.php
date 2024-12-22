@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="h3 mb-3">Edit Data Staff</h1>

    <form action="{{ route('data_staff.update', $staff->id_data_staff) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Nama Staff -->
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Staff</label>
            <input type="text" name="nama" id="nama" class="form-control shadow-sm @error('nama') is-invalid @enderror" value="{{ old('nama', $staff->nama) }}" required>
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control shadow-sm @error('email') is-invalid @enderror" value="{{ old('email', $staff->email) }}" required readonly>
        </div>

        <!-- Nomor Telepon -->
        <div class="mb-3">
            <label for="no_telepon" class="form-label">Nomor Telepon</label>
            <input type="text" name="no_telepon" id="no_telepon" class="form-control shadow-sm @error('no_telepon') is-invalid @enderror" value="{{ old('no_telepon', $staff->no_telepon) }}" required>
            @error('no_telepon')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Alamat -->
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control shadow-sm @error('alamat') is-invalid @enderror" rows="4" required>{{ old('alamat', $staff->alamat) }}</textarea>
            @error('alamat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Posisi -->
        <div class="mb-3">
            <label for="posisi" class="form-label">Posisi</label>
            <select name="posisi" id="posisi" class="form-control shadow-sm @error('posisi') is-invalid @enderror" required>
                <option value="">Pilih Level Akses</option>
                <option value="kasir" {{ old('level_akses', $staff->posisi) === 'kasir' ? 'selected' : '' }}>Kasir</option>
            </select>
            @error('posisi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Tombol Simpan -->
        <div class="text-end">
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Perbarui
            </button>
        </div>
    </form>
</div>
@endsection

@section('styles')
<style>
    .form-control {
        transition: all 0.3s ease-in-out;
    }
    .form-control:focus {
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
        border-color: #268fff;
    }

    .form-control-plaintext {
        font-weight: bold;
        font-size: 1rem;
        color: #495057;
    }

    .btn:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transform: translateY(-2px);
    }

    .hover-shadow-lg:hover {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .invalid-feedback {
        font-size: 0.875rem;
        margin-top: 5px;
    }

    .container {
        background-color: #f9f9f9;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .text-muted {
        font-style: italic;
        font-size: 0.95rem;
    }
</style>
@endsection
