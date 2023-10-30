def is_number(s):
    try:
        float(s)
        return True
    except ValueError:
        return False


valoare1 = input("Introduceți prima valoare: ")
valoare2 = input("Introduceți a doua valoare: ")


if is_number(valoare1) and is_number(valoare2):
    suma = float(valoare1) + float(valoare2)
    print("Suma celor două numere este:", suma)
else:
    concatenare = valoare1 + valoare2
    print("Concatenarea celor două șiruri este:", concatenare)
