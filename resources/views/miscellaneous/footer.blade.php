<footer  class="bg-primary" style="bottom: 0; padding: 10px; width: 100%;" >
    <div class="text-white d-flex justify-content-center w-100">
        <span>© <span id="ano"></span> FSU 🧑🏽‍💻. Todos os direitos reservados .</span>
    </div>
</footer>

<script>
    var spanAno = document.getElementById('ano');
    var anoAtual = new Date().getFullYear();
    spanAno.textContent = anoAtual;
</script>
