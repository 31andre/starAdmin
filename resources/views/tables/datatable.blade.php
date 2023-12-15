@include("partials._header")

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
                @include("partials._navbar")
                @include("partials._sidebar")
                <div class="main-panel">
                    <div class="content-wrapper">
                    <div class="row">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary mb-2">Listes des Articles</h6>
                        </div>
                        <table id="example" class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Salary</th>
                                    <th>Action</th> 

                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>$320,800</td>
                                    <td>
                                       
                                            <a href="#"><i class="mdi mdi-clipboard-list-outline mdi-24px text-gray"></i></a>
                                        
                                        
                                            <a href="#"><i class="mdi mdi-pencil mdi-24px text-success"></i></a>

                                            <a href="#"><i class="mdi mdi-delete mdi-24px text-danger"></i></a>
                                        
                                    </td>
                                    </tr>
                                    

                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>$170,750</td>
                                    <td><a href="#"><i class="mdi mdi-clipboard-list-outline mdi-24px text-gray"></i></a>
                                        
                                        
                                            <a href="#"><i class="mdi mdi-pencil mdi-24px text-success"></i></a>

                                            <a href="#"><i class="mdi mdi-delete mdi-24px text-danger"></i></a></td>
                                    </tr>
                                    

                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>$86,000</td>

                                    <td><a href="#"><i class="mdi mdi-clipboard-list-outline mdi-24px text-gray"></i></a>
                                        
                                        
                                            <a href="#"><i class="mdi mdi-pencil mdi-24px text-success"></i></a>

                                            <a href="#"><i class="mdi mdi-delete mdi-24px text-danger"></i></a></td>
                                    </tr>
                                    </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>$433,060</td>
                                    <td><a href="#"><i class="mdi mdi-clipboard-list-outline mdi-24px text-gray"></i></a>
                                        
                                        
                                            <a href="#"><i class="mdi mdi-pencil mdi-24px text-success"></i></a>

                                            <a href="#"><i class="mdi mdi-delete mdi-24px text-danger"></i></a></td>
                                    </tr>
                                    

                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>$162,700</td>
                                    <td><a href="#"><i class="mdi mdi-clipboard-list-outline mdi-24px text-gray"></i></a>
                                        
                                        
                                            <a href="#"><i class="mdi mdi-pencil mdi-24px text-success"></i></a>

                                            <a href="#"><i class="mdi mdi-delete mdi-24px text-danger"></i></a></td>
                                    </tr>
                                    

                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>$372,000</td>
                                    <td><a href="#"><i class="mdi mdi-clipboard-list-outline mdi-24px text-gray"></i></a>
                                        
                                        
                                            <a href="#"><i class="mdi mdi-pencil mdi-24px text-success"></i></a>

                                            <a href="#"><i class="mdi mdi-delete mdi-24px text-danger"></i></a></td>
                                    </tr>
                                    

                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>$137,500</td>
                                    <td><a href="#"><i class="mdi mdi-clipboard-list-outline mdi-24px text-gray"></i></a>
                                        
                                        
                                            <a href="#"><i class="mdi mdi-pencil mdi-24px text-success"></i></a>

                                            <a href="#"><i class="mdi mdi-delete mdi-24px text-danger"></i></a></td>
                                    </tr>
                                    

                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    <td>$327,900</td>
                                    <td><a href="#"><i class="mdi mdi-clipboard-list-outline mdi-24px text-gray"></i></a>
                                        
                                        
                                            <a href="#"><i class="mdi mdi-pencil mdi-24px text-success"></i></a>

                                            <a href="#"><i class="mdi mdi-delete mdi-24px text-danger"></i></a></td>
                                    </tr>
                                    

                                <tr>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    <td>$205,500</td>
                                    <td><a href="#"><i class="mdi mdi-clipboard-list-outline mdi-24px text-gray"></i></a>
                                        
                                        
                                            <a href="#"><i class="mdi mdi-pencil mdi-24px text-success"></i></a>

                                            <a href="#"><i class="mdi mdi-delete mdi-24px text-danger"></i></a></td>
                                    </tr>
                                    

                                <tr>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    <td>$103,600</td>
                                    <td><a href="#"><i class="mdi mdi-clipboard-list-outline mdi-24px text-gray"></i></a>
                                        
                                        
                                            <a href="#"><i class="mdi mdi-pencil mdi-24px text-success"></i></a>

                                            <a href="#"><i class="mdi mdi-delete mdi-24px text-danger"></i></a></td>
                                    </tr>
                                    

                                <tr>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    <td>$90,560</td>

                                    <td><a href="#"><i class="mdi mdi-clipboard-list-outline mdi-24px text-gray"></i></a>
                                        
                                        
                                            <a href="#"><i class="mdi mdi-pencil mdi-24px text-success"></i></a>

                                            <a href="#"><i class="mdi mdi-delete mdi-24px text-danger"></i></a></td>
                                    </tr>
                                    
                                <tr>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>$342,000</td>
                                    <td><a href="#"><i class="mdi mdi-clipboard-list-outline mdi-24px text-gray"></i></a>
                                        
                                        
                                            <a href="#"><i class="mdi mdi-pencil mdi-24px text-success"></i></a>

                                            <a href="#"><i class="mdi mdi-delete mdi-24px text-danger"></i></a></td>
                                    </tr>
                                    

                                <tr>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    <td>San Francisco</td>
                                    <td>36</td>
                                    <td>$470,600</td>
                                    <td><a href="#"><i class="mdi mdi-clipboard-list-outline mdi-24px text-gray"></i></a>
                                        
                                        
                                            <a href="#"><i class="mdi mdi-pencil mdi-24px text-success"></i></a>

                                            <a href="#"><i class="mdi mdi-delete mdi-24px text-danger"></i></a></td>
                                    </tr>
                                    

                                <tr>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>London</td>
                                    <td>43</td>
                                    <td>$313,500</td>
                                    <td><a href="#"><i class="mdi mdi-clipboard-list-outline mdi-24px text-gray"></i></a>
                                        
                                        
                                            <a href="#"><i class="mdi mdi-pencil mdi-24px text-success"></i></a>

                                            <a href="#"><i class="mdi mdi-delete mdi-24px text-danger"></i></a></td>
                                    </tr>
                                    

                                <tr>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>19</td>
                                    <td>$385,750</td>
                                    <td><a href="#"><i class="mdi mdi-clipboard-list-outline mdi-24px text-gray"></i></a>
                                        
                                        
                                            <a href="#"><i class="mdi mdi-pencil mdi-24px text-success"></i></a>

                                            <a href="#"><i class="mdi mdi-delete mdi-24px text-danger"></i></a></td>
                                    </tr>
                                  
                                    <td>Gloria Little</td>
                                    <td>Systems Administrator</td>
                                    <td>New York</td>
                                    <td>59</td>
                                    <td>$237,500</td>
                                    <td><a href="#"><i class="mdi mdi-clipboard-list-outline mdi-24px text-gray"></i></a>
                                        
                                        
                                            <a href="#"><i class="mdi mdi-pencil mdi-24px text-success"></i></a>

                                            <a href="#"><i class="mdi mdi-delete mdi-24px text-danger"></i></a></td>
                                    </tr>
                               
                            </tbody>
                            
                        </table>
                    </div>
                    </div>
                </div>
                
                
                {{-- @include('pages.test') --}}
                
                
        </div>
    </div>
    @include('partials._footer')
     @include('partials._script')
</body>