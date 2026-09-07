<?php $config=require __DIR__.'/config/config.php'; date_default_timezone_set($config['timezone']); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>GP Hamper Store — Make Every Moment Special</title>
<meta name="description" content="GP Hamper Store — thoughtful gifts, jewellery and hampers.">
<link rel="icon" href="assets/img/favicon.svg"><link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="announcement">Make Every Moment Special 💗</div>
<header class="header">
<a class="brand" href="index.php"><span class="logo">🎁</span> GP Hamper Store</a>
<nav><a href="index.php">Home</a><a href="#categories">Categories</a><a href="#best-sellers">Best Sellers</a><a href="#search">Search</a><a href="cart.php">Cart <span id="cartCount">0</span></a><a href="account.php">Account</a></nav>
<button class="menu" onclick="document.body.classList.toggle('nav-open')">☰</button>
</header>
<main>
<section class="hero">
<div><p class="eyebrow">GP HAMPER STORE</p><h1>Make Every Moment Special</h1><p>Thoughtful gifts, jewellery and hampers for every occasion.</p><a class="btn" href="#best-sellers">Shop Now</a></div>
<div class="hero-art">🎁<br>💗</div>
</section>

<section id="search" class="section search"><input placeholder="Search products or categories…" oninput="filterProducts(this.value)"></section>

<section id="best-sellers" class="section"><h2>Best Sellers</h2>
<div class="product-grid" id="products">
<?php for($i=1;$i<=4;$i++): ?>
<article class="card" data-name="Sample Gift Product">
<div class="product-img">Product Photo</div><h3>Sample Gift Product</h3>
<div class="stars">★★★★★ <small>(0)</small></div>
<p><strong>₹299</strong> <del>₹499</del></p>
<button class="btn small" onclick="addDemo()">Add to Cart</button>
</article>
<?php endfor; ?>
</div></section>

<section id="categories" class="section"><h2>Categories</h2>
<div class="category-grid"><div>🎀<b>Gifts</b></div><div>💎<b>Jewellery</b></div><div>🌷<b>Hampers</b></div><div>💝<b>Bracelets</b></div></div></section>

<section class="trust section">
<div>🚚<b>4–5 Days Delivery</b><span>Fast delivery</span></div>
<div>↩️<b>Delivery & Refund Policy</b><span>Clear policies</span></div>
<div>💬<b>24×7 Customer Support</b><span>We’re here to help</span></div>
</section>

<section class="section"><h2>Follow us on Instagram</h2>
<div class="ig-grid"><div>Instagram Photo</div><div>Instagram Photo</div><div>Instagram Photo</div><div>Instagram Photo</div></div></section>
</main>

<footer>
<div><h3>GP Hamper Store</h3><p>Make Every Moment Special.</p></div>
<div><h4>Quick Links</h4><a>About Us</a><a>Contact Us</a><a>Privacy Policy</a><a>Terms & Conditions</a></div>
<div><h4>Policies</h4><a>Shipping Policy</a><a>Refund/Replacement Policy</a></div>
<div><h4>Connect</h4><a>Instagram</a><a>WhatsApp</a><a>Customer Support</a></div>
</footer>
<a class="whatsapp" href="#" aria-label="WhatsApp">☏</a>
<script src="assets/js/app.js"></script>
</body></html>
