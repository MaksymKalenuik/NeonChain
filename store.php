<?php require 'functions.php'; ?>
<?php get_header(); ?>

<div class="banner-store wow animate__animated animate__fadeIn "></div> 

<section class="store">
  <!-- Задній фон Canvas для списку продуктів -->
  <div class="products-list mt-5">
    <div class="container">
      <canvas id="background"></canvas> <!-- canvas тепер тут, як фон -->
      <div class="row">
        <!-- Продукти -->
        <?php 
          // Масив для демонстрації. Можна замінити на дані з бази даних.
          $products = [
            ['img' => 'images/products/neon1.png', 'name' => 'NeonMimic', 'price' => '15$', 'button' => 'Buy'],
            ['img' => 'images/products/neon2.png', 'name' => 'GlowForm', 'price' => '25$', 'button' => 'Buy'],
            ['img' => 'images/products/neon3.webp', 'name' => 'LumaMannequins', 'price' => '35$', 'button' => 'Buy'],
            ['img' => 'images/products/neon4.webp', 'name' => 'CyberGlow', 'price' => '5$', 'button' => 'Buy'],
            ['img' => 'images/products/neon5.webp', 'name' => 'GlowFigures', 'price' => '10$', 'button' => 'Buy']
          ];
          foreach ($products as $product): 
        ?>
          <div class="product-item rounded col wow animate__animated animate__fadeIn ">
            <img src="<?php echo $product['img']; ?>" class="img-fluid rounded-pill px-2" alt="Product Image" loading="lazy">
            <div class="product-content p-3">
              <h5 class="general-text-color"><?php echo $product['name']; ?></h5>
              <div class="row mt-3">
                <div class="col-6">
                  <h5 class="general-text-color"><?php echo $product['price']; ?></h5>
                </div>
                <div class="">
                  <a href="#" class="neon-button-small p-2 text-decoration-none"><?php echo $product['button']; ?></a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- Скрипт для Canvas (задній фон) -->
<script>
  const canvas = document.getElementById('background');
const ctx = canvas.getContext('2d');

// Функція для зміни розміру canvas
function resizeCanvas() {
  const productsList = document.querySelector('.products-list');
  canvas.width = productsList.offsetWidth;
  canvas.height = productsList.offsetHeight;
}

window.addEventListener('resize', () => {
  resizeCanvas();
  regenerateLines();
});

resizeCanvas();

let lines = [];

function createLine() {
  return {
    x: Math.random() * canvas.width,
    y: Math.random() * canvas.height,
    width: Math.random() * 2 + 1,
    color: `hsl(${Math.random() * 60 + 240}, 100%, 70%)`,
    glowColor: `hsla(${Math.random() * 60 + 240}, 100%, 70%, 0.5)`,
    speed: Math.random() * 2 + 1,
  };
}

function regenerateLines() {
  lines = [];
  for (let i = 0; i < 20; i++) {  // Зменшено кількість ліній
    lines.push(createLine());
  }
}

regenerateLines();

function draw() {
  ctx.fillStyle = 'black';
  ctx.fillRect(0, 0, canvas.width, canvas.height);

  lines.forEach(line => {
    ctx.shadowBlur = 20;
    ctx.shadowColor = line.glowColor;

    ctx.beginPath();
    ctx.moveTo(line.x, line.y);
    ctx.lineTo(line.x + 100, line.y + 100);
    ctx.strokeStyle = line.color;
    ctx.lineWidth = line.width;
    ctx.stroke();

    ctx.shadowBlur = 0;

    line.x += line.speed;
    if (line.x > canvas.width) line.x = -100;
  });

  requestAnimationFrame(draw);
}

draw();
</script>

<?php get_footer(); ?>
