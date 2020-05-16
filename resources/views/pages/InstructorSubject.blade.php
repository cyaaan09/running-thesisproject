@extends('index')

@section('content')
@include('modal.instructorsubjectmodal')
@include('modal.editmodal')
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
          <div class="col-sm-12" style="display: inline-flex; justify-content: space-between;">
            <h1>ASSIGNED SUBJECTS</h1>
            <div>
              <a href="/instructor" class="btn btn-block btn-info">Instuctors</a>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
	<!-- Default box -->
      <div class="card">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Instructors Subjects Table</h3>
                        <div class="col-sm-12">
                          <div class="float-right" >
                             <a href="#" class="btn btn-block btn-info btn-md" data-toggle="modal" data-target="#instructor_subject">Add Data</a>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="table-wrapper-scroll-y my-custom-scrollbar">
                        <div class="card-body p-0">
                          <table class="table">
                            <thead class="position-relative">
                              <tr>
                                <th>ID #</th>
                                <th>Instructor</th>
                                <th>Course</th>
                                <th>Section</th>
                                <th>Subject Details</th>
                              </tr>
                            </thead>
                             @foreach($InstructorSubjects as $InstructorSubject)

                             <?php
                                $instructor_name = $InstructorSubject->instructor_name;
                                
                                if ($instructor_name == "") {
                                  $instructor_name = "TBA";
                                }
                                $course_name = $InstructorSubject->course_name;

                                if ($course_name == "") {
                                  $course_name = "TBA";
                                }
                                $section_name = $InstructorSubject->section_name;

                                if ($section_name == "") {
                                  $section_name = "TBA";
                                }
                                $sub_name = $InstructorSubject->sub_name;
                                $type_name = $InstructorSubject->type_name;
                                if ($sub_name == "") {
                                  $sub_name = "TBA";
                                }
                                if ($type_name == "") {
                                  $type_name = "TBA";
                                }
                              ?>
                            <tbody>
                              <tr>
                                
                                <td>{{ $InstructorSubject->id }}</td>
                                
                            
                                <td>{{ $instructor_name }}</td>
                                
                                <td>{{ $course_name }}</td>
                                <td>{{ $section_name }}</td>
                                <td>{{ $sub_name }} - {{ $type_name }}</td>
                                <td>
                                    <a href="/instructorsubject/edit/{{ $InstructorSubject->id }}" class="btn btn-block btn-info btn-xs">Edit</a>
                                    
                                </td>
                                <td>
                                    <a href="/instructorsubject/{{ $InstructorSubject->id }}" class="btn btn-block btn-danger btn-xs">Delete</a>
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
      <!-- /.card -->

@endsection