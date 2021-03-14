<div>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-defualt">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                               user
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('espace.user') }}" class="btn btn-success pull-right">back</a>
                            </div>
                        </div>

                    </div>
                    <div class="panel-body">
        @if(Session::has('success'))
                           <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>

                           @elseif(Session::has('error'))

                           <div class="alert alert-danger" role="alert">{{Session::get('error')}}</div>

                           @endif
    <form wire:submit.prevent='updateuser(Object.fromEntries(new FormData($event.target)))'>
    <div style="margin-top: 15%; margin-left: 35%;">




          <div class="mb-3 row">

            <div class="col-2">
                <label  for="gender">
                  Gender :
                </label>
            </div>
            <div class="col-2">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="M" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  M
                </label>
              </div>
            </div>
            <div class="col-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="Mme" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Mme
                </label>
              </div>
            </div>

          </div>


        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nom</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" name="name"  value="{{Auth::user()->name}}"   style="width: 30%;">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputPassword" name="email"  value="{{Auth::user()->email}}" style="width: 30%;">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">tel</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" name="tel" value="{{Auth::user()->tel}}" style="width: 30%;">
          </div>
        </div>
        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>

                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                                @error('new_password') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>

                            <div class="col-md-6">
                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                                @error('new_confirm_password') <span class="error">{{ $message }}</span> @enderror

                            </div>
                        </div>

        <button type="submit" class="btn btn-secondary" style="margin-left: 35%;">Modifier</button>
      </div>
    </form>
    </div>
    </div>
    </div>

    <div>
