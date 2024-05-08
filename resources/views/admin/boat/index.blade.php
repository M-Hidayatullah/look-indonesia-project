@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 justify-content-between d-flex">
                    <h1 class="m-0">{{ __('Boat') }}</h1>
                    <a href="{{ route('admin.boats.create') }}" class="btn btn-primary btn-sm"> <i class="fa fa-plus"></i> </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Cabin</th>
                                        <th>Capacity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($boats as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>
                                            <a href="{{ Storage::url($data->image) }}" target="_blank">
                                                <img src="{{ Storage::url($data->image) }}" width="100" height="auto" alt="image-boat">
                                            </a>
                                        </td>
                                        <td>{{ $data->cabin }}</td>
                                        <td>{{ $data->capacity }}</td>
                                        <td>
                                            <a href="{{ route('admin.boats.edit', [$data]) }}" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> </a>
                                            <form onclick="return confirm('are you sure ?');" class="d-inline-block" action="{{ route('admin.boats.destroy', [$data]) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer clearfix">
                            {{ $boats->links() }}
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
