class Time:
    def __init__(self, hours=0, minutes=0, seconds=0):
        self.hours = hours
        self.minutes = minutes
        self.seconds = seconds

    def __str__(self):
        return f"{self.hours:02d}:{self.minutes:02d}:{self.seconds:02d}"

    def __add__(self, other):
        if not isinstance(other, Time):
            raise ValueError("Can only add Time objects")
        
        total_seconds = self.hours * 3600 + self.minutes * 60 + self.seconds + \
                        other.hours * 3600 + other.minutes * 60 + other.seconds

        new_hours = total_seconds // 3600
        remaining_seconds = total_seconds % 3600
        new_minutes = remaining_seconds // 60
        new_seconds = remaining_seconds % 60

        return Time(new_hours, new_minutes, new_seconds)

    def __sub__(self, other):
        if not isinstance(other, Time):
            raise ValueError("Can only subtract Time objects")
        
        total_seconds = self.hours * 3600 + self.minutes * 60 + self.seconds - \
                        other.hours * 3600 + other.minutes * 60 + other.seconds

        new_hours = total_seconds // 3600
        remaining_seconds = total_seconds % 3600
        new_minutes = remaining_seconds // 60
        new_seconds = remaining_seconds % 60

        return Time(new_hours, new_minutes, new_seconds)

    @classmethod
    def from_string(cls, str_value):
        hours, minutes, seconds = map(int, str_value.split(':'))
        return cls(hours, minutes, seconds)

    def save(self, filename):
        with open(filename, 'w') as file:
            file.write(str(self))

    def load(self, filename):
        with open(filename, 'r') as file:
            time_str = file.read()
        return Time.from_string(time_str)


# Exemplu de utilizare:
time_obj1 = Time(12, 30, 45)
time_obj2 = Time(2, 15, 30)

# Adunare
result_addition = time_obj1 + time_obj2
print(f"Adunare: {time_obj1} + {time_obj2} = {result_addition}")

# Diferență
result_subtraction = time_obj1 - time_obj2
print(f"Diferență: {time_obj1} - {time_obj2} = {result_subtraction}")

# Creare obiect din șir
time_str = "08:45:15"
time_from_str = Time.from_string(time_str)
print(f"Obiect creat din șir: {time_str} => {time_from_str}")

# Salvare în fișier text
time_obj1.save("time_object.txt")

# Încărcare din fișier text
loaded_time_obj = Time().load("time_object.txt")
print(f"Obiect încărcat din fișier text: {loaded_time_obj}")
