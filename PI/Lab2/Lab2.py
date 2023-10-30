def main():
    while True:
        print("Meniu:")
        print("1. s=ProgramareaInteractiva")
        print("2. L=[a, b, c, d,e]")
        print("3. b=[34,45,56,38]")
        print("4. Siruri")
        print("5. Liste")
        print("6. Aditional")
        print("0. Ieșire")

        optiune = input("Selectați o opțiune: ")

        if optiune == "1":
            sarcina_1()
        elif optiune == "2":
            sarcina_2()
        elif optiune == "3":
            sarcina_3()
        elif optiune == "4":
            sarcina_4()
        elif optiune == "5":
            sarcina_5()
        elif optiune == "6":
            sarcina_6()
            break
        else:
            print("Opțiune invalidă. Reîncercați.")

def sarcina_1():
    # Sarcina 1
    s='ProgramareaInteractiva'
    print("a)",s[:-1])
    print("b)",s[:1])
    print("c)",s[0:1])
    print("d)",s[:])
    print("e)",s[-1:])
    print("f)",s[2:5])
    print("g)",s[-3:-1])
    print("h)",s[1:9:2])
    print("i)",s[::-1])

def sarcina_2():
    # Sarcina 2
    L = ['a','b','c','d','e']
    print("a)",L[-1])
    print("b)",L[:2])
    print("c)",L[::])
    print("d)",L[1:3:2])
    print("e)",L[2:len(L)])
    print("f)",L[len(L)-2])
    print("g)",L[1]+L[3])
    print("h)",L[2]+L[-2])
    print("i)",2*L[2:4])
    print("j)",L [int(int('3'*2)/11)])
    print("k)",L [0:1]==['x','y'])
    print("l)",L[0:2]==['Python'])
def sarcina_3():
    b = [34, 45, 56, 38]
    b.insert(-1, 12)
    print("a)", b)

    b.pop()
    print("b)", b)

    b.remove(34)
    print("c)", b)

    b.append('doi')
    print("d)", b)

    index_doi = b.index('doi')
    print("e)", b, "Indexul pentru 'doi':", index_doi)

    count_34 = b.count(34)
    print("f)", b, "Numărul de apariții a lui 34:", count_34)

    b.reverse()
    print("g)", b)

    b.sort()
    print("h)", b)

    l = [34, 45, 56, 38]
    del l[0:2]
    print("i)", b)

    b.extend([1])
    print("j)", b)


def sarcina_4():
    # Sarcina Siruri
    S = input("Introduceți șirul de caractere S: ")
    N = int(input("Introduceți numărul întreg N: "))

    # Verificăm dacă N este în intervalul corect
    if 0 <= N <= len(S):
        # Obținem primul subșir până la indexul N inclusiv
        subșir1 = S[:N]

        # Obținem al doilea subșir de la indexul N + 1 până la sfârșit
        subșir2 = S[N + 1:]
        # Afișăm cele două subșiruri
        print("Primul subșir:", subșir1)
        print("Al doilea subșir:", subșir2)
    else:
        print("Valoarea lui N este în afara intervalului corect pentru șirul dat.")

def sarcina_5():
    # Sarcina Liste
    L = [4, 34, 56, 74, 68, 98, 52, 62]
    numar_multipli_de_4 = 0

    for numar in L:
        if numar % 4 == 0:
            numar_multipli_de_4 += 1

    print("Numărul de multipli de 4 în lista L:", numar_multipli_de_4)

def sarcina_6():
    # Sarcina 6
    import math
    numar_perechi = 0

    for i in range(1, n + 1):
        for j in range(i, n + 1):
                if math.gcd(i, j) == d:
                    numar_perechi += 1
                    print(f"Pereche ({i}, {j}) cu cmmdc = {d}")

        return numar_perechi

    n = int(input("Introduceți un număr natural n: "))
    d = int(input("Introduceți un număr natural d pentru cmmdc: "))

    rezultat = sarcina_6(n, d)
    print(f"Numărul de perechi cu cmmdc = {d} până la {n} este {rezultat}.")
if __name__ == "__main__": #script este executat ca program principal
    main()