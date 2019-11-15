<div class="container">
    <div class="row my-2">
        <div class="col-lg-9 col-md-10 col-sm-11 col-xs-12"></div>
        <div class="col-lg-9 col-md-10 col-sm-11 col-xs-12">
        {{-- <form class="form-container rounded"> --}}
        {{-- Menu --}}
            <div class="col-lg-8 order-lg-2">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="" data-target="#notifications" data-toggle="tab" class="nav-link">Notifications</a>
                        </li>
                    </ul>

                    <div class="tab-content py-4">
                            <div class="tab-pane active" id="profile">
                                <h5 class="mb-3">User Profile</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>About</h6>
                                        <p>
                                            Web Designer, UI/UX Engineer
                                        </p>
                                        <h6>Hobbies</h6>
                                        <p>
                                            Indie music, skiing and hiking. I love the great outdoors.
                                        </p>
                                    </div>

                                    
                                </div>
                            </div>

                            <div class="tab-pane" id="notifications">
                                <div class="alert alert-info alert-dismissable">
                                    <a class="panel-close close" data-dismiss="alert">×</a> This is an <strong>.alert</strong>. Use this to show important messages to the user.
                                </div>
                                <table class="table table-hover table-striped">
                                    <tbody>                                    
                                        <tr>
                                            <td>
                                               <span class="float-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <span class="float-right font-weight-bold">Yesterday</span> There has been a request on your account since that was..
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <span class="float-right font-weight-bold">9/10</span> Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus. 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus. 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <span class="float-right font-weight-bold">9/4</span> Maxamillion ais the fix for tibulum tincidunt ullamcorper eros. 
                                            </td>
                                        </tr>
                                    </tbody> 
                                </table>
                            </div>
                    </div>

                {{-- </form> --}}
            </div>
                </div>
            </div>
            <div class="col-lg-4 order-lg-1 text-center">
                    <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">
                    <h6 class="mt-2">Upload a different photo</h6>
                    <label class="custom-file">
                        <input type="file" id="file" class="custom-file-input">
                        <span class="custom-file-control">Choose file</span>
                    </label>
            </div>

    
           </div>

<div class="container">
      <div class="row">
        {{-- Demander pourquoi la ligne en bas fait ça --}}
         <div class="col-md-4 col-sm-12 col-xs-12"></div>
         <div class="col-md-4 col-sm-12 col-xs-12">
           {{-- form start --}}
           {{-- Title --}}
           <div class="col-md-4 col-sm-8 col-xs-12" align="center">
                        <div class="title-container rounded">
                          <h1>Connexion</h1>
                        </div>
           </div>
                    {{-- End of title --}}
           <form class="form-container rounded">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Adresse mail</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                              {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Mot de passe</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Me garder connecté.</label>
                      </div>
                      <button type="submit" class="btn btn-warning btn-block text-dark">Se connecter</button>
                      <h3>Mot de passe oublié ?</h3>
                      <h3>Pas encore inscrit ?</h3>
           </form>
           {{-- form end --}}

         </div>
      </div>
    </div>
