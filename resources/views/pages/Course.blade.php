@extends('index')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Courses</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="row">
      <!-- <div class="col-sm-3"></div> -->
      <div class="col-sm-4">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Data Course</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="/course" method="POST">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="course_name" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-block btn-info btn-md" >Submit</button>
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
                            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>ID #</th>
                                    <th>Course Name</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                  </tr>
                                </thead>
                                @foreach($courses as $course)
                                <tbody>
                                  <tr>
                                    <td>{{ $course->id }}</td>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->created_at }}</td>
                                    <td>{{ $course->updated_at }}</td>
                                    <td>
                                    <a href="/course/{{ $course->id }}" class="btn btn-block btn-danger btn-xs">Delete</a>
                                  </a>
                                </td>
                                  </tr>
                                </tbody>
                                @endforeach  
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