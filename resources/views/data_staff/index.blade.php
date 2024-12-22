@extends('layouts.app')

@section('title', 'Data Staff')

@section('content')
<div class="container mt-4">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">Data Staff</h1>
        <!-- Add Staff Button -->
        <a href="{{ route('data_staff.create') }}" class="btn btn-success shadow-sm">
            <i class="bi bi-plus-circle"></i> Tambah Staff
        </a>
    </div>

    <!-- Table Section -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Daftar Staff</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 5%">No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Nomor Telepon</th>
                            <th>Alamat</th>
                            <th>Level Akses</th>
                            <th>Status</th>
                            <th style="width: 20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dataStaff as $staff)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $staff->nama }}</td>
                            <td>{{ $staff->email }}</td>
                            <td>{{ $staff->no_telepon }}</td>
                            <td class="text-truncate" style="max-width: 250px;">{{ $staff->alamat }}</td>
                            <td>{{ $staff->level_akses }}</td>
                            <td>
                                @if ($staff->status_aktif)
                                    <span class="badge bg-success">Aktif</span>
                                @else
                                    <span class="badge bg-secondary">Tidak Aktif</span>
                                @endif
                            </td>
                            <td>
                                <!-- Edit Button -->
                                <a href="{{ route('data_staff.edit', $staff->id_data_staff) }}" class="btn btn-warning btn-sm me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Staff">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <!-- Delete Form -->
                                <form action="{{ route('data_staff.destroy', $staff->id_data_staff) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus staff ini?')" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Staff">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted">Belum ada staff yang tersedia.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Initialize Bootstrap tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>
@endpush
