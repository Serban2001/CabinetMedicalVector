# CabinetMedicalVector

## Descrierea funcționalității

Proiectul coține 6 pagini dupa cum urmează:
1. Pagina **Acasă** unde regăsim prezentarea cabinetului medical Vector, informații despre cabinet și serviciile oferite. Pe această pagină avem un slider pe care se derulează 3 imagini in mod automat pentru a oferii din start o perspectivă asupra cabinetului medical prezentat. Apoi avem zona cu informații despre noi și serviciile noastr, iar la final prezentăm utilizatorilor noștrii perspectiva cliențiilor noștrii.

<img width="700" alt="acasa1" src="https://github.com/Serban2001/CabinetMedical/assets/127775479/41f9f840-25ad-431c-bc1c-e0a9734b97aa">

<img width="700" alt="acasa2" src="https://github.com/Serban2001/CabinetMedical/assets/127775479/6a78e33a-ef16-4c4d-9960-c0f4bfbe6ddc">

<img width="700" alt="acasa3" src="https://github.com/Serban2001/CabinetMedical/assets/127775479/9315477b-0b3e-46e0-96df-c84869715e37">

<img width="700" alt="acasa4" src="https://github.com/Serban2001/CabinetMedical/assets/127775479/c35c33bf-7f08-4a77-a32c-b2ee2255b06f">

2. Pagina **Despre Noi** conține informații despre cabinetul medical. Aici am încercat sa prezentăm experiența noastră și servicii pe care le oferim. Tot aici prezentăm ultilozatorilor noștrii și echipa Vector cu care pot colabora în viitor.

<img width="700" alt="despre-noi1" src="https://github.com/Serban2001/CabinetMedical/assets/127775479/05963831-fb31-451d-8cf3-b3f7343531dc">

<img width="700" alt="despre-noi2" src="https://github.com/Serban2001/CabinetMedical/assets/127775479/5b117b9e-efd6-473b-bdf6-6b40853c8674">

3. Pagina **Contact** conține informații de localizare și de contact. Aici regăsim si un formular de contact destinat celor care doresc să ne lase un mesaj prin intermediul website-ului.

<img width="700" alt="contact" src="https://github.com/Serban2001/CabinetMedical/assets/127775479/671013b2-3520-44dc-b8aa-f6ad0e7270c4">

4. Pagina de **Autentificare** conține formularul de autentificare care redirecținează clientul catre versiunea website-ului cu informații specifice utilizatorilor autentificați sau afișează mesajul de eroare daca autentificarea a eșuat.

<img width="700" alt="autentificare" src="https://github.com/Serban2001/CabinetMedical/assets/127775479/922a784b-cfd5-43ca-bc46-34a52d2e3453">

5. Pagina de **Inregistrare** conține formularul de creare cont. Acest formular este dinamic, realizat cu ajutorul jQuery. La creacrea contului sunt verificate mai multe informații precum unicitatea adresei de email folosite și daca campurile de parola sunt corecte. Rezultatele oferite de acest formular se afisează în timp real datorita functiilor de trimitere a formularului prin jQuery.

<img width="700" alt="inregistrare" src="https://github.com/Serban2001/CabinetMedical/assets/127775479/7a05045b-916d-4f7e-bb94-4d8404733fc7">

6. Pagina **Pacienti** care este vizibilă doar utilizatorilor autentificați. Această pagină conține o listă cu pacineții cabinetului medical. Lista pacinețiilor contine informații cu privire la numele pacienților, vârsta si ultima vizită in cabinet.

Pentru realizarea acestui proiect am ales să folosesc sistemul de operare Windows și aplicația XAMPP pentru a furniza mediul de dezvoltare necesar specificațiilor proiectului.

Ca și structura de fișiere, am ales să pun toate paginile proiectului in folderul de bază(root), iar pentru resurse am ales sa folosesc folderul “assets” în care am pus pe categorii fiecare tip de resurse folosite.

Pentru a oferi o structură solidă proiectului și a-l face ușor de administrat, am ales ca zonele comune precum antetul(header), subsolul(footer) si conectarea la baza de date să fie puse în fișiere separate, acestea fiind importate ulterior unde este nevoie. Alegând acest modelul de lucra am putut face ca aceste zone comune să fie definite o singură dată, iar astfel ulterioarele modificări la aceste zone sa fie facute mult mai ușor și rapid.

## Tehnologii utilizate

În realizarea acestui proiect s-au folosit limbajele de programare:

1. **HTML** pentru structurarea conținutului și definirea layout-ului;
2. **CSS** pentru stilizarea elementelor HTML;
3. **JavaScript** pentru realizarea unor elemente interactive;
4. **PHP** pentru a realiza partea de backend a aplicației;
5. **MySql** pentru baza de date.

Pentru administrarea si funcționarea acestui proiect am folosit aplicația **XAMPP** pentru a furniza serverul local necesar pentru procesarea fisierelor php și serverul **MySql** pentru baza de date.

## Cum să Rulezi Proiectul

1. Instalează XAMPP pentru a avea un server local și MySql.
2. Clonează acest repository.
3. Copiază fișierele în folderul htdocs al instalării XAMPP.
4. Deschide XAMPP și pornește Apache și MySql.
5. Accesează proiectul într-un browser folosind localhost/nume-proiect.
