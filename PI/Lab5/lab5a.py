import pandas as pd
import matplotlib.pyplot as plt

# Datele furnizate
data = {
    'An': [2019, 2020, 2021, 2022],
    'Total': [872.4, 834.2, 843.4, 862.3],
    'Barbati': [447.4, 434.5, 443.0, 443.7],
    'Femei': [425.0, 399.7, 400.4, 418.6],
}

# Crearea unui DataFrame folosind pandas
df = pd.DataFrame(data) # din dictionar in dataFrame
df.set_index('An', inplace=True) # setam An ca index , ne referim la obiect

# Calcule statistice
mean_values = df.mean() # calculam valorile medii pentru fiecare coloana
max_values = df.max()
min_values = df.min()

# Diagrame
fig, axes = plt.subplots(nrows=2, ncols=2, figsize=(12, 8))
fig.suptitle('Statistici și diagrame pentru datele furnizate')

# Diagramă linie
axes[0, 0].plot(df.index, df['Total'], marker='o', label='Total')
axes[0, 0].plot(df.index, df['Barbati'], marker='o', label='Barbati')
axes[0, 0].plot(df.index, df['Femei'], marker='o', label='Femei')
axes[0, 0].set_title('Diagramă linie')
axes[0, 0].legend()

# Diagramă bară
df.plot(kind='bar', ax=axes[0, 1], rot=0)
axes[0, 1].set_title('Diagramă bară')

# Diagramă plăcintă
mean_values.plot(kind='pie', ax=axes[1, 0], autopct='%1.1f%%')
axes[1, 0].set_title('Diagramă plăcintă pentru media valorilor')

# Diagramă histogramă
df['Total'].plot(kind='hist', ax=axes[1, 1], bins=20, edgecolor='black')
axes[1, 1].set_title('Histogramă pentru Total')

# Afișarea valorilor statistice calculate
print("Medie:\n", mean_values)
print("\nMaxim:\n", max_values)
print("\nMinim:\n", min_values)

# Afișarea diagramei
plt.tight_layout(rect=[0, 0, 1, 0.96])
plt.show()
