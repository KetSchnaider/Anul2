def main():
    while True:
        print("Meniu:")
        print("1. Rezolvare expresii matematice")
        print("2. Evaluare expresii booleane")
        print("3. Verificare tip și valoare expresii")
        print("4. Calcul valoare variabilă întreagă z")
        print("5. Comparare și explicație expresii")
        print("6. Anticipare și verificare expresii")
        print("7. Afișare variabile x și y")
        print("8. Calculul lui z cu formula dată")
        print("9. Evaluează expresia f(x)")
        print("10. Verifică dacă 4 numere sunt distincte")
        print("11. Găsește numărul egal cu suma celorlalte două")
        print("12.Individual")
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
        elif optiune == "7":
            sarcina_7()
        elif optiune == "8":
            sarcina_8()
        elif optiune == "9":
            sarcina_9()
        elif optiune == "10":
            sarcina_10()
        elif optiune == "11":
            sarcina_11()
        elif optiune == "12":
            individual()
        elif optiune == "0":
            break
        else:
            print("Opțiune invalidă. Reîncercați.")

def sarcina_1():
    # Sarcina 1
    print("Rezultate pentru Sarcina 1:")
    print("a) 2/5 =", 2/5)
    print("b) 7.9+1.1 =", 7.9 + 1.1)
    print("c) 6-2 =", 6 - 2)
    print("d) 8+1 =", 8 + 1)
    print("e) 9+1.1 =", 9 + 1.1)
    print("f) 2*7 =", 2 * 7)
    print("g) 3.2/6 =", 3.2 / 6)
    print("h) 5* 8.0 =", 5* 8.0)
    print("i) 3.4 - 1.1 =", 3.4 - 1.1)
    print("j) 9 % 2 =", 9 % 2)
    print("k) 9 % -2 =", 9 % -2)
    print("l) -9 % 2 =", -9 % 2)

def sarcina_2():
    # Sarcina 2
    s = 2 
    print("Rezultate pentru Sarcina 2:")
    print("a) bool(-30) =", bool(-30))
    print("b) bool(0.2) =", bool(0.2))
    print("c) bool(0) =", bool(0))
    print("d) bool(s) =", bool(s))
def sarcina_3():
    # Sarcina 3
    print("Rezultate pentru Sarcina 3:")
    print("a) type(5.8e+3) =", type(5.8e+3))
    print("b) type(1+4.0+2) =", type(1+4.0+2))
    print("c) type(None) =", type(None))
    print("d) type('float') =", type('float'))
    print("e) type(4+2j) =", type(4+2j))

def sarcina_4():
    # Sarcina 4
    x = 32
    y = 6

    #a
    z1 = x % y + y
    #b
    z2 = x // y + x
    #c
    y1 = x//y
    z3 = x // y1
    #d
    y2 = x // y + y
    z4 = x // y2 + y2
    #e
    y3 = x % y +2
    z5 = x % y3 + 2
    #f
    y4 = x//y
    z6 = x % (y4 + 2)
    #g
    y5 = x % y
    z8 = x // (y5 + 2)

    print(f"a) z= x%y+y = {z1}")
    print(f"b) z= x//y+x = {z2}")
    print(f"c) y= x//y={y1} z=x//y = {z3}")
    print(f"d) y= x//y+y ={y2} z= x//y = {z4}")
    print(f"e) y= x%y+2={y3} z= x%y+x ={z5}")
    print(f"f) y= x//y={y4} z= x%(y+2) ={z6}")
    print(f"g) y= x%y={y5} z= x//(y+2) ={z8}")

def sarcina_5():
    # Sarcina 5
    expr1 = 12.5 / 2.5
    expr2 = int(12.5) / int(2.5)
    expr3 = int(12.5 / 2.5)

    print(f"a) 12.5/2.5 = {expr1}")
    print(f"b) int(12.5)/int(2.5) = {expr2}")
    print(f"c) int(12.5/2.5) = {expr3}")

def sarcina_6():
    # Sarcina 6
    expr1 = str(6) * int('5')
    expr2 = int('6') + float('6.1')
    expr3 = str(6)*float('6.1')
    expr4 = str(6/4) * 2

    print(f"a) str(6)*int('5') = {expr1}")
    print(f"b) int('6')+float('6.1') = {expr2}")
    print(f"c) str(6)*float('6.1') = {expr3}")
    print(f"d) str(6/4)*2 = {expr4}")

def sarcina_7():
    # Sarcina 7
    x = 3
    y = 4

    print(f"a) {x}+{y}=?")
    print(f"b) ({x})({y})")
    print(f"c) x={x}; y={y};")
    print(f"d) Răspuns: ({x}; {y})")

def sarcina_8():
    # Sarcina 8
    x = int(input("Introduceți valoarea lui x: "))
    y = int(input("Introduceți valoarea lui y: "))

    z = (x**2 + y**2) * (x - y)**2
    print(f"Z = ({x}^2 + {y}^2) * ({x} - {y})^2 = {z}")

def sarcina_9():
    # Sarcina 9
    x = float(input("Introduceți valoarea lui x: "))

    if x < 0:
        f = x
    elif 0 <= x < 10:
        f = 2 * x
    elif 10 <= x < 100:
        f = 3 * x
    else:
        f = 4 * x

    print(f"f({x}) = {f}")

def sarcina_10():
    # Sarcina 10
    numar1 = int(input("Introduceți primul număr întreg: "))
    numar2 = int(input("Introduceți al doilea număr întreg: "))
    numar3 = int(input("Introduceți al treilea număr întreg: "))
    numar4 = int(input("Introduceți al patrulea număr întreg: "))

    sunt_distincte = True

    if numar1 == numar2 or numar1 == numar3 or numar1 == numar4:
        sunt_distincte = False
    elif numar2 == numar3 or numar2 == numar4:
        sunt_distincte = False
    elif numar3 == numar4:
        sunt_distincte = False

    # Afisăm rezultatul
    if sunt_distincte:
        print("Cele 4 numere sunt distincte.")
    else:
        print("Cele 4 numere NU sunt distincte.")

def sarcina_11():
    # Sarcina 11
 # Citim cele 3 numere întregi
    nr1 = int(input("Introduceți primul număr întreg: "))
    nr2 = int(input("Introduceți al doilea număr întreg: "))
    nr3 = int(input("Introduceți al treilea număr întreg: "))

# Verificăm dacă există un număr egal cu suma celorlalte două
    if nr1 == nr2 + nr3:
        print(f"{nr1} este egal cu suma {nr2} + {nr3}.")
    elif nr2 == nr1 + nr3:
        print(f"{nr2} este egal cu suma {nr1} + {nr3}.")
    elif nr3 == nr1 + nr2:
        print(f"{nr3} este egal cu suma {nr1} + {nr2}.")
    else:
        print("Nu există niciun număr care să fie egal cu suma celorlalte două.")


def individual():
    # Sarcina individuala
    import math

    d = 2.359
    f = 15.5

    results = []

    for x in range(-1, 30):
        x /= 10.0  # Convert x to a float with one decimal place
        q = abs(math.sqrt(d**2 + f) - f**2 * math.log(d + x)**3 / d)
        y = math.cos(q)**3 * q**4 - q / math.sqrt(f**2 + d**2)
        results.append((x, y))

    for x, y in results:
        print(f"y = {y:.6f}")

if __name__ == "__main__": #script este executat ca program principal
    main()