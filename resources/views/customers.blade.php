<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

@include('layouts.app')

<div class="container">
    @if (session('status'))
        <div style="margin-top:10px;" class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text"><strong>Gelukt!</strong> De klant is met succes verwijderd</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <a href="#" class="badge badge-pill badge-default"><i class="fas fa-arrow-left"></i>&nbsp;Terug naar Dashboard</a>
            <a href="#" class="badge badge-right badge-pill badge-default"><i class="fas fa-arrow-right"></i>&nbsp;Terug naar afspraken</a>
            <h3 style="text-align: center;" class="card-title">Overzicht klanten</h3>
            <p style="text-align: center;">Een overzicht van alle aangemaakte klanten</p>
        </div>
    </div>
    <div style="padding: 10px; margin-bottom:25px; margin-top:25px;" class="card">
        <div class="card-body">
        <a href="{{ url('/klanttoevoegen') }}"><button style="padding: 10px; margin-bottom:25px; float:right; background-color: #1F67A6;" type="button" class="btn btn-primary"><i class="fas fa-user-friends"></i>&nbsp;Klant toevoegen</button></a>
            <div class="table-responsive">
                <div>
                    <table class="table align-items-center">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="firstname">Voornaam</th>
                                <th scope="col" class="sort" data-sort="insertion">Tussenvoegsel</th>
                                <th scope="col" class="sort" data-sort="lastname">Achternaam</th>
                                <th scope="col" class="sort" data-sort="adress">Adres</th>
                                <th scope="col" class="sort" data-sort="housenumber">Huisnummer</th>
                                <th scope="col" class="sort" data-sort="city">Stad</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $customer)
                            <tr>
                                <td><a href="/klantinformatie?id={{$customer->customer_number}}">{{$customer->firstname}}</a></td>
                                <td>{{$customer->insertion}}</td>
                                <td>{{$customer->lastname}}</td>
                                <td>{{$customer->address}}</td>
                                <td>{{$customer->housenumber}}</td>
                                <td>{{$customer->city}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>


</body>
</html>