@extends('layouts.app')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="row pt-1">
        <div class="col-md-6">
            <div id="container">
                <video autoplay="true" id="videoElement" controls>
                
                </video>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-6">
                    <!-- small card -->
                    <div class="small-box bg-warning bg-info">
                        <div class="inner">
                            <h3>1500</h3>

                            <p>Cars</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-6">
                    <!-- small card -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                            <p>New Bike</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-biking"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-6">
                    <!-- small card -->
                    <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>444</h3>

                        <p>Total Plates Today</p>
                    </div>
                    <div class="icon">
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
                </div>
            <!-- ./col -->
            <div class="col-6">
                    <!-- small card -->
                    <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Unique Plates</p>
                    </div>
                    <div class="icon">
                        <i class="fab">Out</i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </div>
            </div>
            </div>
        </div>
    </div>
    

    <div class="row">
        
                    <!-- LINE CHART -->
            <div class="col-6">
                <div class="card card-outlined-info">
                    <div class="card-header">
                        <h3 class="card-title">Line Chart</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                    <!-- /.card -->

           
            

            </div>
            <div class="col-6">
                 <!-- BAR CHART -->
                <div class="card card-outlined-success">
                    <div class="card-header">
                        <h3 class="card-title">Bar Chart</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                <!-- /.card-body -->
                </div>
            </div>
            
            <!-- /.card -->
        
            <!-- /.col -->
            <!-- /.row -->
    </div>
   
    
    <!-- /.row -->
    <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">New Records</h3>

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
        
        <!-- /.row -->
        <style>
            
    #videoElement {
        border-radius:1.1rem;
        width: 536px;
        height: 305px;
        background-color: #000000;
    }
    .bg-danger{
        background-color: #40c9ff;
        background-image: linear-gradient(135deg, #40c9ff 0%, #e81cff 100%);
    }
    .bg-warning{
        background-color: #00ff87;
        background-image: linear-gradient(116deg, #00ff87 0%, #60efff 100%);
    }
    .bg-success{
        background-color: #0061ff;
        background-image: linear-gradient(116deg, #0061ff 0%, #60efff 100%);
    }
    .bg-info{
        background-color: #fff95b;
        background-image: linear-gradient(295deg, #fff95b 0%, #ff930f 100%);
    }
    .small-box {
            border-radius: 1.1rem;
    }
    .small-box-footer {
            border-radius: 1.1rem;
    }
</style>
 

<script>
    var video = document.querySelector("#videoElement");

    if (navigator.mediaDevices.getUserMedia) {
    navigator.mediaDevices.getUserMedia({ video: true })
        .then(function (stream) {
        video.srcObject = stream;
        })
        .catch(function (err0r) {
        console.log("Something went wrong!");
        });
    }   
</script>
@endsection
