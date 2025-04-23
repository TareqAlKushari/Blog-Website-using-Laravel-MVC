@extends('layouts.app')

@section('title')
Edit
@endsection

@section('content')

<!-- /resources/views/post/Edit.blade.php -->

<h1>Edit Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Edit Post Form -->

<form method="POST" action="{{ route('posts.update', $post->id) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label class="form-label">Title</label>
      <input name="title" type="text" value="{{$post->title}}" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea name="description" class="form-control" rows="3">{{$post->description}}</textarea>
    </div>
    <div class="mb-3">
      <label class="form-label">Post Creator</label>
      <select name="post_creator" class="form-control">
        @foreach ($users as $user)
          {{-- <option @if ($user->id == $post->user_id) selected @endif value="{{$user->id}}">{{$user->name}}</option> --}}
          <option @selected($user->id == $post->user_id) value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
      </select>
    </div>
    <button class="btn btn-primary">Update</button>
</form>

@endsection