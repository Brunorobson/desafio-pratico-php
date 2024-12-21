<?php
$projetos = [
    [
        "titulo" => "Travelgram",
        "imagem" => "/img/capa-projetos/travelgram.webp",
        "alt" => "Foto Travelgam",
        "descricao" => "Rede social onde as pessoas mostram os registros de suas viagens pelo mundo",
        "stacks" => [
            "PHP",
            "CSS",
            "HTML",
            "Javascript"
        ]
    ],
    [
        "titulo" => "Página de receita",
        "imagem" => "/img/capa-projetos/pagina-de-receita.webp",
        "alt" => "Foto de receita",
        "descricao" => "Página com o passo a passo de uma receita para cupcakes",
        "stacks" => [
            "PHP",
            "CSS",
            "HTML",
            "Javascript"
        ]
    ],
    [
        "titulo" => "Tech News",
        "imagem" => "/img/capa-projetos/tech-news.webp",
        "alt" => "Foto de pagina de noticias",
        "descricao" => "Homepage de um portal de notícias sobre a área de tecnologia",
        "stacks" => [
            "PHP",
            "CSS",
            "HTML",
            "Javascript"
        ],
    ],
    [
        "titulo" => "Refund",
        "imagem" => "/img/capa-projetos/refund.webp",
        "alt" => "Foto de pagina de reembolso",
        "descricao" => "Um sistema para pedido e acompanhamento de reembolso",
        "stacks" => [
            "PHP",
            "CSS",
            "HTML",
            "Javascript"
        ],
    ],
    [
        "titulo" => "Página de turismo",
        "imagem" => "/img/capa-projetos/pagina-de-turismo.webp",
        "alt" => "Foto de pagina de turismo",
        "descricao" => "Página com as principais informações para quem quer viajar para Busan",
        "stacks" => [
            "PHP",
            "CSS",
            "HTML",
            "Javascript"
        ],
    ],
    [
        "titulo" => "Zingen",
        "imagem" => "/img/capa-projetos/zingen.webp",
        "descricao" => "Landing Page completa e responsiva de um aplicativo de Karaokê",
        "stacks" => [
            "PHP",
            "CSS",
            "HTML",
            "Javascript"
        ],
    ]
];
?>
<div class="bg-[#17181C] py-10">
    <div class="bg-center bg-cover my-auto flex flex-col justify-center items-center h-screen">
        <p class="subtitle mt-20 text-red-400">Meu trabalho</p>
        <h3 class="title-md text-white">Veja os projetos em destaque</h3>
        <span class="w-2/3 grid grid-cols-2 gap-4 mt-10">
            <?php foreach ($projetos as $projeto):  ?>
                <div class="bg-[#292C34] rounded-lg p-3 flex hover:border-2 border-white">
                    <img class="w-auto h-auto" src="<?= $projeto["imagem"] ?>" alt="<?= $projeto["alt"] ?>">
                    <div class="ml-5">
                        <h3 class="text-white text-2xl font-bold font-asap title-sm"><?= $projeto["titulo"] ?></h3>
                        <p class="mx-auto text-white font-maven-pro text-sm mt-4 text-sm"><?= $projeto["descricao"] ?></p>
                        <span class="mt-10 flex">
                            <?php imprimeTecnologias($projeto["stacks"], false); ?>
                        </span>
        </span>
    </div>
</div>
<?php endforeach ?>
</span>
</div>
</div>