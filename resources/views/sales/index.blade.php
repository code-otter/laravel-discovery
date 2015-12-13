@extends('app')

@section('content')
    <H1>Tableau des ventes</H1>
    @if(count($sales))
    <table>
        <tr>
            <td>ArticleID</td>
            <td>Customer name</td>
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
