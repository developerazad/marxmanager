@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('inc.messages')
                    <!-- Button trigger modal -->
                    <button class="btn btn-primary" name="button" type="button" data-toggle="modal" data-target="#myModal">Add Bookmark</button>

                    <hr>
                    @include('inc.bookmark_list')
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
@include('inc.add_modal')
<!-- /modal-->
@endsection


