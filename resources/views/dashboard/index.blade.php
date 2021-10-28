@extends('layouts.main')

@section('content')
    <form action="/submitabs" method="post" class="mb-5" enctype="multipart/form-data">
        @csrf
        <input type="file" class="form-control @error('filename') is-invalid @enderror" name="file" id="file" placeholder="file" required>
        <label for="file">Abstract</label>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
     </form>
@endsection