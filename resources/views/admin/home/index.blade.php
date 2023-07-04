@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card">
    <div class="card-header">
        Admin Panel - Home Page
    </div>
    <div class="card-body">
        Welcome to the Admin Panel, use the sidebar to navigate between the different options.
    </div>
</div>
<br>
<table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($viewData["abouts"] as $about )
            <tr>
                <td>{{ $about->id }}</td>
                <td>{{ $about->name }}</td>
                <td>{{ $about->email }}</td>
                <td style="text-align: justify">{{ $about->message }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
