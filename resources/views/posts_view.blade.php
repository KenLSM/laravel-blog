<link href="./css/app.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<body class="container">
    <div class='row'>
        <div class='col-md-8 col-md-offset-2'>
            @foreach ($data as $d)
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $d->title }}
                </div>
                <div class="panel-body">
                    {{ $d->body }}
                </div>
                <div class="panel-body text-right">
                    <small>10-Jan-2107</small>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>