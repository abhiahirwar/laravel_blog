@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Page</div>

                <div class="card-body">
                  @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                    </div><br />
                  @endif
                  <form method="post" action="{{ route('pages.store') }}">
                      <div class="form-group">
                          @csrf
                          <label for="name">Title</label>
                          <input type="text" class="form-control" name="title"/>
                      </div>
                      <div class="form-group">
                          <label for="price">Slug :</label>
                          <input type="text" class="form-control" name="slug"/>
                      </div>
                      <div class="form-group">
                          <label for="quantity">body:</label>
                          <input type="text" class="form-control" name="body"/>
                      </div>
                      <button type="submit" class="btn btn-primary">Add</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
