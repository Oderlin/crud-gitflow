# crud-gitflow
## 📌 CRUD de Usuarios - Git Flow  

Este proyecto es un sistema CRUD (*Create, Read, Update, Delete*) de usuarios desarrollado en **PHP** y gestionado con **Git Flow** para control de versiones.

### 💁️ Estructura del Proyecto  
```
crud-usuarios/
├── index.php         # Lista los usuarios
├── crear.php         # Formulario para agregar usuarios
├── editar.php        # Formulario para editar usuarios
├── eliminar.php      # Manejo de eliminación de usuarios
├── conexion.php      # Configuración de la base de datos
├── README.md         # Documentación del proyecto
└── Tarea3.pdf        # Cuestionario sobre Git y Git Flow
```

### 🚀 Instalación  
1. Clona el repositorio:  
   ```bash
   git clone https://github.com/Oderlin/crud-gitflow.git
   ```
2. Accede al directorio del proyecto:  
   ```bash
   cd crud-usuarios
   ```
3. Configura la base de datos en `conexion.php`.  
4. Ejecuta el proyecto en un servidor local con PHP (`XAMPP`, `WAMP` o `MAMP`).  

### 🔧 Tecnologías Utilizadas  
- **PHP** (CRUD)  
- **MySQL** (Base de datos)  
- **Git Flow** (Gestión de versiones)  

### 🌱 Flujo de Trabajo con Git Flow  
- `main`: Versión estable en producción.  
- `develop`: Desarrollo activo de nuevas funcionalidades.  
- `qa`: Rama de pruebas antes de fusionar con `main`.  
- `feature/*`: Nuevas funcionalidades.  
- `hotfix/*`: Correcciones urgentes en `main`.  

### ✨ Contribuciones  
Si deseas contribuir:  
1. Crea un **fork** del proyecto.  
2. Crea una nueva rama (`feature/nueva-funcionalidad`).  
3. Realiza cambios y envía un **pull request**.  

