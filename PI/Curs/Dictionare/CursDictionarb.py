# Dicționarul cu traduceri din engleză în română
traduceri = {
    "apple": "măr",
    "banana": "banană",
    "cherry": "cireașă",
    "grape": "strugure",
    "orange": "portocală"
}

# Inițializăm dicționarul "inversat" pentru traducerile din română în engleză
traduceri_inversate = {}

# Cream dicționarul inversat pornind de la cel original
for engleza, romana in traduceri.items():
    traduceri_inversate[romana] = engleza

# Afișăm dicționarul inversat
print("Dicționarul inversat (română -> engleză):")
for romana, engleza in traduceri_inversate.items():
    print(f"{engleza} -> {romana}")
