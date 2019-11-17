<!DOCTYPE html>

<div class="modal" tabindex="-1" role="dialog" id="user-update">
        <div class="modal-dialog" role="document">

          <div class="modal-content">
          {{-- Header --}}
            <div class="modal-header">
              <h5 class="modal-title">Modifier le rôle</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            {{-- End header --}}
            <form action="{{URL::to('/useradmin/update')}}" method="POST" id="frm-update">
              @csrf
                <div class="modal-body">
                    <div class="col-4-md">
                        <div class="form-group">
                          <label>ID</label>
                          <input type="text" id="id" name="id" class="form-control">
                            
                        </div>
                      </div>
                <div class="col-4-md">
                  <div class="form-group">
                    <label>Rôle</label>
                    <select class="form-control" id="role_id" name="role_id">
                      
                      <option value="">-----------------</option>
                      {{-- Display all the roles --}}
                      @foreach($roles as $role)
                      <option value="{{$role->id}}">{{$role->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                </div>
                <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Update">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </form>
          </div>
        </div>
      </div>
</html>