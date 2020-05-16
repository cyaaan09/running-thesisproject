<!-- instructor subject -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title content-header"  id="">EDIT</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/instructorsubject" method="POST">
          {{csrf_field()}}
            <label for="recipient-name" class="col-form-label">Instructor:</label>
            <select class="custom-select" name="instructor">
              @foreach ($instructors as $instructor)
              <option value="{{ $instructor->id }}">{{ $instructor->name }}</option>
              @endforeach
            </select>
            <label for="recipient-name" class="col-form-label">Course:</label>
            <select class="custom-select" name="course">

              @foreach ($courses as $course)
              <option value="{{ $course->id }}">{{ $course->name }}</option>
              @endforeach
            
            </select>
            <label for="recipient-name" class="col-form-label">Section:</label>
            <select class="custom-select" name="section">

              @foreach ($sections as $section)
              <option value="{{ $section->id }}">{{ $section->name }}</option>
              @endforeach
            
            </select>
            <label for="recipient-name" class="col-form-label">Subject:</label>
            <select class="custom-select" name="subject"> 

              @foreach ($subjects as $subject)
              <option value="{{ $subject->sub_id }}">{{ $subject->name }} - {{ $subject->type_name }}</option>
              @endforeach
            
            </select>
           
            <!-- <label for="recipient-name" class="col-form-label">Rank:</label>
            <input type="text" class="form-control" id="recipient-name">
            <label for="recipient-name" class="col-form-label">Expertise:</label>
            <input type="text" class="form-control" id="recipient-name">
            <label for="recipient-name" class="col-form-label">Max Units:</label>
            <input type="text" class="form-control" id="recipient-name">
            <img src="">
            <button type="button" class="btn btn-primary">UPLOAD</button> -->
             <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">EDIT</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>