@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 d-flex justify-content-between">
                    <h1 class="m-0">{{ __('Form Edit') }}</h1>
                    <a href="{{ route('admin.travel_packages.index') }}" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> </a>
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
                    <div class="card p-3">
                        <form method="post" action="{{ route('admin.travel_packages.boats.update', [$travel_package,$boat]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group row border-bottom pb-4">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" value="{{ old('name', $boat->name) }}" id="name" placeholder="example: Silver">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="boat_name" class="col-sm-2 col-form-label">Boat Name</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="boat_name" value="{{ old('boat_name', $boat->boat_name) }}" id="boat_name" placeholder="example: Silver-01">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="jenis_trip" class="col-sm-2 col-form-label">Category Trip</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="jenis_trip" value="{{ old('jenis_trip', $boat->jenis_trip) }}" id="jenis_trip" placeholder="example: Open Trip">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="image" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control" id="image">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="cabins" class="col-sm-2 col-form-label">Cabins</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="cabins" value="{{ old('cabins', $boat->cabins) }}" id="cabins" placeholder="example: 6 Cabins">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="capacity" class="col-sm-2 col-form-label">Capacity</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="capacity" value="{{ old('capacity', $boat->capacity) }}" id="capacity" placeholder="example: 6 person">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
