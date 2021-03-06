@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{!! $page->title !!}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!!$page->body !!}
                    {!!$page->slug !!}
                    <p>You are Page Show!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
