@extends ('navbar')

@section ('content')

<div class="card" style="width: 30rem;">
<h5 class="card-title"><?= $candy->title; ?></h5>
  <img src="<?= $candy->img; ?>" class="card-img-top" alt="...">
  <div class="card-body">
  <p class="card-text"><?= $candy->body; ?></p>
    <a href="/" class="btn btn-primary">Go Home</a>
  </div>
</div>

@endsection