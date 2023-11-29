import json

class AEROFLOT:
    def __init__(self, DEST, NUMR, TIP):
        self.DEST = DEST
        self.NUMR = NUMR
        self.TIP = TIP

# Introduceți datele în matricea AIRPORT 
AIRPORT = []
for i in range(2):
    DEST = input(f"Introduceți numele destinației zborului dvs {i + 1}: ")
    numr = int(input(f"Introduceți numărul zborului {i + 1}: "))
    tip = input(f"Introduceți tipul de aeronavă pentru zbor {i + 1}: ")

    aeroflot_instance = AEROFLOT(DEST, numr, tip)
    AIRPORT.append(aeroflot_instance)

# Sortați după numărul de zbor crescător
 
AIRPORT.sort(key=lambda x: x.NUMR)

# Salvarea datelor într-un fișier JSON
with open('airport_data.json', 'w') as json_file:
    json.dump([vars(a) for a in AIRPORT], json_file, ensure_ascii=False, indent=4)

# Introducerea numelui destinației de căutat
search_DEST = input("Introduceți numele destinației dvs. de căutare: ")

# Căutați zboruri după numele destinației potrivite
found_flights = [(a.NUMR, a.TIP) for a in AIRPORT if a.DEST == search_DEST]

# Rezultate de ieșire
if found_flights:
    print(f"Zboruri și tipuri de aeronave către destinația dvs '{search_DEST}':")
    for numr, tip in found_flights:
        print(f"Număr zbor: {numr}, tipul aeronavei: {tip}")
else:
    print(f"Nu au fost găsite zboruri către destinația „{search_DEST}”.")


