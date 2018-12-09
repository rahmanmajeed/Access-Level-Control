@extends('index')
@section('title','Dashboard')
@push('breadcrumb_end')
  <li class="breadcrumb-item"><a href="javascript:void(0)">@lang('title.dashboard')</a></li>
@endpush
@section('content')
<div class="row">
  <h4>this is from Dashboard</h4>
</div>
@endsection
