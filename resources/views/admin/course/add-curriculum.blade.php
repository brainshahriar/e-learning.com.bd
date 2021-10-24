@extends('layouts.admin-master')
@section('admin-content')
@section('categories')
active
@endsection    



<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <button type="button" class="btn btn-primary pull-right"  data-toggle="modal" data-target="#AddSection">Add New</button>
             @include('admin.modals.section.add-section')
        </ul>

    </div>

    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Course Curricullum</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover" id="datatable1">
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

 


</div>
@endsection


