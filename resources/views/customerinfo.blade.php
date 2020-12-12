<body>
    @include('layouts.app')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <a href="#" class="badge badge-pill badge-default"><i class="fas fa-arrow-left"></i>&nbsp;Terug naar Klanten</a>
                <a data-toggle="modal" data-target="#exampleModal" href="#" class="badge badge-right-danger badge-pill badge-danger"><i class="far fa-trash-alt"></i>&nbsp;Verwijder klantinformatie</a>
                <a href="/klantaanpassen?id={{$customer->customer_number}}" class="badge badge-right-warning badge-pill badge-warning"><i class="far fa-edit"></i>&nbsp;Klantinformatie aanpassen</a>
                <h3 style="text-align: center;" class="card-title">Klant: {{$customer->firstname}}&nbsp;{{$customer->lastname}}</h3>
                <p style="text-align: center;">Een overzicht van alle gegevens van de geselecteerde klant</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h3 style="text-align: center;" class="card-title">Klantgegevens</h3>
                <div class="row">
                    <div class="col">
                        <p><i class="far fa-address-card"></i>&nbsp;Voornaam: {{$customer->firstname}}</p>
                        <p>Tussenvoegsel: {{$customer->insertion}}</p>
                        <p>Achternaam: {{$customer->lastname}}</p>
                    </div>
                    <div class="col">
                        <p><i class="far fa-envelope-open"></i>&nbsp;E-mail: <a href="mailto:{{$customer->email}}">{{$customer->email}}</a></p>
                        <p><i class="fas fa-mobile-alt"></i>&nbsp;Telefoonnummer: <a href="tel:{{$customer->phone}}">{{$customer->phone}}</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p><i class="far fa-map"></i>&nbsp;Adres: {{$customer->address}}</p>
                        <p>Huisnummer: {{$customer->housenumber}}</p>
                    </div>
                    <div class="col">
                        <p>Postcode: {{$customer->postalcode}}</p>
                        <p>Provincie: {{$customer->province}}</p>
                        <p><i class="far fa-flag"></i>&nbsp;Land: {{$customer->country}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Klantgegevens verwijderen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Weet je zeker dat je de klantgegevens wilt verwijderen?
                    <p style="font-weight: bold;">Let op! Dit kun je niet meer ongedaan maken!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuleren</button>
                    <a href="/klantverwijderen?id={{$customer->customer_number}}"><button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i>&nbsp;Verwijderen</button></a>
                </div>
                </div>
            </div>
            </div>
    </div>
</body>
