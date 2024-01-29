class Transfer:
    def __init__(self, sender, receiver, amount):
        self.sender = sender
        self.receiver = receiver
        self.amount = amount

    def indeplineste(self):
        #  metoda comuna
        print("Transfer realizat cu succes.")

    def _metoda_protejata(self):
        # Metoda protejata
        print("Aceasta este o metodă protejată.")

    def __metoda_privata(self):
        # Metoda privata
        print("Aceasta este o metodă privată.")
    
class TransferdeBani(Transfer):
    def __init__(self, sender, receiver, amount, currency):
        super().__init__(sender, receiver, amount)
        self.currency = currency

    def indeplineste(self):
        print(f"Transfer de bani în valoare de {self.amount} {self.currency} realizat cu succes.")

    def metoda_publica_specific_transfer_bani(self):
        print("Aceasta este o metodă publică specifică clasei TransferdeBani.")

class TransferPostal(Transfer):
    def __init__(self, sender, receiver, package_weight):
        super().__init__(sender, receiver, package_weight)

    def indeplineste(self):
        print(f"Transfer poștal pentru pachetul cu greutatea de {self.amount} kg realizat cu succes.")

class TransferBancar(Transfer):
    def __init__(self, sender, receiver, amount, bank_name):
        super().__init__(sender, receiver, amount)
        self.bank_name = bank_name

    def indeplineste(self):
        print(f"Transfer bancar în valoare de {self.amount} realizat cu succes către {self.bank_name}.")

class TransferValutar(TransferBancar):
    def __init__(self, sender, receiver, amount, bank_name, exchange_rate):
        super().__init__(sender, receiver, amount, bank_name)
        self.exchange_rate = exchange_rate

    def indeplineste(self):
        converted_amount = self.amount * self.exchange_rate
        print(f"Transfer valutar în valoare de {converted_amount} realizat cu succes către {self.bank_name}.")

# Exemplu de utilizare:
transfer_bani = TransferdeBani("John", "Alice", 100, "USD")
transfer_postal = TransferPostal("Bob", "Charlie", 5)
transfer_bancar = TransferBancar("Eve", "Mallory", 200, "BankX")
transfer_valutar = TransferValutar("Carol", "Dave", 150, "BankY", 0.9)

transfer_bani.indeplineste()
transfer_bancar.indeplineste()
transfer_valutar.indeplineste()

transfer_bani.metoda_publica_specific_transfer_bani()
