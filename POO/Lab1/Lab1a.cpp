#include <iostream>
#include <fstream>
#include <vector>
#include <string>

using namespace std;

struct Tara {
    string denumire;
    string continent;
    int nr_locuitori;
};

void afisareTara(ifstream& fisier) {
    Tara tara;
    cout << "Tari din fisier:" << endl;
    while (fisier >> tara.denumire >> tara.continent >> tara.nr_locuitori) {
        cout << "Denumire: " << tara.denumire << endl;
        cout << "Continent: " << tara.continent << endl;
        cout << "Nr. locuitori: " << tara.nr_locuitori << endl;
        cout << "--------------------" << endl;
    }
    cout << "Sfarsit lista de tari din fisier." << endl;
}

void salvareInFisier(const vector<Tara>& tari) {
    ofstream fisier("tari.txt");
    if (fisier.is_open()) {
        for (const Tara& tara : tari) {
            fisier << tara.denumire << " " << tara.continent << " " << tara.nr_locuitori << endl;
        }
        fisier.close();
    } else {
        cout << "Eroare la deschiderea fisierului." << endl;
    }
}
void meniu() {
    cout << "Meniu:" << endl;
    cout << "1. Adauga tara" << endl;
    cout << "2. Afiseaza tari" << endl;
    cout << "3. Modifica tara" << endl;
    cout << "4. Compara tari" << endl;
    cout << "0. Iesire" << endl;
}
int main() {
    vector<Tara> tari;
    ifstream fisier("tari.txt");
    if (fisier.is_open()) {
        Tara tara;
        while (fisier >> tara.denumire >> tara.continent >> tara.nr_locuitori) {
            tari.push_back(tara);
        }
        fisier.close();
    } else {
        cout << "Eroare la deschiderea fisierului." << endl;
    }
    while (true) {
        meniu();
        int optiune;
        cout << "Introduceti optiunea: ";
        cin >> optiune;
        switch (optiune) {
            case 1: {
                Tara tara;
                cout << "Continent: ";
                getline(cin, tara.continent);
                cout << "Nr. locuitori: ";
                cin >> tara.nr_locuitori;
                tari.push_back(tara);
                break;
            }
                case 2: {
    ifstream fisierCitire("tari.txt");
    if (fisierCitire.is_open()) {
        afisareTara(fisierCitire);
        fisierCitire.close();
    } else {
        cout << "Eroare la deschiderea fisierului." << endl;
    }
    break;
}
            case 3: {
                int indexModificare;
                cout << "Introduceti indexul tarii de modificat: ";
                cin >> indexModificare;
                if (indexModificare >= 0 && indexModificare < tari.size()) {
                    cout << "Modificati tara " << indexModificare + 1 << ":" << endl;
                    cin.ignore();
                    cout << "Denumire: ";
                    getline(cin, tari[indexModificare].denumire);
                    cout << "Continent: ";
                    getline(cin, tari[indexModificare].continent);
                    cout << "Nr. locuitori: ";
                    cin >> tari[indexModificare].nr_locuitori;
                } else {
                    cout << "Index invalid pentru modificare." << endl;
                }
                break;
            }
            case 4: {
                int indexTara1, indexTara2;
                cout << "Introduceti indexul tarii 1 pentru comparare: ";
                cin >> indexTara1;
                cout << "Introduceti indexul tarii 2 pentru comparare: ";
                cin >> indexTara2;
                if (indexTara1 >= 0 && indexTara1 < tari.size() && indexTara2 >= 0 && indexTara2 < tari.size()) {
                    if (tari[indexTara1].nr_locuitori < tari[indexTara2].nr_locuitori) {
                        cout << tari[indexTara1].denumire << " are mai puțini locuitori decât " << tari[indexTara2].denumire << "." << endl;
                    } else if (tari[indexTara1].nr_locuitori > tari[indexTara2].nr_locuitori) {
                        cout << tari[indexTara1].denumire << " are mai mulți locuitori decât " << tari[indexTara2].denumire << "." << endl;
                    } else {
                        cout << tari[indexTara1].denumire << " și " << tari[indexTara2].denumire << " au același număr de locuitori." << endl;
                    }
                } else {
                    cout << "Indexuri invalide pentru comparare." << endl;
                }
                break;
            }
            case 0:
                salvareInFisier(tari);
                return 0;
            default:
                cout << "Optiune invalida." << endl;
                break;
        }
    }
    return 0;
}