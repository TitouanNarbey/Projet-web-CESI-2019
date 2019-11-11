@extends('layouts.app')

@section('content')

    <div class="container">
            <div class="row">
              <div class="col-lg-1 col-md-4 col-sm-12 col-xs-12"></div> 
              <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                {{-- form start --}}
                <form class="form-container rounded">
                {{-- title --}}
                <div class="col-md-12 col-sm-12 col-xs-12" align="center">
                    <div class="titleprofile-container rounded">
                      <h1>Prénom N.</h1>
                    </div>
                </div>

                {{-- Icon --}}
                <div class="col-lg-4 order-lg-1 text-center">
                        <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">
                        <h6 class="mt-2">Upload a different photo</h6>
                        <label class="custom-file">
                            <input type="file" id="file" class="custom-file-input">
                            <span class="custom-file-control">Choose file</span>
                        </label>
                </div>
          
                {{-- Name --}}

                    <div class="form-row">
                      <div class="name-container">
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                          <label for="inputName">Nom</label>
                          <input type="text" class="form-control" id="inputName" placeholder="Nom">
                        </div>
                      </div>
          
                      {{-- Firstname --}}
          
                      <div class="name-container">
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                          <label for="inputFirstname">Prénom</label>
                          <input type="text" class="form-control" id="inputFirstname" placeholder="Prénom">
                        </div>
                      </div>
                    </div>
          
                    {{-- Zone --}}
          
                    <div class="form-group">
                    <div class="col-md-4 col-sm-6 col-xs-10">
                        <label for="inputCenter">Centre</label>
                        <select id="inputCenter" class="form-control">
                                <option selected>Choose...</option>
                                <option>Lyon</option>
                                <option>Nice</option>
                                <option>Aix-en-provence</option>
                                <option>Rouen</option>
                                <option>Toulouse</option>
                                <option>La Rochelle</option>
                        </select>
                    </div>
                    </div>
          
                    {{-- Mail --}}
          
                    <div class="form-group">
                        <div class="col-md-7 col-sm-9 col-xs-12">
                            <label for="inputEmail">Mail</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="exemple@mail.com">
                        </div>
                    </div>

          

                  </form>
                  {{-- form end --}}
                </div>
            </div>
          </div>
@endsection 