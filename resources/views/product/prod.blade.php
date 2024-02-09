@extends('master')

@section('content')
    <table class=" table table-striped table-dark">
        <thead>
            <th>ID Product</th>
            <th>Name Product</th>
            <th>Size</th>
            <th>gambar Product</th>
        </thead>
        <tbody>
            @foreach($data as $dta)
            <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$dta['name_product']}}</td>
            <td>{{$dta['size']}}</td>
            <td><img src="/img/{{$dta['gambar']}}" alt="" style="width:20px;height:20px;">
            </td>
            </tr>
            @endforeach
            

        </tbody>
    </table>
     

@endsection