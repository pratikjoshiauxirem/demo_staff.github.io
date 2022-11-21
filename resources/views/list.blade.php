@extends('layout')
@section('content')
    <div class="container p-2">
        <table class="table table-stripped">
            <thead>
                <th>
                    Sr No
                </th>
                <th>
                    Name
                </th>
                <th>Mobile</th>
                <th>
                    Email
                </th>
                <th>
                    Action
                </th>
            </thead>
            <tbody>
                @php
                $i=1;
            @endphp
                @foreach ($staff as $staff1)
                
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$staff1->name}}</td>
                        <td>{{$staff1->mobile}}</td>
                        <td>{{$staff1->email}}</td>
                        <td>
                            <a href="staff/edit/{{$staff1->id}}"><span class="fa fa-pen text-primary m-2"></span></a>
                            <a href="staff/del/{{$staff1->id}}"><span class="fa fa-trash text-danger m-2"></span></a>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>
@endsection