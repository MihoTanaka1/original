@extends('layouts.admin')
@section('title', 'プロフィール')

@section('content')
<div class="mycontainer">
    <h1>プロフィール</h1>
    <a href={{ url('/admin/profile-create') }}><p class="mymenu">新規作成</p></a>
</div>
