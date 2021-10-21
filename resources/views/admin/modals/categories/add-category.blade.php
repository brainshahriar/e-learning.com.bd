<section>
    <!-- LOGIN SECTION -->
    <div id="AddCategory" class="modal fade" role="dialog">
        <div class="log-in-pop">

            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="{{ asset('frontend') }}/images/cancel.png" alt="" />
                </a>
                <h4>Add New Category</h4>
                <form class="s12" method="POST" action="{{ route('category-store') }}">
                    @csrf
                    <div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="name"  name="category_name">
                            <label>Add New Category</label>
                            @error('category_name')
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-danger">{{ $message }}</strong>
                            </span>
                             @enderror
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