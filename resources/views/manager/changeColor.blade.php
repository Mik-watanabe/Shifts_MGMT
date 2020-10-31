@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><i class='bx bxs-color-fill' style="font-size:1.5em; color:#77bfa3;"></i>&nbsp;スタッフの色を変更</div>

                <div class="card-body">
                    <form method="POST" action="{{route('color')}}">
                        @csrf
                        <div class="form-group row">

                        <ul class="list-group list-group-flush ">
                            @foreach ($users as $user)
                                 
                            
                                <li class="list-group-item ">
                                <input type="name" value="{{$user->name}}" name="userName[]" readonly="true" style="border: none">
                             
                                
                                <label >色を選択
                                <input type="color" name="favorite_color[]" id="{{$user->id}}">
                                <label>
                            
                                </li>
                                
                          
                            @endforeach
                         </ul>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button class="btn btn-primary" type="submit" >
                                    変更する
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

