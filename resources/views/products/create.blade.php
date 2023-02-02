@extends('layouts.app')

@section('title', '投稿画面')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Post Form</h1>
            <form action="{{route('submit')}}" method="post">
                @csrf

                <div class="form-group">
                    <label for="company_id">会社名</label>
                    <input type="text" class="form-control" id="company_id" name="company_id" placeholder="Company">
                </div>

                <div class="form-group">
                    <label for="product_name">商品名</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="PRODUCT_NAME">
                </div>

                <div class="form-group">
                    <label for="price">金額</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="PRICE">
                </div>

                <div class="form-group">
                    <label for="stock">在庫</label>
                    <input type="text" class="form-control" id="stock" name="stock" placeholder="STOCK">
                </div>

                <div class="form-group">
                    <label for="comment">コメント</label>
                    <textarea class="form-control" id="comment" name="comment" placeholder="Comment"></textarea>
                </div>

                <div class="form-group">
                    <label for="img_path">画像</label>

                </div>

                <button type="submit" >送信</button>
            </form>
        </div>
    </div>
@endsection
