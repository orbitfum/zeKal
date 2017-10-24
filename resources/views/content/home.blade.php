@extends('master')

@section('content')
    <div class="container" style="margin-top: 80px">
<div class="col-md-12">
    <form class="form"  method="get" action="{{url('aliexpress')}}">

        <input type="search" name="q" placeholder="חפש..">
        <input type="submit" value="חפש">
    </form>
</div>
    </div>
@endsection
