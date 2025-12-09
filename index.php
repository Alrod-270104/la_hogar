<?php
include 'Configuracion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Menú</title>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,400;6..12,700;6..12,900&family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <style>
        .container {
            padding: 20px;
        }

        .cart-link {
            width: 100%;
            text-align: right;
            display: block;
            font-size: 22px;
        }
    </style>
</head>
</head>

<body>
    <div class="inner-hero-container">
        <div class="inner-hero-bg" style="background-image: url('https://picsum.photos/1920/800?random=51');"></div>
        <div class="hero-overlay-gradient"></div>

        <div class="container relative-z">
            <header id="main-header" class="main-header home-header">
                <div class="header-content">
                    <a href="index.html" class="logo">
                        <img src="images/LA hogareña MAnual de Marca_Mesa de trabajo 1.png" alt="La Hogareña Logo">
                    </a>
                    <nav class="desktop-nav">
                        <a href="index.html" class="nav-link">INICIO</a>
                        <a href="Nosotros.html" class="nav-link">NOSOTROS</a>
                        <a href="menu.html" class="nav-link">MENÚ</a>
                        <a href="Noticias.html" class="nav-link">NOTICIAS</a>
                    </nav>
                    <div class="header-actions">
                        <div class="mobile-menu-toggle">
                            <button id="mobile-menu-button">
                                 <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>
                <nav id="mobile-menu" class="mobile-nav hidden">
                    <ul>
                        <li><a href="index.html" class="mobile-nav-link">INICIO</a></li>
                        <li><a href="Nosotros.html" class="mobile-nav-link">NOSOTROS</a></li>
                        <li><a href="menu.html" class="mobile-nav-link">MENÚ</a></li>
                        <li><a href="Noticias.html" class="mobile-nav-link">NOTICIAS</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div class="inner-hero-content container">
            <h1 class="inner-hero-title">MENÚ</h1>
        </div>
    </div>

    <div class="inner-page-wrapper container">
        <main class="main-content">
            <div class="menu-container" style="box-shadow: none; background: transparent; padding: 0;">
                <div class="menu-tabs">
                    <button id="cafe-tab" class="menu-tab active">CAFÉ</button>
                    <button id="restaurant-tab" class="menu-tab">RESTAURANT</button>
                </div>
<a href="VerCarta.php" class="cart-link" title="Ver Carta"><i class="glyphicon glyphicon-shopping-cart"></i></a>

                <div class="menu-content-area">
                    <div id="cafe-content" class="menu-content">
                        <div class="menu-section">
                            <h2 class="menu-section-title">DESTACADOS</h2>
                            <div class="featured-scroll no-scrollbar">
                                <div class="featured-item">
                                    <div class="featured-item-img"><img src="https://picsum.photos/200/200?random=21"
                                            alt="Espresso Doble"></div>
                                    <h4 class="featured-item-title">Café Yungueño</h4>
                                    <p class="featured-item-price">7.00 Bs.</p>
                                </div>
                                
                                <div class="featured-item">
                                    <div class="featured-item-img"><img src="https://picsum.photos/200/200?random=24"
                                            alt="Torta de Chocolate"></div>
                                    <h4 class="featured-item-title">Cocoa</h4>
                                    <p class="featured-item-price">6 Bs.</p>
                                </div>
                                <div class="featured-item">
                                    <div class="featured-item-img"><img src="https://picsum.photos/200/200?random=22"
                                            alt="Latte Vainilla"></div>
                                    <h4 class="featured-item-title">Jugo de naranja</h4>
                                    <p class="featured-item-price">5.00 Bs.</p>
                                </div>
                                <div class="featured-item">
                                    <div class="featured-item-img"><img src="https://picsum.photos/200/200?random=23"
                                            alt="Capuchino"></div>
                                    <h4 class="featured-item-title">Alfajores Medianos</h4>
                                    <p class="featured-item-price">3 Bs.</p>
                                </div>
                                <div class="featured-item">
                                    <div class="featured-item-img"><img src="https://picsum.photos/200/200?random=24"
                                            alt="Torta de Chocolate"></div>
                                    <h4 class="featured-item-title">Queques</h4>
                                    <p class="featured-item-price">4.00 Bs.</p>
                                </div>
                                <div class="featured-item">
                                    <div class="featured-item-img"><img src="https://picsum.photos/200/200?random=25"
                                            alt="Croissant"></div>
                                    <h4 class="featured-item-title">té</h4>
                                    <p class="featured-item-price">5.00 Bs.</p>
                                </div>
                                <div class="featured-item">
                                    <div class="featured-item-img"><img src="https://picsum.photos/200/200?random=26"
                                            alt="Jugo Natural"></div>
                                    <h4 class="featured-item-title">Empanadas</h4>
                                    <p class="featured-item-price">3.00 Bs.</p>
                                </div>
                            </div>
                        </div>
                        <hr class="menu-divider">

                        <div id="products" class="row list-group">
                <?php
                //get rows query
                $query = $db->query("SELECT * FROM bebidas_calientes ORDER BY id DESC LIMIT 10");
                if ($query->num_rows > 0) {
                    while ($row = $query->fetch_assoc()) {
                ?>
                        <div class="item col-lg-4">
                            <div class="thumbnail">
                                <div class="caption">
                                    <img src="<?php echo $row["imagen"]; ?>" alt="" width="150" height="150">
                                    <h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>
                                    <p class="list-group-item-text"><?php echo $row["description"]; ?></p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="lead"><?php echo '' . $row["price"] . ' Bs.'; ?></p>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="btn btn-success" href="AccionCarta.php" action=addToCart&id=<?php echo $row["id"]; ?>">Enviar al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                } else { ?>
                    <p>Producto(s) no existe.....</p>
                <?php } ?>
            </div>
        </div>
    </div>
      <!--Panek cierra-->

</div>
                        <div class="menu-items-section">
                            <h2 class="menu-section-title">BEBIDAS CALIENTES</h2>
                            <div class="menu-items-grid">
                                <div class="menu-item-card">
                                    <div class="menu-item-img"><img src="https://picsum.photos/200/200?random=61"
                                            alt="Espresso Clásico" /></div>
                                    <div class="menu-item-details">
                                        <div>
                                            <h3 class="menu-item-title">Café Yungueño</h3>
                                            <p class="menu-item-desc">Intenso y aromático. El sabor puro del mejor café de los Yungas.</p>
                                        </div>
                                        <div class="menu-item-footer"><span class="menu-item-price">7.00 Bs</span><button
                                                class="btn btn-dark btn-sm">Ordenar</button></div>
                                    </div>
                                </div>
                                <div class="menu-item-card">
                                    <div class="menu-item-img"><img src="https://picsum.photos/200/200?random=62"
                                            alt="Latte Cremoso" /></div>
                                    <div class="menu-item-details">
                                        <div>
                                            <h3 class="menu-item-title">Sultana</h3>
                                            <p class="menu-item-desc">Refrescante y digestiva. Infusión de la cáscara de café, dulce por naturaleza.</p>
                                        </div>
                                        <div class="menu-item-footer"><span class="menu-item-price">5.00 bs.</span><button
                                                class="btn btn-dark btn-sm">Ordenar</button></div>
                                    </div>
                                </div>
                                <div class="menu-item-card">
                                    <div class="menu-item-img"><img src="https://picsum.photos/200/200?random=63"
                                            alt="Cappuccino Italiano" /></div>
                                    <div class="menu-item-details">
                                        <div>
                                            <h3 class="menu-item-title">Té</h3>
                                            <p class="menu-item-desc">El clásico para calentar el alma. Negro o de hierbas, sencillo y reconfortante.
                                            </p>
                                        </div>
                                        <div class="menu-item-footer"><span class="menu-item-price">5.00 Bs.</span><button
                                                class="btn btn-dark btn-sm">Ordenar</button></div>
                                    </div>
                                </div>
                                <div class="menu-item-card">
                                    <div class="menu-item-img"><img src="https://picsum.photos/200/200?random=64"
                                            alt="Mocha Decadente" /></div>
                                    <div class="menu-item-details">
                                        <div>
                                            <h3 class="menu-item-title">Mate de Manzanilla</h3>
                                            <p class="menu-item-desc">Suave y relajante. Perfecto para calmar el estómago o disfrutar de la tarde.
                                            </p>
                                        </div>
                                        <div class="menu-item-footer"><span class="menu-item-price">4.00 Bs.</span><button
                                                class="btn btn-dark btn-sm">Ordenar</button></div>
                                    </div>
                                </div>
                                <div class="menu-item-card">
                                    <div class="menu-item-img"><img src="https://picsum.photos/200/200?random=65"
                                            alt="Americano Fuerte" /></div>
                                    <div class="menu-item-details">
                                        <div>
                                            <h3 class="menu-item-title">Mate de Coca</h3>
                                            <p class="menu-item-desc">Energizante y natural. El mate tradicional que te ayuda con el mal de altura.</p>
                                        </div>
                                        <div class="menu-item-footer"><span class="menu-item-price">4.00 Bs.</span><button
                                                class="btn btn-dark btn-sm">Ordenar</button></div>
                                    </div>
                                </div>
                                <div class="menu-item-card">
                                    <div class="menu-item-img"><img src="https://picsum.photos/200/200?random=66"
                                            alt="Café Helado" /></div>
                                    <div class="menu-item-details">
                                        <div>
                                            <h3 class="menu-item-title">Mate de Anís</h3>
                                            <p class="menu-item-desc">Aromático y digestivo. Ideal para después de una comida o para entrar en calor.</p>
                                        </div>
                                        <div class="menu-item-footer"><span class="menu-item-price">4.00 Bs.</span><button
                                                class="btn btn-dark btn-sm">Ordenar</button></div>
                                    </div>
                                </div>
                                 <div class="menu-item-card">
                                    <div class="menu-item-img"><img src="https://picsum.photos/200/200?random=66"
                                            alt="Café Helado" /></div>
                                    <div class="menu-item-details">
                                        <div>
                                            <h3 class="menu-item-title">Trimate</h3>
                                            <p class="menu-item-desc">La combinación perfecta de hierbas andinas para revitalizar tu día.</p>
                                        </div>
                                        <div class="menu-item-footer"><span class="menu-item-price">5.00 Bs.</span><button
                                                class="btn btn-dark btn-sm">Ordenar</button></div>
                                    </div>
                                </div>
                                 <div class="menu-item-card">
                                    <div class="menu-item-img"><img src="https://picsum.photos/200/200?random=106"
                                            alt="Café Helado" /></div>
                                    <div class="menu-item-details">
                                        <div>
                                            <h3 class="menu-item-title">Cocoa</h3>
                                            <p class="menu-item-desc">Chocolate caliente. Dulce y reconfortante, el favorito de grandes y chicos.</p>
                                        </div>
                                        <div class="menu-item-footer"><span class="menu-item-price">6.00 Bs.</span><button
                                                class="btn btn-dark btn-sm">Ordenar</button></div>
                                    </div>
                                </div>
                                 <div class="menu-item-card">
                                    <div class="menu-item-img"><img src="https://picsum.photos/200/200?random=86"
                                            alt="Café Helado" /></div>
                                    <div class="menu-item-details">
                                        <div>
                                            <h3 class="menu-item-title">Café con Leche</h3>
                                            <p class="menu-item-desc">La mezcla clásica.</p>
                                        </div>
                                        <div class="menu-item-footer"><span class="menu-item-price">9.00 Bs.</span><button
                                                class="btn btn-dark btn-sm">Ordenar</button></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h2 class="menu-section-title">BEBIDAS FRÍAS</h2>
                            <div class="menu-items-grid">
                                <div class="menu-item-card">
                                    <div class="menu-item-img"><img src="https://picsum.photos/200/200?random=61"
                                            alt="Espresso Clásico" /></div>
                                    <div class="menu-item-details">
                                        <div>
                                            <h3 class="menu-item-title">Jugo de Plátano</h3>
                                            <p class="menu-item-desc">Batido cremoso. Suave y dulce, una bebida sustanciosa.</p>
                                        </div>
                                        <div class="menu-item-footer"><span class="menu-item-price">7.00 Bs</span><button
                                                class="btn btn-dark btn-sm">Ordenar</button></div>
                                    </div>
                                </div>
                                <div class="menu-item-card">
                                    <div class="menu-item-img"><img src="https://picsum.photos/200/200?random=62"
                                            alt="Latte Cremoso" /></div>
                                    <div class="menu-item-details">
                                        <div>
                                            <h3 class="menu-item-title">Jugo de Frutilla</h3>
                                            <p class="menu-item-desc">El favorito del verano. Batido natural, dulce y lleno de sabor.</p>
                                        </div>
                                        <div class="menu-item-footer"><span class="menu-item-price">8.00 bs.</span><button
                                                class="btn btn-dark btn-sm">Ordenar</button></div>
                                    </div>
                                </div>
                                <div class="menu-item-card">
                                    <div class="menu-item-img"><img src="https://picsum.photos/200/200?random=63"
                                            alt="Cappuccino Italiano" /></div>
                                    <div class="menu-item-details">
                                        <div>
                                            <h3 class="menu-item-title">Jugo de Papaya</h3>
                                            <p class="menu-item-desc">Tropical y digestivo. Un jugo espeso y delicioso, perfecto para acompañar.
                                            </p>
                                        </div>
                                        <div class="menu-item-footer"><span class="menu-item-price">7.00 Bs.</span><button
                                                class="btn btn-dark btn-sm">Ordenar</button></div>
                                    </div>
                                </div>
                                <div class="menu-item-card">
                                    <div class="menu-item-img"><img src="https://picsum.photos/200/200?random=64"
                                            alt="Mocha Decadente" /></div>
                                    <div class="menu-item-details">
                                        <div>
                                            <h3 class="menu-item-title">Jugo de Naranja</h3>
                                            <p class="menu-item-desc">Vitamina C pura. Exprimido al momento, refrescante y revitalizante.
                                            </p>
                                        </div>
                                        <div class="menu-item-footer"><span class="menu-item-price">5.00 Bs.</span><button
                                                class="btn btn-dark btn-sm">Ordenar</button></div>
                                    </div>
                                </div>
                                
                            </div>
                            <br>
                              <h2 class="menu-section-title">MASAS DE LA CASA</h2>
                            <div class="menu-items-grid">
                                <div class="menu-item-card">
                                    <div class="menu-item-img"><img src="https://picsum.photos/200/200?random=61"
                                            alt="Espresso Clásico" /></div>
                                    <div class="menu-item-details">
                                        <div>
                                            <h3 class="menu-item-title">Empanadas</h3>
                                            <p class="menu-item-desc">Rellenas de queso horneadas hasta el punto exacto de dorado.</p>
                                        </div>
                                        <div class="menu-item-footer"><span class="menu-item-price">3.00 Bs</span><button
                                                class="btn btn-dark btn-sm">Ordenar</button></div>
                                    </div>
                                </div>
                                <div class="menu-item-card">
                                    <div class="menu-item-img"><img src="https://picsum.photos/200/200?random=62"
                                            alt="Latte Cremoso" /></div>
                                    <div class="menu-item-details">
                                        <div>
                                            <h3 class="menu-item-title">Alfajores Medianos</h3>
                                            <p class="menu-item-desc">Dos galletas tiernas unidas con dulce de leche y espolvoreadas con azúcar.</p>
                                        </div>
                                        <div class="menu-item-footer"><span class="menu-item-price">3.00 bs.</span><button
                                                class="btn btn-dark btn-sm">Ordenar</button></div>
                                    </div>
                                </div>
                                <div class="menu-item-card">
                                    <div class="menu-item-img"><img src="https://picsum.photos/200/200?random=63"
                                            alt="Cappuccino Italiano" /></div>
                                    <div class="menu-item-details">
                                        <div>
                                            <h3 class="menu-item-title">Alfajores Pequeños</h3>
                                            <p class="menu-item-desc">Un bocado dulce. Ideal para acompañar tu café o mate.
                                            </p>
                                        </div>
                                        <div class="menu-item-footer"><span class="menu-item-price">1.00 Bs.</span><button
                                                class="btn btn-dark btn-sm">Ordenar</button></div>
                                    </div>
                                </div>
                                <div class="menu-item-card">
                                    <div class="menu-item-img"><img src="https://picsum.photos/200/200?random=64"
                                            alt="Mocha Decadente" /></div>
                                    <div class="menu-item-details">
                                        <div>
                                            <h3 class="menu-item-title">Queques</h3>
                                            <p class="menu-item-desc">El panqué casero. Suave y esponjoso, con un sabor que recuerda al hogar.
                                            </p>
                                        </div>
                                        <div class="menu-item-footer"><span class="menu-item-price">4.00 Bs.</span><button
                                                class="btn btn-dark btn-sm">Ordenar</button></div>
                                    </div>
                                </div>
                                
                            </div>
                            <br>
                            
                        </div>
                    </div>

                    <!-- Restaurant Content -->
                    <div id="restaurant-content" class="menu-content hidden">
                        <div class="menu-section">
                            <h2 class="menu-section-title">DESTACADOS</h2>
                            <div class="featured-scroll no-scrollbar">
                                <div class="featured-item">
                                    <div class="featured-item-img"><img src="https://picsum.photos/200/200?random=31"
                                            alt="Hamburguesa Clásica"></div>
                                    <h4 class="featured-item-title">Saice</h4>
                                    <p class="featured-item-price">16.00 Bs</p>
                                </div>
                                <div class="featured-item">
                                    <div class="featured-item-img"><img src="https://picsum.photos/200/200?random=32"
                                            alt="Ensalada César"></div>
                                    <h4 class="featured-item-title">Ensalada César</h4>
                                    <p class="featured-item-price">$8.75</p>
                                </div>
                                <div class="featured-item">
                                    <div class="featured-item-img"><img src="https://picsum.photos/200/200?random=33"
                                            alt="Pasta Carbonara"></div>
                                    <h4 class="featured-item-title">Pasta Carbonara</h4>
                                    <p class="featured-item-price">$12.00</p>
                                </div>
                                <div class="featured-item">
                                    <div class="featured-item-img"><img src="https://picsum.photos/200/200?random=34"
                                            alt="Sopa del Día"></div>
                                    <h4 class="featured-item-title">Sopa del Día</h4>
                                    <p class="featured-item-price">$5.50</p>
                                </div>
                                <div class="featured-item">
                                    <div class="featured-item-img"><img src="https://picsum.photos/200/200?random=35"
                                            alt="Sandwich Club"></div>
                                    <h4 class="featured-item-title">Sandwich Club</h4>
                                    <p class="featured-item-price">$9.80</p>
                                </div>
                            </div>
                        </div>
                        <hr class="menu-divider">
                        <div class="menu-items-section">
                            <div class="menu-items-grid">
                                <div class="menu-item-card">
                                    <div class="menu-item-img"><img src="https://picsum.photos/200/200?random=71"
                                            alt="Pechuga a la Plancha" /></div>
                                    <div class="menu-item-details">
                                        <div>
                                            <h3 class="menu-item-title">Pechuga a la Plancha</h3>
                                            <p class="menu-item-desc">Jugoso filete de pollo con hierbas finas.</p>
                                        </div>
                                        <div class="menu-item-footer"><span class="menu-item-price">$11.50</span><button
                                                class="btn btn-dark btn-sm">Ordenar</button></div>
                                    </div>
                                </div>
                                <div class="menu-item-card">
                                    <div class="menu-item-img"><img src="https://picsum.photos/200/200?random=72"
                                            alt="Lasaña de Carne" /></div>
                                    <div class="menu-item-details">
                                        <div>
                                            <h3 class="menu-item-title">Lasaña de Carne</h3>
                                            <p class="menu-item-desc">Receta tradicional con capas de sabor.</p>
                                        </div>
                                        <div class="menu-item-footer"><span class="menu-item-price">$13.00</span><button
                                                class="btn btn-dark btn-sm">Ordenar</button></div>
                                    </div>
                                </div>
                                <div class="menu-item-card">
                                    <div class="menu-item-img"><img src="https://picsum.photos/200/200?random=73"
                                            alt="Salmón al Horno" /></div>
                                    <div class="menu-item-details">
                                        <div>
                                            <h3 class="menu-item-title">Salmón al Horno</h3>
                                            <p class="menu-item-desc">Con vegetales de temporada y limón.</p>
                                        </div>
                                        <div class="menu-item-footer"><span class="menu-item-price">$15.50</span><button
                                                class="btn btn-dark btn-sm">Ordenar</button></div>
                                    </div>
                                </div>
                                <div class="menu-item-card">
                                    <div class="menu-item-img"><img src="https://picsum.photos/200/200?random=74"
                                            alt="Risotto de Hongos" /></div>
                                    <div class="menu-item-details">
                                        <div>
                                            <h3 class="menu-item-title">Risotto de Hongos</h3>
                                            <p class="menu-item-desc">Cremoso y lleno de sabor umami.</p>
                                        </div>
                                        <div class="menu-item-footer"><span class="menu-item-price">$12.75</span><button
                                                class="btn btn-dark btn-sm">Ordenar</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <footer id="main-footer" class="main-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3 class="footer-heading">NAVEGACIÓN</h3>
                    <ul class="footer-nav-list">
                        <li><a href="index.html" class="footer-link">Inicio</a></li>
                        <li><a href="Nosotros.html" class="footer-link">Nosotros</a></li>
                        <li><a href="menu.html" class="footer-link">Menú</a></li>
                        <li><a href="Noticias.html" class="footer-link">Noticias</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3 class="footer-heading">UBICACIÓN</h3>
                    <div class="footer-contact-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="icon-sm">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <p>Ciudad Satélite C. 17B #639 (Boulevard-Pasaje Peatonal)</p>
                    </div>
                </div>
                <div class="footer-column">
                    <h3 class="footer-heading">CONTACTO</h3>
                    <div class="footer-contact-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="icon-sm">
                            <path
                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                            </path>
                        </svg>
                        <p>+591 775 103 12</p>
                    </div>
                    <div class="footer-contact-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="icon-sm">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        <p>lahogareña.restaurante@gmail.com</p>
                    </div>
                </div>
                <div class="footer-column">
                    <h3 class="footer-heading">SÍGUENOS</h3>
                    <div class="footer-social-links">
                        <a href="#" aria-label="Facebook" class="social-link"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="currentColor" class="icon">
                                <path
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z">
                                </path>
                            </svg></a>
                        <a href="#" aria-label="Instagram" class="social-link"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="currentColor" class="icon">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.011 3.584-.069 4.85c-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.584-.012-4.85-.07c-3.252-.148-4.771-1.691-4.919-4.919-.058-1.265-.069-1.645-.069-4.85s.011-3.584.069-4.85c.149-3.225 1.664-4.771 4.919-4.919C8.416 2.175 8.796 2.163 12 2.163zm0 1.626c-3.142 0-3.488.012-4.708.068-2.673.122-3.83 1.28-3.952 3.952-.056 1.22-.067 1.566-.067 4.708s.011 3.488.067 4.708c.122 2.672 1.28 3.83 3.952 3.952 1.22.056 1.566.067 4.708.067s3.488-.011 4.708-.067c2.672-.122 3.83-1.28 3.952-3.952.056-1.22.067-1.566-.067-4.708-.067s-.011-3.488-.067-4.708c-.122-2.672-1.28-3.83-3.952-3.952-1.22-.056-1.566-.067-4.708-.067zm0 3.882c-2.4 0-4.338 1.938-4.338 4.338s1.938 4.338 4.338 4.338 4.338-1.938 4.338-4.338-1.938-4.338-4.338-4.338zm0 7.042c-1.494 0-2.704-1.21-2.704-2.704s1.21-2.704 2.704-2.704 2.704 1.21 2.704 2.704-1.21 2.704-2.704 2.704zm4.288-6.95c-.78 0-1.414.634-1.414 1.414s.634 1.414 1.414 1.414 1.414-.634 1.414-1.414-.634-1.414-1.414-1.414z">
                                </path>
                            </svg></a>
                        <a href="#" aria-label="Twitter" class="social-link"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="currentColor" class="icon">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231L18.244 2.25zM17.633 19.75h1.644L7.12 4.25H5.407l12.226 15.5z">
                                </path>
                            </svg></a>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <p>&copy; <span id="current-year">2025</span> <span class="logo-footer">
                        <a href="index.html">
                            <img src="images/LA hogareña MAnual de Marca_Mesa de trabajo 1.png" alt="La Hogareña Logo">
                        </a>
                    </span>. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <div id="order-modal" class="modal-overlay hidden">
        <div class="modal-content">
            <button id="modal-close-btn" class="modal-close-btn" aria-label="Cerrar">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
            <h3 class="modal-title">Confirmar Pedido</h3>
            <p>Producto: <strong id="modal-product-name"></strong></p>

            <form id="order-form">
                <div class="form-group">
                    <label for="quantity">Cantidad:</label>
                    <input type="number" id="quantity" name="quantity" min="1" value="1" required>
                </div>
                <div class="form-group" style="margin-top: 1rem;">
                    <label for="pickup-time">Hora de recojo:</label>
                    <input type="time" id="pickup-time" name="pickup-time" required>
                </div>

                <div class="modal-actions">
                    <button type="button" id="modal-cancel-btn" class="btn btn-secondary">Cancelar</button>
                    <button type="submit" class="btn btn-dark">Pedir por WhatsApp</button>
                </div>
            </form>
        </div>
    </div>

    <script src="js.js"></script>
</body>

</html>