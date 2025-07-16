# 🌟 Perfil Pro para e107 CMS

**Perfil Pro** es un plugin elegante y responsivo que permite a cada usuario del sistema e107 tener una página de perfil profesional con diseño moderno, animaciones y funcionalidades interactivas. Ideal para portafolios personales, perfiles de mentoring, y páginas de presentación de servicios.

# README
- [English](README.md)
- [Português](README.pt.md)
- [Español](README.es.md)
---

## 📸 Vista Previa

> Interfaz basada en Bootstrap con pestañas animadas, gradientes otoñales, efectos hover, glassmorphism y diseño premium.

---

## 🚀 Características

- Diseño responsivo para móviles y tablets
- Pestañas con animaciones de entrada y transición
- Indicador de estado pulsante
- Modal funcional para reserva de mentoring
- Sistema de reseñas con calificaciones por estrellas
- Barras de progreso animadas para habilidades
- Información personal editable por el usuario
- Tarjetas de experiencia con hover effects
- Enlaces sociales clickeables
- Estilos visuales modernos (gradientes, glassmorphism, tipografía jerárquica)

---

## 🔧 Instalación

1. Clona o descarga este repositorio en `e107_plugins/perfil_pro`
2. Ve al panel de administración de e107
3. Activa el plugin **Perfil Pro**
4. Accede a la página de edición del perfil: `/editar_perfil.php`
5. Visualiza el perfil público del usuario en: `/user.php?id=ID`

---

## 🧩 Campos Extendidos Recomendados

Asegúrate de crear estos campos en **Admin → Usuarios → Campos Extendidos**:

| Nombre         | Tipo       | Clave (`key`)   |
|----------------|------------|-----------------|
| Biografía      | Textarea   | `bio`           |
| Experiencia    | Textarea   | `experience`    |
| Habilidades    | Textarea   | `skills`        |
| LinkedIn       | URL        | `linkedin`      |
| Imagen portada | Imagen     | `cover_image`   |

---

## 📁 Estructura del Plugin

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
│   └── (tu contenido visual)
├── languages/
│   ├── English.php
│   ├── Spanish.php
│   └── Portuguese.php


---

## 🛠️ Personalización

- Puedes cambiar los colores otoñales en `styles.css`
- Añadir nuevas pestañas o secciones desde `perfil_pro_template.php`
- Usar shortcodes para integrar más campos personalizados

---

## 🧑‍💻 Contribuciones

¿Quieres mejorar la interfaz, añadir traducciones o ampliar funcionalidades? ¡Las contribuciones son más que bienvenidas!

---

## 📜 Licencia

Este plugin está publicado bajo la licencia MIT. Puedes usarlo, modificarlo y adaptarlo libremente.

---

## ✨ Autor

**Marti Costa**  
💼 Diseñador y desarrollador creativo  
📍 Castelo Branco, Portugal  
🌐 [e107 CMS](https://github.com/e107inc/e107)

---
