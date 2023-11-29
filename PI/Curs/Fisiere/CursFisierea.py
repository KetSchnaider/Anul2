# Definirea listei de înlocuire pentru cifre
inlocuire_cifre = {
    "one": "unu",
    "two": "doi",
    "three": "trei",
    "four": "patru",
    "five": "cinci"
}

# Deschide fișierul de intrare pentru citire
with open("data.txt", "r") as file_input:
    # Citeste fiecare linie din fișierul de intrare
    linii = file_input.readlines()

# Deschide fișierul de ieșire pentru scriere
with open("dataRo.txt", "w") as file_output:
    # Iterăm prin fiecare linie din lista de linii
    for linie in linii:
        # Înlocuim cifrele engleze cu echivalentele românești
        for engleza, romana in inlocuire_cifre.items():
            linie = linie.replace(engleza, romana)
        # Scriem linia modificată în fișierul de ieșire
        file_output.write(linie)

print("Procesul de înlocuire a cifrelor s-a încheiat cu succes!")
