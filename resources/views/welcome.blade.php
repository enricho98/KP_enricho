<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>hehe</title>
        <link rel="icon" href="/img/polnep.png" type="image/icon type">
        <link rel="stylesheet" href="css/up.css">
        <link rel="stylesheet" href="css/button.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="/css/content.css">
        
    
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
        <link rel='stylesheet'href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>


        <section id="team" class="pb-5">
            <div class="container">
                <h5 class="section-title h1" id="Alumni">Alumni Politeknik Negeri Pontianak</h5>
                <div class="row">
             
                    
            @include('livewire.home')
            

            </div>
        </section>
        
        <button
        type="button"
        id="btn-back-to-top"
        >
  <i class="fas fa-arrow-up" style="color:white"></i>
</button>

        <div
            class="modal fade"
            id="loginModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <x-guest-layout>
            <x-jet-authentication-card>
        <x-slot name="logo">
        <x-jet-authentication-card-logo />
        </x-slot>
      
        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form">
                <x-jet-label for="email" value= <b>NIM</b>

                <input type="text" style="border-radius: 5px;"   placeholder="Masukkan NIM" class="form-control pwd" id="email" name="email" :value="old('email')" required autofocus>
            </div>
            
            <br>

            <x-jet-label for="email" value=<b>Password</b> 
            <div class="input-group">
            <input type="password" style="border-radius: 5px;"  placeholder="NIM+Nama Ibu(tanpa spasi)" class="form-control pwd" id="password" placeholder="" name="password" required>
            <i class="input-group-btn" id="eyeSlash">
            <button class="btn btn-default reveal" onclick="visibility3()" type="button"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
     </i>
     <i class="input-group-btn" id="eyeShow" style="display: none;">
       <button class="btn btn-default reveal" onclick="visibility3()" type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
     </i>
  </div>    
  <div class="block mt-4">
            <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Ingat Saya') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Lupa Password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>


                </div>
            </div>
        </div>
        <button
            id="open-button"
            type="button"
            class="btn btn-primary"
            data-toggle="modal"
            data-target=".modalPalingBesar">
            <span>Masuk</span>
        </button>

        <div
            class="modal fade modalPalingBesar"
            tabindex="-1"
            role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header border-bottom-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <x-guest-layout>
            <x-jet-authentication-card>
        <x-slot name="logo">
        <x-jet-authentication-card-logo />
        </x-slot>
      
        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form">
                <x-jet-label for="email" value="NIM" />

                <input type="text" style="border-radius: 5px;"  placeholder="Masukkan NIM" class="form-control pwd" id="email" name="email" :value="old('email')" required autofocus>
            </div>
            
            <br>

            <x-jet-label for="email" value="Password" />
            <div class="input-group">
            <input type="password" style="border-radius: 5px;" placeholder="Masukkan Nama+Tanggal Lahir"class="form-control pwd" id="password1" placeholder="" name="password" required>
            <i class="input-group-btn" id="eyeSlash1">
            <button class="btn btn-default reveal" onclick="visibility()" type="button"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
     </i>
     <i class="input-group-btn" id="eyeShow1" style="display: none;">
       <button class="btn btn-default reveal" onclick="visibility()" type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
     </i>
  </div>
  <div class="block mt-4">
            <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Ingat Saya') }}</span>
                </label>
            </div>


            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Lupa Password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>


                    </div>
                </div>
                

            </body>
            <script src="js/jquery.js"></script>
            <script src="js/popper.js"></script>
            <script src="js/bootstrap.js"></script>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="js/LogIn.js"></script>
            <script>
$('#Alumni').bind('contextmenu', function(e) {
    return false;
}); 


function visibility3() {
    var x = document.getElementById('password');
    if (x.type === 'password') {
      x.type = "text";
      $('#eyeShow').show();
      $('#eyeSlash').hide();
    }else {
      x.type = "password";
      $('#eyeShow').hide();
      $('#eyeSlash').show();
    }
  }
  function myFunction() {
    var x = document.getElementById("*passwordbox-id*");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

  function visibility() {
    var x = document.getElementById('password1');
    if (x.type === 'password') {
      x.type = "text";
      $('#eyeShow1').show();
      $('#eyeSlash1').hide();
    }else {
      x.type = "password";
      $('#eyeShow1').hide();
      $('#eyeSlash1').show();
    }
  }
  function myFunction() {
    var x = document.getElementById("*passwordbox-id*");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }



            </script>
<script>

//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
  behavior: "smooth"
}

</script>
            <!-- jQuery -->
            <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
            <!-- Popper JS -->
            <script
                src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
            <!-- Bootstrap JS -->
            <script
                src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
            <!-- Custom Script -->
            <script src="js/script.js"></script>
<script src="/js/jquery.animateNumber.min.js"></script>
        </html>