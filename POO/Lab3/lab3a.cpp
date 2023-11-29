#include <iostream>

class Date {
private:
    int day, month, year;

public:
    // constructor
    Date(int d, int m, int y) : day(d), month(m), year(y) {}

    // operator +
    Date operator+(int days) const {
        Date result = *this;
        result.day += days;
        result.adjustDate();
        return result;
    }

    // operator -
    Date operator-(int days) const {
        Date result = *this;
        result.day -= days;
        result.adjustDate();
        return result;
    }

    // prefix si postfix ++
    friend Date& operator++(Date& date);    // Prefix
    friend Date operator++(Date& date, int); // Postfix

    // prefix si postfix -- 
    friend Date& operator--(Date& date);    // Prefix
    friend Date operator--(Date& date, int); // Postfix

    // display data
    void displayDate() const {
        std::cout << day << "." << month << "." << year << std::endl;
    }

private:
    // ajustara datei
    void adjustDate() {
        while (day > daysInMonth()) {
            day -= daysInMonth();
            month++;
            if (month > 12) {
                month = 1;
                year++;
            }
        }
    }

    // zile in luna
    int daysInMonth() const {
        static const int daysPerMonth[] = {0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31};
        int days = daysPerMonth[month];
        if (month == 2 && isLeapYear())
            days++; // an bisect
        return days;
    }

    // verificarea daca anul este bisect
    bool isLeapYear() const {
        return (year % 4 == 0 && year % 100 != 0) || (year % 400 == 0);
    }
};

// friend operator ++ (prefix)
Date& operator++(Date& date) {
    date.day++;
    date.adjustDate();
    return date;
}

// friend operator ++ (postfix)
Date operator++(Date& date, int) {
    Date result = date;
    ++date;
    return result;
}

// friend operator -- (prefix)
Date& operator--(Date& date) {
    date.day--;
    if (date.day < 1) {
        date.month--;
        if (date.month < 1) {
            date.month = 12;
            date.year--;
        }
        date.day = date.daysInMonth();
    }
    return date;
}

// friend operator -- (postfix)
Date operator--(Date& date, int) {
    Date result = date;
    --date;
    return result;
}

int main() {
    Date currentDate(27, 11, 2023);

    // operator +
    Date newDate = currentDate + 5;
    std::cout << "Current Date: ";
    currentDate.displayDate();
    std::cout << "New Date (+5 days): ";
    newDate.displayDate();

    //  operator -
    newDate = currentDate - 7;
    std::cout << "Current Date: ";
    currentDate.displayDate();
    std::cout << "New Date (-7 days): ";
    newDate.displayDate();

    //  ++ (prefix)
    ++currentDate;
    std::cout << "Current Date (after ++): ";
    currentDate.displayDate();

    // ++ (postfix)
    Date postIncDate = currentDate++;
    std::cout << "Current Date (after postfix ++): ";
    currentDate.displayDate();
    std::cout << "Postfix Incremented Date: ";
    postIncDate.displayDate();

    // -- (prefix)
    --currentDate;
    std::cout << "Current Date (after --): ";
    currentDate.displayDate();

    //  -- (postfix)
    Date postDecDate = currentDate--;
    std::cout << "Current Date (after postfix --): ";
    currentDate.displayDate();
    std::cout << "Postfix Decremented Date: ";
    postDecDate.displayDate();

    return 0;
}
