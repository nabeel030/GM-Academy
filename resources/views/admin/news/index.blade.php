@extends('layouts.app')


@section('content')

<div class="card">
    <div class="card-header" id="lefttalign">News & Updates

      <a href="{{route('news.create')}}" id="rightalign">
        <button  class="btn btn-outline-success"><i class="fa fa-plus">&nbsp;&nbsp;NEW</i></button>
      </a>
    </div>

    <div class="card-body">
        {!! $dataTable->table() !!}
    </div>
</div>

{!! $dataTable->scripts() !!}
@endsection
