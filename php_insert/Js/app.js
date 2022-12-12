function showSuccessMessage() {
    if(document.getElementById("nume_proprietar").value
    && document.getElementById("oras").value
    && document.getElementById("telefon").value
    && document.getElementById("animal").value
    && document.getElementById("varsta").value
    && document.getElementById("descriere").value) {
        alert('Felicitari! Te-ai inscris cu succes! Te vom contacta in viitorul apropiat daca vei trece in urmatoarea etapa de selectie. -Echipa HAM Talent.');
    }
  }

form.addEventListener('submit', function(e) {
    // prevent the form from submitting
    e.preventDefault();
    document.form.submit();

 });
