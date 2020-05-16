@extends('index')

@section('content')
<style type="text/css">
  .btn-circle.btn-xl {
    padding: 10px 16px;
    border-radius: 35px;
    font-size: 18px;
    line-height: 1.33;
}
</style>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <br><br><br>
    <div id="loading" hidden>
      <h1 class="text-center" style="font-weight: 700;
      font-family: system-ui">
      <span style="color: #007bff">L</span>
      <span style="color: #dc3545">O</span>
      <span style="color: #ffc107">A</span>
      <span style="color: #007bff">D</span>
      <span style="color: #28a745">I</span>
      <span style="color: #dc3545">N</span>
      <span style="color: #007bff">G</span>
      <span style="color: #ffc107">. . .</span></h1>
      <br>
      <div class="d-flex justify-content-center">
          <i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i>
          <span class="sr-only"  style="color: #ffc107">Loading...</span>
      </div><br>
      <h3 class="text-center" style="color: #007bff">PLEASE WAIT....</h3>
    </div>
    @if($schedules->isEmpty())
    <div id="generate">
      <h5 class="text-center">Click Here</h5>
      <p class="text-center">
      <small class="text-warning mr-1">
        <i style="text-align: center;" class="fas fa-arrow-down"></i>
      </small>
      </p>
      <div class="d-flex justify-content-center">
         <div class="row">
           <div class="col-sm-12">
              <button type="button" class="btn btn-block btn-outline-warning btn-lg btn-circle btn-xl"><span>Generate Schedule</span>
          </button>
           </div>
         </div>
      </div>
      <form id="generate" method="post" action="/schedule/post">
        {{ csrf_field() }}
        <input type="hidden" name="generate" value="1">
      </form>
    </div>
    @else
    <div id="generate">
      <div class="d-flex justify-content-center">
         <div class="row">
           <div class="col-sm-12">
              <a href="/schedule" type="button" class="btn btn-block btn-outline-warning btn-lg btn-circle btn-xl"><span>Go to Schedules</span></a>
           </div>
         </div>
      </div>
    </div>    
    @endif
    <br><br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#generate").submit();
  });



  $("#generate").on("submit", function(){
    var form = $(this);
    $('#loading').attr('hidden', false);
    $('#generate').attr('hidden', true);
    $.ajax({
        url: '/schedule/post',
        type: 'post',
        data: form.serialize(),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'json',
        success: function (data) {
          if(data.status) {
            $("#loading").attr('hidden', true);
            // success message here before we redirect
            window.location.replace(data.redirect);
          }
        }
    });
  });
});
</script>
    
@endsection