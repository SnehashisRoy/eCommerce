@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div>
                <b-nav vertical class="w-25">
                    <b-nav-item active>Active</b-nav-item>
                    <b-nav-item>Link</b-nav-item>
                    <b-nav-item>Another Link</b-nav-item>
                    <b-nav-item disabled>Disabled</b-nav-item>
                </b-nav>
            </div>
        </div>
        <div class="col-md-10">
              View Router Comes here.
        </div>
    </div>
</div>
@endsection