@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header"><i class='bx bxs-color-fill' style="font-size:1.5em; color:#77bfa3;"></i>&nbsp;スタッフの色を変更</div>

                <div class="card-body f-items">
                       
                        @foreach ($users as $user)
                            <form method="POST" action="{{route('admin.user-color.update', $user->id)}}">
                            @csrf
                                <div class="form-group f-item">
                                    <div class=item-left>
                                            <p class="userName d-inline">・&nbsp;{{ $user->name }}&nbsp;さん</p>
                                    </div> 
                                    
                                    <div class="item-center">
                                            <label>色を選択
                                            <input type="color" name="favorite_color" value="{{ $user->color }}" >
                                            <label> 
                                    </div>

                                    <div class="item-right">

                                            <button class="btn btn-primary ml-3" type="submit" >
                                                    変更
                                            </button>                                                         
                                    </div>    
                                </div>    
                            </form>
                         @endforeach
                           
                </div>
            </div>
        </div>
    </div>
</div>

<style>

   
    .f-items{
        flex-direction: column;  
       
    }
    .f-item{
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    label{
        margin: 0;
    }

    .item-left,
    .item-center{
        flex-basis:70%;
    }
    
    .item-right{
        flex-basis:40%;
    }



</style>
@endsection

