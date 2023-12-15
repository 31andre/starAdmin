@extends('content') 

                                @section('content')
                                    
                                
                            <div class="card">
                              <div class="py-3 d-flex flex-row align-items-center justify-content-between">
                                <h2 class="m-0 font-weight-bold text-primary">Ajout des Articles</h2>
                              </div>
                              <div class="card-body">
                                <form class="pt-3" action ="{{route('PostArticle')}}" method="post">
                                  @method('post')
                                  @csrf
                  
                                  
                  
                                  <div class="row">
                                      <div class="col-lg-6">
                                          <div class="form-group has-error">
                                              @error('categorie')
                                                <div class="bg-danger text-wrap" style="width: 100%; color: white; text-align: center;">
                                                  Entrez la Categorie 
                                                </div>
                                              @enderror
                                              <input type="text" name="categorie" class="form-control form-control-lg"  placeholder="Categorie">
                                            </div>
                                            
                                          </div>
                                            <div class="form-group col-lg-6">
                                                  @error('titre')
                                                <div class="bg-danger text-wrap" style="width: 100%; color: white; text-align: center;">
                                                  Entrez le titre 
                                                </div>
                                              @enderror
                                              <input type="text" name="titre" class="form-control form-control-lg"  placeholder="Nom de l'article">
                                            </div>
                                      
                                  </div>
      
                                  <div class="row">
                                      <div class="col-lg-6">
                                          <div class="form-group has-error">
                                              @error('libelle')
                                                <div class="bg-danger text-wrap" style="width: 100%; color: white; text-align: center;">
                                                  Entrez le libelle
                                                </div>
                                              @enderror
                                              <input type="text" name="libelle" class="form-control form-control-lg"  placeholder="Libellé de l'article">
                                            </div>
                                            
                                          </div>
                                            <div class="form-group col-lg-6">
                                                  @error('prix')
                                                <div class="bg-danger text-wrap" style="width: 100%; color: white; text-align: center;">
                                                  Entrez le prix
                                                </div>
                                              @enderror
                                              <input type="text" name="prix" class="form-control form-control-lg"  placeholder="Prix du Produit">
                                            </div>
                                      
                                  </div>

                                  <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group has-error">
                                            @error('status')
                                              <div class="bg-danger text-wrap" style="width: 100%; color: white; text-align: center;">
                                                Entrez le status
                                              </div>
                                            @enderror
                                            <input type="text" name="status" class="form-control form-control-lg"  placeholder="Status de l'article">
                                          </div>
                                          
                                        </div>
                                          <div class="form-group col-lg-6">
                                                @error('prix')
                                              <div class="bg-danger text-wrap" style="width: 100%; color: white; text-align: center;">
                                                Entrez le prix
                                              </div>
                                            @enderror
                                            <input type="text" name="quantite" class="form-control form-control-lg"  placeholder="quantite du Produit">
                                          </div>
                                    
                                </div>
      
                                  {{-- <div class="row">
                                      <div class="col-lg-6">
                                          {{-- <div class="form-group has-error">
                                              @error('nom')
                                                <div class="bg-danger text-wrap" style="width: 100%; color: white; text-align: center;">
                                                  ce champ est requis 
                                                </div>
                                              @enderror
                                              <input type="file" name="nom" class="form-control form-control-lg"  placeholder="Image du Produit">
                                            </div> 
                                            
                                          </div>
                                            {{-- <div class="form-group col-lg-6">
                                                  @error('email')
                                                <div class="bg-danger text-wrap" style="width: 100%; color: white; text-align: center;">
                                                  ce champ est requis 
                                                </div>
                                              @enderror
                                              <input type="text" name="email" class="form-control form-control-lg"  placeholder="email">
                                            </div> 
                                      
                                  </div> --}}
                                  
                                  {{-- <div class="row">
                                      <div class="col-lg-6">
                                          <div class="form-group has-error">
                                              @error('nom')
                                                <div class="bg-danger text-wrap" style="width: 100%; color: white; text-align: center;">
                                                  ce champ est requis 
                                                </div>
                                              @enderror
                                              <input type="text" name="nom" class="form-control form-control-lg"  placeholder="nom et prenom">
                                            </div>
                                            
                                          </div>
                                            <div class="form-group col-lg-6">
                                                  @error('email')
                                                <div class="bg-danger text-wrap" style="width: 100%; color: white; text-align: center;">
                                                  ce champ est requis 
                                                </div>
                                              @enderror
                                              <input type="text" name="email" class="form-control form-control-lg"  placeholder="email">
                                            </div>
                                      
                                  </div> --}}
      
                                  {{-- <i class="ti-pencil">fff</i>
                                  <a href="#" class="btn btn-success btn-sm">
                                      <i class="ti-trash"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm">
                                      <i class="ti-list"></i>
                                    </a>
                                    <a href="#" class="btn btn-info btn-sm">
                                      <i class="ti-pencil"></i>
                                    </a> --}}

                                    <div class="form-group has-error">
                                      @error('description')
                                        <div class="bg-danger text-wrap" style="width: 100%; color: white; text-align: center;">
                                          Entrez la decription
                                        </div>
                                      @enderror
                                      <input type="text" name="description" class="form-control form-control-lg"  placeholder="description">
                                    </div> 
      
                                  <div class="form-group">
                                    <input type="submit" class="btn btn-block btn-success btn-lg form-control form-control-lg auth-form-btn" value="AJOUTER L'ARTICLE">
                                  </div>
                                  
                                </form>
                              </div>
                            </div>
                            @endsection