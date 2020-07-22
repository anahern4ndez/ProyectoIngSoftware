const electron = require('electron');
const {
    app,
    BrowserWindow
} = electron;

require('dotenv').config();
var shell = require('shelljs');
let nodePath = (shell.which('node').toString());
shell.config.execPath = nodePath;


/**
 * Set `__static` path to static files in production
 * https://simulatedgreg.gitbooks.io/electron-vue/content/en/using-static-assets.html
 */
if (process.env.NODE_ENV !== 'development') {
    global.__static = require('path').join(__dirname, '/static').replace(/\\/g, '\\\\')
}

let mainWindow
const winURL = process.env.NODE_ENV === 'development' ?
    `http://localhost:9080` :
    `file://${__dirname}/index.html`

function createWindow() {
    /**
     * Initial window options
     */
    const {
        width,
        height
    } = electron.screen.getPrimaryDisplay().workAreaSize
    mainWindow = new BrowserWindow({
        height: height,
        width: width,
        useContentSize: true,
        frame: true,
    })

    mainWindow.loadURL(winURL)
    mainWindow.webContents.openDevTools();
    mainWindow.on('closed', () => {
        mainWindow = null;

        try {

            string = 'cd ./temp & rmdir /s /q .';
            shell.exec(string);

        } catch (error) {
            console.log("Ocurrió un error al eliminar la imagen...");
        }


    })
}

app.on('ready', createWindow)

app.on('window-all-closed', () => {
    if (process.platform !== 'darwin') {
        app.quit()
    }
})

app.on('activate', () => {
    if (mainWindow === null) {
        createWindow()
    }
})