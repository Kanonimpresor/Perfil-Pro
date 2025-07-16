class perfil_pro_shortcodes extends e_shortcode
{
  function sc_perfil_header()
  {
    return "<header class='header-gradient'>Jane Weston - @jane-weston</header>";
  }

  function sc_perfil_tabs()
  {
    return "<ul class='nav nav-tabs'>...</ul>"; // Puedes insertar el HTML de pestañas aquí
  }

  function sc_perfil_content()
  {
    return "<div class='tab-content'>...</div>"; // Contenido dinámico
  }
}
