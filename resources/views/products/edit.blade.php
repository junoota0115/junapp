@extends('layouts.app')

@section('title', '投稿画面')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Post Form</h1>
            <form action="{{route('update')}}" method="post">
                @csrf
                <br>
                <br>
                <br>
                <input type="hidden" name="id" value="{{$product->id}}">
                <div class="form-group">
                    <label for="company_id">会社名</label>
                    <input type="text" class="form-control" id="company_id" name="company_id" placeholder="Company" value="{{$product->company_id}}">
                    @if ($errors->has('company_id'))
                      <div>*{{$errors->first('company_id')}}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="product_name">商品名</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="PRODUCT_NAME" value="{{$product->product_name}}">
                    @if ($errors->has('product_name'))
                      <div>*{{$errors->first('product_name')}}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="price">金額</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="PRICE" value="{{$product->price}}">
                    @if ($errors->has('price'))
                      <div>*{{$errors->first('price')}}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="stock">在庫</label>
                    <input type="text" class="form-control" id="stock" name="stock" placeholder="STOCK" value="{{$product->stock}}">
                    @if ($errors->has('stock'))
                      <div>*{{$errors->first('stock')}}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="comment">コメント</label>
                    <textarea class="form-control" id="comment" name="comment" placeholder="Comment" >{{$product->comment}}</textarea>
                </div>

                <div class="form-group">
                    <label for="img_path">画像</label>

                </div>

                <button type="submit" >送信</button>
            </form>
        </div>
    </div>
@endsection
