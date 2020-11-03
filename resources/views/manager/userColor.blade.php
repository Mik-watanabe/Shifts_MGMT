@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><i class='bx bxs-color-fill' style="font-size:1.5em; color:#77bfa3;"></i>&nbsp;スタッフの色を変更</div>

                <div class="card-body">
                             
                        @foreach ($users as $user)
                            <form method="POST" action="{{route('admin.user-color.update', $user->id)}}">
                            @csrf
                                <div class="form-group">
                                    <ul class="list-group list-group-flush">                            
                                        <li class="list-group-item d-flex justify-content-center">
                                            <p class="userName d-inline">{{ $user->name }}さん</p>
                                            
                                            <label>色を選択
                                            <input type="color" name="favorite_color" value="{{ $user->color }}" >
                                            <label> 

                                            <button class="btn btn-primary ml-3" type="submit" >
                                                    変更する
                                            </button>                                                         
                                        </li>                  
                                   </ul>
                                </div>    
                            </form>
                         @endforeach
                              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

