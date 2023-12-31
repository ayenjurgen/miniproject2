@extends('layouts.app')

@section('title')
    Create To-do
@endsection

@section('content')

<form action="store-data" method="post" class="mt-4 p-4">
    @csrf
    <div class="form-group m-3">
        <label for="name">To-do</label>
        <input type="text" class="form-control" name="">
    </div>
    <div class="form-group m-3">
        <label for="description">To-do Description</label>
        <textarea class="form-control" name="description" rows="3"></textarea>
    </div>
    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Submit">
    </div>
</form>


@endsection