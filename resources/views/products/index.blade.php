@extends('layouts.app')
@section('title', '商品一覧')

@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-2">
    <h2>ブログ記事一覧</h2>
    <form class="form-inline my-2 my-lg-0 ml-2">
      <div class="form-group">
      <input type="search" class="form-control mr-sm-2" name="search"  value="{{request('search')}}" placeholder="商品名を入力" aria-label="検索...">
      </div>
      <input type="submit" value="検索" class="btn btn-info">
  </form>

    @if(session('err_msg'))
      <p class="text-anger">
        {{session('err_msg')}}
      </p>
      @endif
      @auth
    <a class="nav-item nav-link" href="{{route('create')}}">新規追加</a>
    @endauth
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>商品名</th>
            <th>値段</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->price }}</td>
            <td><a href="/junapp/public/products/{{$product->id }}">詳細</a></td>

        </tr>
    @endforeach
    </tbody>
</table>
</table>
  </div>
</div>
@endsection