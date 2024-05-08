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
                    <div class="card">
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Images</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($travel_package->galleries as $gallery)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $gallery->name }}</td>
                                        <td>
                                            <a href="{{ Storage::url($gallery->images) }}" target="_blank">
                                                Preview Image
                                                <img width="10" src="{{ Storage::url($gallery->images) }}" alt="{{ $gallery->name }}">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.travel_packages.galleries.edit', [$travel_package,$gallery]) }}" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> </a>
                                            <form onclick="return confirm('are you sure ?');" class="d-inline-block" action="{{ route('admin.travel_packages.galleries.destroy', [$travel_package,$gallery]) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="4">No Data Available.</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            {{ $galleries->links() }}
                        </div>

                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Boat Name</th>
                                        <th>Category Trip</th>
                                        <th>Images Boats</th>
                                        <th>Cabins</th>
                                        <th>Capacity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($travel_package->boats as $boat)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $boat->name }}</td>
                                        <td>{{ $boat->boat_name }}</td>
                                        <td>{{ $boat->jenis_trip }}</td>
                                        <td>
                                            <a href="{{ Storage::url($boat->images) }}" target="_blank">
                                                Preview Image Boats
                                                <img width="10" src="{{ Storage::url($boat->images) }}" alt="{{ $boat->name }}">
                                            </a>
                                        </td>
                                        <td>{{ $boat->cabins }}</td>
                                        <td>{{ $boat->capacity }}</td>
                                        <td>
                                            <a href="{{ route('admin.travel_packages.boats.edit', [$travel_package,$boat]) }}" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> </a>
                                            <form onclick="return confirm('are you sure ?');" class="d-inline-block" action="{{ route('admin.travel_packages.boats.destroy', [$travel_package,$boat]) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="4">No Data Available.</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            {{ $boats->links() }}
                        </div>

                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card p-3">
                        <h3 class="text-center">Image Trip Destinations</h3>
                        <form method="post" action="{{ route('admin.travel_packages.galleries.store', [$travel_package]) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row border-bottom pb-4">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name" placeholder="example: Komodo">
                                </div>
                            </div>

                            <div class="form-group row border-bottom pb-4">
                                <label for="images" class="col-sm-2 col-form-label">Images</label>
                                <div class="col-sm-10">
                                <input type="file" class="form-control" name="images" value="{{ old('images') }}" id="images">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Save Image Trip Destinations</button>
                        </form>
                    </div>

                    <div class="card p-3">
                        <h3 class="text-center">Add Boats Trip</h3>
                        <form method="post" action="{{ route('admin.travel_packages.boats.store', [$travel_package]) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row border-bottom pb-4">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name" placeholder="example: Silver..">
                                </div>
                            </div>

                            <div class="form-group row border-bottom pb-4">
                                <label for="boat_name" class="col-sm-2 col-form-label">Boat Name</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="boat_name" value="{{ old('boat_name') }}" id="boat_name" placeholder="example: Silver-01 dst..">
                                </div>
                            </div>

                            <div class="form-group row border-bottom pb-4">
                                <label for="jenis_trip" class="col-sm-2 col-form-label">Category Trip</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="jenis_trip" id="jenis_trip" value="{{ old('jenis_trip') }}" placeholder="example: OPEN TRIP">
                                </div>
                            </div>

                            <div class="form-group row border-bottom pb-4">
                                <label for="images" class="col-sm-2 col-form-label">Images Boats</label>
                                <div class="col-sm-10">
                                <input type="file" class="form-control" name="images" value="{{ old('images') }}" id="images">
                                </div>
                            </div>

                            <div class="form-group row border-bottom pb-4">
                                <label for="cabins" class="col-sm-2 col-form-label">Cabins</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="cabins" id="cabins" value="{{ old('cabins') }}" placeholder="example: 11 Cabins">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="capacity" class="col-sm-2 col-form-label">Capacity</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="capacity" id="capacity" value="{{ old('capacity') }}" placeholder="example: 6 person">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Save Boats</button>
                        </form>
                    </div>




                    <div class="card p-3">
                        <form method="post" action="{{ route('admin.travel_packages.update', [$travel_package]) }}">
                            @csrf
                            @method('put')
                            <div class="form-group row border-bottom pb-4">
                                <label for="type" class="col-sm-2 col-form-label">Type</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="type" value="{{ old('type', $travel_package->type) }}" id="type" placeholder="example: 4D5N">
                                </div>
                            </div>
                            {{--  <div class="form-group row border-bottom pb-4">
                                <label for="boats_id" class="col-sm-2 col-form-label">Boats</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="boats_id" id="boats_id">
                                        @foreach($boat as $data)
                                            <option {{ ($travel_package->data && $travel_package->data->id === $data->id) ? 'selected' : '' }} value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="trips_id" class="col-sm-2 col-form-label">Jenis Trip</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="trips_id" id="trips_id">
                                        @foreach($trip as $data)
                                        <option {{ ($travel_package->data && $travel_package->data->id === $data->id) ? 'selected' : '' }} value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>  --}}
                            <div class="form-group row border-bottom pb-4">
                                <label for="Location" class="col-sm-2 col-form-label">Location</label>
                                <div class="col-sm-10">
                                <input text="text" class="form-control" id="Location" name="location" value="{{ old('location', $travel_package->location) }}" placeholder="example: Bali, Indonesia">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="price" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                <input class="form-control" id="price" name="price" value="{{ old('price', $travel_package->price) }}" placeholder="example: 300">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" name="type" id="description" cols="30" rows="7" placeholder="Description text...">{{ old('description', $travel_package->description) }}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection


@section('styles')
<style>
.ck-editor__editable_inline {
    min-height: 200px;
}
</style>
@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
<script>

    var price = document.getElementById('price');
    price.addEventListener('keyup', function(e)
    {
        price.value = formatRupiah(this.value, 'Rp. ');
    });

    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }

    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
