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
