<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniMarket - Panel de Vendedor</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            display: flex;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ecf0f1;
        }

        .sidebar {
            width: 250px;
            background: #2c3e50;
            color: white;
            padding: 20px;
            height: 100vh;
            position: fixed;
        }

            .sidebar h2 {
                text-align: center;
            }

            .sidebar ul {
                list-style: none;
                padding: 0;
            }

                .sidebar ul li {
                    padding: 15px;
                    margin: 10px 0;
                    background: #34495e;
                    border-radius: 5px;
                    cursor: pointer;
                }

                    .sidebar ul li a {
                        color: white;
                        text-decoration: none;
                        display: flex;
                        align-items: center;
                    }

                        .sidebar ul li a i {
                            margin-right: 10px;
                        }

        .main-content {
            margin-left: 270px;
            padding: 20px;
            width: 100%;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .search-bar {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 5px;
        }

            .search-bar input {
                border: none;
                outline: none;
                padding: 5px;
                font-size: 16px;
            }

            .search-bar button {
                background: none;
                border: none;
                cursor: pointer;
            }

        .dashboard {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .dashboard-card {
            background: white;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            flex: 1;
            min-width: 250px;
        }

            .dashboard-card h3 {
                margin: 0;
            }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>UniMarket</h2>
        <ul>
            <li><a href="#"><i class="fas fa-box"></i> Gestionar Productos</a></li>
            <li><a href="#"><i class="fas fa-shopping-basket"></i> Pedidos</a></li>
            <li><a href="#"><i class="fas fa-chart-line"></i> Estadísticas</a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a></li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <div class="search-bar">
                <input type="text" placeholder="Buscar productos...">
                <button><i class="fas fa-search"></i></button>
            </div>
        </header>

        <section class="dashboard">
            <div class="dashboard-card">
                <h3>Total Ventas</h3>
                <p>$5,000</p>
            </div>
            <div class="dashboard-card">
                <h3>Pedidos Pendientes</h3>
                <p>8</p>
            </div>
            <div class="dashboard-card">
                <h3>Productos en Catálogo</h3>
                <p>25</p>
            </div>
        </section>
    </div>
</body>
</html>