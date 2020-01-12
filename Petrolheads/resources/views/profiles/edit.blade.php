@extends ('layouts.app')

@section('content')
<div class="container" >
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> Profile </div>
                    <div class="panel-body">
                        <form method="POST" action="{{route('profiles.update', $profile)}}" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                <div class="col-md-6">
                                    <input type="text" name="name"  placeholder="Update Name" value="{{$profile->name}}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="designation" class="col-md-4 col-form-label text-md-right">{{ __('Designation') }}</label>
                                <div class="col-md-6">
                                    <input name="designation" placeholder="Update designation" value="{{$profile->designation}}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="profile_pic" class="col-md-4 col-form-label text-md-right">{{ __('Profile picture') }}</label>
                                <div class="col-md-6">
                                    <input type ="file" name="profile_pic" placeholder="Update profile picture" value="{{$profile->profile_pic}}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" >
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary btn-lg">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

