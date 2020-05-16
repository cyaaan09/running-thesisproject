@extends('index')


@section('content')


<div class="row mb-2">


	<div class="col-sm-6">


		<h1>UPDATE RECORDS</h1><br><br>

		<hr>
		

		<form action="/instructorsubject/edit" method="POST">
			{{ csrf_field() }}
			<div class="form-group">
				<input type="hidden" name="id" value="{{ $instructorbyid }}">
			    <label for="inputAddress">Instructor</label>
			    <select class="custom-select" name="instructor">
			    	@foreach ($instructorsubjects as $instructorsubject)
			    	<?php
			      		$Instructor = $instructorsubject->instructor_name;
			      		if ($Instructor == "") {
			      			$Instructor = "TBA";
			      		}

			      	?>
			      	<option value="{{ $instructorsubject->instructor_id }}">{{ $Instructor }}</option>
			      	@endforeach
			      	<option value="">TBA</option>
			      	@foreach ($instructors as $instructor)
		            <option value="{{ $instructor->id }}">{{ $instructor->name }}</option>
		            @endforeach
			    </select>
		  </div>



		  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Course</label>
			      <select class="custom-select" name="course">
			      	@foreach ($instructorsubjects as $instructorsubject)
			      	<?php
			      		$course = $instructorsubject->course_name;
			      		if ($course == "") {
			      			$course = "TBA";
			      		}

			      	?>
			      	<option value="{{ $instructorsubject->course_id }}">{{ $course }}</option>
			      	@endforeach
			      	<option value="">TBA</option>
			      	@foreach ($courses as $course)
		            <option value="{{ $course->id }}">{{ $course->name }}</option>
		            @endforeach
			      	
			      </select>
			    </div>

			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Section</label>
			      <select class="custom-select" name="section">
			      	@foreach ($instructorsubjects as $instructorsubject)
			      	<?php
			      		$section = $instructorsubject->section_name;
			      		if ($section == "") {
			      			$section = "TBA";
			      		}

			      	?>
			      	<option value="{{ $instructorsubject->section_id }}">{{ $section }}</option>
			      	@endforeach
			      	<option value="">TBA</option>
			      	@foreach ($sections as $section)
		        	<option value="{{ $section->id }}">{{ $section->name }}</option>
		       		@endforeach
			      </select>
			    </div>
		  </div>


		  <div class="form-group">
		    <label for="inputAddress2">Subject Detail</label>
		    <select class="custom-select" name="subject_detail">
		    	@foreach ($instructorsubjects as $instructorsubject)
		    	<?php 
		    		$subject_detail = $instructorsubject->subject_name;
		    		$subject_detail1 = $instructorsubject->type_name;
		    		if ($subject_detail == "") {
		    			$subject_detail = "TBA";
		    		}
		    		if ($subject_detail1 == "") {
		    			$subject_detail1 = "TBA";
		    		}
		    	?>
			    <option value="{{ $instructorsubject->subject_details_id }}">{{ $subject_detail }} - {{ $subject_detail1 }}</option>
			    @endforeach
			    <option value="">TBA - TBA</option>
			    @foreach ($subjects as $subject)
		        <option value="{{ $subject->sub_id }}">{{ $subject->name }} - {{ $subject->type_name }}</option>
		        @endforeach
			</select>
		  </div>
		  


		

	  		<button type="submit" class="btn btn-primary" style="float: right;">Update</button>
	  		<a href="/instructorsubject" type="button" class="btn btn-light" style="float: right; margin-right: 25px;">Back</a>
		</form>
	</div>


	<div class="col-sm-3">
		
	</div>

</div>





@endsection