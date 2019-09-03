@echo off
ECHO Usted esta a punto de realizar todas las pruebas unitarias del sistema. El resultado del test sera guardado en el archivo llamado "test_info.txt" ubicado en este mismo directorio.
PAUSE
cd backend-api/
vendor/bin/phpunit > ../test_info.txt
ECHO TERMINANDO...
PAUSE