@extends('layouts.start')

@section('content')
    <form action="{{route('admin.pages-editor.info.update', [$project, $post, $info]) }}" 
    method="POST">
    @csrf
    @method('PUT')
    <div class="card-header">{{__('Edit Info') }}</div> 

    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="info-name">{{__('Name') }}</label> 
                    <input value="{{$info->name}}"   class="form-control" name="name" type="text" id="info-name" required autofocus>
                </div>
                <div class="form-group">
                    <label for="info-textarea">{{__('Description') }}</label> 
                    <textarea class="form-control" name="description" rows="5" id="info-textarea">{{$info->description}}</textarea>  
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button class="btn btn-sm btn-primary" type="submit"> {{__('Save Info') }}</button> 
    </div>
    </form>
@endsection