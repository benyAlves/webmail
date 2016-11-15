@extends('layouts.app')

@section('content')
    @if (Auth::guest())
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>

                        <div class="panel-body">
                            <h1>Bem Vindo ao WebMail</h1><a href="{{ url('/login') }}">Login </a>ou<a href="{{ url('/register') }}"> Registe-se</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                {{ Session::get('message') }}
                <div class="panel-body">
                    <a href="/home/create">Compor</a>
                    <h3>InBOx <span class="label label-danger pull-right">{{count(Auth::user()->messages()->get())}}</span></h3>
                    @foreach(Auth::user()->messages()->get() as $message)
                        <p>
                            <a href="/home/{{$message->id}}">
                                {{date('d F Y', strtotime($message->created_at))}} {{$message->subject}}
                            </a>
                        </p>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
    @endif
@endsection
