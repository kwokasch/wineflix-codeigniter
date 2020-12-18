<?php
    defined('BASEPATH') or exit('No direct script access allowed');
?>
<script>
    const PrimaryNavigation = {
        name: "PrimaryNavigation",
        props: {
            primaryNavigationLinks: Object,
        },
        template: `
        <section class="primary-navigation">
          <h1>WineFlix</h1>
          <ul class="navigation-links">
            <li class="active">
              <a :href="primaryNavigationLinks.home.href">{{ primaryNavigationLinks.home.label }}</a>
            </li>
            <li>
              <a :href="primaryNavigationLinks.whites.href">{{ primaryNavigationLinks.whites.label }}</a>
            </li>
            <li><a :href="primaryNavigationLinks.reds.href">{{ primaryNavigationLinks.reds.label }}</a>
            </li>
            <li><a :href="primaryNavigationLinks.blends.href">{{ primaryNavigationLinks.blends.label }}</a></li>
          </ul>
        </section>
    `
    }

</script>
