        <div class="copyrightText">
            <p>© Copyright 2022 <a href="#">Online</a>. All Right Reserved</p>
        </div>

        <script type="text/javascript">
            window.addEventListener("scroll", function(){
                const header = document.querySelector("header");
                header.classList.toggle("sticky", window.scrollY>0);
            })

            function toggleMenu(){
                const menuToggle = document.querySelector(".menuToggle");
                const navigation = document.querySelector(".navigation");
                menuToggle.classList.toggle("active");
                navigation.classList.toggle("active");
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>