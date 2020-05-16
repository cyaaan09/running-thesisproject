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
            <h1>Meeting</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="row">
      <div class="col-sm-4">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Data Meeting</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="/meetingtime" method="POST">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Day</label>
                        <select class="custom-select" name="day" required>
                          <option>M</option>
                          <option>T</option>
                          <option>W</option>
                          <option>TH</option>
                          <option>F</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Start Time</label>
                        <input type="time" class="form-control is-valid" id="inputSuccess" placeholder="Enter ..." name="start" required>
                      </div>

                      <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> End Time</label>
                        <input type="time" class="form-control is-valid" id="inputSuccess" placeholder="Enter ..." name="end" required>
                      </div>

                      <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Duration</label>
                        <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ..." name="duration" required>
                      </div>

                      <!-- <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Max Number of Student</label>
                        <input type="number" class="form-control is-valid" id="inputSuccess" placeholder="Enter ..." required>
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
                          <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <div class="card-body p-0">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>ID #</th>
                                    <th>Day</th>
                                    <th>Start</th>
                                    <th>End </th>
                                    <th>Duration</th>
                                  </tr>
                                </thead>
                                @foreach($meeting_times as $meeting_time)
                                <tbody>
                                  <tr>
                                    <td>{{ $meeting_time->id }}</td>
                                    <td>{{ $meeting_time->day }}</td>
                                    <td>{{ $meeting_time->start }}</td>
                                    <td>{{ $meeting_time->end }}</td>
                                    <td>{{ $meeting_time->duration }}</td>
                                   <!--  <td style="width: 12%;">Delete</td> -->
                                   <td>
                                      <a href="/meetingtime/{{ $meeting_time->id }}" class="btn btn-block btn-danger btn-xs">Delete</a>
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