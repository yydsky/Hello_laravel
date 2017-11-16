@extends('layouts.default')
@section('content')
    <div class="jumbotron">
        <h1>Hello World！</h1>
        <p class="lead">
            Hello!!! <a href="https://www.baidu.com"> 欢迎</a> 进入。
        </p>
        <p>
            改变世界！
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">注册</a>
        </p>
    </div>
@stop
