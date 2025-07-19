# 🌟 Perfil Pro para e107 CMS

**Perfil Pro** es un plugin moderno y responsivo que permite a cada usuario del CMS e107 tener una página de perfil profesional con animaciones, diseño atractivo, y funcionalidades interactivas. Ideal para portafolios personales, páginas de mentoring o presentación de servicios.

# README
- [English](README.md)
- [Português](README.pt-PT.md)
- [Español](README.es-ES.md)
---

## 📸 Vista previa

> Interfaz basada en Bootstrap con pestañas animadas, efectos de glassmorphism, gradientes otoñales, tarjetas interactivas y diseño tipo premium.

---

## 🚀 Características principales

- Diseño completamente adaptado a móviles y tablets
- Transiciones suaves entre pestañas
- Indicador de estado animado tipo pulsación
- Modal funcional para reserva de mentoring
- Reseñas con estrellas y avatares de usuarios
- Barras de progreso animadas para habilidades
- Tarjetas de experiencia con efectos hover
- Enlaces sociales clickeables
- Estilos visuales modernos (tipografía jerárquica, sombras suaves, transformaciones 3D)

---

## 🔧 Instalación

1. Descarga o clona este repositorio en `e107_plugins/perfil_pro`
2. Accede al panel de administración de e107
3. Activa el plugin **Perfil Pro**
4. Dirígete a `/editar_perfil.php` para que el usuario edite su perfil
5. Visualiza el perfil público en `/user.php?id=ID`

---

## 🧩 Campos Extendidos Recomendados

Desde el panel de administración, ve a **Usuarios → Campos Extendidos** y crea los siguientes:

| Nombre del campo   | Tipo       | Clave (`key`)     |
|--------------------|------------|-------------------|
| Biografía          | Textarea   | `bio`             |
| Experiencia        | Textarea   | `experience`      |
| Habilidades        | Textarea   | `skills`          |
| LinkedIn           | URL        | `linkedin`        |
| Imagen de portada  | Imagen     | `cover_image`     |

---

## 📁 Estructura del plugin

perfil_pro/
├── plugin.xml
├── README.md
├── editar_perfil.php
├── perfil_pro.php
├── perfil_pro_template.php
├── perfil_pro_shortcodes.php
├── css/
│   └── styles.css
├── js/
│   └── scripts.js
├── images/
│   └── (portadas, avatares)
├── languages/
│   ├── English.php
│   ├── Spanish.php
│   └── Portuguese.php


---

## 🛠️ Personalización

- Puedes cambiar los colores en `styles.css`
- Añadir más pestañas desde `perfil_pro_template.php`
- Usar shortcodes para mostrar otros campos del perfil

---

## 🧑‍💻 Contribuciones

¿Tienes ideas para mejorar el diseño, agregar funciones o traducirlo a otros idiomas? ¡Aceptamos tus sugerencias y pull requests con gusto!

---

## 📜 Licencia

Este plugin se publica bajo la licencia MIT. Puedes usarlo, modificarlo y adaptarlo libremente en tus proyectos.

---

## ✨ Autor

**Martin Costa**  
💼 Diseñador y desarrollador creativo  
📍 Castelo Branco, Portugal  
🌐 [Sitio oficial de e107 CMS](https://github.com/e107inc/e107)


