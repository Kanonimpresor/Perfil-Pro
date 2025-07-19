# 🌟 Perfil Pro para e107 CMS

**Perfil Pro** é um plugin moderno e responsivo que permite a cada utilizador do CMS e107 ter uma página de perfil profissional com animações, design elegante e funcionalidades interativas. Ideal para portefólios, perfis de mentoring ou apresentação de serviços.

---

## 📸 Vista Geral

> Interface baseada em Bootstrap com separadores animados, efeitos de glassmorphism, gradientes outonais, cartões interativos e aspeto premium.

---

## 🚀 Funcionalidades Principais

- Design adaptável para telemóveis e tablets
- Transições suaves entre separadores
- Indicador de estado animado (efeito pulsação)
- Modal funcional para agendamento de mentoring
- Sistema de avaliações com estrelas e avatares
- Barras de progresso animadas para competências técnicas
- Cartões de experiência com efeitos de hover
- Ligações sociais clicáveis
- Estilo visual moderno (tipografia hierárquica, sombras suaves, transformações 3D)

---

## 🔧 Instalação

1. Descarregue ou clone este repositório em `e107_plugins/perfil_pro`
2. Aceda ao painel de administração do e107
3. Ative o plugin **Perfil Pro**
4. Aceda a `/editar_perfil.php` para editar o perfil do utilizador
5. Visualize o perfil público em `/user.php?id=ID`

---

## 🧩 Campos Extendidos Recomendados

No painel de administração, vá a **Utilizadores → Campos Extendidos** e crie os seguintes campos:

| Nome do Campo      | Tipo     | Chave (`key`)     |
|--------------------|----------|-------------------|
| Biografia          | Textarea | `bio`             |
| Experiência        | Textarea | `experience`      |
| Competências       | Textarea | `skills`          |
| LinkedIn           | URL      | `linkedin`        |
| Imagem de Capa     | Imagem   | `cover_image`     |

---

## 📁 Estrutura do Plugin

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

## 🛠️ Personalização

- Podes alterar os estilos e cores em `styles.css`
- Adicionar novos separadores através de `perfil_pro_template.php`
- Usar shortcodes para integrar outros dados do perfil

---

## 🧑‍💻 Contribuições

Tens sugestões para melhorar o design, adicionar funcionalidades ou traduzir para outros idiomas? Contribuições são bem-vindas via Pull Request!

---

## 📜 Licença

Este plugin está disponível sob a licença MIT. Podes usá-lo, modificá-lo e adaptá-lo livremente.

---

## ✨ Autor

**Martin Costa**  
💼 Designer e programador criativo  
📍 Castelo Branco, Portugal  
🌐 [e107 CMS oficial](https://github.com/e107inc/e107)
