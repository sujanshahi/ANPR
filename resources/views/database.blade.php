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
                <h3 class="card-title">3000 Records</h3>

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
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Plate Number</th>
                      <th>Type</th>
                      <th>Date</th>
                      <th>TimeStamp</th>
                      <th>Image</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>180</td>
                      <td>Ba3Kha1717</td>
                      <td>Commercial</td>
                      <td>11-8-2021</td>
                      <td>11:00:34</td>
                      <td><img src=""><i class="fas fa-ellipsis-v float-right mt-1 text-secondary"></i></td>
                    </tr>
                    <tr>
                    <td>181</td>
                      <td>Ba3Kha1717</td>
                      <td>Commercial</td>
                      <td>11-8-2021</td>
                      <td>11:00:34</td>
                      <td><img src=""><i class="fas fa-ellipsis-v float-right mt-1 text-secondary"></i></td>
                    </tr>
                    <tr>
                    <td>182</td>
                      <td>Ba3Kha1717</td>
                      <td>Commercial</td>
                      <td>11-8-2021</td>
                      <td>11:00:34</td>
                      <td><img src=""><i class="fas fa-ellipsis-v float-right mt-1 text-secondary"></i></td>
                    </tr>
                    <tr>
                    <td>183</td>
                      <td>Ba3Kha1717</td>
                      <td>Commercial</td>
                      <td>11-8-2021</td>
                      <td>11:00:34</td>
                      <td><img src=""><i class="fas fa-ellipsis-v float-right mt-1 text-secondary"></i></td>
                    </tr>
                    <tr>
                    <td>184</td>
                      <td>Ba3Kha1717</td>
                      <td>Commercial</td>
                      <td>11-8-2021</td>
                      <td>11:00:34</td>
                      <td><img src=""><i class="fas fa-ellipsis-v float-right mt-1 text-secondary"></i></td>
                    </tr>
                    <tr>
                    <td>185</td>
                      <td>Ba3Kha1717</td>
                      <td>Commercial</td>
                      <td>11-8-2021</td>
                      <td>11:00:34</td>
                      <td><img src=""><i class="fas fa-ellipsis-v float-right mt-1 text-secondary"></i></td>
                    </tr>
                    <tr>
                    <td>186</td>
                      <td>Ba3Kha1717</td>
                      <td>Commercial</td>
                      <td>11-8-2021</td>
                      <td>11:00:34</td>
                      <td><img src=""><i class="fas fa-ellipsis-v float-right mt-1 text-secondary"></i></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card-tools float-right">
                <ul class="pagination pagination-sm float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
            </div>
          </div>
            
        </div>

@endsection