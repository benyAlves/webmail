    @extends('layouts.app')
    @section('content')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <h1>Email</h1>
                        <a href="/home">Voltar</a>
                        <h2>Email: {{ $message->email }}</h2>
                        <p>Assunto: {{ $message->subject }}</p>
                        <hr>
                        <div class="form-group">
                            <label for=desc>Mensagem</label>
                            <section>{{ $message->message }}</section>
                        </div>
                        <a href="/home/{{$message->id}}/edit">Responder</a>
                    </div>
                </div>
            </div>
        </div>


    @endsection