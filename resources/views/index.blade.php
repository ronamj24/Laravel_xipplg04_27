<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameZone - Premium Gaming Store</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <i class="fas fa-gamepad"></i>
                <span>GameZone</span>
            </div>
            <ul class="nav-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="blog/index.html">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-count">0</span>
            </div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Welcome to <span class="highlight">GameZone</span></h1>
            <p class="hero-subtitle">Your Ultimate Gaming Destination</p>
            <p class="hero-description">Discover the latest gaming gear, consoles, and accessories. Level up your gaming experience with premium products.</p>
            <div class="hero-buttons">
                <button class="btn btn-primary">Shop Now</button>
                <button class="btn btn-secondary">Learn More</button>
            </div>
        </div>
        <div class="hero-visual">
            <div class="floating-elements">
                <div class="floating-item" data-speed="2">
                    <i class="fas fa-gamepad"></i>
                </div>
                <div class="floating-item" data-speed="1.5">
                    <i class="fas fa-headset"></i>
                </div>
                <div class="floating-item" data-speed="2.5">
                    <i class="fas fa-keyboard"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- New Product Section -->
    <section id="new-product" class="new-product">
        <div class="container">
            <h2 class="section-title">New Products!</h2>
            <div class="new-products-grid" id="newProductsGrid">
                <!-- Produk terbaru akan di-generate oleh JS -->
            </div>
        </div>
    </section>
    <!-- Products Section -->
    <section id="products" class="products">
        <div class="container">
            <h2 class="section-title">Our Products</h2>
            
            <!-- Search and Filter Section -->
            <!-- Bagian filter dihapus sesuai permintaan -->
            
            <div class="search-results">
                <div id="resultsCount" class="results-count"></div>
                <div id="productsGrid" class="products-grid">
                    <!-- Products will be dynamically generated here -->
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>About GameZone</h2>
                    <p>We are passionate about gaming and committed to providing the best gaming experience to our customers. Our store offers a wide selection of gaming products from top brands worldwide.</p>
                    <div class="stats">
                        <div class="stat">
                            <span class="stat-number">1000+</span>
                            <span class="stat-label">Happy Customers</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Products</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">Support</span>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <div class="image-placeholder">
                        <i class="fas fa-store"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="home-blog">
        <div class="container">
            <h2 class="section-title">Blog Terbaru</h2>
            <p class="home-blog-intro">Tips dan panduan singkat seputar gear gaming pilihan untuk memaksimalkan pengalaman bermain Anda.</p>
            <div class="blog-grid">
                <article class="blog-card">
                    <div class="blog-card-media">
                        <img src="Headset.png" alt="Headset Gaming">
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-meta">
                            <span class="badge">Tips</span>
                            <span>•</span>
                            <span>Jun 2024</span>
                        </div>
                        <h3 class="blog-card-title"><a href="blog/artikel1.html">Tips Memilih Headset Gaming Terbaik</a></h3>
                        <p class="blog-card-excerpt">Kenali komponen penting seperti kualitas suara, mikrofon, kenyamanan, dan konektivitas agar sesuai dengan gaya bermain Anda.</p>
                        <div class="blog-card-actions">
                            <a class="btn btn-primary" href="blog/artikel1.html">Baca Selengkapnya</a>
                        </div>
                    </div>
                </article>
                <article class="blog-card">
                    <div class="blog-card-media">
                        <img src="mechanicalkeyboards.png" alt="Keyboard Mekanikal">
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-meta">
                            <span class="badge">Panduan</span>
                            <span>•</span>
                            <span>Jun 2024</span>
                        </div>
                        <h3 class="blog-card-title"><a href="blog/artikel2.html">Panduan Keyboard Mekanikal untuk Gamer</a></h3>
                        <p class="blog-card-excerpt">Pelajari perbedaan switch, layout, dan fitur seperti anti-ghosting dan polling rate untuk performa maksimal.</p>
                        <div class="blog-card-actions">
                            <a class="btn btn-primary" href="blog/artikel2.html">Baca Selengkapnya</a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="blog-footer-actions">
                <a class="btn-see-more" href="blog/index.html">Lihat Artikel Lain</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h4>Address</h4>
                            <p>123 Gaming Street, Tech City, TC 12345</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h4>Phone</h4>
                            <p>+1 (555) 123-4567</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h4>Email</h4>
                            <p>info@gamezone.com</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <h3>Send us a Message</h3>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" class="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                        <i class="fas fa-gamepad"></i>
                        <span>GameZone</span>
                    </div>
                    <p>Your ultimate destination for all things gaming. Quality products, competitive prices, and exceptional service.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="#">Controllers</a></li>
                        <li><a href="#">Headsets</a></li>
                        <li><a href="#">Keyboards</a></li>
                        <li><a href="#">Mice</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 GameZone. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
    <script>
// Produk terbaru (ambil 3 teratas dari daftar produk utama)
const newProducts = [
    {
        id: 1,
        name: 'ROG Delta S Wireless',
        brand: 'ROG',
        type: 'Headset',
        price: 2500000,
        image: 'images.png',
        description: 'Headset gaming wireless dengan Hi-Res audio dan dual-mode connectivity.'
    },
    {
        id: 2,
        name: 'Logitech G915 TKL',
        brand: 'Logitech',
        type: 'Keyboard',
        price: 3200000,
        image: 'images (1).png',
        description: 'Keyboard gaming wireless mechanical RGB ultra tipis dan responsif.'
    },
    {
        id: 3,
        name: 'Razer DeathAdder V2',
        brand: 'Razer',
        type: 'Mouse',
        price: 900000,
        image: 'images (2).png',
        description: 'Mouse gaming legendaris dengan sensor 20K DPI Focus+ dan Speedflex cable.'
    }
];

function renderNewProducts() {
    const grid = document.getElementById('newProductsGrid');
    if (!grid) return;
    grid.innerHTML = newProducts.map(product => `
        <div class="new-product-card">
            <img src="${product.image}" alt="${product.name}">
            <h3>${product.name}</h3>
            <p>${product.description}</p>
            <div class="new-product-actions">
                <button class="btn btn-primary buy-btn" data-id="${product.id}">Beli</button>
                <button class="btn btn-secondary add-to-cart-btn" data-id="${product.id}"><i class="fas fa-shopping-cart"></i> Keranjang</button>
            </div>
        </div>
    `).join('');
    // Event listener tombol
    grid.querySelectorAll('.buy-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            buyNow(this.getAttribute('data-id'));
        });
    });
    grid.querySelectorAll('.add-to-cart-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            addToCart(this.getAttribute('data-id'));
        });
    });
}
document.addEventListener('DOMContentLoaded', renderNewProducts);
</script>
</body>
</html> 