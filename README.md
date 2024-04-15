PHP - Hotel
===
**Descrizione**
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella (o se preferite delle card).
**Bonus:**
1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.
NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.

====
**Svolgimento**
1 - Dichiarare l'array multidimensionale nello script php in testa al documento
2 - utilizzare un ciclo "foreach" con chiave gli array elementi dell'array multidimensionale
3 - creare una card in cui richiamare i valori dei singoli array con la dicitura $array['chiave']
4 - Perdere mezz'ora per l'utilizzo dell'apice americano al posto dell'apostrofo, non riuscendo a localizzare il problema
5 - aggiunta immagini tramite array key e layout bootstrap