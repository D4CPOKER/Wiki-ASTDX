<footer>
    <p>&copy; 2025 ASTDX Wiki - Feito por fãs</p>
  </footer>
  <script>
  document.addEventListener("DOMContentLoaded", () => {
    document.body.classList.add("fade-enter-active");
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    document.body.classList.add("fade-enter-active");

    document.querySelectorAll("a[href]").forEach(link => {
      const href = link.getAttribute("href");

      // Ignore anchors and external links
      if (
        href.startsWith("#") ||
        href.startsWith("mailto:") ||
        href.startsWith("tel:") ||
        link.target === "_blank"
      ) {
        return;
      }

      link.addEventListener("click", function(e) {
        e.preventDefault();
        document.body.classList.add("fade-exit-active");

        // Aguarda a animação terminar antes de trocar a página
        setTimeout(() => {
          window.location.href = href;
        }, 500);
      });
    });
  });
</script>
