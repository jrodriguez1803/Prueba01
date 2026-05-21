-- Script para crear la tabla de usuarios en PostgreSQL
-- Ejecutar en la base de datos: proyecto_prueba

CREATE TABLE IF NOT EXISTS usuarios (
    id SERIAL PRIMARY KEY,
    nombre_usuario VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insertar usuario de prueba
-- Usuario: admin / Clave: admin123
INSERT INTO usuarios (nombre_usuario, email, password) VALUES (
    'admin',
    'admin@ejemplo.com',
    '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
) ON CONFLICT (nombre_usuario) DO NOTHING;

-- Usuario: test / Clave: test123
INSERT INTO usuarios (nombre_usuario, email, password) VALUES (
    'test',
    'test@ejemplo.com',
    '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
) ON CONFLICT (nombre_usuario) DO NOTHING;
