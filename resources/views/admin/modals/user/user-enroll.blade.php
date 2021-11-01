<section>
    <!-- LOGIN SECTION -->
    <div id="Enroll{{ $user->id }}" class="modal fade" role="dialog">
        <div class="log-in-pop">

            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="{{ asset('frontend') }}/images/cancel.png" alt="" />
                </a>
                <h4>Enrollment</h4>
                <form class="s12" method="POST" action="{{ route('lesson-store') }}">
                    @csrf
                    {{-- <input type="hidden" name="course_id" value="{{ $course->id }}"> --}}

                    <div class="row">
                        <div class="input-field col s12">
                    <select class="form-control select2-show-search" data-placeholder="Select Course" name="category_id" data-validation="required">
                      <option label="Select Course"></option>
                      @foreach ($courses as $course)    
                      <option value="{{ $course->id }}">{{ ucwords($course->course_name) }}</option>
                      @endforeach
                    </select>
                    @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                        </div>
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
                        {{-- <div class="input-field s12">
                            <input type="text" data-ng-model="duration"  name="duration" data-validation="required">
                            <label>Duration</label>
                        </div> --}}
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