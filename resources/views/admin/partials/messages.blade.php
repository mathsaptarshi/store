@if ($errors->any())
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="alert alert-danger">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <ul>
            @foreach ($errors->all() as $error)
              <p>{{ $error }}</p>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
@endif