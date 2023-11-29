try:
    # Solicităm utilizatorului două valori
    valoare1 = input("Introduceți prima valoare: ")
    valoare2 = input("Introduceți a doua valoare: ")

    # Încercăm să convertim valorile în numere întregi
    numar1 = int(valoare1)
    numar2 = int(valoare2)

    # Dacă ambele conversii au reușit, însumăm numerele
    rezultat = numar1 + numar2
    print(f"Rezultatul este: {rezultat}")
except ValueError:
    # Dacă apare o excepție de tip ValueError (adică una dintre conversii a eșuat), efectuăm concatenarea
    rezultat = valoare1 + valoare2
    print(f"Rezultatul concatenării este: {rezultat}")
