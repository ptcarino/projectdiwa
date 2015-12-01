@extends('admin_template')

@section('content')
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>City</th>
            </tr>
            @foreach($provinces as $province)
                <tr>
                    <td>{{ $province->id }}</td>
                    <td>{{ $province->name }}</td>
                    <td>{{ $province->regions_id }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@stop