@extends('Contact::layouts.master')
@section('content')
<section class="dashboard">
    <div class="container">
        <div class="row">
            @include('Contact::partials.sidebar')
            <div class="col-md-9 mb-5 mt-5" >
             @include('Contact::partials.notification')
                <div class="dashboard-contenu"><br>
                
                    <h5 class="text-center mb-4">Contact</h5>
                    @if ($contact->count()>0)
                    <table class="table table-bordered">
                        <thead class="-sm">
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">libelle</th>
                            <th scope="col">lieu</th>
                            <th scope="col">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        
                                            
                        @foreach ($contact as $item)      
                        <tr>    
                            <td> <a href="" class="text-dark" data-tooltip="Cliquer pour plus d'information" >  <span>#{{$loop->iteration}}</span>  </a> </td>
                            <td> <a href="" class="text-dark" data-tooltip="Cliquer pour plus d'information" >  <span>{{$item->libelle}}</span>  </a> </td>
                            <td> <a href="" class="text-dark" data-tooltip="Cliquer pour plus d'information" >  <span>{{$item->lieu}} </span>  </a> </td>
                            <td> <a href="{{route('contact-edit', $item->uuid)}}" class="text-dark" data-tooltip="Cliquer pour plus d'information" >  <span><i class="fas fa-edit"></i></span>  </a> </td>
                        </tr>
                        @endforeach   
                                    

                        </tbody>
                    </table>
                  
                    <div class="center-text">
                        {{$contact->links()}}
                    </div><br>
                    @else
                    <div class="container">
                        <div class="alert alert-dark" role="alert">
                            Auccun contact disponible !
                          </div>   
                          <br>         
                    </div>
                 @endif
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection