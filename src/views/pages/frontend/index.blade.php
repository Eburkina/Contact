@extends('Contact::layouts.contact')
@section('contact')
<style>
    #owl-demo .item{
  margin: 3px;
}
#owl-demo .item img{
  display: block;
  width: 100%;
  height: auto;
}
</style>
    
<div id="owl-demo" class="owl-carousel owl-theme">
        
    @foreach ($contact as $item)
    <div class="item">
      
        <div class="jumbotron" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="display-5">Contact</h1> <br>
                        <p> <i class="fa fa-phone-square"></i> {{$item->telephone}}</p>
        
                        <p> <i class="fa fa-envelope"></i> <a class="text-dark"
                                href="mailto:info@justice.gov.bf">{{$item->email}} </a> </p>
                        <p> <i class="fa fa-university"></i> {{$item->libelle}} </p>
                        <p> <i class="fa fa-globe"></i> {{$item->adresse}}</p>
                    </div>
                    <div class="col-md-6">
                    
                        {!!  $item->liem_map !!}
                    </div>
                </div>
        
        
            </div>
        </div>
    </div>
    @endforeach   
</div>
 
@endsection
