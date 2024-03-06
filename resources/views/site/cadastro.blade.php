<!DOCTYPE html>
<html>
<head>
	<title>Formulário de login </title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<style>
    *{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}

body{
    font-family: 'Poppins', sans-serif;
    overflow: hidden;
}

.wave{
	position: fixed;
	bottom: 0;
	left: 0;
	height: 100%;
	z-index: -1;
}

.container{
    width: 100vw;
    height: 100vh;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap :7rem;
    padding: 0 2rem;
}

.img{
	display: flex;
	justify-content: flex-end;
	align-items: center;
}

.login-content{
	display: flex;
	justify-content: flex-start;
	align-items: center;
	text-align: center;
}

.img img{
	width: 500px;
}

form{
	width: 360px;
}

.login-content img{
    height: 100px;
}

.login-content h2{
	margin: 15px 0;
	color: #333;
	font-size: 2.9rem;
}

.login-content .input-div{
	position: relative;
    display: grid;
    grid-template-columns: 7% 93%;
    margin: 25px 0;
    padding: 5px 0;
    border-bottom: 2px solid #d9d9d9;
}

.login-content .input-div.one{
	margin-top: 0;
}

.i{
	color: #d9d9d9;
	display: flex;
	justify-content: center;
	align-items: center;
}

.i i{
	transition: .3s;
}

.input-div > div{
    position: relative;
	height: 45px;
}

.input-div > div > h5{
	position: absolute;
	left: 10px;
	top: 50%;
	transform: translateY(-50%);
	color: #999;
	font-size: 18px;
	transition: .3s;
}

.input-div:before, .input-div:after{
	content: '';
	position: absolute;
	bottom: -2px;
	width: 0%;
	height: 2px;
	background-color: #36a3be;
	transition: .4s;
}

.input-div:before{
	right: 50%;
}

.input-div:after{
	left: 50%;
}

.input-div.focus:before, .input-div.focus:after{
	width: 50%;
}

.input-div.focus > div > h5{
	top: -5px;
	font-size: 15px;
}

.input-div.focus > .i > i{
	color: #38d39f;
}

.input-div > div > input{
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	border: none;
	outline: none;
	background: none;
	padding: 0.5rem 0.7rem;
	font-size: 1.2rem;
	color: #555;
	font-family: 'poppins', sans-serif;
}

a{
	display: block;
	text-align: right;
	text-decoration: none;
	color: #999;
	font-size: 0.9rem;
	transition: .3s;
}

a:hover{
	color: #38d39f;
}

.btn{
	display: block;
	width: 100%;
	height: 50px;
	border-radius: 25px;
	outline: none;
	border: none;
	background-image: linear-gradient(to right, #329dbe, #398fb8, #37aeb3);
	background-size: 200%;
	font-size: 1.2rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 1rem 0;
	cursor: pointer;
	transition: .5s;
}
.btn:hover{
	background-position: right;
}


@media screen and (max-width: 1050px){
	.container{
		grid-gap: 5rem;
	}
}

@media screen and (max-width: 1000px){
	form{
		width: 290px;
	}

	.login-content h2{
        font-size: 2.4rem;
        margin: 8px 0;
	}

	.img img{
		width: 400px;
	}
}

@media screen and (max-width: 900px){
	.container{
		grid-template-columns: 1fr;
	}

	.img{
		display: none;
	}

	.wave{
		display: none;
	}

	.login-content{
		justify-content: center;
	}
}

</style>

	<img class="wave" src="{{ asset('assets/wave (2).png')}}">
	<div class="container">
		<div class="img">
			<img src="{{ asset('assets/Beauty salon-bro.svg')}}">
		</div>
		<div class="login-content">
			<form action="{{ route('cadastro.store') }}" method="POST">
                @csrf
				<img style="width: 60%;height:60%;" src="{{ asset('assets/logo4.png') }}">
				<h2 class="title">Entrar</h2>

           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="text" name="nomeUsuarioRegistro" id="nomeUsuario" class="input" placeholder="Nome Completo">
           		   </div>
           		</div>

                   <div class="input-div pass">
                    <div class="i">
                         <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                         <input type="password" name="senhaUsuarioRegistro" id="senhaUsuario" class="input" placeholder="Senha">
                    </div>
                </div>
                   <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                            <input type="text" class="input" name="emailUsuarioRegistro" id="emailUsuarioRegistro" placeholder="Email">
                    </div>
                 </div>
                 <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-mobile"></i>
                    </div>
                    <div class="div">
                            <input type="text" class="input" name="telefoneUsuarioRegistro" id="telefoneUsuario" placeholder="Telefone">
                    </div>
                 </div>

            	<input style="margin-top: 7%;" type="submit" class="btn" value="Login">
                <div style="text-align:center;">
                    <p>Já possui conta ?<a style="text-align: center;" href="/login">Faça Login</a></p>
                    <p style="margin-top: 5%;">Deseja voltar ?<a style="text-align: center;" href="/">Sair</a></p>
                </div>
            </form>

        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



    <script src="{{ asset('js/scriptCadastro.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/mainlogin.js') }}"></script>
</body>
</html>


