@extends ('navbar')

@section ('content')

<?php foreach ($types as $type) : ?>
<div class="card" style="width: 18rem;">
<h5 class="card-title"><?= $type->title; ?></h5>
  <img src="<?= $type->img; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <a href="<?= $type->link; ?>" class="btn btn-primary">View More</a>
  </div>
</div>

<?php endforeach; ?>

@endsection