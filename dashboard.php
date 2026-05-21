<?php
require_once 'config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #f5f7fa;
            min-height: 100vh;
        }

        .navbar {
            background: white;
            padding: 16px 32px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .brand {
            font-size: 20px;
            font-weight: 600;
            color: #333;
        }

        .navbar .user-info {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .navbar .username {
            color: #666;
            font-size: 14px;
        }

        .btn-logout {
            padding: 8px 20px;
            background: #ff4757;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
        }

        .btn-logout:hover {
            background: #ff3838;
        }

        .content {
            max-width: 800px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .welcome-card {
            background: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            text-align: center;
        }

        .welcome-card h2 {
            font-size: 32px;
            color: #333;
            margin-bottom: 12px;
        }

        .welcome-card p {
            color: #666;
            font-size: 16px;
            line-height: 1.6;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            text-align: center;
        }

        .stat-card .number {
            font-size: 36px;
            font-weight: 700;
            color: #667eea;
        }

        .stat-card .label {
            color: #999;
            font-size: 14px;
            margin-top: 8px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="brand">Proyecto Prueba</div>
        <div class="user-info">
            <span class="username"><?= htmlspecialchars($_SESSION['username']) ?></span>
            <a href="logout.php" class="btn-logout">Cerrar Sesión</a>
        </div>
    </nav>

    <div class="content">
        <div class="welcome-card">
            <h2>¡Hola, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
            <p>Bienvenido al panel de control. Has iniciado sesión correctamente.</p>
        </div>

        <div class="stats">
            <div class="stat-card">
                <div class="number">10</div>
                <div class="label">Proyectos</div>
            </div>
            <div class="stat-card">
                <div class="number">25</div>
                <div class="label">Tareas</div>
            </div>
            <div class="stat-card">
                <div class="number">5</div>
                <div class="label">Notificaciones</div>
            </div>
        </div>
    </div>
</body>
</html>
