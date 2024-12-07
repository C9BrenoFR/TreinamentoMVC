<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Busca</title>
</head>
<body>
    <div class="container">
        <form action="/busca" method="get" class="container-in">
            <input name="search" type="text" required placeholder="Busque aqui!">
        </form>
        <div class="container-in">
            <?php foreach($posts as $post): ?>
            <div>
                <h1><?= $post->titulo ?></h1>
                <p><?= $post->conteudo ?></p>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="paginate">
            <a href="/busca?page=<?= $page == 1 ? $page : $page-1 ?><?= isset($search) ? $search : "" ?>"> < </a>
            <?php for($index = 1; $index <= $total_pages; $index++): ?>
            <a href="/busca?page=<?= $index ?><?= isset($search) ? $search : "" ?>"><?= $index ?></a>
            <?php endfor; ?>
            <a href="/busca?page=<?= $page == $total_pages ? $page : $page+1 ?><?= isset($search) ? $search : "" ?>"> > </a>
        </div>
    </div>
</body>
</html>