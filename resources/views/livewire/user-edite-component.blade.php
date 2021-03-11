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
        @if(Session::has('message'))
                           <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
    <form wire:submit.prevent='updateuser(Object.fromEntries(new FormData($event.target)))'>
    <div style="margin-top: 15%; margin-left: 35%;">
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

        <button type="submit" class="btn btn-secondary" style="margin-left: 35%;">Modifier</button>
      </div>
    </form>
    </div>
    </div>
    </div>

    <div>
