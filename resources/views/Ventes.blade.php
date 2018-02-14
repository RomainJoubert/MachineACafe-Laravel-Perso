@extends('template.template')

@section('image')
    <a href="ventes"><img class="imageCompte" alt="image de comptes"  src="../img/faire-ses-comptes.jpg" /></a>
@endsection

@section('titre')
    Liste des Ventes
@endsection

@section('content')
    <div class="container">

        {{-- Tableau pour afficher chacune des ventes depuis le tableau multidimensionnel --}}
        {{-- <table class="table table-hover table-bordered">
            <thead>
                <tr class="active">
                    @foreach ($RetourTab[0] as $titre => $valeur)
                        <th>{{ $titre}}</th>
                    @endforeach

                </tr>
            </thead>
            <tbody>
                @foreach ($RetourTab as $typeVente => $donneeVente)
                    <tr>
                        @foreach ($donneeVente as $valeur)
                            <td>{{ $valeur }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table> --}}
        <table class="table-hover table-bordered">
            <tr class="active">
                <td>N° vente</td>
                <td>Nom boisson</td>
                <td>Code boisson</td>
                <td>Nb sucre(s)</td>
                <td>Prix</td>
                <td>Date et heure</td>

            </tr>

            @foreach($ventes as $vente)
                <tr class="active">
                    <td>{{$vente->id}} </td>
                    <td>{{$vente->nom}} </td>
                    <td>{{$vente->boisson_id}}</td>
                    <td>{{$vente->nbSucres}} </td>
                    <td>{{$vente->prix}} cts</td>
                    <td>{{$vente->created_at}} </td>
                </tr>
            @endforeach
        </table>
        
        <div class="boutons">
            <br>
            <a href="/machineACafe"><button type="button" class="btn btn-default">Passer une commande</button></a>
        </div>
    </div>
@endsection
