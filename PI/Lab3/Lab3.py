book_db = [
    {
        "title": "Game of Thrones",
        "authors": ["George R. R. Martin", "Jane Espenson" ],
        "genre": "Fantasy",
        "price": 14.99,
        "quantity": 25,
        "isbn": "978-0553386790"
    },
    {
        "title": "Atlas Shrugged",
        "authors": ["Ayn Rand","Leonard Peikoff"],
        "genre": "Philosophical Literature",
        "price": 12.50,
        "quantity": 30,
        "isbn": "978-0451191144"
    },
    {
        "title": "Harry Potter and the Philosopher's Stone",
        "authors": ["J.K. Rowling" , "Mary GrandPré"],
        "genre": "Fantasy",
        "price": 11.75,
        "quantity": 40,
        "isbn": "978-0439554930"
    },
    {
        "title": "The Lord of the Rings",
        "authors": ["J.R.R. Tolkien" , "Alan Lee"],
        "genre": "Fantasy",
        "price": 13.99,
        "quantity": 20,
        "isbn": "978-0590353427"
    },
    {
        "title": "Twilight Saga: Twilight",
        "authors": ["Stephenie Meyer" , "Hans-Georg Pflaum"],
        "genre": "Romantic Fantasy",
        "price": 9.95,
        "quantity": 42,
        "isbn": "978-0316769480"
    }
]


print("Continutul Bazei de Date ({}):".format(len(book_db)))

for i, book in enumerate(book_db, start=1):
    print("{}.".format(i))
    print("Denumire: {}".format(book["title"]))
    print("Autor(i): {}".format(", ".join(book["authors"])))
    print("Gen: {}".format(book["genre"]))
    print("Pret: ${:.2f}".format(book["price"]))
    print("Cantitate: {}".format(book["quantity"]))
    print("ISBN: {}".format(book["isbn"]))
    print("\n")
