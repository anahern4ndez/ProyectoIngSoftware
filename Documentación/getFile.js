var shell = require('shelljs');

// Configuración del shell
let nodePath = (shell.which('node').toString());
shell.config.execPath = nodePath;

const ipServer = '193.168.168.112';
const serverPassword = 'perritoUVG';
// Path en donde se desea que se guarde la imagen
const relativePath = '.\\images';
const serverUser = 'adminLocal';

// Path en donde se extraerá la imagen
const serverPath = '/home/adminlocal/desktop/agent2.jpg';

// Ejecución del comando con pscp
shell.exec(`pscp -pw ${serverPassword} ${serverUser}@${ipServer}:${serverPath} ${relativePath}`, { async: true });