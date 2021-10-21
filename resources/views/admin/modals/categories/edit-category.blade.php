<section>
    <!-- LOGIN SECTION -->
    <div id="EditCategory{{ $category->id }}" class="modal fade" role="dialog">
        <div class="log-in-pop">

            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="{{ asset('frontend') }}/images/cancel.png" alt="" />
                </a>
                <h4>Edit Category</h4>
                <form class="s12" method="POST" action="{{ route('category-update') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $category->id }}">
                    <div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="name"  name="category_name" value="{{ $category->category_name_ }}">
                            <label>{{ $category->category_name }}</label>
                            @error('category_name')
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-danger">{{ $message }}</strong>
                            </span>
                             @enderror
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Update" class="waves-effect waves-light log-in-btn"> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>