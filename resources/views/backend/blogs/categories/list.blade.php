@extends('layouts.backend')

@section('title', 'Posts | CRM Demo')
@section('description', 'List of posts')

@section('content')

    @include('partials.backend.header.page_breadcrumb', [
        'title' => 'Categories'
    ])
    <div class="row">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h3><i class="fas fa-table"></i> List blog category</h3>
                </div>
                <div class="card-body">
                    <table class="table table-responsive-xl table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Alias</th>
                                <th scope="col">Description</th>
                                <th scope="col">Creator</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $category)
                                <tr>
                                    <th scope="row">{{ $category->id }}</th>
                                    <td>{{ $category->alias }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td>{{ $category->creator->name ?? 'No' }}</td>
                                </tr>
                            @empty
                                <div class="alert alert-warning">Empty blog category</div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
