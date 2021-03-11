<div>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-defualt">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('espace.user') }}" class="btn btn-success pull-right">back</a>
                            </div>
                        </div>

                    </div>
                    <div class="panel-body">


    <div style="margin-top: 15%; margin-left: 35%;">
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nom : {{Auth::user()->name}}</label>
          <div class="col-sm-10">

          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">email : {{Auth::user()->email}}</label>
          <div class="col-sm-10">

          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">tel : {{Auth::user()->tel}} </label>
          <div class="col-sm-10">

        </div>



    </div>
    </div>
    </div>

    <div>
