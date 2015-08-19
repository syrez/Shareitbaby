@extends('templates.layout')

@section('title')
    ShareitBaby.io - add a link
@stop
@section('content')
    <form action={{ route('validlink') }} method="post" role="form" class="col-xs-5">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Set a name.">
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input type="text" class="form-control" name="link" id="link" placeholder="Give the link">
        </div>
        <div class="form-group">
            <label for="Description">Description</label>
            <textarea class="form-control" name="Description" id="Description"></textarea>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@stop