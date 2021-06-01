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
                    <h3><i class="fas fa-table"></i> Bordered table</h3>
                    Add <i>.table-bordered</i> for borders on all sides of the table and cells. <a target="_blank" href="https://getbootstrap.com/docs/4.3/content/tables/#bordered-table">(more
                        info)</a>
                </div>
                <div class="card-body">
                    <table class="table table-responsive-xl table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@TwBootstrap</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
