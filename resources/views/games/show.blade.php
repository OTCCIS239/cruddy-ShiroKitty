@extends('layout.master')

@section('title', 'Game List')

@section('content')

    <p>Show page</p>

    <table>
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Release Date</th>
        </tr>
        <tr>
            <td>Baldur's Gate</td>
            <td>Fantasy</td>
            <td>December 21, 1998</td>
        </tr>
        <tr>
            <td>Final Fantasy 6</td>
            <td>Fantasy</td>
            <td>April 2, 1994</td>
        </tr>
    </table>

@endsection