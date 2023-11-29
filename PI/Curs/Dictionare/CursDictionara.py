# Inițializăm un dicționar gol pentru baza de date
baza_de_date_colegi = {}

# Adăugăm colegii și numerele lor de telefon
baza_de_date_colegi["Nume1"] = "1234567890"
baza_de_date_colegi["Nume2"] = "9876543210"
baza_de_date_colegi["Nume3"] = "5555555555"
baza_de_date_colegi["Nume4"] = "8888888888"

# Afișăm baza de date pentru referință
print(baza_de_date_colegi)

# Accesăm numărul de telefon al unui coleg specific
nume_coleg = "Nume1"
if nume_coleg in baza_de_date_colegi:
    numar_telefon = baza_de_date_colegi[nume_coleg]
    print(f"Numărul de telefon al lui {nume_coleg} este {numar_telefon}")
else:
    print(f"{nume_coleg} nu există în baza de date.")
