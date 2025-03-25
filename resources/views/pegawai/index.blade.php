@extends('layouts/app')
@section('content')

<div class="container mt-5">
        <h1>Staf Pegawai</h1>
        <a href="{{ route('pegawai.create') }}" class="btn btn-primary mb-3">Tambah Pegawai</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                   

                    <!-- DataTales Example -->
                    <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Pegawai</th>
                    <th>Nama Pegawai</th>
                    <th>Bagian Kerja</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1?>
                @foreach ($pegawai as $pegawai)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $pegawai->kodepegawai }}</td>
                        <td>{{ $pegawai->namapegawai }}</td>
                        <td>{{ $pegawai->kerja_bagian }}</td>
                        <td>
                            <a href="{{ route('pegawai.show', $pegawai->kodepegawai) }}" class="btn btn-info btn-sm">Lihat</a>
                            <a href="{{ route('pegawai.edit', $pegawai->kodepegawai) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('pegawai.destroy', $pegawai->kodepegawai) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin Menghapus Data Tersebut?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @endsection

   