
order_numbers = [34587, 98762, 77226, 88112]
books = ["Learning Python", "Programming Python","Head First P", "Einfuhrung in Python"]
quantities = [4, 5, 3, 3]
prices_per_item = [40.95, 56.80, 32.95, 24.99]


calculate_order_value = lambda order_number, price, quantity: (order_number, price * quantity + 10 if price * quantity < 100 else price * quantity)

result = list(map(calculate_order_value, order_numbers, prices_per_item, quantities))


print(result)
