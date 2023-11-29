# Datele de intrare
order_numbers = [34587, 98762, 77226, 88112]
book_info = ["Learning Python , Mark Lutz", "Programming Python , Mark Lutz", "Head First Python , Paul Barry", "Einfuhrung in Python3 , Bernd Klein"]
quantities = [4, 5, 3, 3]
prices = [40.95, 56.80, 32.95, 24.99]

# Funcție lambda pentru calculul prețului total cu adăugarea de 10,00 € dacă este necesar
calculate_total_price = lambda quantity, price: quantity * price + 10 if quantity * price < 100 else quantity * price

# Utilizarea funcției map() pentru a calcula prețurile totale pentru fiecare comandă
result = list(map(lambda order_number, book, quantity, price: (order_number, calculate_total_price(quantity, price)),
                  order_numbers, book_info, quantities, prices))

# Afișăm rezultatul sub formă de listă de tupluri
print(result)
