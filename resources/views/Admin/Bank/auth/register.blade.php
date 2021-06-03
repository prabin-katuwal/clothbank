@extends('layouts.app')

@section('content')
<form action="{{route('register.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="fullname" placeholder="fullname">
    <input type="text" name="location" placeholder="location">
    <input type="text" name="member" placeholder="member">
    <input type="email" name="email" placeholder="email">
    <input type="text" name="phone" placeholder="phone">
    <input type="file" name="image">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="Request">
</form>
@endsection
