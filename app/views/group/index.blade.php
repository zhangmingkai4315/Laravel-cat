@extends("layout")
@section("content")
@if(count($groups))
    <table>
        <tr>name</tr>
        @foreach($groups as $group)
        <tr>
            <td>{{$group->name}}</td>
        </tr>
        @endforeach
@else
        <p>There are no groups.</p>

@endif


    </table>