@extends('layouts.app')

@section('content')
<div class="container">
    <h1>This is my profile</h1>
<table>
    <tr>
        <th>Name</th>
        <td>{{ $user[0]->name }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{ $user[0]->email }}</td>
    </tr>
    <tr>
        <th>Joined On</th>
        <td>{{ $user[0]->created_at }}</td>
    </tr>
</table>
</div>
@endsection