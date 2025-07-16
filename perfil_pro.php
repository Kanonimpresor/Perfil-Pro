require_once("../../class2.php");
require_once(e_PLUGIN."perfil_pro/perfil_pro_template.php");
$tp = e107::getParser();
$sc = e107::getScBatch("perfil_pro", true);

$text = $tp->parseTemplate($PERFIL_PRO_TEMPLATE['start'], true, $sc);
$text .= $tp->parseTemplate($PERFIL_PRO_TEMPLATE['tabs'], true, $sc);
$text .= $tp->parseTemplate($PERFIL_PRO_TEMPLATE['content'], true, $sc);
$text .= $tp->parseTemplate($PERFIL_PRO_TEMPLATE['end'], true, $sc);

$ns->tablerender("Perfil Profesional", $text);
