@extends('index')

@section('content')
<style type="text/css">
.my-custom-scrollbar {
position: relative;
height: 500px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
</style>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Types of Rooms</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="row">
      <div class="col-sm-4">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Data Types</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="/types_add" method="POST">
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="col-sm-12">

                      <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Name</label>
                        <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ..." name="name">
                      </div>

                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-block btn-info btn-md">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
        </div>
      </div>
      <div class="col-sm-8">
        <div class="card">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">List</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <div class="card-body p-0">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>ID #</th>
                                    <th>Name</th>
                                    <th>Created</th>
                                  </tr>
                                </thead>
                                  <tbody>
                                    @foreach ($Types as $type)
                                      <tr>
                                        <td>{{ $type->id }}</td>
                                        <td>{{ $type->name }}</td>
                                        <td>{{ $type->created_at }}</td>
                                        <td>
                                        <a href="/types/{{ $type->id }}" class="btn btn-block btn-danger btn-xs">Delete</a>
                                        </a>
                                    </td>
                                      </tr>
                                    @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
@endsection