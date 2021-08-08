<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Encryption/Decryption</title>
        
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body style="background-color:">
      <div class="container">
        <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
          <form class="col-10" method="post" action="{{ route('form.act') }}">
            @csrf
              <div class="formGroup">
                <label class="row d-flex justify-content-center">
                  <h4 class="text-center">AES Encryption and Decryption Online Tool</h4>
                </label>
                <input class="form-control text-center" type="text" name="inputMessage" placeholder="Text to Encrypt OR Decrypt" required> 
                <input type="password" class="form-control text-center" name="inputPass" placeholder="Secret Key"> 
                <div class="row mt-2">
                  <label class="radio-inline col-6 text-right">
                    <input type="radio" name="radioopt" value="Encrypt" checked>Encrypt
                  </label>
                  <label class="radio-inline col-6 text-left">
                    <input type="radio" name="radioopt" value="Decrypt">Decrypt
                  </label>
                </div>
                <button type="submit" name="action" value="Result" class="w-100 btn btn-dark">Check The Result</button>
                <div class="alert alert-dark text-center overflow-auto" role="alert">
                  Encrypted/Decrypted Text is: <br/>
                  {{ isset($Finalmessage) ? $Finalmessage : '' }}
                </div>
                <h6 class="mt-4 mb-3 text-muted text-center">Created By Yacin Pishvaz Khamiri</h6>      
              </div>
            </form>
        </div>
        </div>
    </body>
</html>

