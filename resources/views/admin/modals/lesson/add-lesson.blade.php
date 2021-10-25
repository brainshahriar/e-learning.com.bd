<section>
    <!-- LOGIN SECTION -->
    <div id="AddLession{{ $section->id }}" class="modal fade" role="dialog">
        <div class="log-in-pop">

            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="{{ asset('frontend') }}/images/cancel.png" alt="" />
                </a>
                <h4>Add New lesson of {{ $section->section_name }}</h4>
                <form class="s12" method="POST" action="{{ route('lesson-store') }}">
                    @csrf
                    <input type="hidden" name="course_id" value="{{ $courses->id }}">
                    <input type="hidden" name="section_id" value="{{ $section->id }}">

                    <div class="input-field s12">
                    <select class="form-control"  name="video_type">
                      <option label="Choose Video Type"></option>  
                      <option value="youtube">Youtube</option>
                      <option value="vimeo">Vimeo</option>
                    </select>
                        </div>
               
                    <div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="lesson_title"  name="lesson_title" data-validation="required">
                            <label>Lesson Title</label>
                        </div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="video_id"  name="video_id" data-validation="required">
                            <label>Video ID</label>
                        </div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="duration"  name="duration" data-validation="required">
                            <label>Duration</label>
                        </div>
                        <div class="input-field s12">
                            <select class="form-control"  name="preview">
                              <option value="0">No Preview</option>
                              <option value="1">Preview</option>
                            </select>
                                </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <button type="submit" class="btn btn-primary">Upload</button>     
                         </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>