<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">

<!-- Inclusão do cabeçalho -->
<?php
  include_once("templates/header.php");
?>
  <main>
    <div id="title-container">
      <h1>Blog do Daniel Azevedo</h1>
      <p>O nosso blog de Programação</p>
    </div>
    <div id="posts-container">
      <?php foreach($posts as $post): ?>
        <div class="post-box">
          <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
          <h2 class="post-title"><a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h2>
          <p class="post-description"><?= $post['description'] ?></p>
          <div class="tags-container">
            <?php foreach($post['tags'] as $tag): ?>
            <a href="#"><?= $tag ?></a>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </main>
<!-- Inclusão do rodapé -->
<?php
  include_once("templates/footer.php");
?>