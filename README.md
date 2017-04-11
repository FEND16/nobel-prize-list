# Nobel Prize List :trophy:

#### Introduktion

**Målet med uppgiften är att skapa struktur och skriva lättläslig PHP. Detta ska vi försöka säkerställa genom att jämföra mellan varandra i klassen. Det finns inte bara en Best Practice.**

---

I detta repo finns en början på en sida som ska visa upp olika rutor med **Nobelpristagare**.

Alla pristagare finns i `json`-format i filen `json/prizes.json`. Dessa är formatterade som en array av `json`-objekt och för att vi lätt ska kunna manipulera dessa med _PHP_ gör vi först om `json` till en skitstor **associative array**:

```php
<?php
//Loads JSON from .json-file
$nobelData = file_get_contents('json/prizes.json');
//Turns JSON data into PHP associative array with json_decode
$nobelData = json_decode($nobelData, true);
```

Ni ska använda denna variabel `$nobelData` för att göra övningen. Använd `var_dump($nobelData)` (en såkallad _huge dump_ :relieved:) för att se hur innehållet är strukturerat som en associative array.


## Övning

Ni ska först, två och två, skapa hemsidan enligt bild nedan. Ni får välja hur ni ska dela upp era olika _partials_ själva. Sedan ska ni presentera er lösning för en annan grupp och berätta hur ni har tänkt kring upplägget av er a filer. Sedan ska ni göra ändringar om ni kom fram till att ni behövde det. Till sist ska ni pusha upp er lösning som en branch till originalrepot så att resten av klassen kan ta del av lösningen.

##### Steg 1

Återskapa sidan ungefär enligt bilden nedan. Det viktig är att ni strukturerar upp era `partials`.

![Prize List](https://i.imgur.com/yQE4FAs.png)

* Ni ska dela upp er kod i flera olika filer som ska ligga i mappen `partials`. Jag har redan försett er med tomma _partials_ som ni kan fylla men utöver desssa får ni dela upp koden ytterligare.
* Ni ska även lägga till **3** stycken extra sidor (t.ex. _about.php_ etc.)
* Ni ska även skapa en **navbar** där ni länkar till de skapade sidorna.

##### Steg 2

Hitta en annan grupp och jämför era lösningar:

* Hur har ni delat upp koden i olika filer?
* Control statements, hur har ni loopat och använt `if`-satser t.ex.
* Har ni använt **[alternative syntax](http://php.net/manual/en/control-structures.alternative-syntax.php)**?
* `require`/`include`?
* Återanvändning av kod?
* Kan ni plocka några delar av varandra?

##### Steg 3

* Pusha upp er branch till originalrepot **[Nobel Prize List](https://github.com/FEND16/nobel-prize-list)**
* Döp branchen till era namn.


## Länkar

* [PHP.net Documentation](http://php.net/)
* [PHP.net: `require`](http://php.net/manual/en/function.require.php)
* [PHP.net: `include`](http://php.net/manual/en/function.include.php)
* [Bootstrap Getting Started](https://v4-alpha.getbootstrap.com/getting-started/introduction/)
* [Bootstrap - **Component: Card**](https://v4-alpha.getbootstrap.com/components/card/)
* [Nobel Prize API](https://nobelprize.readme.io/docs)