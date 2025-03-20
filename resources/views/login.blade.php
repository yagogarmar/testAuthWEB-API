
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <title>TEST</title>

     <!-- Styles / Scripts -->
     
    @vite('resources/js/app.js')
</head>
<style>

</style>

<body>
   
   

   <div class="container cont_padre">
        <div class="cont_input">
            <h1>LOGIN</h1>
            <input type="text" placeholder="USERNAME" id="username">
            <input type="password" placeholder="PASSWORD" id="password">
            <button onclick="login()">SUBMIT</button>
        </div>
        


   </div>


</div>
</body>

<script src="{{asset('js/index.js')}}"></script>
</html>