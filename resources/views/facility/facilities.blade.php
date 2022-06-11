@extends('facility.layout')
@section('title', 'امکانات املاک')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>لیست امکانات املاک</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('facilities.create') }}"> ساخت امکانات جدید</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>مقدار</th>
        <th>عنوان</th>
    </tr>
    @foreach ($facilities as $facility)
    <tr>
        <td>{{ $facility->facility_value }}</td>
        <td>{{ $facility->facility_name }}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('facilities.edit',['facility' => $facility->id]) }}">ویرایش</a>
            <form action="{{ route('facilities.destroy',$facility->id) }}" method="POST">

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">حذف</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection