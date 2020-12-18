<?php
    defined('BASEPATH') or exit('No direct script access allowed');
?>
<script>
    const Hero = {
        name: "Hero",
        props: {
          heroContent: Object,
          user: String,
        },
        template: `
        <header class="hero">
            <hero-image />
            <navigation :user="user" />
            <hero-content :heroContent="heroContent" />
        </header>
        `
    }
</script>
