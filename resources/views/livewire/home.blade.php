
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->





                    <!-- Team member -->
                    @foreach($users as $p)
                    <div class="col-xs-12 col-sm-6 col-md-4 " >
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                        @if(isset($p->profile_photo_path) && $p->profile_photo_path)
        
                 <img class="img-fluid" src= "{{asset('storage/'.$p->profile_photo_path)}}"/>
        
        @else
            
        <img class="img-fluid" src="img/Geisha_5120.png"/>
        
        @endif
  

                                            <h4 class="card-title">{{ $p->name }}</h4>
                                            <p class="card-text">{{ $p->nim}}</p>
                                            <p class="card-text">{{ $p->prodi}}</p>
                                            <p class="kerja">{{ $p->pekerjaan}}</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside scrollingOptions" id="avoidOptions" >
                                    <div class="card" >
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">{{ $p->name }}</h4>
                                            <p class="card-text1 likeavoid avoid1"style="overflow-x:hidden;" >{{ $p->message }}</p>
                                            
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a
                                                        class="social-icon text-xs-center"
                                                        target="_blank"
                                                        href="https://www.instagram.com/mediapolnep/?hl=id">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a
                                                        class="social-icon text-xs-center"
                                                        target="_blank"
                                                        href="https://id-id.facebook.com/POLNEP.Politeknik.Negeri.Pontianak/">
                                                        <i class="fab fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a
                                                        class="social-icon text-xs-center"
                                                        target="_blank"
                                                        href="https://www.youtube.com/c/PoliteknikNegeriPontianak/videos">
                                                        <i class="fab fa-youtube"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a
                                                        class="social-icon text-xs-center"
                                                        target="_blank"
                                                        href="https://www.polnep.ac.id/">
                                                        <i class="fa fa-globe"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
                </div>
      
                <script>
                    var div = document.getElementById(scroll);


                    You need to animate a little bit at a time..
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

