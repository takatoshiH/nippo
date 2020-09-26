@extends('layouts.app')

@section('content')
    <h1 style="text-align: center">メールの作成</h1>
    <form style="text-align: center" action="{{route('send.mail')}}" method="POST">
        @csrf
        <div style="width: 50%; margin: 0 auto">
            <h2 style="text-align: center">業務内容</h2>
            <textarea name="text_1" style="width: 60%;height: 200px"></textarea>
        </div>

        <div style="width: 50%; margin: 0 auto">
            <h2>明日の予定</h2>
            <textarea name="text_2" style="width: 60%;height: 200px"></textarea>
        </div>

        <div style="width: 50%; margin: 0 auto">
            <h2>感想・その他</h2>
            <textarea name="text_3" style="width: 60%;height: 200px"></textarea>
        </div>

        <button>送信</button>
    </form>
@endsection
