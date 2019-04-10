function showListClients(listClients) {
    rows = '';
    cantClients = listClients.length;
	for(i = 0; i < cantClients; i++) {
        colID = '<tr><td>' + listClients[i].id + '</td>"';
        colNom = '<td>' + listClients[i].nom + '</td>"';
        colDNI = '<td>' + listClients[i].dni + '</td>"';
        colLoc = '<td>' + listClients[i].nom_loc + '</td></tr>"';
        rows += colID + colNom + colDNI + colLoc;
    }
    $('table tr:last').after(rows);
}