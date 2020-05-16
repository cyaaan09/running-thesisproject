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
            <h1>Rooms</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="row">
      <div class="col-sm-4">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Data Room</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="/room" method="POST">
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <!-- <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Building</label>
                        <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                      </div>

                      <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Rooms</label>
                        <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                      </div> -->

                       <!-- @foreach ($types as $type)
                        {{$typename[] = $type->name}}
                        {{$typeid[] = $type->id}}
                        @endforeach -->

                      <div class="form-group">
                        <label>Types of Rooms</label>
                        <select class="custom-select" name="room_type">
                          @foreach ($types as $type)
                          <option value="{{$type->id}}">{{ $type->name }}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Capacity</label>
                        <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ..." name="seating_capacity">
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
                                    <th>TYPE</th>
                                    <th>Seating Capacity</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                  </tr>
                                </thead>
                                @foreach ($rooms as $room)
                                  <tbody>
                                  <tr>
                                    <td>{{$room->room_id}}</td>
                                    <td>{{$room->type_name}}</td>
                                    <td>{{$room->capacity}}</td>
                                    <td>{{$room->created_at}}</td>
                                    <td>{{$room->updated_at}}</td>
                                    <td>
                                        <a href="/room/{{ $room->room_id }}" class="btn btn-block btn-danger btn-xs">Delete</a>
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