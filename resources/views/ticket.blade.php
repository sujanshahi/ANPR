@extends('layouts.app')

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tickets</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Tickets</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



<!-- SELECT2 EXAMPLE -->
<div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Traffic Tickets</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-2">
              <div class="form-group">
                <label>Ticket ID <a href="#" class="text-danger">*</a></label>
                  <input type="number" class="form-control" id="ticket-id" placeholder="ex: 001A">
                </div>
              </div>
              <div class="col-2">
              <div class="form-group">
                <label>Prefix</label>
                  <input type="text" class="form-control" id="ticket-id" placeholder="ex:xyz">
                </div>
              </div>
              <div class="col-2">
              <div class="form-group">
                <label>Ticket Number<a href="#" class="text-danger">*</a></label>
                  <input type="number" class="form-control" id="ticket-id" placeholder="ex:0001">
                </div>
              </div>
              <div class="col-3">
              <div class="form-group">
                <label>License Number <a href="#" class="text-danger">*</a></label>
                  <input type="number" class="form-control" id="ticket-id" placeholder="ex:01-23-45678901">
                </div>
              </div>
              <div class="col-3">
              <div class="form-group float-right">
                <button type="submit" class="btn btn-primary px-5 top elevation-3">Search</button>
                </div>
              </div>

              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Note: <a href="#" class="text-danger">*</a> Must Fill This Field to Perform an Action.
          </div>
        </div>
        <!-- /.card -->


    <!-- /.row -->
    <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tickets Database</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm"  style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right"  placeholder="Search">

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
                      <th>License Number</th>
                      <th>Plate Type</th>
                      <th>Date</th>
                      <th>TimeStamp</th>
                      <th>Ticket Number</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>005A</td>
                      <td>02-06-00192595</td>
                      <td>Commercial</td>
                      <td>11-8-2021</td>
                      <td>11:00:34</td>
                      <td>0001<i class="fas fa-ellipsis-v float-right mt-1 text-secondary"></i></td>
                      
                    </tr>
                    <tr>
                    <td>004A</td>
                      <td>02-06-00192595</td>
                      <td>Commercial</td>
                      <td>11-8-2021</td>
                      <td>11:00:34</td>
                      <td>0002<i class="fas fa-ellipsis-v float-right mt-1 text-secondary"></i></td>
                    </tr>
                    <tr>
                    <td>003A</td>
                      <td>02-06-00192595</td>
                      <td>Commercial</td>
                      <td>11-8-2021</td>
                      <td>11:00:34</td>
                      <td>0003<i class="fas fa-ellipsis-v float-right mt-1 text-secondary"></i></td>
                    </tr>
                    <tr>
                    <td>002A</td>
                      <td>02-06-00192595</td>
                      <td>Commercial</td>
                      <td>11-8-2021</td>
                      <td>11:00:34</td>
                      <td>0004<i class="fas fa-ellipsis-v float-right mt-1 text-secondary"></i></td>
                    </tr>
                    <tr>
                    <td>001A</td>
                      <td>02-06-00192595</td>
                      <td>Commercial</td>
                      <td>11-8-2021</td>
                      <td>11:00:34</td>
                      <td>0005<i class="fas fa-ellipsis-v float-right mt-1 text-secondary"></i></td>
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
        
        <style>
          .top{
            margin-top:33px;
          }
        </style>
    @endsection