@extends('layouts.backend')

@section('title', 'Categories | CRM Demo')
@section('description', 'List of post categories')

@section('content')
    @include('partials.backend.header.page_breadcrumb', [
        'title' => 'Posts'
    ])
    <div class="row">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h3><i class="fas fa-table"></i> List blog posts</h3>
                </div>
                <div class="card-body">
                    <table class="table table-responsive-xl table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Creator</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts as $post)
                                <tr>
                                    <th scope="row">{{ $post->id }}</th>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->content }}</td>
                                    <td>{{ $post->creator->name ?? 'No' }}</td>
                                </tr>
                            @empty
                                <div class="alert alert-warning">Empty post</div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
