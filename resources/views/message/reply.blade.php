@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        <h2>Responder Email</h2>
                        <form class="" method="post" target="" action="/home">
                            <div class="form-group">
                                <label for="titulo">Email</label>
                                <input name="email" value="{{$message->email}}" type="text" class="form-control" id="email" aria-describedby="postHelp" placeholder="Titulo"><br>
                                {{($errors->has('email')) ? $errors->first('email') : ''}} <br>
                            </div>
                            <div class="form-group">
                                <label for="titulo">Assunto</label>
                                <input name="subject" type="text" class="form-control" id="title" aria-describedby="postHelp" placeholder="Assunto"><br>
                                {{($errors->has('subject')) ? $errors->first('subject') : ''}} <br>
                            </div>
                            <div class="form-group">
                                <label for=desc>Mensagem</label>
                                <textarea class="form-control" name="message" rows="3"></textarea><br>
                                {{($errors->has('message')) ? $errors->first('message') : ''}} <br>
                                <small id="postHelp" class="form-text text-muted">Envio de Email</small>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

