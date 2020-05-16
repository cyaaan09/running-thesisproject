@extends('index')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sections</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="row">
      <!-- <div class="col-sm-3"></div> -->
      <div class="col-sm-4">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Data Sections</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="/section_add" method="POST">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Course Name</label>
                        <select class="custom-select" name="course_id">

                          @foreach ($Courses as $course)
                          <option value="{{ $course->id }}">{{ $course->name }}</option>
                          @endforeach
                        
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Section Name</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="section_name" required>
                      </div>
                       <div class="form-group">
                        <label>Max number of students</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="max" required>
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
                                    <th>Course</th>
                                    <th>Section</th>
                                    <th>Max</th>
                                  </tr>
                                </thead>
                                
                                <tbody>
                                  @foreach ($Sections as $section)
                                  <tr>
                                    <td>{{ $section->SectonID }}</td>
                                    <td>{{ $section->CourseName }}</td>
                                    <td>{{ $section->SectionName }}</td>
                                    <td>{{ $section->MaxStudent }}</td>
                                    <td>
                                      <a href="section/{{ $section->SectonID  }}" class="btn btn-block btn-danger btn-xs">Delete</a>
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