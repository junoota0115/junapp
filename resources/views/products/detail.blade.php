@extends('layouts.app')

@section('title', '投稿画面')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Detail</h1>
        </div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>会社ID</th>
                        <th>商品名</th>
                        <th>値段</th>
                        <th>在庫</th>
                        <th>コメント</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->company_id }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->comment }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="/junapp/public/edit/{{$product->id }}">編集</a>
            <a href="/junapp/public/delete/{{$product->id }}">削除</a>
        </div>
    </div>
@endsection
