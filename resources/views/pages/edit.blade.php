@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Edit</div>

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
                          <label for="title">Title</label>
                          <input type="text" class="form-control" name="title" value={{ $page->title }} />
                      </div>
                      <div class="form-group">
                          <label for="slug">Slug</label>
                          <input type="text" class="form-control" name="slug" value={{ $page->slug }} />
                      </div>
                      <div class="form-group">
                          <label for="body">Body</label>
                          <textarea type="textarea" class="form-control" name="body" >{{ $page->body }}</textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Add</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
