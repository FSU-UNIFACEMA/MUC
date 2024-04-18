<footer>
    <span>© <span id="ano"></span> ADS 🧑🏽‍💻. Todos os direitos reservados.</span>
</footer>

<script>
    var spanAno = document.getElementById('ano');
    var anoAtual = new Date().getFullYear();
    spanAno.textContent = anoAtual;
</script>
