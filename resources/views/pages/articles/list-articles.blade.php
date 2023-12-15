@extends('content')

                            @section('content')
                            <div class="card">
                                <div class="py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h2 class="m-0 font-weight-bold text-primary mb-2">Listes des Articles</h2>
                                </div>
                                <div class="card-body">
                                    <table id="example" class="table">
                                        <thead>
                                            
                                            <tr>
                                                <th>ID </th>
                                                <th>Categorie</th>
                                                <th>Titre</th>
                                                <th>libelle</th>
                                                <th>Prix</th>
                                                <th>Status</th>
                                                <th>Quantite</th>
                                                <th>Action</th> 
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                            @foreach($articles as $article)
                                            <tr>
                                                <td>{{$article->id}}</td>
                                                <td>{{$article->categorie}}</td>
                                                <td>{{$article->titre}}</td>
                                                <td>{{$article->libelle}}</td>
                                                <td>{{$article->prix}}</td>
                                                <td>
                                                    @if($article->status == 'disponible')
                                                    <div class="btn btn-warning btn-sm">{{$article->status}}</div>
                                                    @else
                                                    <div class="btn btn-danger btn-sm">{{$article->status}}</div>
                                                    @endif
                                                    </td>
                                                <td>
                                                    <div class="btn btn-primary btn-sm">{{$article->quantite}}</div>
                                                    </td>
                                                
                                                <td>
                                                    
                                                    
                                                        <a href="{{route('show', [$article->id])}}"><i class="mdi mdi-clipboard-list-outline mdi-24px text-gray"></i></a>
                                                   
                                                    
                                                    <a href="{{route('update', [$article->id])}}"><i class="mdi mdi-pencil mdi-24px text-success"></i></a>
            
                                                    <a href="{{route('delete', [$article->id])}}"><i class="mdi mdi-delete mdi-24px text-danger"></i></a>                                      
                                                </td>
                                                </tr>
                                                @endforeach
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                            @endsection

                        