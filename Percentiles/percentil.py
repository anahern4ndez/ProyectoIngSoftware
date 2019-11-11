import csv

def leer(nombre):
    percentiles = []
    cont = 0

    try:
        with open(nombre, newline='', encoding='utf-8') as f:
            reader = csv.reader(f)
            for row in reader:
                if cont != 0:
                    data = {
                        'Sex': int(row[0]),
                        'Meses': float(row[1]),
                        '3': str(row[5]),
                        '10': str(row[7]),
                        '50': str(row[9]),
                        '75': str(row[10]),
                        '97': str(row[13])
                    }
                    percentiles.append(data)
                cont += 1
    except FileNotFoundError:
        print("No esta el archivo")
    
    return percentiles

def monthToYear(month):
    year = 0

    while month >= 12:
        month -= 12
        year += 1

    return str(year), str(int(month))

def write (file, text):
    f = open(file, 'w')

    f.write(text)
    f.close()


informacion = ""
for p in leer('wtage.csv'):
    y, m = monthToYear(p['Meses'])

    informacion += "['year' => " + str(y) + ", 'meses' => " + str(m) + ", 'sexo' => " + str(p["Sex"]) + ", 'peso' => " + str(p["3"]) + ", 'percentil' => " + str(3) + "],\n"
    informacion += "['year' => " + str(y) + ", 'meses' => " + str(m) + ", 'sexo' => " + str(p["Sex"]) + ", 'peso' => " + str(p["10"]) + ", 'percentil' => " + str(10) + "],\n"
    informacion += "['year' => " + str(y) + ", 'meses' => " + str(m) + ", 'sexo' => " + str(p["Sex"]) + ", 'peso' => " + str(p["50"]) + ", 'percentil' => " + str(50) + "],\n"
    informacion += "['year' => " + str(y) + ", 'meses' => " + str(m) + ", 'sexo' => " + str(p["Sex"]) + ", 'peso' => " + str(p["75"]) + ", 'percentil' => " + str(75) + "],\n"
    informacion += "['year' => " + str(y) + ", 'meses' => " + str(m) + ", 'sexo' => " + str(p["Sex"]) + ", 'peso' => " + str(p["97"]) + ", 'percentil' => " + str(97) + "],\n"

write('percentilPeso.txt', informacion)

informacion = ""
for p in leer('statage.csv'):
    y, m = monthToYear(p['Meses'])

    informacion += "['year' => " + str(y) + ", 'meses' => " + str(m) + ", 'sexo' => " + str(p["Sex"]) + ", 'talla' => " + str(p["3"]) + ", 'percentil' => " + str(3) + "],\n"
    informacion += "['year' => " + str(y) + ", 'meses' => " + str(m) + ", 'sexo' => " + str(p["Sex"]) + ", 'talla' => " + str(p["10"]) + ", 'percentil' => " + str(10) + "],\n"
    informacion += "['year' => " + str(y) + ", 'meses' => " + str(m) + ", 'sexo' => " + str(p["Sex"]) + ", 'talla' => " + str(p["50"]) + ", 'percentil' => " + str(50) + "],\n"
    informacion += "['year' => " + str(y) + ", 'meses' => " + str(m) + ", 'sexo' => " + str(p["Sex"]) + ", 'talla' => " + str(p["75"]) + ", 'percentil' => " + str(75) + "],\n"
    informacion += "['year' => " + str(y) + ", 'meses' => " + str(m) + ", 'sexo' => " + str(p["Sex"]) + ", 'talla' => " + str(p["97"]) + ", 'percentil' => " + str(97) + "],\n"

write('percentilTalla.txt', informacion)
