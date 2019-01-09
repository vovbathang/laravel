<?php
/**
 * Created by PhpStorm.
 * User: thangnguyen
 * Date: 08/01/2019
 * Time: 15:08
 */

?>
@extends ("layouts.app");
@section("content")
ID: {{$id}}
<form action="{{route('user.update', ['id'=> $id ])}}" method="PUT">
    {{csrf_field()}}
    {{method_field('put')}}
    <input type="text" name="text">
    <button type="submit">Submit</button>
</form>
@endsection