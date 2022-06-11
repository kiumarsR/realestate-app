@extends('facility.layout')
@section('title', 'ویرایش')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>ویرایش امکانات</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('facilities.index') }}"> انصراف</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('facilities.update',['facility' => $facility->id]) }}" method="POST">
    @csrf

    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="facility_value" value="{{ $facility->facility_value }}" class="form-control" placeholder="Value">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <input type="text" name="facility_name" value="{{ $facility->facility_name }}" class="form-control" placeholder="Name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ذخیره</button>
        </div>
    </div>
</form>
@endsection