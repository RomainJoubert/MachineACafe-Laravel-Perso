@extends('template.template')
@section('titre')
La liste des ingredients
@endsection
@section('content')
    <div class = "container">
        <div class="tableauIngredients ">
            <table class = "table table-hover table-bordered">
                <tr class="active">  
                    {{-- ancienne version  --}}
                    <td><b>Nom Ingrédient</b></td>
                    <td><b>Quantité</b></td>
                </tr>
                <tr>  
                    @foreach ($detailIngredients as $detailIngredient)
                    <td> {{$detailIngredient->nom}} </td>
                    <td> {{$detailIngredient->stock}} </td>
                    <td><a href="/modifierIngredient/{{$detailIngredient->id}}"><button type='button' class='btn btn-success'>Modifier</button></a></td>
                    <td><a href="{{route('supprimerIngredient', [$detailIngredient->id])}}"><button type='button' class='btn btn-danger'>Supprimer</button></a></td>
                        </tr>
                </tr>
                @endforeach
            </table>
        </div>
           <a href="/createIngredient"> <button type='button' class='btn btn primary'>Ajouter ingrédient</button></a>
    </div>
@endsection
