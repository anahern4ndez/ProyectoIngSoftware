Feature: Gestion Paciente
    As a Doctor/Secretaria I want to check all the patients in the DB.

    Scenario: Consultar Tabla
        When I send a GET request to "/PacienteController/findAll"
        Then the response code should be 200
        And the JSON response should have a "success" containing "true"
