# Feature: Citas
#     As a doctor I want to see my apointments.

#     Scenario: Get citas
#         When I send a GET request to "/citas"
#         Then the response code should be 200
#         And the JSON response should have a "message" containing "Consulta de citas realizada con éxito."

#     Scenario: Create cita
#         When I send a POST request to "/citas" with body:
#             """
#             {
#                 "idPaciente": "1",
#                 "idUsuario": "1",
#                 "fecha": "2019-07-22",
#                 "hora": "12:00:00",
#                 "estado": "1",
#                 "duracionCita": 69
#             }
#             """
#         Then the response code should be 200