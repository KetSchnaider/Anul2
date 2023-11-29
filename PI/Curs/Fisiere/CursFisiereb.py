# Deschide fișierul nums.txt pentru citire
with open("nums.txt", "r") as file:
    # Citeste toate numerele din fișier și le stochează într-o listă
    numere = [float(num) for num in file.read().split()]

# Calculează suma numerelor din listă
suma = sum(numere)

# Afișează suma
print(f"Suma totală a numerelor din fișierul nums.txt este: {suma}")
