<!doctype html>
<html lang="{{ app()->getLocale() }}"> 
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>BooksProject</title> 
        <!-- Fonts --> 
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css"> 
        <!-- Styles --> 
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    </head> 
    <body> 
        <div class="container"> 
            <div class="row"> 
                <div class="col-md-12 text-center"> 
                    <h1 class="h1-responsive p-3 mb-2 mt-2 bg-info text-white">My Library</h1> 
                </div> 
            </div> 
            <div class="row"> 
                <div class="col-md-3"> 
                    <div class="list-group"> 
                    @foreach($categories as $c) 
                        <a href="{{route('listBooks', ['id' => $c->id])}}" role="button" class="bth list-group-item d-flex list-group-item-action justify-content-between alignitems-center"> 
                            {{$c->name}} 
                            <span class="badge badge-info badge-pill text-white">{{$c->countBooksByCategory->first()->booksCount}}</span> 
                        </a> 
                    @endforeach 
                    </div> 
                </div> 
                <div class="col-md-9"> 
                    @isset ($category) 
                        <h4 class="text-left font-weight-bold mb-3 mt-1 text-uppercase text-info">{{$category->name}}</h4> 
                        @if(count($books)>0) 
                            @foreach($books as $b) 
                                <p>{{$b->title}}</p> 
                            @endforeach 
                        @endif 
                    @endisset         
                </div> 
            </div> 
        </div>    
    </body> 
</html> 
