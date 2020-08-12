@extends('master')
@section('title','All the posts')

@section('content')

 <section class="box post-list">
     <h1 class="box-heading text-muted">
        Štatistiky
     </h1>
     <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">Celkový počet odkazov</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{$posts}}</td>
            </tr>
          </tbody>
    </table>
    <table class="table table-dark">
         <thead>
           <tr>
             <th scope="col">Počet odkazov pridaných za dnešný deň</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td>{{$todaypost}}</td>
           </tr>
         </tbody>
   </table>
    <table class="table table-dark">
        <thead>
            <tr>
             <th scope="col">Celkový počet unikátnych mien, ktoré vložili odkaz do systému</th>
            </tr>
            </thead>
            <tbody>
            <tr>
             <td>{{$uniqueName}}</td>
            </tr>
        </tbody>
    </table>

<table class="table table-striped table-dark">
    <caption>Top 5 mien s najväčším počtom odkazov v systéme</caption>
    <thead>
        <tr>
         <th scope="col">Meno</th>
         <th scope="col">Počet odkazov</th>
        </tr>
    </thead>
    <tbody>
        @foreach($topfive as $top)
        <tr>
         <td>{{$top->name}}</td>
         <td>{{$top->pocet_odkazov}}</td>
        </tr>

        @endforeach
    </tbody>
</table>


@endsection
