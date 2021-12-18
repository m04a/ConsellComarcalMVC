<!DOCTYPE html>
<html lang="ca">

<head>

    <!-- Incluguem el fitxer head que contindrà totes  -->
    <?php include '../src/includes/head.php'; ?>
    <title><?= $informacioArticle["titol"] ?> | GCN Consell Comarcal</title>
</head>

<body>
    <?php
    include '../src/includes/preloader.php';
    ?>
    <?php
    include '../src/includes/nav.php';
    ?>
    <!--Container-->
    <div class="container w-full md:max-w-3xl mx-auto pt-20">

        <div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">

    <!--Title-->
    <div class="font-sans">
        <p class="text-base md:text-sm text-green-500 font-bold">&lt; <a href="index.php" class="text-base md:text-sm text-red-500 font-bold no-underline hover:underline">Tornar a la portada</a></p>
                <h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl"><?= $informacioArticle['titol'];?></h1>
                <p class="text-sm md:text-base font-normal text-gray-600 mb-5">Ultima Edició el <?= $informacioArticle['dataEdicio'];?></p>
    </div>          


            <!--Post Content-->

            <?= $informacioArticle['contingut']; ?>
 
            <!--/ Post Content-->

            <br>
            <ul role="list" class="border border-gray-300 rounded-md divide-y divide-gray-200">
                <?php foreach ($documentsArticle as $actual) { ?>
                    <a href="img/documents/<?= $actual["enllac"]; ?>" target="__blank">
                        <li class="documentPdf border border-gray-300 bg-gray-100 pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                            <div class="w-0 flex-1 flex items-center">
                                <span class="flex-shrink-0 h-5 w-5 text-red-700 text-2xl"><i class="fas fa-file-pdf"></i></span>
                                <span class="ml-2 flex-1 w-0 truncate">
                                    <?= $actual["enllac"]; ?>
                                </span>
                            </div>
                        </li>
                    </a>
                <?php } ?>
            </ul>

<!--Categoria -->
<div class="text-base md:text-sm text-gray-500 px-4 py-6">
    Categoria: <?= $informacioArticle["categoria"]; ?>
</div>

<hr>

<!--Veure articles-->
<div class="font-sans flex justify-between content-center px-4 pb-12">
            <div class="text-left">
            <?php if(isset($idanteriorArticle)){ ?>
				<a href="index.php?r=article&id=<?=$idanteriorArticle?>" class="text-xs md:text-sm font-normal text-red-600">&lt; Anterior Article<br>
				<p><?=$nomanteriorArticle?></p></a>
                <?php } ?>
            </div>
            
			<div class="text-right">
            <?php if(isset($idseguentArticle)){ ?>
				<a href="index.php?r=article&id=<?=$idseguentArticle?>" class="text-xs md:text-sm font-normal text-red-600">Seguent article &gt;<br>
				<p><?=$nomseguentArticle?> </p></a>
                <?php } ?>
            </div>
		</div>

        </div>
        <!--/Veure articles-->

    </div>
    <!--/container-->
    <footer>
        <?php include '../src/includes/footer.php'; ?>
    </footer>
    <?php include '../src/includes/scripts.php'; ?>

</body>

</html>