</div>
<footer id="footer">

    <div class="footer_container">

        <div class="footer_left">

            <div class="footer_logo"></div>
            <div class="footer_company">EMC ADVERTISING</div>
            <div class="footer_address">2551 Warren Drive<br>Rocklin, CA 95677</div>
            <a href="tel:1-800-555-5485" class="footer_phone">1-800-555-5485</a>

            <nav id="footer_menu1">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </nav>

            <nav id="footer_menu2">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </nav>

        
            
            <div class="footer_social_container">
                <a href="https://www.facebook.com/EMCAdvertising" target="_blank" title="Facebook"><i class="fab fa-facebook-f myfa"></i></a>
                <a href="https://www.youtube.com//EMCAdvertising" target="_blank" title="YouTube"><i class="fab fa-youtube myfa"></i></a>
                <a href="https://www.linkedin.com/company/emc-advertising" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in myfa"></i></a>
                <a href="https://twitter.com/emcadvertising" target="_blank" title="Twitter"><i class="fab fa-twitter myfa"></i></a>
                <a href="/blog/"><i class="fab fa-blogger-b myfa" title="Blog"></i></a>
                <a href="https://goo.gl/maps/rYv3nGCe6o7JTdF78" target="_blank" title="Find us on a map"><i class="fas fa-map-marker-alt myfa"></i></a>
            </div>

            <div class="footer_disclaimer">©2022 EMC Advertising. All Rights Reserved.</div>
            <a href="/privacy/" class="footer_privacy">PRIVACY POLICY</a>.

        </div>

        <div class="footer_right">
            <div class="footer_lets">LET'S GET IN TOUCH!</div>
            <?php gravity_form( 2, false, false, false, '', false ); ?>
        </div>

    </div>


</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>