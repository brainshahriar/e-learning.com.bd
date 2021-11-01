<section>
    <!-- LOGIN SECTION -->
    <div id="Enroll{{ $user->id }}" class="modal fade" role="dialog">
        <div class="log-in-pop">

            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="{{ asset('frontend') }}/images/cancel.png" alt="" />
                </a>
                <h4>Enrollment</h4>
                <form class="s12" method="POST" action="{{ route('enroll-store') }}">
                    @csrf
                    <input type="text" value="{{ $user->id }}" name="user_id">
                    <div class="row">
                        <div class="input-field col s12">
                    <select class="form-control select2-show-search" data-placeholder="Select Course" name="course_id" data-validation="required">
                      <option label="Select Course"></option>
                      @foreach ($courses as $course)    
                      <option value="{{ $course->id }}">{{ ucwords($course->course_name) }}</option>
                      @endforeach
                      @error('course_id')
                           <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </select>
                        </div>
                    </div>
               
                    <div>
                        <div class="input-field s12">
                            <input type="number" data-ng-model="price"  name="price" >
                            <label>Price</label>
                        </div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="access"  name="access" data-validation="required">
                            <label>Access</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <button type="submit" class="btn btn-primary">Submit</button>     
                         </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>