@extends('layout.layout')
<style>
    #main{
        margin-top:10%; 
    }
</style>
@section('main')
<section id="main" class="text-center ">
    <div class="container">



        <form action="/check" method="POST">
            @csrf
            <div class="form-group">
                <label class="h5" for="user">Usuário do Sigga</label><br>
                <input name="user"type="text" class="form-control-lg" id="user" aria-describedby="emailHelp" placeholder="fulano_silva">
            </div>
            <div class="form-group mt-5">
                <label class="h5" for="tuition_number">Número da Matricula</label><br>
                <input type="text" class=" form-control-lg " id="tuition_number" name = "tuition_number" placeholder="0000000000">
            </div>
            <button type="submit" class="mt-5 btn btn-secondary">Gerar E-mail</button>
        </form>





    </div>
    


</section>
    
@endsection



@section('add-js')
    <script>
        document.querySelector("#create_email").classList.add("active");
        document.querySelector("#email_problems").classList.remove("active");
        document.querySelector("#user_change").classList.remove("active");
    </script>
@endsection