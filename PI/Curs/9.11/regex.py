import re

text = """
+373 22 34 56 54
+(373) 22 34-56-54
0 0 373 22 345653
0 22 34-56-67
(022) 345467
(022) 34-34-56
022 34.45.67
"""


pattern = r'\+?\d{3}[-. ]?\d{2,3}[-. ]?\d{2,3}[-. ]?\d{2,3}'


phone_numbers = re.findall(pattern, text)


for phone_number in phone_numbers:
    print(phone_number)
