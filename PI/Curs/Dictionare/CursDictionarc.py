# Dicționarul cu traduceri de la nume de monedă la simbol
dictionar_monezi = {
    'Euro': '€',
    'Dolar': '$',
    'Yen': 'Y'
}

# Cerem utilizatorului să introducă numele monedei
moneda = input("Introduceți numele monedei: ")

# Căutăm moneda în dicționar și afișăm simbolul corespunzător sau un mesaj de avertizare
if moneda in dictionar_monezi:
    simbol = dictionar_monezi[moneda]
    print(f"Simbolul pentru {moneda} este {simbol}")
else:
    print(f"Moneda '{moneda}' nu se găsește în dicționar. Verificați ortografia sau încercați o altă monedă.")
