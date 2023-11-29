# Datele de intrare
order_numbers = [34587, 98762, 77226, 88112]
book_info = ["Learning Python , Mark Lutz", "Programming Python , Mark Lutz", "Head First Python , Paul Barry", "Einfuhrung in Python3 , Bernd Klein"]
quantities = [4, 5, 3, 3]
prices = [40.95, 56.80, 32.95, 24.99]

# Parcurgem listele și calculăm produsul pentru fiecare comandă
result = []
for i in range(len(order_numbers)):
    order_number = order_numbers[i]
    book_title, author = book_info[i].split(", ")
    quantity = quantities[i]
    price_per_item = prices[i]
    
    total_price = quantity * price_per_item
    if total_price < 100.00:
        total_price += 10.00
    
    result.append((order_number, total_price))

# Afișăm rezultatul sub formă de listă de tupluri
print(result)
