@extends('layouts.default')

@section('content')
    <div class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Monitoring</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href=""> Home</a>
                        </li>
                        <li class="breadcrumb-item">Data Monitoring</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Monitoring</h3>
                <a href="{{ route('monitoring.create') }}" class="btn btn-success btn-sm float-right">
                    <i class="fa fa-plus-circle"></i> Tambah Data</a>
            </div>
            <div class="card-body">
                <table id="mytable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Client </th>
                            <th>Project Leader</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Progress</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($items as $item)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->client }}</td>
                                <td>{{ $item->project_leader }}</td>
                                <td>{{ $item->start_date }}</td>
                                <td>{{ $item->end_date }}</td>
                                <td>
                                    <div class="w3-light-grey">
                                        <div class="w3-container w3-green w3-center" style="width:{{ $item->progress }}">
                                            {{ $item->progress }}%</div>
                                    </div>
                                </td>
                                <td>

                                    <form action="{{ route('monitoring.destroy', $item->id) }}" method="POST">

                                        <a class="btn btn-primary btn-sm mr-1"
                                            href="{{ route('monitoring.edit', $item->id) }}">
                                            <i class="fa fa-edit"></i> Ubah
                                        </a>

                                        &nbsp;

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onClick="javascript: return confirm('Konfirmasi data akan dihapus?');">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button>

                                    </form>

                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
