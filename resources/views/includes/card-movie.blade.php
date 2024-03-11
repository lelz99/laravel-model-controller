<div class="card mb-4">
    <div class="card-body">
      <h5 class="card-title">{{$movie->title}} ({{$movie->original_title}})</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->nationality}}</h6>
      <div class="card-text">
        <p class="mb-0">Data di Uscita: <span class="fw-bold">{{$movie->date}}</span> </p>
        <p>Voto: <span class="fw-bold">{{$movie->vote}}</span></p>
      </div>
    </div>
</div>