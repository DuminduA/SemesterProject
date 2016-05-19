
@extends('layouts.master')

@section('contain')

<table>
    <thead>
    <tr>
        <th data-field="id">id</th>
        <th data-field="attendance">Attendance</th>

    </tr>
    </thead>

    <tbody>

    @foreach($items as $it)
    <tr>
        <td>{{$it->id}}</td>
        <td>{{$it->attendance}}</td>
    </tr>
    @endforeach

    </tbody>
</table>
@stop
