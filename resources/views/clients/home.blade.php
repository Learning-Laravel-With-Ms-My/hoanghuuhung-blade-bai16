@extends('layouts.client')

@section('title')
    Trang chủ
@endsection

@section('sidebar')
    @parent 
    <h5>Home sidebar </h5>
@endsection

@section('content')
@datetime('2021-12-12 15:00:20')
<h1>Trang chủ</h1>
@env('production')

<h2>Môi trường production</h2>
@elseenv('local'){
    <p>môi truonwgfg local</p>
}
@endenv
   
@endsection

@section('css')

@endsection

@section('js')

@endsection

@push('scripts')
    <script>
        console.log("log lan 1");
    </script>
@endpush