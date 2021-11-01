@extends('layouts.admin-master')
@section('admin-content')
@section('users')
active
@endsection    



<div class="sb2-2">
    <!--== breadcrumbs ==-->

    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>All Users</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover" id="datatable1">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>E.Courses</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
              
                                    <tr>
                                        <td>{{$loop->index+1}}</span>
                                        </td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->role->name }}</td>
                                        <td>hhh</td>
                                        <td>
                                            <a  class="btn btn-primary" title="Enroll" data-toggle="modal" data-target="#Enroll{{ $user->id }}">Enroll</a>
                                            <a href="{{ url('admin/category/delete/'.$user->id) }}" id="delete" class="btn btn-danger" title="delete data" id="delete">Delete</a>
                                        </td>
                                        @include('admin.modals.user.user-enroll')
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

 


</div>
@endsection


