<link href="./css/app.css" rel="stylesheet">

<div> TEEHEE </div>
@foreach ($data as $d)
    <h2>{{ $d->title }}</h2>
    <p>{{ $d->body }}</p>
@endforeach