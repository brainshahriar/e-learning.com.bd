<section>
    <!-- LOGIN SECTION -->
    <div id="AddSection" class="modal fade" role="dialog">
        <div class="log-in-pop">

            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="{{ asset('frontend') }}/images/cancel.png" alt="" />
                </a>
                <h4>Add New Section</h4>
                <form class="s12" method="POST" action="{{ route('section-store') }}">
                    @csrf
                    <input type="hidden" name="course_id" value="{{ $courses->id }}">
                    <div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="name"  name="serial" data-validation="required">
                            <label>Serial No</label>
                        </div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="name"  name="section_name" data-validation="required">
                            <label>Section Name</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <button type="submit" class="btn btn-primary">Create</button>     
                         </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>