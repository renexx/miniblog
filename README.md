# Laravel aplikácie na zanechanie odkazov
### Na začiatku je potreba nastaviť databázu v súbore .env
### Keď je databáza nastavená, je potreba zadať príkaz composer dump-autoload.

## Po tomto príkaze môžeme zadať príkaz php artisan migrate, ak tento príkaz zobrazí nothing to change, zadajte php artisan migrate:refresh.
## Tým sa vytvoria databázové tabulky users a posts, ktoré sú však zatiaľ prázdne. Preto je potreba zadať príkaz php artisan db:seed. Tento príkaz naplní databázové tabulky testovacími dátami. Presnejšie sa vytvorí 5 používateľov a 15 odkazov.

## Príkaz php artisan serve nám spustí aplikáciu na localhoste napríklad na adrese 127.0.0.1:3000. Po otvorení tejto adresy môžeme vidieť všetky odkazy. Počet odkazov je 20 a sú zoradené od najnovších po najstaršie. Okrem toho na stránke môžeme vidieť navigáciu, kde máme linky na stránku štatistiky, kde sa nachádzajú jednotlivé štatistiky o odkazoch a používateloch. V navigácií sa nachádza aj odkaz moje príspevky, kde sa nachádzajú príspevky prihláseného uživateľa. Ak prihlásený nie je je tam odkaz búď na príhlásenie alebo registráciu.

## Každý uživateľ môže upravovať a mazať svoje odkazy.
