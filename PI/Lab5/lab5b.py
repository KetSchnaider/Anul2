import pandas as pd
import matplotlib.pyplot as plt

# Datele furnizate
data = {
    'Country Code': ['USA', 'CHN', 'JPN', 'DEU', 'GBR', 'IND', 'FRA', 'ITA', 'CAN', 'KOR', 'RUS', 'BRA', 'AUS', 'ESP', 'MEX'],
    'Country Name': ['United States', 'China', 'Japan', 'Germany', 'United Kingdom', 'India', 'France', 'Italy', 'Canada', 'Korea, Rep.', 'Russian Federation', 'Brazil', 'Australia', 'Spain', 'Mexico'],
    '2019': ['22,996,100', '17,734,063', '4,937,422', '4,223,116', '3,186,860', '3,173,398', '2,937,473', '2,099,880', '1,990,762', '1,798,534', '1,775,800', '1,608,981', '1,542,660', '1,425,277', '1,293,038'],
    '2020': ['22,996,100', '17,734,063', '4,937,422', '4,223,116', '3,186,860', '3,173,398', '2,937,473', '2,099,880', '1,990,762', '1,798,534', '1,775,800', '1,608,981', '1,542,660', '1,425,277', '1,293,038'],
    '2021': ['22,996,100', '17,734,063', '4,937,422', '4,223,116', '3,186,860', '3,173,398', '2,937,473', '2,099,880', '1,990,762', '1,798,534', '1,775,800', '1,608,981', '1,542,660', '1,425,277', '1,293,038'],
    '2022': ['22,996,100', '17,734,063', '4,937,422', '4,223,116', '3,186,860', '3,173,398', '2,937,473', '2,099,880', '1,990,762', '1,798,534', '1,775,800', '1,608,981', '1,542,660', '1,425,277', '1,293,038'],
}

# Crearea DataFrame
df = pd.DataFrame(data)

# Ajustări date și cod
df['Country Code'] = df['Country Code'].str.replace('[^\w\s]', '')
df['2022'] = pd.to_numeric(df['2022'].str.replace(',', ''), errors='coerce')

# Diagrame
fig, axes = plt.subplots(nrows=2, ncols=2, figsize=(12, 10))
fig.suptitle('PIB-ul pentru țările selectate')

# Grafic: Dinamica modificărilor PIB-ului pentru perioada și țările selectate
for i, row in df.iterrows():
    plt.plot(df.columns[2:], row[2:].astype(str), label=row['Country Code'])

axes[0, 0].set_title('Dinamica modificărilor PIB-ului')
axes[0, 0].legend(loc='upper left')  # Ajustează locația legendei
axes[0, 0].set_xlabel('An')
axes[0, 0].set_ylabel('PIB')

# Histograma: Distribuția PIB-ului între toate țările (ultimul an disponibil)
axes[0, 1].hist(df['2022'].dropna(), bins=15, edgecolor='black')
axes[0, 1].set_title('Distribuția PIB-ului în 2022')
axes[0, 1].set_xlabel('PIB')
axes[0, 1].set_ylabel('Număr de țări')

# Diagramă circulară: Distribuția PIB-ului între țările din spațiul economic comun
economic_space = ['USA', 'CHN', 'JPN', 'DEU', 'GBR', 'CAN']
economic_space_data = df[df['Country Code'].isin(economic_space)]['2022']
axes[1, 0].pie(economic_space_data, labels=economic_space, autopct='%1.1f%%')
axes[1, 0].set_title('Distribuția PIB-ului în spațiul economic comun (2022)')

# Afișarea diagramei
plt.tight_layout(rect=[0, 0, 1, 0.96])
plt.show()
