# 🌟 Perfil Pro for e107 CMS

**Perfil Pro** is a stylish and responsive plugin that allows each user of the e107 CMS to have a professional profile page with modern design, animations, and interactive features. Perfect for personal portfolios, mentoring profiles, and service presentation pages.

# README
- [English](README.md)
- [Português](README.pt-PT.md)
- [Español](README.es-ES.md)
---

## 📸 Preview

> Interface built with Bootstrap featuring animated tabs, autumn gradients, hover effects, glassmorphism, and premium layout.

---

## 🚀 Features

- Responsive design for mobile and tablets
- Animated tab transitions and entry effects
- Pulsing status indicator
- Functional modal for mentoring booking
- Review system with star ratings
- Animated progress bars for skills
- Editable personal information
- Hover-effect experience cards
- Clickable social media links
- Modern visual styles (gradients, glassmorphism, typography)

---

## 🔧 Installation

1. Clone or download this repository into `e107_plugins/perfil_pro`
2. Go to the e107 admin panel
3. Activate the **Perfil Pro** plugin
4. Access the profile edit page: `/editar_perfil.php`
5. View public profile page: `/user.php?id=ID`

---

## 🧩 Recommended Extended User Fields

Create these fields in **Admin → Users → Extended Fields**:

| Field Name     | Type     | Key (`key`)     |
|----------------|----------|-----------------|
| Biography      | Textarea | `bio`           |
| Experience     | Textarea | `experience`    |
| Skills         | Textarea | `skills`        |
| LinkedIn       | URL      | `linkedin`      |
| Cover Image    | Image    | `cover_image`   |

---

## 📁 Plugin Structure

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
│   └── (avatars and covers)
├── languages/
│   ├── English.php
│   ├── Spanish.php
│   └── Portuguese.php


---

## 🛠️ Customization

- Modify autumn colors in `styles.css`
- Add new tabs or sections via `perfil_pro_template.php`
- Use shortcodes to integrate more user data

---

## 🧑‍💻 Contributions

Feel free to improve the interface, add translations, or expand features. Pull requests are welcome!

---

## 📜 License

This plugin is released under the MIT License. You are free to use, modify, and adapt it.

---

## ✨ Author

**Martin Costa**  
💼 Creative designer and developer  
📍 Castelo Branco, Portugal  
🌐 [e107 CMS](https://github.com/e107inc/e107)
