@extends('layout.master')

@section('title', 'Anime List')

@section('content')

    <p>Show page</p>

    <table>
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th># Of Episodes</th>
        </tr>
        <tr>
            <td>Fullmetal Alchemist: Brotherhood</td>
            <td>Fantasy</td>
            <td>64</td>
        </tr>
        <tr>
            <td>Made in Abyss</td>
            <td>Fantasy</td>
            <td>13</td>
        </tr>
        <tr>
            <td>Outlaw Star</td>
            <td>Sci-Fi</td>
            <td>24</td>
        </tr>
    </table>

@endsection