require_once("class2.php");
require_once(HEADERF);

$frm = e107::getForm();
$tp = e107::getParser();
$userID = USERID;

if (!USER) {
  header("Location: ".e107::getUrl()->redirectToLogin());
  exit;
}

$text = $frm->open("editarPerfil", "post", e_SELF."?".e_QUERY, ["enctype" => "multipart/form-data"]);
$text .= "<h2>Editar Perfil Profesional</h2>";

$text .= $frm->textarea("bio", $tp->postToForm(USEREXTENDED['bio']), 5, 60, ["placeholder" => "Tu biografía..."]);
$text .= $frm->textarea("experience", $tp->postToForm(USEREXTENDED['experience']), 5, 60, ["placeholder" => "Experiencia laboral..."]);
$text .= $frm->textarea("skills", $tp->postToForm(USEREXTENDED['skills']), 5, 60, ["placeholder" => "Habilidades técnicas..."]);
$text .= $frm->text("linkedin", $tp->postToForm(USEREXTENDED['linkedin']), 60, ["placeholder" => "Enlace LinkedIn"]);

$text .= $frm->imagepicker("cover_image", USEREXTENDED['cover_image']);
$text .= $frm->admin_button("update_profile", "Guardar Cambios", "update");

$text .= $frm->close();

if (isset($_POST['update_profile'])) {
  $updated = [];
  $updated['bio'] = $_POST['bio'];
  $updated['experience'] = $_POST['experience'];
  $updated['skills'] = $_POST['skills'];
  $updated['linkedin'] = $_POST['linkedin'];
  $updated['cover_image'] = $_POST['cover_image'];

  e107::getUser()->update_extended($userID, $updated);
  e107::getMessage()->addSuccess("¡Perfil actualizado correctamente!");
  header("Location: user.php?id=".$userID);
}

$ns->tablerender("Editar Perfil", $text);
require_once(FOOTERF);
