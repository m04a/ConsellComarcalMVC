<!DOCTYPE html>
<html lang="ca">
<head>
    <?php require '../src/includes/head.php'; ?>
    <title>Registre | GCN Consell Comarcal</title>
</head>
<body class="bg-red-500">
<div class="bg-grey-lighter min-h-screen flex flex-col">
            <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <form action="index.php?r=doregistre" method="post">
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                <a href="index.php?r=">
                <img src="../img/LogoConsellComarcalAmbLletra.jpg" alt="Logo" class="h-100 w-100 block m-auto">
                </a>
                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="username"
                        placeholder="Nom d'usuari" />
                    <div class="grid grid-cols-2">
                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="nom"
                        placeholder="Nom" />

                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4 ml-2"
                        name="cognom"
                        placeholder="Cognom" />
                    
                    </div>
                    <div class="grid grid-cols-2">
                    <input 
                        type="email"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="email"
                        placeholder="Email" />
                    
                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4 ml-2"
                        name="telefon"
                        placeholder="Número de telefon" />
                    </div>
                    <input 
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="password"
                        placeholder="Contrasenya" />

                    <input 
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="confirm_password"
                        placeholder="Confirmar contrasenya" />
                    
                    <input type="hidden" name="rol" value="Usuari" />

                    <button type="submit" class="w-full text-center py-3 rounded bg-red-500 text-white hover:bg-green-dark focus:outline-none my-1">Registrar-se</button>

                    <div class="text-center text-sm text-grey-dark mt-4">
                    Ja tens una compte? 
                    <a class="no-underline border-b border-blue text-blue" href="index.php?r=login">
                        Inicia Sessió
                    </a>.
                    </div>
                </div>
                </form>
            </div>
        </div>
</body>
</html>