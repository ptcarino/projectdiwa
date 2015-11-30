@extends('admin_template')

@section('content')
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Province</th>
            </tr>
            @foreach($cities as $city)
                <tr>
                    <td>{{ $city->id }}</td>
                    <td>{{ $city->name }}</td>
                    <td>{{ $city->provinces_id }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@stop