<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Xanh+Mono:ital@1&display=swap" rel="stylesheet">
    <title>Crud login</title>
</head>
<body>
    <div class="imgBackground">

    </div>
    <section id="conteudo-view" class="login">

        <h1>Vaccines Wallets</h1>
        <h3>vaccination portfolio management</h3>

          {!! Form::open(['route'=> 'users.store', ' method'=> 'post']) !!}

          <p>Access the system</p>

            <label >
                {!! Form::email('email',null,['class'=>'input','placeholder'=>'Email']) !!}
            </label><br>

            <label >
                {!! Form::password('password',['placeholder'=>'password']) !!}
            </label><br>

            {!! Form::submit('log in') !!}


          {!! Form::close() !!}

    </section>
</body>
</html>
