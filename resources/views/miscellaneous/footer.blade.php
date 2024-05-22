<footer class="w-100 d-flex justify-content-center p-4 bg-purple text-white">
    <span>© <span id="ano"></span> ADS 🧑🏽‍💻. Todos os direitos reservados.</span>
</footer>

<script>
    var spanAno = document.getElementById('ano');
    var anoAtual = new Date().getFullYear();
    spanAno.textContent = anoAtual;
</script>
