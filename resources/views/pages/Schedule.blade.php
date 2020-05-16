@extends('index')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Schedules</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                      <div class="card-header" style="background-color: #343a40;color: white;">
                        <h3 class="card-title">Block A</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body p-0">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>ID #</th>
                              <th>(Section, capacity)</th>
                              <th>Instructors</th>
                              <th>Subjects</th>
                              <th>Rooms (Capacity,Type)</th>
                              <th>Time</th>
                              <th>Day</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($schedules as $schedule)
                            <tr>
                              <td>{{ $schedule->id }}</td>
                              <td>({{ $schedule->section->name }}, {{ $schedule->section->max_num_of_students  }})</td>
                              <td>{{ $schedule->instructor->name }}</td>
                              <td>{{ $schedule->subject->name}}</td>
                              <?php
                              if($schedule->room == null) {
                                $room = "( " . $schedule->room_type->name . ", ? )";
                              }
                              else {
                                $room = $schedule->room->id . " ( " . $schedule->room->seating_capacity . ", " . $schedule->room_type->name . " )";
                              }
                              ?>
                              <td>{{ $room }} </td>
                              <td>{{ $schedule->meeting_time->start }} - {{ $schedule->meeting_time->end }}</td>
                              <td>{{ $schedule->meeting_time->day}}</td>
                            </tr>
                            @endforeach()
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                </div>
                @if($day != null)
                <div class="row card-footer">
                  <div class="col-sm-2">
                    <form id="update_schedule" method="post" action="/schedule/update">
                      {{ csrf_field() }}
                      <input type="" name="day" value="{{ $day }}">
                      <button type="submit" class="btn btn-block btn-info btn-sm">Bellman</button>
                    </form>
                  </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection