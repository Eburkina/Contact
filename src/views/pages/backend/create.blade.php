@extends('Contact::layouts.master')
@section('content')
<section class="dashboard">
<style>
a.mod{
    margin-left: 1rem;
}
</style>
    <div class="container">

      <div class="row">
        @include('Contact::partials.sidebar')    
        <div class="col-md-9 mb-5 mt-5" >
          <div class="dashboard-contenu"><br>
           
            <h5 class="text-center mb-4">
              Ajout Contact
            </h5>
                
            <div class="form-header"></div>
            <div class="container"> 
               
                @if($contact->uuid != null)
                    <form action="{{route('contact-update', $contact->uuid)}}" method="Post" class="col-md-8 offset-md-2" enctype= 'multipart/form-data'>
                        @method('PUT')

                @else
                  
                    <form action="{{route('contact-store')}}" method="POST" class="col-md-8 offset-md-2" enctype= 'multipart/form-data'>
                        @method('POST')

                @endif
                
                    <div class="form-content">
                        
                        <div class="form-row  ">
                            <div class="col-8 offset-2">
                                <label for="libelle">Libelle TGI <span class="obligatoire">: *</span></label>
                            <input type="text" name="libelle" class="form-control " value="{{old('libelle')?? $contact->libelle}}">
                            {{-- @error('titre')<div class="invalid-feedback">{{ $message }}</div>@enderror --}}
                            </div>
                        </div>
                        <div class="form-row  ">
                            <div class="col-8 offset-2">
                                <label for="lieu">Lieu TGI <span class="obligatoire">: *</span></label>
                            <input type="text" name="lieu" class="form-control " value="{{old('lieu')?? $contact->lieu}}">
                            {{-- @error('titre')<div class="invalid-feedback">{{ $message }}</div>@enderror --}}
                            </div>
                        </div>
                        <div class="form-row  ">
                            <div class="col-8 offset-2">
                                <label for="liem_map">Lien Map du TGI<span class="obligatoire">: *</span></label>
                            <input type="text" name="liem_map" class="form-control " value="{{old('liem_map')?? $contact->liem_map}}">
                            {{-- @error('titre')<div class="invalid-feedback">{{ $message }}</div>@enderror --}}
                            </div>
                        </div>
                        <div class="form-row  ">
                            <div class="col-8 offset-2">
                                <label for="adresse">Adresse du TGI<span class="obligatoire">: *</span></label>
                            <input type="text" name="adresse" class="form-control " value="{{old('adresse')?? $contact->adresse}}">
                            {{-- @error('titre')<div class="invalid-feedback">{{ $message }}</div>@enderror --}}
                            </div>
                        </div>
                        <div class="form-row  ">
                            <div class="col-8 offset-2">
                                <label for="email">Email<span class="obligatoire">: *</span></label>
                            <input type="Email" name="email" class="form-control " value="{{old('email')?? $contact->email}}">
                            {{-- @error('titre')<div class="invalid-feedback">{{ $message }}</div>@enderror --}}
                            </div>
                        </div>
                        <div class="form-row  ">
                            <div class="col-8 offset-2">
                                <label for="telephone">Téléphone <span class="obligatoire">: *</span></label>
                            <input type="text" name="telephone" class="form-control " value="{{old('telephone')?? $contact->telephone}}">
                            {{-- @error('titre')<div class="invalid-feedback">{{ $message }}</div>@enderror --}}
                            </div>
                        </div>
                    
                       
                    
                        <div class="col my-2 pl-5 d-flex justify-content-center">
                            <button class="btn btn-outline-info btn-sm">{{$button}}</button>

                            @if ($contact->uuid !=null)                             
                         <a type="button" class="btn btn-danger mod" data-toggle="modal" data-target="#exampleModal{{$contact->uuid}}">Supprimer</a>    
                        
                         @endif 
                  </div>
                        </div>
                        <br>
                    </div>
                </form>
               
            </div>
        </div>
    </div>
    </div>
    </section>
    @if ($contact->uuid != null)
    <div class="modal fade" id="exampleModal{{$contact->uuid}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Supprimer</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                Confirmer la suppression
            </div>
            <div class="modal-footer">
                <form action="{{route('contact-delete', $contact->uuid)}}" method="POST">
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary">Confirmer</button>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div> 
    @endif
   
@endsection