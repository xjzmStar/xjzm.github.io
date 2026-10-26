<!-- Footer（与主页逐字相同） -->
<footer>
    <div>
        <p>&copy; <?php echo date('Y'); ?> 星际织梦</p>
            
    </div>
</footer>
<script>
(function() {
    const animElements = document.querySelectorAll('.fade-in, .fade-in-left, .fade-in-right, .fade-in-scale');
    const animObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
    }, { threshold: 0.15 });
    animElements.forEach(el => animObserver.observe(el));
})();
</script>
<?php $this->footer(); ?>
</body>
</html>
