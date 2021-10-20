@extends('layouts.admin-master')
@section('admin-content')
@section('categories')
active
@endsection    

                <!--== BODY INNER CONTAINER ==-->
<div class="sb2-2">
<!--== breadcrumbs ==-->

<!--== DASHBOARD INFO ==-->

<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="dashboard_graph">
                    

<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
    <div class="x_title">
        <h2><i class="fa fa-align-left"></i> Category List </h2> 
        <button type="button" class="btn btn-primary pull-right"  data-toggle="modal" data-target="#AddCategory">Add New</button>
        @include('admin.modals.categories.add-category')

    </div>
    <div class="x_content">

        <!-- start accordion -->
        <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel">
                    <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne">
                        <h4 class="panel-title">1. IT Service Management</h4>
                        
                    <i onclick="EditCategory(1)" class="fa fa-pencil-square-o pull-right" aria-hidden="true" data-toggle="modal" data-target=".bs-example-modal-edit"></i>

                    <i style="margin-left: -10px;" onclick="AddSubCategory('1', 'IT Service Management' )" id="category_name" parent="IT Service Management" class="fa fa-plus-circle pull-right" aria-hidden="true" data-toggle="modal" data-target=".add-category"></i>
                                                            </a>
                    <div id="collapseOne_1" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                                             <h5>No found sub category</h5>
                                
                        </div>
                    </div>
                </div>

            
        </div>
        <!-- end of accordion -->


    </div>
</div>
</div>


<div class="clearfix"></div>
</div>
</div>

</div>
@endsection


