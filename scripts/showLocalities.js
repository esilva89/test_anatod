function showLocalities(localities) {
    optionsLoc = '';
    cantLoc = localities.length;
	for(i = 0; i < cantLoc; i++) {
		optionsLoc += '<option value="' + localities[i].id + '">' + localities[i].nom + '</option>';
    }
    $('[name="localities"]').append(optionsLoc);
}