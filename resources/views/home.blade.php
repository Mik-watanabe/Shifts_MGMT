@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><i class="far fa-envelope">送信完了</i></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <i class="fas fa-check">送信完了</i><br>

                  コメントいれる！

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

