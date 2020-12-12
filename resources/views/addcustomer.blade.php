<body>
@include('layouts.app')

<div class="container">  
    @if(session()->has('message'))
    <div style="margin-top:10px;" class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
        <span class="alert-text"><strong>Gelukt!</strong> De klant is met succes aangemaakt</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <a href="#" class="badge badge-pill badge-default"><i class="fas fa-arrow-left"></i>&nbsp;Terug naar klanten</a>
            <a href="#" class="badge badge-right badge-pill badge-default"><i class="fas fa-arrow-right"></i>&nbsp;Terug naar afspraken</a>
            <h3 style="text-align: center;" class="card-title">Nieuwe klant toevoegen</h3>
            <p style="text-align: center;">Alle velden met een * zijn verplicht</p>
        </div>
    </div>
    <form method="post" action="/klantopslaan">
    @csrf
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Klantgegevens</h3>
                <div class="row">
                    <div class="col-4">
                        <label>Voornaam</label><input name="firstname" type="text" class="form-control" placeholder="Voornaam">
                    </div>
                    <div class="col-4">
                        <label>Tussenvoegsel</label><input name="insertion" type="text" class="form-control" placeholder="Tussenvoegsel">
                    </div>
                    <div class="col-4">
                        <label>Achternaam</label><input name="lastname" type="text" class="form-control" placeholder="Achternaam">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <label>Telefoonnummer</label><input name="phone" type="text" class="form-control" placeholder="Telefoonnummer">
                    </div>
                    <div class="col-4">
                        <label>E-mail</label><input name="email" type="text" class="form-control" placeholder="E-mail">
                    </div>
                </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Adresgegevens</h3>
            <div class="row">
                    <div class="col-4">
                        <label>Adres</label><input name="address"  type="text" class="form-control" placeholder="Adres">
                    </div>
                    <div class="col-4">
                        <label>Huisnummer</label><input name="housenumber" type="number" class="form-control" placeholder="Huisnummer">
                    </div>
                    <div class="col-4">
                        <label>Postcode</label><input name="postalcode" type="text" class="form-control" placeholder="Postcode">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <label>Plaats</label><input name="city" type="text" class="form-control" placeholder="Plaats">
                    </div>
                    <div class="col-4">
                        <label>Pronvincie</label><input name="province" type="text" class="form-control" placeholder="Pronvincie">
                    </div>
                    <div class="col-4">
                        <label>Land</label><input name="country" type="text" class="form-control" placeholder="Land">
                    </div>
                </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
        <button class="btn btn-icon btn-success" type="submit">
            <span class="btn-inner--icon"><i class="fas fa-save"></i></span>
            <span class="btn-inner--text">Opslaan</span>
        </button>
        <button class="btn btn-icon btn-danger" type="button">
            <span class="btn-inner--icon"><i class="far fa-window-close"></i></span>
            <span class="btn-inner--text">Annuleren</span>
        </button>
        </div>
    </div>
    </form>
</div>
</body>
</html>