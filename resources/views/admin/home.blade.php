@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
        <router-link to="/admin/products">Products</router-link>
            
        </div>
        <div class="col-md-10">
            
              <router-view></router-view>
        </div>
    </div>
</div>
@endsection