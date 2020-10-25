@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <i class="fas fa-check" style="color:#77bfa3;"></i>&nbsp;登録完了</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img class="image" src="{{ asset('img/undraw_confirmed_81ex.png') }}" alt="confirmed-img">
                    <P style="text-align: center;">
                    登録が完了しました。<br>これから一緒にがんばっていきましょう☺️</P>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

