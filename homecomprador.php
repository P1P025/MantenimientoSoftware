<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniMarket - Inicio</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            display: flex;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        .sidebar {
            width: 260px;
            background: #2c3e50;
            color: white;
            padding: 20px;
            height: 100vh;
            position: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

            .sidebar h2 {
                text-align: center;
                margin-bottom: 30px;
            }

            .sidebar ul {
                list-style: none;
                padding: 0;
                width: 100%;
            }

                .sidebar ul li {
                    padding: 15px;
                    margin: 10px 0;
                    background: #34495e;
                    border-radius: 8px;
                    cursor: pointer;
                    transition: background 0.3s;
                }

                    .sidebar ul li:hover {
                        background: #1abc9c;
                    }

                    .sidebar ul li a {
                        color: white;
                        text-decoration: none;
                        display: flex;
                        align-items: center;
                        font-size: 16px;
                    }

                        .sidebar ul li a i {
                            margin-right: 10px;
                        }

        .main-content {
            margin-left: 280px;
            padding: 20px;
            width: 100%;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            padding: 15px 25px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .search-bar {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 25px;
            padding: 5px 15px;
            background: #fff;
        }

            .search-bar input {
                border: none;
                outline: none;
                padding: 8px;
                font-size: 16px;
                width: 250px;
            }

            .search-bar button {
                background: none;
                border: none;
                cursor: pointer;
                font-size: 18px;
            }

        .cart-icon {
            font-size: 24px;
            cursor: pointer;
        }

        .products {
            margin-top: 20px;
        }

        .product-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .product {
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

            .product:hover {
                transform: translateY(-5px);
            }

            .product img {
                width: 150px;
                height: 150px;
                object-fit: cover;
                border-radius: 8px;
            }

            .product button {
                background: #e74c3c;
                color: white;
                border: none;
                padding: 10px 15px;
                cursor: pointer;
                border-radius: 5px;
                margin-top: 10px;
                transition: background 0.3s;
            }

                .product button:hover {
                    background: #c0392b;
                }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>UniMarket</h2>
        <ul>
            <li><a href="#"><i class="fas fa-user-circle"></i> Ver Perfil</a></li>
            <li><a href="#"><i class="fas fa-shopping-cart"></i> Mis Compras</a></li>
            <li><a href="#"><i class="fas fa-heart"></i> Favoritos</a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a></li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <div class="search-bar">
                <input type="text" placeholder="Buscar productos...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
            </div>
        </header>

        <section class="products">
            <h2>Productos Destacados</h2>
            <div class="product-list">
                <div class="product">
                    <img src="https://via.placeholder.com/150" alt="Producto">
                    <h3>Producto 1</h3>
                    <p>$100.00</p>
                    <button>Añadir al carrito</button>
                </div>
                <div class="product">
                    <img src="https://via.placeholder.com/150" alt="Producto">
                    <h3>Producto 2</h3>
                    <p>$200.00</p>
                    <button>Añadir al carrito</button>
                </div>
            </div>
        </section>
    </div>
</body>
</html>