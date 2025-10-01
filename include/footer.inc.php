
    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>© 2025 Josue Kotokpo. Tous droits réservés.</p>
            <div class="social-links">
                <a href="https://www.linkedin.com/in/josu%C3%A9-kotokpo-240372220/" aria-label="LinkedIn">LinkedIn</a>
                <a href="https://github.com/jkotokpo23" aria-label="GitHub">GitHub</a>
            </div>
        </div>
    </footer>
    <script>
  // Carrousel "clic pour passer à l'image suivante"
  document.querySelectorAll('.project-image-carousel').forEach(carousel => {
    let current = 0;
    const images = carousel.querySelectorAll('img');

    carousel.addEventListener('click', () => {
      images[current].style.display = 'none';        // cache image actuelle
      current = (current + 1) % images.length;       // passe à l'image suivante
      images[current].style.display = 'block';       // affiche la suivante
    });
  });
</script>
<script>
document.querySelector('.hamburger').addEventListener('click', () => {
  document.querySelector('.mobile-menu').classList.toggle('show');
});
</script>


</body>
</html>