@extends('master')
@section('title', 'Admin Control Panel')
@section('content')
    <div class="container">
        <div class="row banner">
            <div class="col-md-12">
                <div class="list-group">
                    <div class="list-group-item">
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Manage Users</h4>
                            <a href="{{ asset('/admin/users') }}" class="btn btn-default btn-raised">All Users</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Manage Tickets</h4>
                            <a href="{{ asset('/admin/tickets') }}" class="btn btn-default btn-raised">All Tickets</a>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Manage Roles</h4>
                            <a href="{{ asset('/admin/roles') }}" class="btn btn-default btn-raised">All Roles</a>
                            <a href="{{ asset('/admin/roles/create') }}" class="btn btn-primary btn-raised">Create A Role</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Manage Posts</h4>
                            <a href="{{ asset('/admin/posts') }}" class="btn btn-default btn-raised">All Posts</a>
                            <a href="{{ asset('/admin/posts/create') }}" class="btn btn-primary btn-raised">Create A Post</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Manage Categories</h4>
                                <a href="{{ asset('/admin/categories') }}" class="btn btn-default btn-raised">All Categories</a>
                                <a href="{{ asset('/admin/categories/create') }}" class="btn btn-primary btn-raised">New Category</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                </div>
            </div>
        </div>
    </div>
@endsection