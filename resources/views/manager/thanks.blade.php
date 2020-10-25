@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <i class="fas fa-check" style="color:#77bfa3;"></i>&nbsp;送信完了</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img class="image" src="{{ asset('img/undraw_Delivery_re_f50b.png') }}" alt="invite-img">
                    <P style="text-align: center;">新スタッフへ招待メールの送信が完了しました。</P>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection