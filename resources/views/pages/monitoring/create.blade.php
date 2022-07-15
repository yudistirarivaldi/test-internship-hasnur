@extends('layouts.default')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Data Monitoring</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
                        <li class="breadcrumb-item"><a href="?page=lokasiread">Monitoring</a></li>
                        <li class="breadcrumb-item">Tambah Data</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Monitoring</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('monitoring.store') }}">
                    @csrf

                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label for="client">Client</label>
                        <input type="text" class="form-control" name="client">
                    </div>

                    <div class="form-group">
                        <label for="project_leader">Project Leader</label>
                        <input type="text" class="form-control" name="project_leader">
                    </div>

                    <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input type="date" class="form-control" name="start_date">
                    </div>

                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="date" class="form-control" name="end_date">
                    </div>

                    <div class="form-group">
                        <label for="progress">Progress</label>
                        <input type="text" class="form-control" name="progress">
                    </div>

                    <a href="{{ route('monitoring.index') }}" class="btn btn-danger btn-sm float-right">
                        <i class="fa fa-times"></i> Batal
                    </a>
                    <button type="submit" class="btn btn-success btn-sm float-right">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
