@extends('app')

@section('content')
    <H1>Tableau des ventes</H1>

    @if(count($sales))
    <table class="table table-bordered">
        <tr>
            <th>ArticleID</th>
            <th>Customer name</th>
        </tr>
        @foreach( $sales as $sale )
        <tr>
            <td>{{ $sale->article_id }}</td>
            <td>{{ $sale->customer_name }}</td>
        </tr>
        @endforeach
    </table>
    @endif
@stop
