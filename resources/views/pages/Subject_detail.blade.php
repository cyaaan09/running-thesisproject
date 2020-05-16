@extends('index')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Subjects</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="row">
      <div class="col-sm-4">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Data Subjects</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="/subjectdetail" method="POST">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Subject Name</label>
                        <select class="custom-select" name="subject_name">
                          @foreach ($subjects as $subject)
                          <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                          @endforeach
                        </select>

                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Type</label>
                        <select class="custom-select" name="type_name">
                          @foreach ($types as $type)
                          <option value="{{ $type->id }}">{{ $type->name }}</option>
                          @endforeach
                        </select>

                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Duration </label>
                        <input type="text" name="duration" class="form-control is-valid" required>


                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                     <!--  <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div> -->
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
                          <div class="card-body p-0">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>ID #</th>
                                  <th>Subject Name</th>
                                  <th>Type</th>
                                  <th>Duration</th>
                                </tr>
                              </thead>
                              @foreach ($sub_details as $sub_detail)
                              <tbody>
                                <tr>
                                  <td>{{ $sub_detail->id }}</td>
                                  <td>{{ $sub_detail->subject_name }}</td>
                                  <td>{{ $sub_detail->type_name }}</td>
                                  <td>{{ $sub_detail->duration }}</td>
                                  <!-- <td>Delete</td> -->
                                  <td>
                                    <a href="/subjectdetail/{{ $sub_detail->id }}" class="btn btn-block btn-danger btn-xs">Delete</a>
                                  </a>
                                </td>
                                </tr>
                              </tbody>
                              @endforeach
                            </table>
                          </div>
                          <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
@endsection