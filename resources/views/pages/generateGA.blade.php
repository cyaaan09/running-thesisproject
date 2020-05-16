@extends('index')

@section('content')
<div id="loading" >
      <h1 class="text-center" style="font-weight: 700;
      font-family: system-ui">
      <span style="color: #007bff">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspL</span>
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
      <h3 class="text-center" style="color: #007bff">99%</h3>
    </div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $('#loading').attr('hidden', false);
    $('#generate').attr('hidden', true);
  });
});
</script>

@endsection