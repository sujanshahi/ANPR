@extends('layouts.app')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Database</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Database</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



    <!-- /.row -->
    <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{ $count = \DB::table('plates')->count(); }} Records</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-primary">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <tr>
                    <th>No</th>
                    <th>Plate Number</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Plate Image</th>
                </tr>
                @foreach ($plates as $plate)
                    <tr>
                        <td>{{ $plate->id }}</td>
                        <td>{{ $plate->plate_number }}</td>
                        <td>{{ $plate->type }}</td>
                        <td>{{ $plate->created_at }}</td>
                        <td>{{ $plate->updated_at }}</td>
                        <!-- <td>{{ $plate->plate_image }}</td> -->
                        <td><img src="data:image/jpg;base64,{{ chunk_split(base64_encode($plate->plate_image)) }}" width="100px;"> <i class="fas fa-ellipsis-v float-right mt-1 text-dark"></i></td>
                    </tr>
                @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="row d-felx justify-content ml-auto">

            {{ $plates->links() }}

        </div>
            <!-- /.card -->
            
          </div>
            
        </div>

@endsection