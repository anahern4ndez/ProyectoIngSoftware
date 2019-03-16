(function(window, undefined) {
  var dictionary = {
    "b2581b41-558e-4c68-ba05-ba5f6ecdccd4": "EstadisticaGeneral",
    "da8e4571-2eb0-4e83-96ef-e7442c584f7c": "Archivos",
    "3dd6457f-437e-4bcb-9ae6-4faec57305d4": "MenuPrincipal",
    "7d297ce8-1e7b-4518-a107-4e8c241b5e40": "TransplanteRenal",
    "27ce50ec-8fa2-4e1f-a456-263f192b2c9e": "Paciente",
    "3ce0e757-291a-4898-a349-7aabb9114a5c": "CreacionCita",
    "bf181895-5b7a-4c6f-9f02-c3dfac056ba8": "BiopsiaRenal",
    "3f4299ed-79c2-46d5-ab20-347395d7907b": "GeneralPaciente",
    "85909b92-3311-4c6b-a33c-617c7754bfad": "ReporteGeneral",
    "2aa132dc-dd92-4e43-835d-1afee0a251eb": "Hemodialisis",
    "9f2398ba-38d3-4c66-8ca3-bf16fcbe489a": "Reporte",
    "d12245cc-1680-458d-89dd-4f0d7fb22724": "Login",
    "1b9e1b88-552f-4fb4-8cb6-f625f1c40e14": "Historial",
    "cee7eec0-b23c-45e7-a8bc-07cadb07be94": "darConsulta",
    "fa8b49d1-ea19-4775-b4a9-ed8bd134127c": "Estadistica",
    "aac07431-13e7-4a54-8b65-b2417e4b29be": "IngresarPaciente",
    "c3a1071d-85b9-49d0-bb57-589a88453042": "Cateter",
    "91589853-16eb-46d4-8404-d318e92abbde": "CambioEstado",
    "4863c0c4-7e81-43a4-9307-a9f3353f3002": "Mortalidad",
    "7b2e0850-b52c-4139-a349-4cd99f5425ba": "GestionPaciente",
    "537bb480-b399-44a4-a33f-419c2b4002b2": "DatosGenerales",
    "93320ee4-67ae-44db-ac94-b5ad84ff0015": "agregarCita",
    "e73b655d-d3ec-4dcc-a55c-6e0293422bde": "960 grid - 16 columns",
    "ef07b413-721c-418e-81b1-33a7ed533245": "960 grid - 12 columns",
    "f39803f7-df02-4169-93eb-7547fb8c961a": "Template 1",
    "bb8abf58-f55e-472d-af05-a7d1bb0cc014": "default"
  };

  var uriRE = /^(\/#)?(screens|templates|masters|scenarios)\/(.*)(\.html)?/;
  window.lookUpURL = function(fragment) {
    var matches = uriRE.exec(fragment || "") || [],
        folder = matches[2] || "",
        canvas = matches[3] || "",
        name, url;
    if(dictionary.hasOwnProperty(canvas)) { /* search by name */
      url = folder + "/" + canvas;
    }
    return url;
  };

  window.lookUpName = function(fragment) {
    var matches = uriRE.exec(fragment || "") || [],
        folder = matches[2] || "",
        canvas = matches[3] || "",
        name, canvasName;
    if(dictionary.hasOwnProperty(canvas)) { /* search by name */
      canvasName = dictionary[canvas];
    }
    return canvasName;
  };
})(window);