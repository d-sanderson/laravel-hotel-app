@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4>{{  $modify == 1 ? 'Modify Client' : 'New Client' }}</h4>
            <form action="{{ $modify == 1 ? route('update_client', [ 'client_id'=> 1 ]) : route('create_client')  }}" method="post">
                <div class="medium-4  columns">
                    <label>Title</label>
                    <select name="title">
                        @foreach( $titles as $title)
                            <option value="{{ $title }}" >{{ $title }}.</option>
                        @endforeach
                    </select>
                </div>
                <div class="medium-4  columns">
                    <label>Name</label>
                    <input name="name" type="text">
                    <small class="error">{{$errors->first('name')}}</small>
                </div>
                <div class="medium-4  columns">
                    <label>Last Name</label>
                    <input name="last_name" type="text">
                    <small class="error">{{$errors->first('last_name')}}</small>
                </div>
                <div class="medium-8  columns">
                    <label>Address</label>
                    <input name="address" type="text">
                    <small class="error">{{$errors->first('address')}}</small>
                </div>
                <div class="medium-4  columns">
                    <label>Zip Code</label>
                    <input name="zip_code" type="text">
                    <small class="error">{{$errors->first('zip_code')}}</small>
                </div>
                <div class="medium-4  columns">
                    <label>City</label>
                    <input name="city" type="text">
                    <small class="error">{{$errors->first('city')}}</small>
                </div>
                <div class="medium-4  columns">
                    <label>State</label>
                    <input name="state" type="text">
                    <small class="error">{{$errors->first('state')}}</small>
                </div>
                <div class="medium-12  columns">
                    <label>Email</label>
                    <input name="email" type="text">
                    <small class="error">{{$errors->first('email')}}</small>
                </div>
                <div class="medium-12  columns">
                    <input value="SAVE" class="button success hollow" type="submit">
                </div>
            </form>
        </div>
    </div>
@endsection